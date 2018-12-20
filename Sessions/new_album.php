<?php require_once('./../Admin/initialize.php'); ?>
<?php include ('./../Includes/title.php'); ?>
<?php require_once './../Includes/session_timeout.php'; ?>
<?php
  if (isset($_POST['insert'])) {
      require_once './../Admin/connection.php';
      // make sure form is imagefilled
      $required = [album_title, album_year, album_url];
      // initialize flag
      $OK = false;
      // create database connection
      $conn = dbConnect('write', 'pdo');
      // initialize prepared statement
      $sql = 'INSERT INTO discography (album_title, album_year, album_url)
                VALUES(:album_title, :album_year, :album_url)';
    // prepare the statement
    $stmt = $conn->prepare($sql);
    // bind the parameters and execute the statement
    $stmt->bindParam(':album_title', $_POST['album_title'], PDO::PARAM_STR);
    $stmt->bindParam(':album_year', $_POST['album_year'], PDO::PARAM_STR);
    $stmt->bindParam(':album_url', $_POST['album_url'], PDO::PARAM_STR);
    // execute and get number of affected rows
    $stmt->execute();
    $OK = $stmt->rowCount();
    // redirect if successful or display error
    if ($OK) {
        header('Location: http://localhost:8081/pinkfloyd_discography/Sessions/new_album_list.php');
        exit;
    } else {
        $errorInfo = $stmt->errorInfo();
        if (isset($errorInfo[2])) {
            $error = $errorInfo[2];
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
<title>Pink Floyd Discography </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="http://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet" type="text/css">
</head>

<body id="bandpage" data-spy="scroll" data-target=".navbar" data-offset="50">
  <?php
  if (isset($result)) {
      echo '<ul>';
      foreach ($result as $message) {
          echo "<li>$message</li>";
      }
      echo '</ul>';
  }
  ?>
  <div class="container-fluid">
    <?php require './../Includes/nav.php'; ?>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success btn-sm my-2 my-sm-0" id="search" type="submit">Search</button>
        </form>
      </div>
  </div>

<div id="content ">
  <a class="back-link text-center container mytour" href="./new_album_list.php"><h2>&laquo; Back</h2></a>
</div>

  <div class="subject listing container-fluid text-center">
    <h1>Create New Album</h1>

    <form action="" method="post" id="">
      <dl>
        <dt>Album Title</dt>
        <dd><input type="text" name="album_title" value="" /></dd>
      </dl>

      <dl>
        <dt>Album Year</dt>
        <dd>
          <select name="album_year">
            <option value="1961">1961</option>
            <option value="1962">1962</option>
            <option value="1963">1963</option>
            <option value="1964">1964</option>
            <option value="1965">1965</option>
            <option value="1966">1966</option>
            <option value="1967">1967</option>
            <option value="1968">1968</option>
            <option value="1969">1969</option>
            <option value="1970">1970</option>
            <option value="1971">1971</option>
            <option value="1972">1972</option>
            <option value="1973">1973</option>
            <option value="1974">1974</option>
            <option value="1975">1975</option>
            <option value="1976">1976</option>
            <option value="1977">1977</option>
            <option value="1978">1978</option>
            <option value="1979">1979</option>
            <option value="1980">1980</option>
            <option value="1981">1981</option>
            <option value="1982">1982</option>
            <option value="1983">1983</option>
            <option value="1984">1984</option>
            <option value="1985">1985</option>
            <option value="1986">1986</option>
            <option value="1987">1987</option>
            <option value="1988">1988</option>
            <option value="1989">1989</option>
            <option value="1990">1990</option>
            <option value="1991">1991</option>
            <option value="1992">1992</option>
            <option value="1993">1993</option>
            <option value="1994">1994</option>
            <option value="1995">1995</option>
            <option value="1996">1996</option>
            <option value="1997">1997</option>
            <option value="1998">1998</option>
            <option value="1999">1999</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
          </select>
        </dd>
      </dl>

      <dl>
        <dt>Playlist Link</dt>
        <dd><input type="int" name="album_url" value="" />
          <?php ?>
        </dd>
      </dl>

      <div id="operations">
        <p>
          <input class="action btn" type="submit" value="Create Album" name="insert"/>
        </p>

      </div>
    </form>

  </div>

</div>
<? } ?>

<?php include './../Includes/footer.php'; ?>
</body>
</html>
