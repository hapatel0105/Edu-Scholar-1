<?php
session_start();
unset($_SESSION['email']);
header("location:signin.php");
?>