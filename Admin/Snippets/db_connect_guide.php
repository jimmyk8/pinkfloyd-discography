<?php

// This guide demonstrates the five fundamental steps
// of database interaction using PHP.

// Credentials
$dbhost = 'localhost';
$dbuser = 'jimmyk8';
$dbpass = '6letters';
$dbname = 'album_database';
$dbport = '8081';

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// 2. Perform database query
$query = "SELECT * FROM album_database";
$result_set = mysqli_query($connection, $query);

// 3. Use returned data (if any)

// 4. Release returned data
mysqli_free_result($result_set);

// 5. Close database connection
mysqli_close($connection);
