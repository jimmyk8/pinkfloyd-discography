<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="myNav"> <a class="navbar-brand bigBrand" href="/pinkfloyd_discography/public/index.php">
  <h1 class="bigBrand"> PINK FLOYD</h1>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-label="Toggle navigation"><img src="images/b&whammers.png" class="btn-sm navbar-toggler menulogo" alt="hammer logo"></button>
  <div class="collapse navbar-collapse" id="navbarContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active"><a class="nav-link" href="/pinkfloyd_discography/public/index.php">HOME<span class="sr-only">(current)</span></a></li>

      <li class="nav-item"><a class="nav-link" href="/pinkfloyd_discography/public/index.php#band">BAND</a> </li>

      <li class="nav-item"><a class="nav-link" href="/pinkfloyd_discography/public/album_sql.php">MUSIC</a></li>

      <li class="nav-item"> <a class="nav-link" href="/pinkfloyd_discography/public/index.php#tour">TOUR</a> </li>

      <li class="nav-item"><a class="nav-link" href="/pinkfloyd_discography/public/contact.php">FANCLUB</a> </li>

      <li class="nav-item"><a class="nav-link" href="/pinkfloyd_discography/Sessions/login.php">SIGN IN</a> </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success btn-sm my-2 my-sm-0" id="search" type="submit">Search</button>
    </form>
  </div>
</nav>
