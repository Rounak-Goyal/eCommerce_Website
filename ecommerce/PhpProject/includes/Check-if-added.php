<?php

function check_if_added_to_cart($item_id) {
    if (isset($_SESSION['id'])) {
        $con = mysqli_connect("localhost", "root", "", "ecommerce", "3308") or die(mysqli_error($con));
        $user_id = $_SESSION['id'];
        $select_items_users_query = "SELECT * FROM users_items WHERE item_id=\"$item_id\" && user_id=\"$user_id\" && status=\"Added to cart\"";
        $select_items_users_query_result = mysqli_query($con, $select_items_users_query) or die(mysqli_error($con));
        $total_items_users_rows_fetched = mysqli_num_rows($select_items_users_query_result);
        if ($total_items_users_rows_fetched >= 1) {
            return 1;
        } else {
            return 0;
        }
    }
    else{
        return 0;
    }
}

?>
