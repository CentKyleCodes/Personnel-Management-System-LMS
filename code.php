<?php
session_start();
require 'dbcon.php';


if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM tbl_upload WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))

{

    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['image_old'];
    
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $NameEx = mysqli_real_escape_string($con, $_POST['NameEx']);
    $mname = mysqli_real_escape_string($con, $_POST['mname']);
    $pds = mysqli_real_escape_string($con, $_POST['pds']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $Gender = mysqli_real_escape_string($con, $_POST['Gender']);
    $Filipino = mysqli_real_escape_string($con, $_POST['Filipino']);
    $cship = mysqli_real_escape_string($con, $_POST['cship']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $pbirth = mysqli_real_escape_string($con, $_POST['pbirth']);
    $age = mysqli_real_escape_string($con, $_POST['age']);  
    $cstatus = mysqli_real_escape_string($con, $_POST['cstatus']);
    $Height = mysqli_real_escape_string($con, $_POST['Height']);
    $Weight = mysqli_real_escape_string($con, $_POST['Weight']);
    $Btype = mysqli_real_escape_string($con, $_POST['Btype']);
    $GSIS = mysqli_real_escape_string($con, $_POST['GSIS']);
    $PagIbig = mysqli_real_escape_string($con, $_POST['PagIbig']);
    $Phealth = mysqli_real_escape_string($con, $_POST['Phealth']);
    $SSS = mysqli_real_escape_string($con, $_POST['SSS']);
    $Tin = mysqli_real_escape_string($con, $_POST['Tin']);
    $housenum = mysqli_real_escape_string($con, $_POST['housenum']);
    $street = mysqli_real_escape_string($con, $_POST['street']);
    $subd = mysqli_real_escape_string($con, $_POST['subd']);
    $brgy = mysqli_real_escape_string($con, $_POST['brgy']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $province = mysqli_real_escape_string($con, $_POST['province']);
    $zip = mysqli_real_escape_string($con, $_POST['zip']);
    $ahousenum = mysqli_real_escape_string($con, $_POST['ahousenum']);
    $astreet = mysqli_real_escape_string($con, $_POST['astreet']);
    $asubd = mysqli_real_escape_string($con, $_POST['asubd']);
    $abrgy = mysqli_real_escape_string($con, $_POST['abrgy']);
    $acity = mysqli_real_escape_string($con, $_POST['acity']);
    $aprovince = mysqli_real_escape_string($con, $_POST['aprovince']);
    $azip = mysqli_real_escape_string($con, $_POST['azip']);

    // if($new_image !='')
    // {
    //     $update_filename = $_FILES['image']['name'];
    // }
    // else
    // {
    //     $update_filename = $old_image;
    // }
    // if(file_exists("upload/" . $_FILES['image']['name']))
    // {
    //     $filename = $_FILES['image']['name'];
    //     $_SESSION['message'] = "Image already Exists ".$filename;
    //     header('Location: index.php');
    // }

    // else
    // {

    $query = "UPDATE tbl_upload SET user_id='$user_id', fname='$fname', NameEx='$NameEx', mname='$mname', pds='$pds', lname='$lname', Gender='$Gender', Filipino='$Filipino', cship='$cship', 
    date='$date', pbirth='$pbirth', age='$age', cstatus='$cstatus', Height='$Height', Weight='$Weight', Btype='$Btype', GSIS='$GSIS', PagIbig='$PagIbig', SSS='$SSS', Tin='$Tin', 
    housenum='$housenum', street='$street', subd='$subd', brgy='$brgy', city='$city', province='$province', zip='$zip', ahousenum='$ahousenum', astreet='$astreet', asubd='$asubd', abrgy='$abrgy', 
    acity='$acity', aprovince='$aprovince', azip='$azip'

    WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        // if($_FILES['image']['name'] !='')
        // {
        //     move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
        //     unlink("upload/".$old_image); 
          $_SESSION ['message'] = "Employee Updated Successfully!";
          header("Location: index.php");
          exit(0);
   }
   else
   {
    $_SESSION['message'] = "Employee Not Updated";
    header("Location: index.php");
    exit(0);
        }
    }


    
if(isset($_POST['submit_info']))
{
    
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $image = $_FILES['image']['name'];
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $NameEx = mysqli_real_escape_string($con, $_POST['NameEx']);
    $mname = mysqli_real_escape_string($con, $_POST['mname']);
    $pds = $_FILES['pds']['name'];
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $Gender = mysqli_real_escape_string($con, $_POST['Gender']);
    // $Filipino = mysqli_real_escape_string($con, $_POST['Filipino']);
    $cship = mysqli_real_escape_string($con, $_POST['cship']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $pbirth = mysqli_real_escape_string($con, $_POST['pbirth']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $cstatus = mysqli_real_escape_string($con, $_POST['cstatus']);
    $Height = mysqli_real_escape_string($con, $_POST['Height']);
    $Weight = mysqli_real_escape_string($con, $_POST['Weight']);
    $Btype = mysqli_real_escape_string($con, $_POST['Btype']);
    $GSIS = mysqli_real_escape_string($con, $_POST['GSIS']);
    $PagIbig = mysqli_real_escape_string($con, $_POST['PagIbig']);
    $Phealth = mysqli_real_escape_string($con, $_POST['Phealth']);
    $SSS = mysqli_real_escape_string($con, $_POST['SSS']);
    $Tin = mysqli_real_escape_string($con, $_POST['Tin']);
    $housenum = mysqli_real_escape_string($con, $_POST['housenum']);
    $street = mysqli_real_escape_string($con, $_POST['street']);
    $subd = mysqli_real_escape_string($con, $_POST['subd']);
    $brgy = mysqli_real_escape_string($con, $_POST['brgy']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $province = mysqli_real_escape_string($con, $_POST['province']);
    $ahousenum = mysqli_real_escape_string($con, $_POST['ahousenum']);
    $astreet = mysqli_real_escape_string($con, $_POST['astreet']);
    $asubd = mysqli_real_escape_string($con, $_POST['asubd']);
    $abrgy = mysqli_real_escape_string($con, $_POST['abrgy']);
    $acity = mysqli_real_escape_string($con, $_POST['acity']);
    $aprovince = mysqli_real_escape_string($con, $_POST['aprovince']);
    $azip = mysqli_real_escape_string($con, $_POST['azip']);
    $emp = mysqli_real_escape_string($con, $_POST['emp']);

    $allowed_exttension = array('gif','png', 'jpg', 'jpeg', 'pdf', 'docx', 'pdf');
    $filename = $_FILES ['image']['name'];
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
    if (!in_array($file_extension, $allowed_exttension))
    
    
    {

    $query = "INSERT INTO tbl_upload (user_id,image,fname,NameEx,mname,pds,lname,Gender,cship,date,pbirth,age,cstatus,Height,Weight,Btype,GSIS,PagIbig,
    Phealth,SSS,Tin,housenum,street,subd,brgy,city,province,ahousenum,astreet,asubd,abrgy,acity,aprovince,azip,emp) 
    
    VALUES ('$user_id','$image','$fname','$NameEx','$mname','$pds','$lname','$Gender','$cship','$date','$pbirth','$age','$cstatus', '$Height',
          '$Weight','$Btype','$GSIS','$PagIbig','$Phealth','$SSS','$Tin',
          '$housenum','$street','$subd','$brgy','$city','$province','$ahousenum','$astreet','$asubd','$abrgy','$acity','$aprovince','$azip','$emp')";
    
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
       move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
       $SESSION['message'] = "Employee Created Successfully"; 
       header('Location: employee-fambg.php');
    }
    else
    {
        $_SESSION['message'] = "Employee Not Created";
        header("Location: employee-create.php");
        exit(0);
    }
  }
}

?>