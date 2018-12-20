<?php require_once('./../Admin/initialize.php'); ?>
<?php include './../Includes/title.php';?>

<?php
$errors = [];
$missing = [];
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
<title>Pink Floyd FANCLUB Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="http://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet" type="text/css">
</head>
<body id="bandpage" data-spy="scroll" data-target=".navbar" data-offset="50">
  <div class="container-fluid">
    <?php require __DIR__ . './../Includes/nav.php'; ?>
  </div>


<div id="content">
  <h2 class="text-center container">Thank You for subscribing!<h2>
  <a class="back-link text-center mytour" href="<?php echo url_for('index.php'); ?>"><h2>&laquo; Home</h2></a>
</div>


<?php include './../Includes/footer.php'; ?>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.0.0.js"></script>
</body>
