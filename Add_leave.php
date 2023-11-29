<?php
session_start();
require 'dbcon.php';



if(isset($_POST['delete_leave']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_leave']);
    $query = "DELETE FROM maximum_leave WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Deleted Successfully";
        header("Location:payroll_user.php?user_id=".$user_id);
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Deleted";
        header("Location:payroll_user.php?user_id=".$user_id);
        exit(0);
    }
}


if(isset($_POST['submit']))
{

    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $Leave_req = mysqli_real_escape_string($con, $_POST['Leave_req']);
    $DateOfFill = mysqli_real_escape_string($con, $_POST['DateOfFill']);
    $TypeOfLeave = mysqli_real_escape_string($con, $_POST['TypeOfLeave']);


    $query = "INSERT INTO leave_application (user_id,Leave_req,DateOfFill,TypeOfLeave)
    
    VALUES ('$user_id','$Leave_req','$DateOfFill','$TypeOfLeave')";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Account Created Successfully!";
        header("Location:payroll_user.php?user_id=".$user_id);
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Account Not Created Successfully!";
        header("Location:payroll_user.php?user_id=".$user_id);
        exit(0);
    }
}

if(isset($_POST['update_payroll']))
{
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $Leave_req = mysqli_real_escape_string($con, $_POST['Leave_req']);
    $DateOfFill = mysqli_real_escape_string($con, $_POST['DateOfFill']);
    $TypeOfLeave = mysqli_real_escape_string($con, $_POST['TypeOfLeave']);
    


    $query = "UPDATE leave_application SET user_id='$user_id', Leave_req='$Leave_req', DateOfFill='$DateOfFill', TypeOfLeave='$TypeOfLeave' ";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Payroll Updated Successfully";
        header("Location:payroll_user.php?id=".$user_id);
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Payroll Not Updated";
        header("Location:payroll_user.php");
        exit(0);
    }

}

?>

