<?php
$con = mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
session_start();
$item_id = $_GET['id'];
$user_id = $_SESSION['user_id'];
$query = "INSERT INTO user_items(user_id, items_id, status) VALUES('$user_id', '$item_id', 'added to cart')";
$user_id = mysqli_query($con,$query) or die(mysqli_error($con));
header('location:products.php');
?>