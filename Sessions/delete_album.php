<?php
    require_once('./../Admin/initialize.php');
    include ('./../Includes/title.php');
    require_once './../Admin/connection.php';
// create database connection
$conn = dbConnect('read', 'pdo');
// initialize flags
$OK = false;
$deleted = false;

// Check connection
// get details of selected record
if (isset($_GET['album_id']) && !$_POST) {
    // prepare SQL query
    $sql = 'SELECT album_id, album_title, album_year FROM discography WHERE album_id = ?';
    $stmt = $conn->prepare($sql);
    // pass the placeholder value to execute() as a single-element array
    $OK = $stmt->execute([$_GET['album_id']]);
    // assign result array to variables
    $stmt->bindColumn(1, $album_id);
    $stmt->bindColumn(2, $album_title);
    $stmt->bindColumn(3, $album_year);
    // fetch the result
    $stmt->fetch();
}
// if confirm deletion button has been clicked, delete record
if (isset($_POST['delete'])) {
    $sql = 'DELETE FROM discography WHERE album_id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->execute([$_POST['album_id']]);
    // get number of affected rows
    $deleted = $stmt->rowCount();
    if (!$deleted) {
        $error = 'There was a problem deleting the record.';
    }
}
// redirect the page if deleted, cancel button clicked, or $_GET['album_id'] not defined
if ($deleted || isset($_POST['cancel_delete']) || !isset($_GET['album_id']))  {
    header('Location: http://localhost:8081/pinkfloyd_discography/Sessions/new_album_list.php');
    exit;
}

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
<title>Confirm Delete</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="http://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet" type="text/css">
</head>

<body id="bandpage" data-spy="scroll" data-target=".navbar" data-offset="50">
  <div class="container-fluid">
    <?php require (INCLUDES_PATH .'/nav.php'); ?>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success btn-sm my-2 my-sm-0" id="search" type="submit">Search</button>
        </form>
      </div>
  </div>
  <div id="content">
    <div class="subject listing container-fluid text-center">
      <h1 class="heading">Delete Blog Entry </h1>
<?php
if (isset($error)) {
    echo "<p class='warning'>Error: $error</p>";
} elseif (isset($album_id) && $album_id == 0) { ?>
    <p class="warning">Invalid request: record does not exist.</p>
<?php } else { ?>
  <form method="post" action="">
    <p class="warning">Please confirm that you want to delete the following item. This action cannot be undone.</p>
    <p><?= $album_year .': ' .htmlentities($album_title); ?></p>
<?php } ?>

    <p>
        <?php if (isset($album_id) && $album_id > 0) { ?>
            <input name="delete" type="submit" value="Confirm Deletion">
        <?php } ?>
        <input name="cancel_delete" type="submit" id="cancel_delete" value="Cancel">
        <?php if (isset($album_id) && $album_id > 0) { ?>
            <input name="album_id" type="hidden" value="<?= $album_id; ?>">
        <?php } ?>
    </p>

</form>
</body>
</html>
