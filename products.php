<?php
require 'includes/common.php';
?>
<!------------------------------------html part start------------------------------------------->
<html>
<head>
    <title>Lifestyle Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed|Lato|Raleway" rel="stylesheet">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
    <style>
        body{margin:0; padding:0; font-family: 'Lato', sans-serif;}
        
        #content{margin-top:150px;}
        
        footer{
                padding:20px 0;
                position: relative;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
                font-size:16px; font-family: 'Lato', sans-serif;}
    </style>
    </head>
    <!------------------------------------body part start------------------------------------------->
    <body>
        
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="intro-bg_1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="watch.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="shirt.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
        
        
        
        <div id="content" class="container">
            <div class="jumbotron">
                    <center class="h1">Welcome to our Lifestyle Store</center>
                    <center><p class="h4">We have the best cameras, watches and shirts for you. No need to hund around, we have all in one place.</p></center>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="camera.jpg" alt="">
                        <div class="caption">
                            <h3>Canon EOS</h3>
                            <p>price : Rs 36000</p>
            <!--button--->
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                            <?php } 
                            else {
                            if (check_if_added_to_cart(1)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                            } else {
                            ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                            <?php }
                            }?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="camera.jpg" alt="">
                        <div class="caption">
                            <h3>Nikon DSLR</h3>
                            <p>price : Rs 40000</p>
            <!--button--->
                           <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                            <?php } 
                            else {
                            if (check_if_added_to_cart(2)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                            } else {
                            ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                            <?php }
                            }?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="camera.jpg" alt="">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>price : Rs 45000</p>
            <!--button--->                            
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                            <?php } 
                            else {
                            if (check_if_added_to_cart(3)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                            } else {
                            ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                            <?php }
                            }?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="camera.jpg" alt="">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>price : Rs 50000</p>
            <!--button--->
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                            <?php } 
                            else {
                            if (check_if_added_to_cart(4)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                            } else {
                            ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                            <?php }
                            }?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="watch.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model#301</h3>
                            <p>price : Rs 13000</p>
            <!--button--->
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                            <?php } 
                            else {
                            if (check_if_added_to_cart(5)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                            } else {
                            ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                            <?php }
                            }?>
                        </div>
                    </div>
                </div>
                
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="watch.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>price : Rs 3000</p>
            <!--button--->
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                            <?php } 
                            else {
                            if (check_if_added_to_cart(6)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                            } else {
                            ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                            <?php }
                            }?>
                        </div>
                    </div>
                </div>
                
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="watch.jpg" alt="">
                        <div class="caption">
                            <h3>HMT milan</h3>
                            <p>price : Rs 8000</p>
            <!--button--->
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                            <?php } 
                            else {
                            if (check_if_added_to_cart(7)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                            } else {
                            ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                            <?php }
                            }?>
                        </div>
                    </div>
                </div>
                
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="watch.jpg" alt="">
                        <div class="caption">
                            <h3>Faber Luba #111</h3>
                            <p>price : Rs 18000</p>
            <!--button--->
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                            <?php } 
                            else {
                            if (check_if_added_to_cart(8)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                            } else {
                            ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                            <?php }
                            }?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="shirt.jpg" alt="">
                        <div class="caption">
                            <h3>H&amp;W</h3>
                            <p>price : Rs 800</p>
            <!--button--->
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                            <?php } 
                            else {
                            if (check_if_added_to_cart(9)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                            } else {
                            ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                            <?php }
                            }?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="shirt.jpg" alt="">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>price : Rs 1000</p>
            <!--button--->
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                            <?php } 
                            else {
                            if (check_if_added_to_cart(10)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                            } else {
                            ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                            <?php }
                            }?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="shirt.jpg" alt="">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>price : Rs 1500</p>
            <!--button--->
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                            <?php } 
                            else {
                            if (check_if_added_to_cart(11)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                            } else {
                            ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                            <?php }
                            }?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="shirt.jpg" alt="">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>price : Rs 1300</p>
            <!--button--->
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                            <?php } 
                            else {
                            if (check_if_added_to_cart(12)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                            } else {
                            ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                            <?php }
                            }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <?php 
        include 'includes/footer.php';
        ?>
        
        
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
    </body>
</html>