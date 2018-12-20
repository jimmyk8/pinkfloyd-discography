<?php require_once('./../Admin/initialize.php'); ?>
<?php include ('./../Includes/title.php'); ?>
<?php require_once ('./../Includes/session_timeout.php'); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
<title>Pink Floyd Album Search</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="./../public/css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="http://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet" type="text/css">
</head>

<body id="bandpage" data-spy="scroll" data-target=".navbar" data-offset="50">

 <!-- header nav search box -->
<div class="container-fluid">
  <?php require './../Includes/nav.php'; ?>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success btn-sm my-2 my-sm-0" id="search" type="submit">Search</button>
      </form>
    </div>
</div>


<div id="content">
  <div class="albums listing container-fluid text-center">
    <h1>Album Database Search</h1>

  	<table class="list col-lg-4 container-fluid">

        <tr>
          <td><a class="action btn" href="./show.php">Search Database</a></td>

          <td><a class="action btn" href="./new_album_list.php">Manage Database</a></td>
    	  </tr>

</table>



</div>

</div>
<?php include './../Includes/footer.php'; ?>
</body>
