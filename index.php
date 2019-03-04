<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
header('location:products.php');
}
?>
<html>
<!------------------------------------head part start------------------------------------------->
<head>
    <title>Lifestyle Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed|Lato|Raleway" rel="stylesheet">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body{margin:0; padding:0; font-family:'Lato', sans-serif;}
    
        #banner_image
                {   height:100%; 
                    margin:auto;
                    text-align: center;
                    color: #f8f8f8;
                    background: url(intro-bg_1.jpg) no-repeat center;
                    background-size:cover;}
        
        #banner_content{
                margin-top:200px; 
                background-color:rgba(0,0,0,0.6);
                padding:20px;
                max-width:660px;  
                font-family: 'Raleway', sans-serif;
                }
        
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
        ?>
        
        <div id="banner_image">
            <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-3"></div>
                        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                            <div class="text-center" id="banner_content">
                                <h1>About Us</h1>
                                <h4>Lifestyle Store is a retail store selling a wide variety of product categories under multiple brands. It is designed to associate brands with one or another aspirational lifestyle.Our Lifestyle store includes clothing, watches and cameras.</h4>
                                <a href="products.php" class="btn btn-danger btn-lg btn-block active">Shop Now</a>
                            </div>
                        </div>
                        <div class="col=xl-2 col-lg-2 col-md-3"></div>
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