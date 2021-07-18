<?php
require 'includes/common.php';

?>

<?php
if (isset($_SESSION['email'])) {
    header('location: product.php');
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
        ?><br>

        <div class="card card-primary" style="width:60%; margin:auto;top:50px;">
            <div class="card-header bg-grey text-dark">
                <h1>SIGN UP</h1>
            </div>
            <div class="card-body">

                <form method="post" action="signup_script.php">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Name" id="name" name="fname">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required = "true">
                        <div style='color:red;'>
                            <?php echo $email_error = isset($_GET['email_error'])?$_GET['email_error']:""; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password" required = "true">
                        <div style='color:red;'>
                            <?php echo $password_error = isset($_GET['password_error'])?$_GET['password_error']:""; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Contact" id="contact" name="contact" >
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter City" id="city" name="city">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Address" id="address" name="address">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="submit" class="btn btn-primary">
                        </div>
                    <div style='color:red;'>
                        <?php echo $duplicateId_error = isset($_GET['duplicateId_error'])?$_GET['duplicateId_error']:""; ?>
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
