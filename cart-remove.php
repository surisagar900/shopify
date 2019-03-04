<?php
require 'includes/common.php';
$user_id = $_SESSION['user_id'];
$id=$_GET['id'];
$delete_query="DELETE FROM user_items WHERE user_id='$user_id' AND items_id='$id'";
$run_query=mysqli_query($con,$delete_query) or die(mysqli_error($con));
header('location:cart.php');
?>