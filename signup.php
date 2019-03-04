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
        body{margin:0; padding:0;  font-family: 'Lato', sans-serif;}

        #form{margin-top:150px;
        margin-bottom: 100px;}

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

        <div id="form" class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class=" panel panel-primary">
                        <div class="panel-heading">
                            <h1>Sign Up</h1>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="signup_script.php">
                                <input type="text" class="form-group form-control" name="username" placeholder="Name" required>

                                <input type="email" class="form-group form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9]+\.[a-z]{2,3}$" required>
                                <div class="h5 text-danger"><?php if(isset($_GET['email_error'])) {echo $_GET['email_error'] ;} ?></div>

                                <input type="password" class="form-group form-control" name="password" placeholder="Password" pattern=".{8,}" required>
                                <div class="h5 text-danger"><?php if(isset($_GET['password_error'])) {echo $_GET['password_error'];} ?></div>

                                <input type="text" class="form-group form-control" name="contact" placeholder="Contact" pattern=".{10,}" required>
                                <div class="h5 text-danger"><?php if(isset($_GET['contact_error'])) {echo $_GET['contact_error'];} ?></div>

                                <input type="text" class="form-group form-control" name="address" placeholder="Address" required>
                                <input type="text" class="form-group form-control" name="city" placeholder="City" required>
                                <div class="h4 text-danger"><?php if(isset($_GET['signup_error'])) {echo "$_GET['signup_error']";} ?></div>
                                <button type="submit" class="btn btn-primary" >Sign Up</button>
                            </form>
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
