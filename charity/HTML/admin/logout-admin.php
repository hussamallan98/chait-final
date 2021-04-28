<?php 
session_start();
unset($_SESSION['admin-id']);
header("location:../home-1.php#portal");
?>