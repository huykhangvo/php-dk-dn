<?php
$server_username = "epiz_27317056";  // Khai báo username
$server_password = "Tinhyeu100%"; // Khai báo password
$server_host = "sql207.epizy.com"; // Khai báo server
$database = 'epiz_27317056_huykhang';         // Khai báo database
// khởi tạo kết nối
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
mysqli_query($conn,"SET NAMES 'UTF8'");
?>
