<?php
$server_username = "sql9378643";  // Khai báo username
$server_password = "t9axztCFH3"; // Khai báo password
$server_host = "sql9.freemysqlhosting.net"; // Khai báo server
$database = 'sql9378643';         // Khai báo database
// khởi tạo kết nối
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
mysqli_query($conn,"SET NAMES 'UTF8'");
?>
