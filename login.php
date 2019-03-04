<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
header('location:products.php');
}
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
        body{margin:0; padding:0;  font-family: 'Lato', sans-serif;}
        
        #form{padding-top:150px;
                padding-bottom:100px;}    
        
        footer{padding:20px 0;
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
        
        <div id="form" class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class=" panel panel-primary">
                        <div class="panel-heading">
                            <h1>Login</h1>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form method="post" action="login_submit.php">
                                <input type="email" class="form-group form-control" name="email" placeholder="enter your email address" required>
                                <input type="password" class="form-group form-control" name="password" placeholder="enter your password" required>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <div class="h4 text-danger"><?php if(isset($_GET['email_error'])) {echo $_GET['email_error'];} ?></div>
                            Don't have an account? <span style="color:blue;"><a href="signup.php">Register</a></span>
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