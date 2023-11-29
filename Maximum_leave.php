<?php
session_start();
require 'dbcon.php';



if(isset($_POST['Apply']))
{

    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $Vacation_L = mysqli_real_escape_string($con, $_POST['Vacation_L']);
    $Sick_L = mysqli_real_escape_string($con, $_POST['Sick_L']);

    $query = "INSERT INTO maximum_leave (user_id,Vacation_L,Sick_L)
    VALUES ('$user_id','$Vacation_L','$Sick_L')";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Available Leave Applied!";
        header("Location:payroll_user.php?user_id=".$user_id);
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Available Not Leave Applied!";
        header("Location:payroll_user.php?user_id=".$user_id);
        exit(0);
    }
}


if(isset($_POST['update_leaves']))
{
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $Vacation_L = mysqli_real_escape_string($con, $_POST['Vacation_L']);
    $Sick_L = mysqli_real_escape_string($con, $_POST['Sick_L']);


    $query = "UPDATE maximum_leave SET user_id='$user_id', Vacation_L='$Vacation_L', Sick_L='$Sick_L' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Payroll Updated Successfully";
        header("Location:payroll_user.php?user_id=".$user_id);
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Payroll Not Updated";
        header("Location:payroll_user.php?user_id=".$user_id);
        exit(0);
    }

}