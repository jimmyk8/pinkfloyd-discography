<?php require_once('./../Admin/initialize.php'); ?>
<?php include ('./../../public/Includes/title.php'); ?>
<?php
  // button link to paste where needed
  <td><a class="action btn" href="<?php echo url_for('/album_query/edit.php'); ?>">Edit</a></td>

  // if(!isset($_GET['id'])) {
  //   redirect_to(url_for('./album_query/show.php'));
  // }
  //
  // $id = $_GET['id'];
  // $album_title = '';
  // $album_year = '';
  // $album_url = '';
  // $id = $_GET['id'] ?? '1';
  //
  // if(is_post_request()) {
  //
  // // Handle form values sent by new.php
  //
  // $album_title = $_POST['album_title'] ?? '';

  // echo "Form parameters<br />";
  // echo "Album title: " . $album_title . "<br />";

  //
  // }


// if(!isset($_GET['id'])) {
//   redirect_to(url_for('./album_query/show.php'));
// }
//
// $id = $_GET['id'];
$album_title = '';
$album_year = '';
$position = '';
$visible = '';
$id = $_GET['id'] ?? '1';

if(is_post_request()) {

// Handle form values sent by new.php

$album_title = $_POST['album_title'] ?? '';
$album_year = $_POST['song_title'] ?? '';
$position = $_POST['position'] ?? '';
$visible = $_POST['visible'] ?? '';

echo "Form parameters<br />";
echo "Album title: " . $album_title . "<br />";
echo "Album Year: " . $album_year . "<br />";
echo "Position: " . $position . "<br />";
echo "Visible: " . $visible . "<br />";

}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
<title>Pink Floyd Admin Edit</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="<?php echo url_for('css/styles.css'); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="http://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet" type="text/css">
</head>

<body id="bandpage" data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="container-fluid">
  <?php require './../../public/Includes/nav.php'; ?>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success btn-sm my-2 my-sm-0" id="search" type="submit">Search</button>
      </form>
    </div>
  </div>

  <div id="content">
    <a class="back-link text-center container mytour" href="<?php echo url_for('new_album_list.php'); ?>"><h2>&laquo; Back to List</h2></a>
  </div>

  <div class="subject new listing container-fluid text-center">
    <h1>Edit Album</h1>

    <form action="<?php echo url_for('./album_query/edit.php?id=' . h_sparChar(uncode($id))); ?>" method="post">
      <dl>
        <dt>Album Title</dt>
        <dd><input type="text" name="album_title" value="<?php echo $album_title; ?>" /></dd>
      </dl>
      <dl>
        <dt>Album Year</dt>
        <dd><input type="int" name="song_title" value="<?php echo $album_year; ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Album" />
      </div>
    </form>

  </div>

  </div>

  <?php include './../../public/Includes/footer.php'; ?>
</body>
