<?php
require "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
else{
session_unset();
Session_destroy;
header('location:index.php');
}
?>
