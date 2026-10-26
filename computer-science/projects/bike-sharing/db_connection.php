<?php
ob_start();

session_start();

$host = "DB_HOST";
$user = "DB_USER";
$password = "DB_PASSWORD";
$db = "DB_NAME";
$conn = mysqli_connect($host, $user, $password, $db);

if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
}
