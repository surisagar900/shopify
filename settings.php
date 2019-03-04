<?php
require'includes/common.php';
if(!isset($_SESSION['email']))
{header('location:index.php');}
?>
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
        
        #form{margin-top:150px;}    
        
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
<!----------------------------------------body part start------------------------------------------->
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
                            <h1>Change Password</h1>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="settings_script.php">
                                <div class="h3 text-success text-center"><?php if(isset($_GET['update'])) {echo $_GET['update'];} ?></div>
                                
                                <input type="password" class="form-group form-control" name="oldpassword" placeholder="Old Password">
                                <div class="h4 text-danger"><?php if(isset($_GET['update_error'])) {echo $_GET['update_error'];} ?></div>
                                
                                <input type="password" class="form-group form-control" name="newpassword" placeholder="New Password">
                                <input type="password" class="form-group form-control" name="repassword" placeholder="Re-enter New Password">
                                <div class="h4 text-danger"><?php if(isset($_GET['password_error'])) {echo $_GET['password_error'];} ?></div>
                                
                                <button type="submit" class="btn btn-primary" >Change</button>
                                
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