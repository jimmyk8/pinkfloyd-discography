<?php
require_once('./../Admin/initialize.php');
include ('./Includes/title.php');
require_once('./../Admin/connection.php');
$conn = dbConnect('read', 'mysqli');

$subject_set = find_all();

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
<title>Pink Floyd SQL_DB Discography</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="<?php echo url_for('css/styles.css'); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="http://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet" type="text/css">
</head>
<body>
    <navigation>
      <ul>
        <li><a href="<?php echo url_for('./index.php'); ?>">Menu</a></li>
      </ul>
    </navigation>

    <?php
      if (isset($conn)) {
          echo "<p>Connection Good</p>";
      } else {
        echo "<p>check connection</p>";
        ?>
    <table>
      <tr>
        <th>album_title</th>
        <th>album_year</th>
        <th>album_image</th>
        <th>album_url</th>
      </tr>
      <?php while ($row = $result->mysqli_fetch_assoc($subject_set)) { ?>
        <tr>
          <td><?= $row['album_title']; ?></td>
          <td><?= $row['album_year']; ?></td>
          <td><?= $row['album_image']; ?></td>
          <td><?= $row['album_url']; ?></td>
        </tr>
      <?php } ?>
  </table>
<?php } ?>


<?php include './Includes/footer.php'; ?>

</body>
</html>
