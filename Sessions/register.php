<?php
use PhpSolutions\Authenticate\CheckPassword;
$error = '';
if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['pwd']);
    $retyped = trim($_POST['conf_pwd']);
    //$userfile = 'C:/PHP_private/encrypted.csv';
    require_once  './../Includes/register_user_pdo.php';
  }
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
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success btn-sm my-2 my-sm-0" id="search" type="submit">Search</button>
      </form>
    </div>
</div>
<!--error message for invalid entries  -->
<div class="error">
  <?php
  if (isset($success)) {
    echo "<p>$success</p>";
} elseif (isset($errors) && !empty($errors)) {
    echo '<ul>';
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo '</ul>';
}
?>
</div>

<div id="content">
<div class="albums listing container-fluid text-center">
<h1>Register User</h1>
<form action="" method="post" class="list col-lg-4 container-fluid text-center" autocomplete='off' id="login_form">
    <p>
        <label for="username"></label>
        <input type="text" name="username" id="username" placeholder="username">
    </p>
    <p>
        <label for="pwd"></label>
        <input type="password" name="pwd" id="pwd" placeholder="password">
    </p>
    <p>
        <label for="conf_pwd"></label>
        <input type="password" name="conf_pwd" id="conf_pwd" class="text-left" placeholder="re-type password">
    </p>
    <p>
        <input type="submit" name="register" value="Register" class="action btn center">
    </p>
    <p>
      <a href="/pinkfloyd_discography/Sessions/login.php"><input type="button" name="login" value="login" class="action btn center"></a>
</form>
</body>
</html>
