<?php 
session_start();
unset($_SESSION['charity_id']);
unset($_SESSION['supporter_id']);
header("location:home-1.php#portal");

?>