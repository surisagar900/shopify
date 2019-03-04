<?php
require 'includes/common.php';
$name = mysqli_real_escape_string($con,$_POST['username']);

                                    //start validation

$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email, $email))
    { header('location:signup.php?email_error=incorrect email format'); }

$password=$_POST['password'];
if(strlen($password)<=8)
    { header('location:signup.php?password_error=password should have atleast 8 characters');}

                                    //end validation

$email=mysqli_real_escape_string($con,$email);
$password=mysqli_real_escape_string($con,$password);
$contact=$_POST['contact'];
if(strlen($contact)<=10)
    { header('location:signup.php?contact_error=phone number should contain 10 digits excluding country code'); }
$address=mysqli_real_escape_string($con,$_POST['address']);
$city=mysqli_real_escape_string($con,$_POST['city']);


$selected_query = "SELECT id FROM users WHERE email='$email'";
$run_selected_query= mysqli_query($con,$selected_query) or die(mysqli_error($con));
$rows=mysqli_num_rows($run_selected_query);
if($rows > 0){
    header('location:signup.php?signup_error=email id already exist');
}
else{
    $entry="INSERT INTO users(name,email,password,contact,address,city) VALUES('$name','$email','$password','$contact','$address','$city')";
    $submit_entry=mysqli_query($con,$entry) or die(mysqli_error($con));
    $id_of_newuser=mysqli_insert_id($con);
    $_SESSION['email']=$email;
    $_SESSION['user_id']=$id_of_newuser;
    header('location: products.php');
}
?>