<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_educbg']))
{
    $educbg_id = mysqli_real_escape_string($con, $_POST['delete_educbg']);

    $query = "DELETE FROM tbl_educbg WHERE id='$educbg_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Deleted Successfully";
        header("Location: index3.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Deleted";
        header("Location: index3.php");
        exit(0);
    }
}




if(isset($_POST['update_educbg']))
{
    $educbg_id = mysqli_real_escape_string($con, $_POST['educbg_id']);
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    // ELEM
    $Elemnos = mysqli_real_escape_string($con, $_POST['Elemnos']);
    $Elembec = mysqli_real_escape_string($con, $_POST['Elembec']);
    $Elempos = mysqli_real_escape_string($con, $_POST['Elempos']);
    $Elemue = mysqli_real_escape_string($con, $_POST['Elemue']);
    $Elemyg = mysqli_real_escape_string($con, $_POST['Elemyg']);
    $Elemhr = mysqli_real_escape_string($con, $_POST['Elemhr']);
    // Secondary
    $Secnos = mysqli_real_escape_string($con, $_POST['Secnos']);
    $Secbec = mysqli_real_escape_string($con, $_POST['Secbec']);
    $Secpoa = mysqli_real_escape_string($con, $_POST['Secpoa']);
    $Secue = mysqli_real_escape_string($con, $_POST['Secue']);
    $Secyg = mysqli_real_escape_string($con, $_POST['Secyg']);
    $Sechr = mysqli_real_escape_string($con, $_POST['Sechr']);
    
    // Vocational
    $Vocnos = mysqli_real_escape_string($con, $_POST['Vocnos']);
    $Vocbec = mysqli_real_escape_string($con, $_POST['Vocbec']);
    $Vocpoa = mysqli_real_escape_string($con, $_POST['Vocpoa']);
    $Vocue = mysqli_real_escape_string($con, $_POST['Vocue']);
    $Vocyg = mysqli_real_escape_string($con, $_POST['Vocyg']);
    $Vochr = mysqli_real_escape_string($con, $_POST['Vochr']);
    // College
    $Colnos = mysqli_real_escape_string($con, $_POST['Colnos']);
    $Colbec = mysqli_real_escape_string($con, $_POST['Colbec']);
    $Colpoa = mysqli_real_escape_string($con, $_POST['Colpoa']);
    $Colua = mysqli_real_escape_string($con, $_POST['Colua']);
    $Colyg = mysqli_real_escape_string($con, $_POST['Colyg']);
    $Colhr = mysqli_real_escape_string($con, $_POST['Colhr']);
    // Grad
    $Gradnos = mysqli_real_escape_string($con, $_POST['Gradnos']);
    $Gradbec = mysqli_real_escape_string($con, $_POST['Gradbec']);
    $Gradpoa = mysqli_real_escape_string($con, $_POST['Gradpoa']);
    $Gradue = mysqli_real_escape_string($con, $_POST['Gradue']);
    $Gradyg = mysqli_real_escape_string($con, $_POST['Gradyg']);
    $Gradhr = mysqli_real_escape_string($con, $_POST['Gradhr']);
    

 


    $query = "UPDATE tbl_educbg SET user_id='$user_id',Elemnos='$Elemnos', Elembec='$Elembec', Elempos='$Elempos', Elemue='$Elemue', Elemyg='$Elemyg', Elemhr='$Elemhr', Secnos='$Secnos', 
    Secbec='$Secbec', Secpoa='$Secpoa', Secue='$Secue', Secyg='$Secyg', Sechr='$Sechr', Vocnos='$Vocnos', Vocbec='$Vocbec', Vocpoa='$Vocpoa', Vocue='$Vocue', Vocyg='$Vocyg', 
    Vochr='$Vochr', Colnos='$Colnos', Colbec='$Colbec', Colpoa='$Colpoa', Colua='$Colua', Colyg='$Colyg', Colhr='$Colhr', 
    Gradnos='$Gradnos', Gradbec='$Gradbec', Gradpoa='$Gradpoa', Gradue='$Gradue', Gradyg='$Gradyg', Gradhr='$Gradhr' 
    WHERE id='$educbg_id' ";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Background Updated Successfully";
        header("Location:index3.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Background Not Updated";
        header("Location:index3.php");
        exit(0);
    }

}

if(isset($_POST['submit_educbg']))
{

    // ELEM
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $Elemnos = mysqli_real_escape_string($con, $_POST['Elemnos']);
    $Elembec = mysqli_real_escape_string($con, $_POST['Elembec']);
    $Elempos = mysqli_real_escape_string($con, $_POST['Elempos']);
    $Elemue = mysqli_real_escape_string($con, $_POST['Elemue']);
    $Elemyg = mysqli_real_escape_string($con, $_POST['Elemyg']);
    $Elemhr = mysqli_real_escape_string($con, $_POST['Elemhr']);
    // Secondary
    $Secnos = mysqli_real_escape_string($con, $_POST['Secnos']);
    $Secbec = mysqli_real_escape_string($con, $_POST['Secbec']);
    $Secpoa = mysqli_real_escape_string($con, $_POST['Secpoa']);
    $Secue = mysqli_real_escape_string($con, $_POST['Secue']);
    $Secyg = mysqli_real_escape_string($con, $_POST['Secyg']);
    $Sechr = mysqli_real_escape_string($con, $_POST['Sechr']);
    
    // Vocational
    $Vocnos = mysqli_real_escape_string($con, $_POST['Vocnos']);
    $Vocbec = mysqli_real_escape_string($con, $_POST['Vocbec']);
    $Vocpoa = mysqli_real_escape_string($con, $_POST['Vocpoa']);
    $Vocue = mysqli_real_escape_string($con, $_POST['Vocue']);
    $Vocyg = mysqli_real_escape_string($con, $_POST['Vocyg']);
    $Vochr = mysqli_real_escape_string($con, $_POST['Vochr']);
    // College
    $Colnos = mysqli_real_escape_string($con, $_POST['Colnos']);
    $Colbec = mysqli_real_escape_string($con, $_POST['Colbec']);
    $Colpoa = mysqli_real_escape_string($con, $_POST['Colpoa']);
    $Colua = mysqli_real_escape_string($con, $_POST['Colua']);
    $Colyg = mysqli_real_escape_string($con, $_POST['Colyg']);
    $Colhr = mysqli_real_escape_string($con, $_POST['Colhr']);
    // Grad
    $Gradnos = mysqli_real_escape_string($con, $_POST['Gradnos']);
    $Gradbec = mysqli_real_escape_string($con, $_POST['Gradbec']);
    $Gradpoa = mysqli_real_escape_string($con, $_POST['Gradpoa']);
    $Gradue = mysqli_real_escape_string($con, $_POST['Gradue']);
    $Gradyg = mysqli_real_escape_string($con, $_POST['Gradyg']);
    $Gradhr = mysqli_real_escape_string($con, $_POST['Gradhr']);
    $emp = mysqli_real_escape_string($con, $_POST['emp']);

 


    $query = "INSERT INTO tbl_educbg (user_id,Elemnos,Elembec,Elempos,Elemue,Elemyg,Elemhr,Secnos,Secbec,Secpoa,Secue,Secyg,Sechr,
    Vocnos,Vocbec,Vocpoa,Vocue,Vocyg,Vochr,Colnos,Colbec,Colpoa,Colua,Colyg,COlhr,Gradnos,Gradbec,Gradpoa,Gradue,Gradyg,Gradhr,emp) 

    VALUES ('$user_id','$Elemnos','$Elembec','$Elempos','$Elemue','$Elemyg','$Elemhr','$Secnos','$Secbec','$Secpoa','$Secue','$Secyg','$Sechr','$Vocnos','$Vocbec','$Vocpoa','$Vocue','$Vocyg',
    '$Vochr','$Colnos','$Colbec','$Colpoa','$Colua','$Colyg','$COlhr','$Gradnos','$Gradbec','$Gradpoa','$Gradue','$Gradyg','$Gradhr','$emp')";
    
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Family Background Created Successfully";
        header("Location:index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Family Background Not Created";
        header("Location:index.php");
        exit(0);
    }
}

?>