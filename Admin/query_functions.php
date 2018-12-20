<?php
function find_all() {
  global $conn;

  $sql = "SELECT * FROM discography";
  echo $sql;
  $result = mysqli_query($conn, $sql);
  // $result = $conn->query($sql);
  confirm_result_set($result);
  return $result;
} ?>
