<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username'] != NULL){
    unset($_SESSION['username']);
    echo 'Bạn đã đăng xuất thành công.';
      //  header('Location: login.php');
}
?>
<meta http-equiv="refresh" content="5;url=login.php">