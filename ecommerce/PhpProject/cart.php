<?php
require "includes/common.php";
?>
<?php
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

else{
    $user_id = $_SESSION['id'];
    $select_items_users_query = "SELECT i.id,i.name,i.price,ui.status,ui.id,ui.timestamp FROM users_items ui INNER JOIN users u ON u.id=ui.user_id INNER JOIN items i ON i.id=ui.item_id";
    $select_items_users_query_result = mysqli_query($con, $select_items_users_query) or die(mysqli_error($con));
    $total_items_users_rows_fetched = mysqli_num_rows($select_items_users_query_result);
 
        $sum = 0;
        $t_id = "0";
            
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

        <div class="container">        
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Item Id</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                        <th>Product Status</th>
                        <th>Purchase Info.</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php while ($row = mysqli_fetch_array($select_items_users_query_result)){ 
                        if($row[3] == "Added to cart"){
                        $sum = $sum + $row[2];
                        $t_id = "$t_id".","."$row[0]";
                        }
                        ?>
                    <tr>
                        <td><?php echo $row[0]; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><a href="cart-remove.php?id=<?php echo $row[4] ?>" class='remove_item_link' role="button" > Remove from cart </a></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php if($row[3] == "Confirmed"){ echo $row[5]; } ?>
                        </td>
                    </tr> 
                        <?php } ?>  
                    
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td>Total : </td>
                        <td><?php echo "Rs "."$sum"; ?></td>
                        <td><a href="success.php?id=<?php echo $t_id ?>" class="btn btn-primary">Confirm Order</a></td>
                        <td style="color: red;"> 
                            <?php echo $error = isset($_GET['error'])?$_GET['error']:""; ?> 
                        </td>
                    </tr>
                </tfoot>
                
                
            </table>
        </div>




        <br><br><br><br>
        <?php
        include "includes/footer.php";
        ?>

        

    </body>
</html>
    
    <?php } 
        ?>