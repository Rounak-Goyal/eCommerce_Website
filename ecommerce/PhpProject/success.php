<?php
require "includes/common.php";


if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
else{
    $user_id = $_SESSION['id'];
    $ids = $_GET['id'];
    $update_users_items_query = "UPDATE users_items SET status=\"Confirmed\",timestamp=CURRENT_TIMESTAMP WHERE item_id IN ($ids) && user_id=\"$user_id\"";
    $update_users_items_submit = mysqli_query($con, $update_users_items_query) or die(mysqli_error($con));   
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
        

        <div class="container" id="content">
            <div class="jumbotron">
                <h1>Your order is confirmed. </h1>
                <p>Thank you for shopping with us. <a href="Product.php" class="badge badge-pill badge-info">​Click here</a>​ to purchase any other item.</p>
            </div>
        </div>




        <?php
        include "includes/footer.php";
        ?>



    </body>
</html>
