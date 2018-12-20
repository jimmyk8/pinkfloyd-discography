<?php require_once('./../Admin/initialize.php'); ?>
<?php
$error = '';
$back = $_SERVER['HTTP_REFERER'];
$register = ('./register.php');
if (isset($_POST['login'])) {
    session_start();
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    // location of usernames and passwords
    $userlist = 'C:/PHP_private/encrypted.csv';
    // location to redirect on success
    $redirect = 'http://localhost:8081/pinkfloyd_discography/Sessions/new_album_list.php';
    require_once (PROJECT_PATH . '/Includes/authenticate.php');
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
<title>Pink Floyd Sign In</title>
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
    if ($error) {
        echo "<p>$error</p>";
    }
    ?>
  </div>
  <div class="error">
    <?php
    if (isset($result) || isset($errors)) {
        echo '<ul>';
        if (!empty($errors)) {
            foreach ($errors as $item) {
                echo "<li>$item</li>";
            }
        } else {
            echo "<li>$result</li>";
        }
        echo '</ul>';
    }
    ?>
  </div>

  <div id="content">
  <div class="albums listing container-fluid text-center">
    <h1>Log In or Register</h1>
    <form method="post" action="" class="list col-lg-4 container-fluid" autocomplete='off' id="login_form">
        <p>
            <label for="username"></label>
            <input type="text" name="username" id="username" placeholder="username">
        </p>
        <p>
            <label for="pwd"></label>
            <input type="password" name="pwd" id="pwd" placeholder="password">
        </p>
        <p>
            <input name="login" type="submit" class="action btn center" id="login" value="Log in">
        </p>
        <p>
            <a href="<?php echo $register; ?>"><input name="register" type="button" class="action btn center" id="register" value="Register">
        </p>
        <p>
             <a href="<?php echo $back; ?>"><input name="back" type="button" class="action btn" id="back" value="Back"></a>
        </p>
    </form>
  </div>
</body>
</html>
