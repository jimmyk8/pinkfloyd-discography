<?php
$connectionType = 'mysqli_connect';

function dbConnect($usertype, $connectionType) {
    $dbhost = 'localhost';
    $dbname = 'pinkfloyd_discography';
    confirm_dbconnect();
    if ($usertype  == 'read') {
        $dbuser = 'psread';
        $dbpass = '6letters';
    } elseif ($usertype == 'write') {
        $dbuser = 'pswrite';
        $dbpass = '6letters';
    } else {
        exit('Unrecognized user');
    }
    if ($connectionType == 'mysqli_connect') {
        $conn = new mysqli_connect($dbhost, $dbname, $dbuser, $dbpass);
        if ($conn->connect_error) {
            exit($conn->connect_error);
        }
        return $conn;
    } else {
        try {
            return new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }
}

function confirm_dbconnect() {
  if(mysqli_connect_errno()) {
    $msg = "Database connection failed: ";
    $msg .= mysqli_connect_error();
    $msg .= " (" . mysqli_connect_errno() . ")";
    exit($msg);
  }
}

function dbdisconnect($conn) {
  if(isset($conn)) {
    'mysqli_close';
  }
}

function confirm_result_set($result_set) {
    if (!$result_set) {
    	exit("Database query failed.");
    }
  }
