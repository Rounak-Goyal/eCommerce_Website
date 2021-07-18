<?php

require "includes/common.php";

if (isset($_SESSION['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $users_items_query = "INSERT INTO users_items (user_id,item_id,status) VALUES(\"$user_id\",\"$item_id\",\"Added to cart\")";
    $users_items_submit = mysqli_query($con, $users_items_query) or die(mysqli_error($con));
    header('location: product.php');
} else {
    header('location: login.php');
}
?>