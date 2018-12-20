<?php

require_once('./../Admin/initialize');

if(is_post_request()) {

  $firstname = $_POST['firstname'] ?? '';
  $lastname = $_POST['lastname'] ?? '';
  $email = $_POST['Email'] ?? '';
  $newsletter = $_POST['newsletter'] ?? '';
  $join_club = $_POST['join_club'] ?? '';


  //check to see if the form has been submitted
  if (isset($_POST['send'])) {
    //update query
    $sql = 'INSERT INTO fanclub SET firstname = ?, lastname = ?, email = ?, newsletter = ?, join_club = ?
            WHERE id = ?';

    $stmt = $conn->prepare($sql);
    // execute query by passing array of variables
    $done = $stmt->execute([$_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['newsletter'], $_POST['join_club'],
        $_POST['id']]);

  echo "form parameters<br />";
  echo "First Name: " . $firstname . "<br />";
  echo "Last Name: " . $lastname . "<br />";
  echo "email: " . $email . "<br />";
  echo "newsletter: " . $newsletter . "<br />";
  echo "Join Club: " . $join_club "<br />";
} else {
  redirect_to('contact.php');
}

 ?>
