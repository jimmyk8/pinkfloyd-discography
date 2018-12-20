<?php
 require_once('./../Admin/initialize.php');
 include ('./../Includes/title.php');
 require_once('./../Admin/connection.php');
 define('COLS', 2);
 // initialize variables for the horizontal looper
 $pos = 0;
 $firstrow = true;
$conn = dbConnect('read', 'mysqli');
$sql = 'SELECT album_id, album_title, album_year, album_image, album_url FROM discography';
$result = $conn->query($sql);
if (!$result) {
    $error = $conn->error;
} else {
    $numRows = $result->rowcount();
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
<title>Pink Floyd SQL_DB Discography</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="http://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet" type="text/css">
</head>
<body id="albumpage" data-spy="scroll" data-target=".navbar" data-offset="50">
  <div class="container-fluid">
    <?php require  (INCLUDES_PATH .'/nav.php'); ?>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success btn-sm my-2 my-sm-0" id="search" type="submit">Search</button>
        </form>
      </div>
  </div>

<?php
if (isset($error)) {
    echo "<p>$error</p>";
} else {
    echo "<p>A total of $numRows records were found.</p>";
    ?>

  <div class="flex-container albums" id="up">
    <a href="./albums.php"><h2 class="text-center">Albums</h2></a>

    <h1 class="text-center">Albums From Database via .php</h1>
</div>
<div class="db_table">
    <table>
      <tr class="text-center mytour">
        <th name="album_title">Album</th>
        <th name="album_year">Year</th>
        <th name="album_image">Cover Art</th>
        <th name="album_url">Spotify Play List</th>
      </tr>

      <?php while ($row = $result->fetch()) { ?>


      <tr class="text-center text text-up" style="border: 2px #323233 solid;background-color:#171515;">
        <td style="color: silver;font-size: 1.5rem;"><?= $row['album_title']; ?></td>
        <td style="color: silver;font-size: 1.5rem;"><?= $row['album_year']; ?></td>

        <td>
          <figure><img src="./images/album_image/<?= str_replace(' ', '_', $row['album_image']) .'.jpg';?>" alt="<?= $row['album_image']; ?>"></figure>
        </td>

        <td style="color: silver;font-size: 1.5rem;"><a href="<?= $row['album_url']; ?>"></a>Listen Now</td>
      </tr>
      <?php } ?>
  </table>
<?php } ?>
</div>

<footer class="text-center container-fluid"><a class="fas fa-angle-up fa-3x" href="#up" data-toggle="tooltip" title="TOP"></a></footer>
<?php include './../Includes/footer.php'; ?>

</body>
</html>
