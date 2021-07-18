<?php
require 'includes/common.php';
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
        <?php
        include 'includes/Check-if-added.php';
        ?>

        <div class="container" id="content">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
            </div>
            <div class="row" id="cameras">                                <!-- cameras -->
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="img\5.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Cannon EOS</h4>
                            <p class="card-text">Price : Rs 36,000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>     
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="img\2.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Sony DSLR</h4>
                            <p class="card-text">Price: Rs 40,000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(2)) { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>     
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="img\3.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Sony DSLR</h4>
                            <p class="card-text">Price: Rs 50,000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(3)) { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>     
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="img\4.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Olympus DSLR</h4>
                            <p class="card-text">Price: Rs 70,000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(4)) { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>     
                </div>    
            </div><br><br>

            <div class="row" id="watches">                                             <!-- watches -->
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="img\9.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Titan Model #301</h4>
                            <p class="card-text">Price : Rs :4999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(5)) { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>     
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="img\10.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Titan Model #501</h4>
                            <p class="card-text">Price : Rs :6999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(6)) { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>     
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="img\11.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">HMT Milan</h4>
                            <p class="card-text">Price : Rs :8999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(7)) { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>     
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="img\12.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Faber Luba #111</h4>
                            <p class="card-text">Price : Rs :13999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(8)) { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>     
                </div>    
            </div><br><br>

            <div class="row" id="shirts">                                  <!<!-- shirts -->
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="img\8.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">H&W</h4>
                            <p class="card-text">Price : Rs :999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(9)) { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>     
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="img\6.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Luis Phil</h4>
                            <p class="card-text">Price ; Rs :1999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(10)) { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>     
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="img\13.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">John Jok</h4>
                            <p class="card-text">Price : Rs :3999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(11)) { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>     
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="img\14.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Jhalsani</h4>
                            <p class="card-text">Price : Rs :4499.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(12)) { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>     
                </div>    
            </div><br><br><br><br>

        </div>




        <?php
        include "includes/footer.php";
        ?>



    </body>
</html>
