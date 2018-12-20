<?php require_once('./../Admin/initialize.php'); ?>
<?php include __DIR__ . './../Includes/title.php'; ?>
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
    <?php require  __DIR__ . './../Includes/nav.php'; ?>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success btn-sm my-2 my-sm-0" id="search" type="submit">Search</button>
        </form>
      </div>
  </div>
<!--container-fluid-->
<div class="flex-container albums" id="up">
  <h1 class="text-center">Albums</h1>
  <a href="./album_sql.php">
  <h2 class="text-center">Albums From Database via .php</h2></a>
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

<footer class="text-center container-fluid"><a class="fas fa-angle-up fa-3x" href="#up" data-toggle="tooltip" title="TOP"></a></footer>
<?php include './../Includes/footer.php'; ?>

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
