<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
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
        
        #content{margin-top:150px;}
        
        footer{ padding:20px 0;
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
        
        $user_id=$_SESSION['user_id'];
        $select_query="select i.id,i.name,i.price from user_items ui 
        inner join users u on u.id=ui.user_id
        inner join items i on i.id=ui.items_id where user_id='$user_id'";
        $run_query=mysqli_query($con,$select_query) or die(mysqli_error($con));
        ?>
        
        <div id="content" class="container">
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr><th>Item Number</th><th>Item Name</th><th>Price</th><th></th></tr>
                </thead>
                <tbody>
                    
                <?php
                    $num_of_rows_fetched=mysqli_num_rows($run_query);
                    if($num_of_rows_fetched==0){
                        echo "<div class='h3 text-center text-danger'>add items to cart first</div>";
                    }
                    else{
                        $price_of_item=0;
                        $sum=0;
                        while($rows=mysqli_fetch_array($run_query))
                        {
                            $id_of_item = $rows['id'];
                            $name_of_item = $rows['name'];
                            $price_of_item = $rows['price'];
                            $sum = $price_of_item + $sum;
                            echo "<tr> <td>$id_of_item</td> <td>$name_of_item</td>
                            <td>$price_of_item</td> <td><a href='cart-remove.php?id={$rows['id']}' class='remove_item_link'> Remove</a></td> </tr>";
                        }
                        echo"<tr> <td></td> <td>Total</td><td>Rs. $sum /-</td><td></td> </tr>";
                    
                    echo"<tr> <td></td> <td><a href='success.php?id=$rows'><button type='submit' class='btn btn-primary'>Confirm Order</button></a></td> <td></td> <td></td></tr>";
                        }
                ?>
                </tbody>
            </table>
            </div>
        </div>

         <?php 
        include 'includes/footer.php';
        ?>
                
        
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    </body>
</html>