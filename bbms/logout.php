<?php
session_start();
$un=$_SESSION['un'];
session_destroy();
header('location:index1.php');
?>