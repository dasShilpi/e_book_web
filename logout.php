<?php 
session_start();
//session_destroy();
unset($_SESSION['cid']);
unset($_SESSION['cname']);
header("location:index.php");


?>