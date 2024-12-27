<?php
$servername = "localhost";
$username = "root"; 
$password = "1234"; 
$database = "btlweb";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
echo "Kết nối thành công!";
?>
