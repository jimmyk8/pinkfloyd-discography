<?php require_once('./../Admin/initialize.php');
      include ('./../Includes/title.php');
      require_once './../Includes/session_timeout.php';
      require_once './../Admin/connection.php';
$conn = dbConnect('read', 'pdo');
$sql = 'SELECT * FROM discography ORDER BY album_id DESC';
$result = $conn->query($sql);
$errorInfo = $conn->errorInfo();
if (isset($errorInfo[2])) {
    $error = $errorInfo[2];
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
<title>Pink Floyd Database</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="./css/styles.css" rel="stylesheet" type="text/css">
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
    <h1 class="heading">Manage Album Database</h1>

    <?php if (isset($error)) {
        echo "<p>$error</p>";
    } else { ?>
    <table class="subject listing container-fluid text-center">
      <tr class="subject listing container-fluid text-center">
          <th class="column-titles">Album</th>
          <th class="column-titles">Year</th>
          <th class="">&nbsp;</th>
          <th class="">&nbsp;</th>



      </tr>
      <?php while($row = $result->fetch()) { ?>
        <tr>
          <td class="list-data"><?= $row['album_title']; ?></td>
          <td class="list-data"><?= $row['album_year']; ?></td>
          <td class="list-option" id="operations"><a href="update_album.php?album_id=<?= $row['album_id']; ?>">EDIT</a></td>
          <td class="list-option" id="operations"><a href="delete_album.php?album_id=<?= $row['album_id']; ?>">DELETE</a></td>
      </tr>
    <?php } ?>
  <?php } ?>
  </table>
    <h2><a href="new_album.php">Insert new entry</a></h2>
    <h2><a href="new_album_image.php">Upload Images</a></h2>
  </div>
</div>
<?php include './../Includes/footer.php'; ?>
</body>
</html>
