<?php
use PhpSolutions\Authenticate\CheckPassword;

require_once ('./../PhpSolutions/Authenticate/CheckPassword.php');
$usernameMinChars = 6;
$errors = [];
if (strlen($username) < $usernameMinChars) {
    $errors[] = "Username must be at least $usernameMinChars characters.";
}
if (preg_match('/\s/', $username)) {
    $errors[] = 'Username should not contain spaces.';
}
$checkPwd = new CheckPassword($password, 8);
$checkPwd->requireMixedCase();
$checkPwd->requireNumbers(1);
$checkPwd->requireSymbols();
$passwordOK = $checkPwd->check();
if (!$passwordOK) {
    $errors = array_merge($errors, $checkPwd->getErrors());
}
if ($password != $retyped) {
    $errors[] = "Your passwords don't match.";
}
if (!$errors) {
    // encrypt password using default encryption
    $password = password_hash($password, PASSWORD_DEFAULT);
    // include the connection file
    require_once './../Admin/connection.php';
    $conn = dbConnect('write', 'mysqli');
    // prepare SQL statement
    $sql = 'INSERT INTO users (username, pwd) VALUES (?, ?)';
    $stmt = $conn->stmt_init();
    if ($stmt = $conn->prepare($sql)) {
        // bind parameters and insert the details into the database
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
    }
    if ($stmt->affected_rows == 1) {
        $success = "$username has been registered. You may now log in.";
    } elseif ($stmt->errno == 1062) {
        $errors[] = "$username is already in use. Please choose another username.";
    } else {
        $errors[] = $stmt->error;
    }
}
