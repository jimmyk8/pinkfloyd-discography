<!doctype html>
<?php require_once('./../Admin/initialize.php'); ?>
<?php require './../Includes/title.php'; ?>

<?php
$errors = [];
$missing = [];

//check to see if the form has been submitted
if (isset($_POST['send'])) {
  //email processing script
  $to = 'graphart8@hotmail.com';
  $subject = 'Join the FanClub';
  //list of expected fields
    $expected = ['firstname', 'lastname', 'email', 'address', 'city', 'state', 'Zip', 'comments'];
    $required = ['firstname', 'lastname', 'email', 'address', 'city', 'state', 'Zip', 'comments'];

    //set default values for variables that might not exist
    if (!isset($_POST['subscribe'])) {
        $_POST['subscribe'] = '';
        $errors['subscribe'] = true;
    }
    if (!isset($_POST['join'])) {
        $_POST['join'] = '';
        $errors['join'] = true;
    }

    // create additional headers
    $headers = "From: JimmyK8<graphart8@untamableworld.com>\r\n";
    $headers .= 'Content-Type: text/plain; charset=utf-8';
    require './../Includes/processmail.php';
    if ($mailSent) {
        header('Location: http://localhost:8081/pinkfloyd_discography/public/thank_you.php');
        exit;
    }
}
?>

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
    <?php require  (INCLUDES_PATH .'/nav.php'); ?>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success btn-sm my-2 my-sm-0" id="search" type="submit">Search</button>
      </form>
  </div>

  <form method="post" class="container myform" id="contact" action="">
    <h3 class="text-center">JOIN OUR FANCLUB</h3>
     <?php if (($_POST && $suspect) || ($_POST && isset($errors['mailfail']))) {  ?>
            <p class="warning">Sorry, your mail could not be sent.
                Please try later.</p>
        <?php } elseif ($missing || $errors) { ?>
            <p class="warning">Please fix the item(s) indicated.</p>
     <?php } ?>
    <div class="row test">
      <div class="col-md-4 align-content-center">
        <p class="text-center"><em>SEND US A MESSAGE</em></p>

        <p><span><i class="far fa-envelope-open"> pinkfloyd_fanclub@yahoo.com</i></span></p>
      </div>

      <!--col-md-4 align-content-center-->
      <div class="col-md-8">
        <div class="row">
          <div class="col-sm-6 input-group"> <span class="input-group-addon"> <i class="fas fa-user fa-fw fa-2x"></i></span>
            <label for="firstname"></label>
            <input class="form-control" id="firstname" name="firstname" placeholder="First Name*" type="text" required>
          </div>

          <!--col-sm-6 form-group-->
          <div class="col-sm-6 input-group"> <span class="input-group-addon"> <i class="fas fa-user fa-fw fa-2x"></i></span>
            <label for="lastname"></label>
            <input class="form-control" id="lastname" name="lastname" placeholder="Last Name*" type="text" required>
          </div>
          <!--col-sm-6 input-group-->
        </div><!--row-->

        <br>
        <div class="row">
          <div class="col-sm-6 input-group"> <span class="input-group-addon"> <i class="fas fa-envelope fa-fw fa-2x"></i></span>
            <label for="email">
              <?php if ($missing && in_array('email', $missing)) { ?>
                          <span class="warning">Please enter your email address</span>
                      <?php } elseif (isset($errors['email'])) { ?>
                          <span class="warning">Invalid email address</span>
                      <?php } ?>
              </label>
            <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required>
          </div>

          <!--col-sm-6 input-group-->
          <div class="col-sm-6 input-group"> <span class="input-group-addon"> <i class="fas fa-home fa-fw fa-2x"></i></span>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address">
          </div>
          <!--col-sm-6 input-group-->
        </div>

        <br>
        <!--row-->
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="city">City
            <input type="text" class="form-control" id="city" name="city">
            </label>
          </div><!--form-group col-md-6-->
          <div class="form-group col-md-4">
            <label for="state">State
            <select id="state" class="form-control" name="state">
              <option selected>Choose...</option>
              <option value="">State</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UT">Utah</option>
              <option value="VA">Vermont</option>
              <option value="VT">Virginia</option>
              <option value="WA">Washington</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
            </label>
          </div><!--form-group col-md-4-->
          <div class="form-group col-md-2">
            <label for="inputZip">Zip
            <input type="text" class="form-control" id="zip" name="zip">
            </label>
          </div><!--form-group col-md-2-->
        </div>
        <div class="row"> </div>
        <br>
        <!--row-->
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>

        <div class="row">
          <div class="col-md-12 form-group">
            <input type="checkbox" checked="checked" name="subscribe">
            <label> Weekly Newsletter </label>
            <br>
            <input type="checkbox" checked="checked" name="join">
            <label> Join the Fanclub </label>
                <button class="btn align-right mybtn" name="send" type="submit">Subscribe</button>
          </div>

          <!--col-md-12 form-group-->
        </div>
        <!--row-->
      </form>
      <pre>
        <?php if ($_POST && $mailSent) {
          echo "Message body\n\n";
          echo htmlentities($message) . "\n";
          echo 'headers: '.htmlentities($headers);
        } ?>
      </pre>
      <!--col-md-8-->
    </div>
    <!--row test-->
  </div>
  <!--container myform #contact-->


  <?php include (INCLUDES_PATH .'/footer.php'); ?>
  <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.0.0.js"></script>
</body>
