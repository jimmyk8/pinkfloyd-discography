<?php
require_once('./../../Admin/initialize.php');
include './Includes/title.php';
require_once './Includes/connection.php';
$conn = dbConnect('read', 'mysqli');
$sql = 'SELECT * FROM discography';
$result = $conn->query($sql);
//if(is_post_request()) {

// Handle form values sent by new.php

// $album_title = $_POST['album_title'] ?? '';
// $song_title = $_POST['song_title'] ?? '';
// $position = $_POST['position'] ?? '';
// $visible = $_POST['visible'] ?? '';
//
//
//
// echo "Form parameters<br />";
// echo "Album title: " . $album_title . "<br />";
// echo "Song title: " . $song_title . "<br />";
// echo "Position: " . $position . "<br />";
// echo "Visible: " . $visible . "<br />";
//
// }else {
//   redirect_to(url_for('./album_query/new_album.php'));
// }

?>

<?php
//Handle form values sent by new.php
$id = $_GET['id'];
$album_title = $_POST['album_title'] ?? '';
$album_year = $_POST['album_year'] ?? '';
$album_image = $_POST['album_image'] ?? '';
$album_url = $_POST['album_url'] ?? '';

echo "Form parameters<br />";
echo "Album title: " . $album_title . "<br />";
echo "Album Year: " . $album_year . "<br />";
echo "Album Image: " . $album_image . "<br />";
echo "Album Url: " . $album_url . "<br />";
?>
