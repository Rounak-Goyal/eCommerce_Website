<?php
require "includes/common.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if (preg_match($regex_email, $email) && strlen($password) >= 6) {
        $fname = mysqli_real_escape_string($con, $_POST['fname']);
        $email = mysqli_real_escape_string($con, $email);
        $password = mysqli_real_escape_string($con, $password);
        $secured_password = md5($password);
        $contact = mysqli_real_escape_string($con, $_POST['contact']);
        $city = mysqli_real_escape_string($con, $_POST['city']);
        $address = mysqli_real_escape_string($con, $_POST['address']);

        $select_query = "SELECT id, email FROM users WHERE email=\"$email\"";
        $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
        $total_rows_fetched = mysqli_num_rows($select_query_result);

        if ($total_rows_fetched > 0) {            
            session_unset();
            session_destroy();
            $duplicateId_error = " Email already exist";
            header("location:"."signup.php?duplicateId_error=$duplicateId_error");

                
        } else {
            
            $user_registration_query = "INSERT INTO users(name,email,password,contact,city,address)VALUES(\"$fname\",\"$email\",\"$secured_password\",\"$contact\",\"$city\",\"$address\")";
            $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
            echo "User successfully inserted";
            $_SESSION['id'] = mysqli_insert_id($con);
            $_SESSION['email'] = $email;
            echo $_SESSION['id'];
            echo $_SESSION['email'];
            echo $secured_password;
            header('location: product.php');
        }
    } else {
        $email_error = "* enter correst email id";
        $password_error = "* enter password (min 6 char)";
        header("location:"."signup.php?email_error=$email_error&password_error=$password_error");
    }
}

else{
    echo "unable to submit";
}
?>