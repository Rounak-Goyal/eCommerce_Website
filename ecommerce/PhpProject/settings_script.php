<?php

require "includes/common.php";
if (!isset($_SESSION['email'])) {
    header('location: index.php');
} 

else {
    if (isset($_POST['submit'])) {
        $user_email = $_SESSION['email'];
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        if ((strlen($new_password) >= 6) && ($new_password == $confirm_password)) {
            $old_password = mysqli_real_escape_string($con, $old_password);
            $old_secure_password = md5($old_password);
            $new_password = mysqli_real_escape_string($con, $new_password);
            $new_secure_password = md5($new_password);
            $confirm_password = mysqli_real_escape_string($con, $confirm_password);

            //$select_users_query = "SELECT password FROM users WHERE /*email='$user_email'*/"; 
            //$select_users_query_result = mysqli_query($con, $select_users_query) or die(mysqli_error($con));       //<---------------------------
            //$select_users_query_result = mysqli_query($con, $select_users_query) or die(mysqli_error($con));


            $select_query = "SELECT password FROM users WHERE email=\"$user_email\"";
            $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));

            $total_users_rows_fetched = mysqli_num_rows($select_query_result);
            $row = mysqli_fetch_array($select_query_result);
            if (!($total_users_rows_fetched == 0)) {
                if ($old_secure_password == $row[0]) {
                    $update_users_query = "UPDATE users SET password=\"$new_secure_password\" WHERE email=\"$user_email\"";
                    $update_users_submit = mysqli_query($con, $update_users_query) or die(mysqli_error($con));
                    header('location: product.php');
                } else {
                    $old_password_error = "* Enter correct recent password";
                    header("location:" . "setting.php?old_password_error=$old_password_error");
                }
            } else {
                echo "no account found";
            }
        } else {
            $confirm_password_error = "* please match above password";
            $new_password_error = "* Enter password (min 6 char.)";
            header("location:" . "setting.php?new_password_error=$new_password_error&confirm_password_error=$confirm_password_error");
        }
    } 
    else {
        echo "unable to submit";
    }
}
?>


