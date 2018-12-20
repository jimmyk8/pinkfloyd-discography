<?php
require_once './Includes/connection.php';
if ($conn = dbConnect('read', 'mysqli')) {
    echo 'Connection successful';
}
