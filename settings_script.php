<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{header('location:index.php');}

$password=mysqli_real_escape_string($con, $_POST['oldpassword']);
$newpassword =mysqli_real_escape_string($con, $_POST['newpassword']);
$repassword =mysqli_real_escape_string($con, $_POST['repassword']);

$check_old_pass_query = "select password from users where id='{$_SESSION['user_id']}'";
$run_check_query = mysqli_query($con, $check_old_pass_query) or die(mysqli_error($con));
$pass_value=mysqli_fetch_array($run_check_query);
if($pass_value['password']==$password ){
       if($repassword==$newpassword){
        $update_query = "UPDATE users SET password='$newpassword' where id='{$_SESSION['user_id']}'";
        $run_update_query = mysqli_query($con,$update_query) or die(mysqli_error($con));
        header('location:settings.php?update=password update successfully');
        } 
       else {
        header('location:settings.php?password_error=new password not matched');   
        }
}
else{
   header('location:settings.php?update_error=password is incorrect'); 
}

?>