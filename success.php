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
        
        #form{margin-top:150px;
        margin-bottom:100px;}    
        
        footer{padding:20px 0;
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
            <div class="panel panel-success text-center">
                    <?php
                    $update_query="UPDATE user_items SET status='confirmed' WHERE user_id={$_SESSION['user_id']}";
                    $run_update_query=mysqli_query($con,$update_query) or die(mysqli_error($con));
                    echo "<div class='panel-heading'>
                    <h1>Your order is confirmed.</h1>
                </div>
                 <h2>Thank you for shopping with us. <span><a href='products.php'>Click here</a></span> to purchase any other item.</h2>";
                    $delete_rows_query="DELETE FROM user_items WHERE user_id={$_SESSION['user_id']}";
                    $run_delete_query=mysqli_query($con,$delete_rows_query) or die(mysqli_error($con));
                    ?>
            </div>
        </div>
        

         <?php 
        include 'includes/footer.php';
        ?>
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>