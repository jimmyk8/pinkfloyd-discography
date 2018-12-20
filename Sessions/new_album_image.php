<?php require_once('./../Admin/initialize.php'); ?>
<?php include ('./../Includes/title.php'); ?>
<?php require_once './../Includes/session_timeout.php'; ?>

<?php
use PhpSolutions\File\Upload;
// set the maximum upload size in bytes
$max = 1600 * 1024; // 1600 KB
if (isset($_POST['upload'])) {
    // define the path to the upload folder
    $destination = './../public/images/album_image/';
    require_once './../PhpSolutions/File/Upload.php';
    // header('Location: http://localhost:8081/pinkfloyd_discography/Sessions/new_album_list.php');

    try {
        $loader = new Upload($destination);
        $loader->setMaxSize($max);
        $loader->allowAllTypes();
        $loader->upload();
        $result = $loader->getMessages();
        echo "<h2>getMessages()</h2>";
    } catch (Exception $e) {
        echo $e->getMessage();
      }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
<title>Pink Floyd Discography Image Upload</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="http://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet" type="text/css">
</head>

<body id="bandpage" data-spy="scroll" data-target=".navbar" data-offset="50">

  <?php
  if (isset($result)) {
      echo '<ul>';
      foreach ($result as $message) {
          echo "<li>$message</li>";
      }
      echo '</ul>';
  }
  ?>
  <div class="container-fluid">
    <?php require './../Includes/nav.php'; ?>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success btn-sm my-2 my-sm-0" id="search" type="submit">Search</button>
        </form>
      </div>
  </div>

<div id="content ">
  <p><? echo ( $_POST['album_title']); ?></p>
  <a class="back-link text-center container mytour" href="./new_album_list.php"><h2>&laquo; Back</h2></a>
</div>
  <form enctype="multipart/form-data" action="" method="post" name="">
    <div class="subject listing container-fluid text-center" id="operations">
      <p>
          <label for="image">Upload image:</label>
          <input type="hidden" name="MAX_FILE_SIZE" value="<?= $max; ?>">
          <input type="file" name="image[]" id="image" multiple>
      </p>

      <p>
          <input type="submit" name="upload" id="upload" value="Upload">
      </p>
    </div>
  </form>
<?php include './../Includes/footer.php'; ?>
</body>
