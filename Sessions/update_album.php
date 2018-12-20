<?php require_once('./../Admin/initialize.php');
      include ('./../Includes/title.php');
      require_once './../Includes/session_timeout.php';
      require_once './../Admin/connection.php';
// initialize flags
$OK = false;
$done = false;
// create database connection
$conn = dbConnect('write', 'pdo');
// get details of selected record
if (isset($_GET['album_id']) && !$_POST) {
    // prepare SQL query
    $sql = 'SELECT album_id, album_title, album_year, album_url FROM discography
            WHERE album_id = ?';
    $stmt = $conn->prepare($sql);
    // pass the placeholder value to execute() as a single-element array
    $OK = $stmt->execute([$_GET['album_id']]);
    // bind the results
    $stmt->bindColumn(1, $album_id);
    $stmt->bindColumn(2, $album_title);
    $stmt->bindColumn(3, $album_year);
    $stmt->bindColumn(4, $album_url);
    $stmt->fetch();
}
// if form has been submitted, update record
if (isset($_POST['update'])) {
    // prepare update query
    $sql = 'UPDATE discography SET album_title = ?, album_year = ?, album_url = ?
            WHERE album_id = ?';
    $stmt = $conn->prepare($sql);
    // execute query by passing array of variables
    $done = $stmt->execute([$_POST['album_title'], $_POST['album_year'], $_POST['album_url'],
        $_POST['album_id']]);
}

// redirect page on success or if $_GET['album_id'] not defined
if ($done || !isset($_GET['album_id'])) {
    header('Location: http://localhost:8081/pinkfloyd_discography/Sessions/new_album_list.php');
    exit;
}
// store error message if query fails
if (isset($stmt) && !$OK && !$done) {
    $errorInfo = $stmt->errorInfo();
    if (isset($errorInfo[2])) {
        $error = $errorInfo[2];
    }
}

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
<title>Pink Floyd Discography Edit</title>
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
      <h1 class="heading">Edit Database Entry</h1>

<p><a href="new_album_list.php">List all entries </a></p>
<?php if (isset($error)) {
    echo "<p class='warning'>Error: $error</p>";
}
if($album_id == 0) { ?>
    <p class="warning">Invalid request: record does not exist.</p>
<?php } else { ?>
    <form method="post" action="">
        <p>
            <label for="album_title">Title:</label>
            <input name="album_title" type="text" id="album_title" value="<?= htmlentities($album_title); ?>">
        </p>
        <p>
            <label for="album_year">Year:</label>
            <input name="album_year" type="text" id="album_year" value="<?= htmlentities($album_year); ?>">
        </p>
        <p>
            <label for="album_url">Spotify Link:</label>
            <textarea name="album_url" id="album_url"><?= htmlentities($album_url);?></textarea>
        </p>
        <p>
            <input type="submit" name="update" value="Update Entry" id="update">
            <input name="album_id" type="hidden" value="<?= $album_id; ?>">
        </p>
    </form>
<?php } ?>
</body>
</html>
