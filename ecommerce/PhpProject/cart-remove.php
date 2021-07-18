<?php
require "includes/common.php";
$users_items_id = $_GET['id'];
$user_id = $_SESSION['id'];
$select_items_users_query = "SELECT status FROM users_items WHERE id=\"$users_items_id\"";
$select_items_users_query_result = mysqli_query($con, $select_items_users_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_items_users_query_result);
echo $row[0];
echo $users_items_id;

if($row[0]== "Confirmed"){
    $delete_users_items_query = "DELETE FROM users_items WHERE id=\"$users_items_id\"";
    $delete_users_items_submit = mysqli_query($con, $delete_users_items_query) or die(mysqli_error($con));
    $error = "( Order has Cancelled )";
    header("location:"."cart.php?error=$error");
}
else{
    $delete_users_items_query = "DELETE FROM users_items WHERE id=\"$users_items_id\"";
    $delete_users_items_submit = mysqli_query($con, $delete_users_items_query) or die(mysqli_error($con));
    header('location: cart.php');     
}


?>
