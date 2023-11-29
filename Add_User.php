<?php
session_start();
require 'dbcon.php';

if(isset($_POST['submit']))
{
   
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);


    $query = "INSERT INTO news_user (id,user_id,email,password) 


    VALUES ('$id','$user_id','$email','$password')";
    
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Account Created Successfully!";
        header("Location:Admin_Adduser.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "<strong>Sorry! <strong> Account Not Created Successfully!";
        header("Location:Admin_Adduser.php");
        exit(0);
    }
}

?>