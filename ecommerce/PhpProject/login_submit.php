<?php

require "includes/common.php";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $secure_password = md5($password);

    $select_query = "SELECT id,email,password FROM users WHERE email=\"$email\"";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $total_rows_fetched = mysqli_num_rows($select_query_result);

    if ($total_rows_fetched == 0) {
        $emailId_error = " Email Doesn't Exist ";
        header("location:"."login.php?emailId_error=$emailId_error");
        session_unset();
        session_destroy();
    } 
    else {
        $row = mysqli_fetch_array($select_query_result);
        if($row[2] == $secure_password){
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $row[0];                           //mysqli_insert_id($con); <-- id already inserted, no need again
        echo $_SESSION['id'];
        echo $secure_password;
        header('location: product.php');
        }
        else{
            $email_error = "* Enter registered email id";
            $password_error = "* Enter correct password (min 6 char)";
            header("location:"."login.php?email_error=$email_error&password_error=$password_error");
        }
    }
}

else{
    echo "unable to login";
}


