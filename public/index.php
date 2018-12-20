<?php require_once('./../Admin/initialize.php'); ?>
<?php include __DIR__ . './../Includes/title.php'; ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
<title>Pink Floyd Discography</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="http://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet" type="text/css">
</head>
<body id="bandpage" data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="container-fluid">
  <?php require (INCLUDES_PATH .'/nav.php'); ?>
      
  </div>
</div>

<!--container-fluid-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
  <!--Wrapper for slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active"> <img src="images/concert.jpg" class="img-fluid" alt="concert"> </div>
    <!--carousel-item active-->
    <div class="carousel-item"> <img src="images/concertpig.jpg" class="img-fluid" alt="concert"> </div>
    <!--carousel-item-->
    <div class="carousel-item"> <img src="images/animals40anniversarytour.jpg" class="img-fluid" alt="concert"> </div>
    <!--carousel-item-->
  </div>
  <!--carousel-inner-->
  <!--#myCarousel carousel slide-->
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#demo" data-slide="next"> <span class="carousel-control-next-icon"></span> </a>
</div>
<!--carousel-inner-->
<div class="splitimg img-fluid"><img src="images/greypig.jpg" alt="logo" class="pig img-fluid" width="90"></div>
<!--the band-->
<h1 class="text-center band">THE BAND</h1>
<div class="container" id="band">
  <div class="row">
    <div class="col-lg-4">
      <div class="our-team-main">
        <div class="team-front"> <img src="images/dav.jpg" class="img-fluid" alt="Roger Waters"/>
          <h3>ROGER<br>
            WATERS</h3>
          <br>
        </div>
        <!--team-front-->
        <div class="team-back"><img src="images/oldroger.jpg" class="img-fluid" alt="roger"><br>
          <p>Vocals, Base, and Keyboard</p>
          <p class="summary">1965-1985</p>
		  <ul>
			 <li class="list-inline-item"><a href="https://facebook.com/rogerwaters/" class="fab fa-facebook-square fa-2x"></a></li>
     		 <li class="list-inline-item"><a href="https://twitter.com/rogerwaters/" class="fab fa-twitter-square fa-2x"></a></li>
			</ul>
          </div>
        <!--team-back-->
      </div>
      <!--our-team-main-->
    </div>
    <!--col-lg-4-->
    <div class="col-lg-4">
      <div class="our-team-main" name="band">
        <div class="team-front"> <img src="images/gilmour.jpg" class="img-fluid" alt="David Gilmore">
          <h3>David <br>
            Gilmour</h3>
          <br>
        </div>
        <!--team-front-->
        <div class="team-back"><img src="images/olddavid.jpg" class="img-fluid" alt="david"><br>
          <p>Base Guitar, Vocals, and Keyboard</p>
          <p class="summary">1968-1994</p>
			<ul>
			<li class="list-inline-item"><a href="https://facebook.com/davidgilmour" class="fab fa-facebook-square fa-2x"></a></li>
			<li class="list-inline-item"><a href="www.davidgilmour.com">DavidGilmour.com</a></li>
			</ul>
          <br>
        </div>
        <!--team-back-->
      </div>
      <!--our-team-main-->
    </div>
    <!--col-lg-4-->
    <div class="col-lg-4">
      <div class="our-team-main">
        <div class="team-front"> <img src="images/sid.jpg" class="img-fluid" alt="Sid Barret"/>
          <h3>Syd <br>
            Barrett</h3>
          <br>
        </div>
        <!--team-front-->
        <div class="team-back"><img src="images/oldsyd.jpg" class="img-fluid" alt="Syd"><br>
          <p>Singer, Guitarist, and Song writer.</p>
          <p class="summary">1965-1968</p>
			<ul>
			<li class="list-inline-item"><a href="https://facebook.com/Syd.Barrett" class="fab fa-facebook-square fa-2x"></a></li>
			<li class="list-inline-item"><a href="www.sydbarrett.com">SydBarrett.com</a></li>
			</ul>
          </div>
        <!--team-back-->
      </div>
      <!--our-team-main-->
    </div>
    <!---col-lg-4-->
    <div class="col-lg-4">
      <div class="our-team-main">
        <div class="team-front"> <img src="images/nick.jpg" class="img-fluid" alt="Nick"/>
          <h3>Nick <br>
            Mason</h3>
          <br>
        </div>
        <!---team-front-->
        <div class="team-back"><img src="images/oldnick.jpg" class="img-fluid" alt="nick">
          <p class="summary">Mason is the only Pink Floyd member to be featured on every one of their albums. Drums 1965–1994</p>
			<ul>
			<li class="list-inline-item"><a href="https://facebook.com/nickmason" class="fab fa-facebook-square fa-2x"></a></li>
			<li class="list-inline-item"><a href="www.nickmason.com">NickMason.com</a></li>
			</ul>
          </div>
        <!--team-back-->
      </div>
      <!--our-team-main-->
    </div>
    <!--col-lg-4-->
    <div class="col-lg-4">
      <div class="our-team-main">
        <div class="team-front"> <img src="images/bob.jpg" class="img-fluid" alt="Bob Klose"/>
          <h3>Bob <br>
            Klose</h3>
          <br>
        </div>
        <!--team-front-->
        <div class="team-back">
          <p>Guitar</p>
          <br>
          <p class="summary">1965</p>
        </div>
        <!--team-back-->
      </div>
    </div>
    <!--col-lg-4-->
    <!--team-5-->
    <!--team-6-->
    <div class="col-lg-4">
      <div class="our-team-main">
        <div class="team-front"><img src="images/wright.jpg" class="img-fluid" alt="Richard Wright"/>
          <h3>Rick <br>
            Wright</h3>
          <br>
        </div>
        <!--team-front-->
        <div class="team-back"><img src="images/oldnick.jpg" alt="rick" class="img-fluid fa-circle" width="150"><br>
          <p>Vocals, Keyboard</p>
          <p class="summary">1965</p>
          <ul>
			<li class="list-inline-item"><a href="https://facebook.com/richardwilliamwright" class="fab fa-facebook-square fa-2x"></a></li>
			</ul>
           </div>
        <!--team-back-->
      </div>
      <!--our-team-main-->
    </div>
    <!--col-lg-4-->
    <!--team-6-->
  </div>
</div>
<!--container #band-->
<div id="news" class="text-center container-fluid">
  <p><a class="fas fa-angle-up fa-3x" href="#bandpage" data-toggle="tooltip" title="TOP"></a></p>
</div>
<!--#news container-fluid-->
<!--Tour/Events-->
<div class="bg-1" name="tour">
  <div class="container-fluid" id="tour">
    <h2 class="text-center">TOUR DATES</h2>
    <p class="text-center small">Upcoming Events and Performances<br>
    </p>
      <h4 class="text-center mytour">Nick Mason's Saucer Full of Secrets European Tour</h4>
	  <ul class="list-group">
      <li class="list-group-item">Sunday 23rd September – Portsmouth, Guildhall <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">Monday 24th September – London, Roundhouse <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">Tuesday 25th September – Birmingham, Symphony Hall <span class="label label-danger">Sold Out!</span></li>
    </ul>
    <br>
    <div class="row card-deck">
      <div class="card text-center"> <img class="img-fluid" src="images/Saucerful-banner.jpg" alt="tour poster"><br>
        <p class="card-title"><strong>CIRKUS,<br>
          STOCKHOLM</strong></p>
        <br>
        <p class="card-text">09/02/2018</p>
        <a href="http://www.thesaucerfulofsecrets.com/" class="btn">TICKETS</a>
      </div>
      <!--card text-center-->
      <div class="card text-center"> <img class="img-fluid" src="images/Saucerful-banner.jpg" alt="tour poster"><br>
        <p class="card-title"><strong>FORUM BLACK,<br>
          COPENHAGEN</strong></p>
        <br>
        <p class="card-text">09/03/2018</p>
        <a href="http://www.thesaucerfulofsecrets.com/" class="btn">TICKETS</a>
      </div>
      <!--card text-center-->
      <div class="card text-center"> <img class="img-fluid" src="images/Saucerful-banner.jpg" alt="tour poster"><br>
        <p class="card-title"><strong>MOYA,<br>
          ROSTOCK</strong></p>
        <br>
        <p class="card-text">09/04/2018</p>
        <a href="http://www.thesaucerfulofsecrets.com/" class="btn">TICKETS</a>
      </div>
      <!--card text-center-->
      <!--card text-center-->
      <div class="card text-center"> <img class="img-fluid" src="images/Saucerful-banner.jpg" alt="tour poster"><br>
        <p class="card-title"><strong>MOYA,<br>
          ROSTOCK</strong></p>
        <br>
        <p class="card-text">09/04/2018</p>
        <a href="http://www.thesaucerfulofsecrets.com/" class="btn">TICKETS</a>
      </div>
      <!--card text-center-->
    </div>
    <!--row card-deck-->
  </div>
  <!--container #tour-->
</div>
<!--bg-1-->

<!--#news container-fluid-->

<footer class="text-center container-fluid"><a class="fas fa-angle-up fa-3x" href="#up" data-toggle="tooltip" title="TOP"></a></footer>
<?php include (INCLUDES_PATH .'/footer.php'); ?>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.0.0.js"></script>
<script>
  $(document).ready(function(){
  /* Initialize Tooltip*/
  $('[data-toggle="tooltip"]').tooltip();

  /*Add smooth scrolling to all links in navbar + footer link*/
  $(".navbar a, footer a[href='#bandpage']").on('click', function(event) {

    /* Make sure this.hash has a value before overriding default behavior*/
    if (this.hash !== "") {

      /* Prevent default anchor click behavior*/
      event.preventDefault();

      /* Store hash*/
      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        /* Add hash (#) to URL when done scrolling (default click behavior) */
        window.location.hash = hash;
      });
    } /* End if*/
  });
})
</script>
</body>
</html>
