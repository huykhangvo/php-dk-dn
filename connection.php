<?php
$server_username = "root";  // Khai báo username
$server_password = "mysql"; // Khai báo password
$server_host = "localhost"; // Khai báo server
$database = 'ss';         // Khai báo database
// khởi tạo kết nối
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
mysqli_query($conn,"SET NAMES 'UTF8'");
?>