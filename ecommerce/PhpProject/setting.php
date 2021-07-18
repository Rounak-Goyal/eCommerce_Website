<?php
require "includes/common.php";


if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <link rel="stylesheet" href="css/index.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?><br><br>

        <div class="card card-primary" style="width:60%; margin:auto; top:50px;">
            <div class="card-header bg-grey text-dark">
                <h1>SIGN UP</h1>
            </div>
            <div class="card-body">

                <form method="post" action="settings_script.php">
                    <div style="color: red;"> 
                    <?php 
                        echo $old_password_error = isset($_GET['old_password_error'])?$_GET['old_password_error']:"";
                        ?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Old Password" id="oldpwd" name="old_password">
                    </div>
                    
                    <div style="color: red;"> 
                    <?php 
                        echo $new_password_error = isset($_GET['new_password_error'])?$_GET['new_password_error']:"";
                        ?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="New Password" id="newpwd" name="new_password">
                    </div>
                        
                    
                    <div style="color: red;"> 
                    <?php 
                        echo $confirm_password_error = isset($_GET['confirm_password_error'])?$_GET['confirm_password_error']:"";
                        ?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Cofirm Password" id="confirmpwd" name="confirm_password">
                    </div>
                    
                    <div>
                        <input type="submit" class="btn btn-primary" value="submit" name="submit">
                    </div>
                    
                </form>
                <br><br>
            </div>
        </div>    

        <?php
        include "includes/footer.php";
        ?>





    </body>
</html>
