<?php
require 'includes/common.php';
$email=mysqli_real_escape_string($con, $_POST['email']);
$pass=mysqli_real_escape_string($con, $_POST['password']);
$ecrtpass=md5($pass);
$check_query="SELECT id, email FROM users WHERE email='$email' AND password='$pass'";
$run_query=mysqli_query($con, $check_query);
$rows=mysqli_num_rows($run_query);
if($rows==0)
{
header('location:login.php?email_error=user not exist. please sign up.');
}
else
{
$selected_row=mysqli_fetch_array($run_query);
$_SESSION['user_id']=$selected_row['id'];
$_SESSION['email']=$selected_row['email'];
header('location:products.php');
}
?>
