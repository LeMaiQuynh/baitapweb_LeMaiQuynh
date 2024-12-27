<?php
$host = "127.0.0.1";
$username = "root";
$password = "admin";
$dbname = "btlweb";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
} else {
}
?>