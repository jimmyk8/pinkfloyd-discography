<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
<title>Pink Floyd Albums</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="http://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet" type="text/css">
</head>
<body id="albumpage" data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="myNav"> <a class="navbar-brand bigBrand" href="index.html">
    <h1 class="bigBrand"> PINK FLOYD</h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-label="Toggle navigation"><img src="images/b&whammers.png" class="btn-sm navbar-toggler menulogo" alt="hammer logo" ></button>
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="index.html">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="index.html">BAND</a></li>
		  <li class="nav-item active"><a class="nav-link" href="#music">MUSIC</a></li>
        <li class="nav-item"><a class="nav-link" href="index.html">TOUR</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">FANCLUB</a></li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</div>
<!--container-fluid-->
<div class="flex-container albums" id="up">
  <h1 class="text-center">Albums</h1>
  <div class="container">
    <div class="row card-deck text-white">
      <div class="card bg-primary preview-card"> <img class="card-img-top album" src="images/albums/Pink_Floyd_-_Dark_Side_of_the_Moon.jpg" alt="album cover">
        <div class="text text-up">Darkside of </div>
            <div class="text text-bottom">The Moon</div>
        <p class="card-body">Released in 1993</p>
        <button class="btn albumbtn card-footer" data-toggle="modal" data-target="#moon">Songs</button>
        <!--Track list-->
        <div class="modal fade" id="moon">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header text-center">
                <h4 class="modal-title">Dark Side of the Moon</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!--modal-header text-center-->
              <div class="modal-body">
                <iframe src="https://open.spotify.com/embed/user/uypc70zmr8m8ymrdovekc04r2/playlist/7vMCB0cIiWNE6rNE4jJbKi" width="300" height="380" allow="encrypted-media"></iframe>
              </div>
              <!--modal-body-->
              <div class="modal-footer">
                <button type="button" class="btn btn- secondary" data-dismiss="modal">Close</button>
              </div>
              <!--modal-footer-->
            </div>
            <!--modal-content-->
          </div>
          <!--modal-dialog modal-dialog-centered-->
        </div>
        <!--model fade moon-->
      </div>
      <!--card text-center-->
      <div class="card bg-primary preview-card"> <img class="card-img-top album" src="images/albums/Pink_Floyd_-_The_Wall.jpg" alt="album cover">
            <div class="text text-up">The Wall</div>
        <p class="card-body">Released in 1979</p>
        <button class="btn albumbtn card-footer" data-toggle="modal" data-target="#wall">Songs</button>
        <!--Track list-->
        <div class="modal fade" id="wall">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title">The Wall</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!--modal-header-->
              <div class="modal-body">
                <iframe src="https://open.spotify.com/embed/album/5Dbax7G8SWrP9xyzkOvy2F" width="300" height="380"  allow="encrypted-media"></iframe>
              </div>
              <!--modal-body-->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              <!--modal-footer-->
            </div>
            <!--modal-content-->
          </div>
          <!--modal-dialog modal-dialog-centered-->
        </div>
        <!--model fade bell-->

      </div>
      <!--card text-center-->
      <div class="card bg-primary preview-card"> <img class="card-img-top album" src="images/albums/Pink_Floyd_-_The_Division_Bell.jpg" alt="tour poster">
        <div class="text text-up">Division</div>
            <div class="text text-bottom"> Bells</div>
        <p class="card-body">Released in 1972</p>
        <button class="btn albumbtn card-footer" data-toggle="modal" data-target="#bell">Songs</button>
        <!--Track list-->
        <div class="modal fade" id="bell">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title">The Division Bell</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!--modal-header-->
              <div class="modal-body">
                <iframe src="https://open.spotify.com/embed/album/5F0IQXuHfTV7SBvZVnXERl" width="300" height="380"  allow="encrypted-media"></iframe>
              </div>
              <!--modal-body-->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              <!--modal-footer-->
            </div>
            <!--modal-content-->
          </div>
          <!--modal-dialog modal-dialog-centered-->
        </div>
        <!--model fade bell-->

      </div>
      <!--card text-center bg-primary-->
      <div class="card preview-card bg-primary"> <img class="card-img-top album" src="images/albums/Pink_Floyd_-_Relics_Original.jpg" alt="albumcover">
            <div class="text text-up">Relics</div>
        <p class="card-body">Released in 1968</p>
        <button class="btn albumbtn card-footer" data-toggle="modal" data-target="#relics">Songs</button>
        <!--Track list-->
        <div class="modal fade" id="relics">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Relics</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!--modal-header-->
              <div class="modal-body">
                <iframe src="https://open.spotify.com/embed/album/361QTNnQcBcNJ38gn8ZWQw" width="300" height="380"  allow="encrypted-media"></iframe>
              </div>
              <!--modal-body-->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              <!--modal-footer-->
            </div>
            <!--modal-content-->
          </div>
          <!--modal-dialog modal-dialog-centered-->
        </div>
        <!--model fade bell-->

      </div>
      <!--card text-center bg-primary-->
    </div>
    <!--row card-deck-->
    <div class="row card-deck">
      <div class="card bg-primary preview-card"> <img class="card-img-top album" src="images/albums/Pink_Floyd_-_Wish_You_Were_Here.jpg" alt="album cover">
        <div class="text text-up">Wish You</div>
         <div class="text text-bottom">Were Here</div>
        <p class="card-body text-white">Released in 1963</p>
        <button class="btn albumbtn card-footer" data-toggle="modal" data-target="#wish">Songs</button>
        <!--Track list-->
        <div class="modal fade" id="wish">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
              <div class="modal-header">
                <h4 class="modal-title">Wish you Were Here</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!--modal-header-->
              <div class="modal-body">
                <iframe src="https://open.spotify.com/embed/album/0bCAjiUamIFqKJsekOYuRw" width="300" height="380"  allow="encrypted-media"></iframe>
              </div>
              <!--modal-body-->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              <!--modal-footer-->
            </div>
            <!--modal-content-->
          </div>
          <!--modal-dialog modal-dialog-centered-->
        </div>
        <!--model fade bell-->

      </div>
      <!--card text-center-->
      <div class="card bg-primary preview-card"> <img class="card-img-top album" src="images/albums/Pink_Floyd_-_Animals.jpg" alt="album cover">
       <div class="text text-up">Animals</div>
        <p class="card-body">Released in 1968</p>
        <button class="btn albumbtn card-footer"  data-toggle="modal" data-target="#animals">Songs</button>
        <!--Track list-->
        <div class="modal fade" id="animals">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
              <div class="modal-header text-center">
                <h4 class="modal-title">Animals</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!--modal-header-->
              <div class="modal-body">
                <iframe src="https://open.spotify.com/embed/album/3b4E89rxzZQ9zkhgKpj8N4" width="300" height="380"  allow="encrypted-media"></iframe>
              </div>
              <!--modal-body-->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              <!--modal-footer-->
            </div>
            <!--modal-content-->
          </div>
          <!--modal-dialog modal-dialog-centered-->
        </div>
        <!--model fade bell-->

      </div>
      <!--card text-center bg-primary-->
      <div class="card bg-primary preview-card"> <img class="card-img-top album" src="images/albums/Pink_Floyd_-_Atom_Heart_Mother.jpg" alt="album cover">
        <div class="text text-up">Atom Heart </div>
        <div class="text text-bottom">Mother</div>
        <p class="card-body text-white">Released in 1972</p>
        <button class="btn albumbtn card-footer" data-toggle="modal" data-target="#mother">Songs</button>
        <!--Track list-->
        <div class="modal fade" id="mother">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title">Atom Mother Heart</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!--modal-header-->
              <div class="modal-body">
                <iframe src="https://open.spotify.com/embed/album/2cUpAOlQjV5uSjkWj5bEQY" width="300" height="380"  allow="encrypted-media"></iframe>
              </div>
              <!--modal-body-->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              <!--modal-footer-->
            </div>
            <!--modal-content-->
          </div>
          <!--modal-dialog modal-dialog-centered-->
        </div>
        <!--model fade bell-->

      </div>
      <!--card text-center bg-primary-->
      <div class="card bg-primary preview-card"> <img class="card-img-top album" src="images/albums/endlessriver.jpg" alt="album cover">
        <div class="text text-up">Endless</div>
            <div class="text text-bottom">River</div>
        <p class="card-body text-white">Released in 1968</p>
        <button class="btn albumbtn card-footer" data-toggle="modal" data-target="#river">Songs</button>
        <!--Track list-->
        <div class="modal fade" id="river">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Endless River</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!--modal-header-->
              <div class="modal-body">
                <iframe src="https://open.spotify.com/embed/user/uypc70zmr8m8ymrdovekc04r2/playlist/5X92Y4gqRMOBJBemnTp3fN" width="300" height="380"  allow="encrypted-media"></iframe>
              </div>
              <!--modal-body-->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              <!--modal-footer-->
            </div>
            <!--modal-content-->
          </div>
          <!--modal-dialog modal-dialog-centered-->
        </div>
        <!--model fade moon-->
      </div>
      <!--card text-center bg-primary-->
    </div>
    <!--card text-center-->
  </div>
  <!--row card-deck-->
</div>
<!--container-fluid-->
<div class="container myform" id="contact">
  <h3 class="text-center">JOIN OUR FANCLUB</h3>
  <div class="row test">
    <div class="col-md-4 align-content-center">
      <p class="text-center"><em>SEND US A MESSAGE</em></p>
      <p><span><i class="far fa-envelope-open"> pinkfloyd_fanclub@yahoo.com</i></span></p>
    </div>
    <!--col-md-4 align-content-center-->
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 input-group"> <span class="input-group-addon"> <i class="fas fa-user fa-fw fa-2x"></i></span>
          <input class="form-control" id="name" name="name" placeholder="First Name*" type="text" required>
        </div>
        <!--col-sm-6 form-group-->
        <div class="col-sm-6 input-group"> <span class="input-group-addon"> <i class="fas fa-user fa-fw fa-2x"></i></span>
          <input class="form-control" id="lastname" name="name" placeholder="Last Name*" type="text" required>
        </div>
        <!--col-sm-6 input-group-->
      </div><!--row-->
      <br>
      <div class="row">
        <div class="col-sm-6 input-group"> <span class="input-group-addon"> <i class="fas fa-envelope fa-fw fa-2x"></i></span>
          <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required>
        </div>
        <!--col-sm-6 input-group-->
        <div class="col-sm-6 input-group"> <span class="input-group-addon"> <i class="fas fa-home fa-fw fa-2x"></i></span>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <!--col-sm-6 input-group-->
      </div>
      <br>
      <!--row-->
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div><!--form-group col-md-6-->
        <div class="form-group col-md-4">
          <label for="inputState">State</label>
          <select id="inputState" class="form-control">
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
        </div><!--form-group col-md-4-->
        <div class="form-group col-md-2">
          <label for="inputZip">Zip</label>
          <input type="text" class="form-control" id="inputZip">
        </div><!--form-group col-md-2-->
      </div>
      <div class="row"> </div>
      <br>
      <!--row-->
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <div class="form-check-inline">
        <label class="form-check-label" for="check1">
          <input type="checkbox" class="form-check-input" id="check1" name="Plain Text" value="something" checked>
          Plain Text </label>
      </div><!--form-check-inline-->
      <div class="form-check-inline">
        <label class="form-check-label" for="check2">
          <input type="checkbox" class="form-check-input" id="check2" name="HTML" value="something">
          HTML </label>
      </div><!--form-check-inline-->
      <div class="row">
        <div class="col-md-12 form-group">
          <input type="checkbox" checked="checked" name="subscribe">
          <label> Weekly Newsletter </label>
          <br>
          <input type="checkbox" checked="checked" name="join">
          <label> Join the Fanclub </label>
                    <button class="btn align-right mybtn" data-toggle="modal" data-target="#formModal" type="submit">Subscribe</button>
        </div>
  <!-- Modal -->
  <div class="modal fade" id="formModal" role="dialog">
    <div class="modal-dialog text-center">
      <!-- Modal content-->
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <h4 class="modal-title">All Done</h4>
        </div>
        <div class="modal-body">
          <p>Thank you for joining our fanclub!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn align-right mybtn" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
        <!--col-md-12 form-group-->
      </div>
      <!--row-->
    </div>
    <!--col-md-8-->
  </div>
  <!--row test-->
</div>
<!--container myform #contact-->
<?php include './includes/footer.php'; ?>

<!--container-->
    <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.0.0.js"></script>
<script>
$(document).ready(function(){
  /* Initialize Tooltip*/
  $('[data-toggle="tooltip"]').tooltip();

  /* Add smooth scrolling to all links in navbar + footer link*/
  $(".navbar a, footer a[href='#albumpage']").on('click', function(event) {

    /* Make sure this.hash has a value before overriding default behavior*/
    if (this.hash !== "") {

      /* Prevent default anchor click behavior*/
      event.preventDefault();

      /* Store hash*/
      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        /* Add hash (#) to URL when done scrolling (default click behavior)*/
        window.location.hash = hash;
      });
    } /* End if*/
  });
})
</script>
</body>
</html>
