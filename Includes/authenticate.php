<?php
require_once './../Admin/connection.php';
$conn = dbConnect('read', 'pdo');
// get the username's encrypted password from the database
$sql = 'SELECT pwd FROM users WHERE username = ?';
// prepare statement
$stmt = $conn->prepare($sql);
// pass the input parameter as a single-element array
$stmt->execute([$username]);
$storedPwd = $stmt->fetchColumn();
// check the submitted password against the stored version
if (password_verify($password, $storedPwd)) {
    $_SESSION['authenticated'] = 'Kung Fu';
    // get the time the session started
    $_SESSION['start'] = time();
    session_regenerate_id();
    header("Location: $redirect"); exit;
} else {
    // if not verified, prepare error message
    $error = 'Invalid username or password';
}
