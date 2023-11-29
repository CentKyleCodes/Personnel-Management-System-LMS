<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $familybg_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM tbl_family WHERE id='$familybg_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Deleted Successfully";
        header("Location: index2.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Deleted";
        header("Location: index2.php");
        exit(0);
    }
}


if(isset($_POST['update_familybg']))
{
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $familybg_id = mysqli_real_escape_string($con, $_POST['familybg_id']);

    $child = mysqli_real_escape_string($con, $_POST['child']);
    $child1 = mysqli_real_escape_string($con, $_POST['child1']);
    $child2 = mysqli_real_escape_string($con, $_POST['child2']);
    $child3 = mysqli_real_escape_string($con, $_POST['child3']);
    $child4 = mysqli_real_escape_string($con, $_POST['child4']);
    $SPlname = mysqli_real_escape_string($con, $_POST['SPlname']);
    $SPNamex = mysqli_real_escape_string($con, $_POST['SPNamex']);
    $SPfname = mysqli_real_escape_string($con, $_POST['SPfname']);
    $SPmname = mysqli_real_escape_string($con, $_POST['SPmname']);
    $occupation = mysqli_real_escape_string($con, $_POST['occupation']);
    $employer = mysqli_real_escape_string($con, $_POST['employer']);
    $buaddress = mysqli_real_escape_string($con, $_POST['buaddress']);
    $TelNum = mysqli_real_escape_string($con, $_POST['TelNum']);
    $FAname = mysqli_real_escape_string($con, $_POST['FAname']);
    $FAnameEx = mysqli_real_escape_string($con, $_POST['FAnameEx']);
    $FAFname = mysqli_real_escape_string($con, $_POST['FAFname']);
    $FAMname = mysqli_real_escape_string($con, $_POST['FAMname']);
    $MAname = mysqli_real_escape_string($con, $_POST['MAname']);
    $MAlastname = mysqli_real_escape_string($con, $_POST['MAlastname']);
    $MAFname = mysqli_real_escape_string($con, $_POST['MAFname']);
    $MAMname = mysqli_real_escape_string($con, $_POST['MAMname']);
    


    $query = "UPDATE tbl_family SET  user_id='$user_id', child='$child', child1='$child1', child2='$child2', child3='$child3', child4='$child4', SPlname='$SPlname', SPNamex='$SPNamex', SPfname='$SPfname', SPmname='$SPmname', occupation='$occupation', employer='$employer', buaddress='$buaddress', 
    TelNum='$TelNum', FAname='$FAname', FAnameEx='$FAnameEx', FAFname='$FAFname', FAMname='$FAMname', MAname='$MAname', MAlastname='$MAlastname', MAFname='$MAFname', MAMname='$MAMname' 
    
    WHERE id='$familybg_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Background Updated Successfully";
        header("Location:index2.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Background Not Updated";
        header("Location:index2.php");
        exit(0);
    }

}

if(isset($_POST['submit_fambg']))
{
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $child = $_POST['child'];
    $child1 = $_POST['child1'];
    $child2 = $_POST['child2'];
    $child3 = $_POST['child3'];
    $child4 = $_POST['child4'];
    $SPlname = mysqli_real_escape_string($con, $_POST['SPlname']);
    $SPNamex = mysqli_real_escape_string($con, $_POST['SPNamex']);
    $SPfname = mysqli_real_escape_string($con, $_POST['SPfname']);
    $SPmname = mysqli_real_escape_string($con, $_POST['SPmname']);
    $occupation = mysqli_real_escape_string($con, $_POST['occupation']);
    $employer = mysqli_real_escape_string($con, $_POST['employer']);
    $buaddress = mysqli_real_escape_string($con, $_POST['buaddress']);
    $TelNum = mysqli_real_escape_string($con, $_POST['TelNum']);
    $FAname = mysqli_real_escape_string($con, $_POST['FAname']);
    $FAnameEx = mysqli_real_escape_string($con, $_POST['FAnameEx']);
    $FAFname = mysqli_real_escape_string($con, $_POST['FAFname']);
    $FAMname = mysqli_real_escape_string($con, $_POST['FAMname']);
    $MAname = mysqli_real_escape_string($con, $_POST['MAname']);
    $MAlastname = mysqli_real_escape_string($con, $_POST['MAlastname']);
    $MAFname = mysqli_real_escape_string($con, $_POST['MAFname']);
    $MAMname = mysqli_real_escape_string($con, $_POST['MAMname']);
    $emp = mysqli_real_escape_string($con, $_POST['emp']);


    $query = "INSERT INTO tbl_family (user_id,child,child1,child2,child3,child4,SPlname,SPNamex,SPfname,SPmname,occupation,employer,buaddress,TelNum,FAname,FAnameEx,FAFname,FAMname,MAname,MAlastname,MAFname,MAMname,emp) 
    VALUES ('$user_id','$child','$child1','$child2','$child3','$child4','$SPlname','$SPNamex','$SPfname','$SPmname','$occupation','$employer','$buaddress','$TelNum'
      ,'$FAname','$FAnameEx','$FAFname','$FAMname','$MAname','$MAlastname','$MAFname','$MAMname','$emp')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Family Background Created Successfully";
        header("Location:Educbg-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Family Background Not Created";
        header("Location:Educbg-create.php");
        exit(0);
    }
}

?>`