<?php require_once('./../Admin/initialize.php'); ?>
<?php include ('./../Includes/title.php'); ?>
<?php require_once '../includes/session_timeout.php'; ?>
<?php
  
    ?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
<title>Pink Floyd Discography database results</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="./css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="http://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet" type="text/css">
</head>
<body id="bandpage" data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container-fluid">
  <?php require './../Includes/nav.php'; ?>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success btn-sm my-2 my-sm-0" id="search" type="submit">Search</button>
      </form>
    </div>
</div>
<?php $page_title = 'database results'; ?>
<div id="content">
  <h1 class="listing container-fluid text-center">HOME</h1>
  <a class="back-link text-center container mytour" href="<?php if(isset($_SERVER['HTTP_REFERER'])) {
    echo "<a href=".$_SERVER['HTTP_REFERER'].">Go back</a>";
} ?>"><h2>&laquo; Back to List</h2></a>
  <?php if(isset($_SERVER['HTTP_REFERER'])) {
    echo "<a href=".$_SERVER['HTTP_REFERER'].">Go back</a>";
}
?>
</div>

<div class="container myform" id="album_query">
  <h1 class="listing container-fluid text-center">Discography Query</h1>
  <div class="row test">
    <div class="col-md-4 align-content-center">
      <p class="text-center"><em>Search by Album Title</em></p>
    </div>
    <!--col-md-4 align-content-center-->
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 input-group"> <span class="input-group-addon"></span>
          <input class="form-control" id="name" name="name" placeholder="Album Title" type="text" required>
        </div>
        <!--col-sm-6 form-group-->
    </div>
  </div>
</div>

  <form class="row test" method="get" action="">
    <div class="col-md-4 align-content-center">
      <p class="text-center"><em>Search by Album Year</em></p>
    </div>
    <!--col-md-4 align-content-center-->
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 input-group"> <span class="input-group-addon"></span>
          <input class="form-control" id="name" name="name" placeholder="Album Year" type="text" required>
        </div>
        <!--col-sm-6 form-group-->
    </div>
  </div>
  <div class="col-md-8">
    <div class="row">
      <div class="col-sm-6 form-group"> <span class="input-group-addon"></span>
        <!-- <input class="form-control" id="show" name="show" type="submit"> -->
        <input class="action btn" type="submit" name="show" id="show" value="show" />
      </div>
      <!--col-sm-6 form-group-->
  </div>
</div>
</div>
</form>

<div class="actions">
  <a class="action text-center container mytour" href="<?php echo url_for('./album_query/new_album.php'); ?>"><h2>Create New album</h2></a>
</div>

<?php include './../Includes/footer.php'; ?>
</body>
