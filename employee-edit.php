<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="educbg.css">
    <link rel="icon" href="photo/ppsc-logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>PPSC</title>

</head>
<body>	
  	<div class="sidebar">
    <div class="logo-details">
      <i class=''></i>
      <span class="logo_name">PPSC</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php">
            <i class='bx bx-grid-alt' ></i> 
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="index.php" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Employee</span>
          </a>
        </li>
        <li>
          <a href="Admin_Adduser.php">
            <i class='bx bx-user-plus' ></i>
            <span class="links_name">Add Account</span>
          </a>
        </li>
        <li>
          <a href="payroll.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Payroll</span>
          </a>
        </li>
        <li>
          <a href="download.php?file=pds.xlsx">
            <i class='bx bx-download'></i>
            <span class="links_name">Download PDS</span>
          </a>
        </li>
        <li class="log_out">
          <a href="login.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div style = "position:fixed; right:220px;" class="dropdown">
        <button class="dropbtn">Personal Data Sheet</button>
        <div class="dropdown-content">
        <a href="employee-edit.php">Personal Information</a>
        <a href="employee-fambg-edit.php">Family Background</a>
        <a href="educbg-edit.php">Educational Background</a>
        </div>
      </div>
      <div class="profile-details">
        <span class="admin_name">Admin</span>
        
      </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Employee Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php 
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);

                            $query = "SELECT * FROM tbl_upload WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?> 
                                     <table width="82.2%" border="2px" cellpadding="10px" bgcolor=#F5f5f5>
                                <form action="code.php" method="POST">
                        <tr>                       
							<input type="text" name="student_id" value="<?=$student['id']; ?>">
				<td width="270px">SURNAME:</td>
				<td><input size="55px" type="text" name="lname" value= "<?=$student  ['lname'];?>" autofocus="autofocus"></td>
				<td>UPLOAD PHOTO:</td>
				<td> <input type="file" name="image" id ="image" accept=".jpg, .jpeg, .png"> <img src = "<?php echo "upload/".$student['image']; ?>" width="100px;" height="100px;"> </td>
     
        <input type="hidden" name="image_old" value="value="<?php echo $student['image']; ?> >
			</tr>
			<tr>
				<td>FIRST NAME:</td>
				<td><input size="55px" type="text" name="fname" value= "<?=$student ['fname'];?>"></td>
        
				<td>NAME EXTENSION(jr,sr):</td>
				<td><input size="32px" type="text" name="NameEx" value= "<?=$student ['NameEx'];?>"></td>
			</tr>

				<td>MIDDLE NAME:</td>
				<td><input size="55px" type="text" name="mname" value= "<?=$student ['mname'];?>">
				</td>

				<td>UPLOAD FILE:</td>
				<td>
          <input type="input"class="form-control-file" name="pds" id="exampleFormControlFile1" value= "<?=$student ['pds'];?> ">
          <input type="file" name="pds" class="form-control-file" id="exampleFormControlFile1" >
        </td>  

			</tr>
			<tr>
				
				<td>GENDER:</td>
				
				<td><input size="55px" type="text" name="Gender" value= "<?=$student ['Gender'];?>"> </td>
</hr>
</tr>
<tr>
	<td>Citizenship</td>
	<td>

	<input type="text" name="Filipino" value="Filipino" value= "<?=$student ['Filipino'];?> "></input>
<!-- 
 <input type="text" id="chkddl" value ="No Dualcitizenchip" onclick="Enableddl(this)"/>  --> 
		<td> Dualcitizenship </td>
		<Td>
	<input type="text" id="DDL" name="cship" value= "<?=$student ['cship'];?> " />
	   </td>
	   </tr>
	<tr>

				<td>DATE OF BIRTH:</td>
				<td><input size="55px" type="text" name="date" value= "<?=$student ['date'];?> "></td>

				<td>RESIDENTIAL ADDRESS:</td>
			   <td><input size="32px" type="text" placeholder="House/blk/lot no." name="housenum" value= "<?=$student ['housenum'];?> "></td>
			</tr>

			<tr>
				<td>PLACE OF BIRTH:</td>
				<td><input size="55px" type="text" name="pbirth" value= "<?=$student ['pbirth'];?> "></td>
				<td><input size="32px" type="text" placeholder="Street" name="street" value= "<?=$student ['street'];?> "></td>

				<td><input size="32px" type="text" placeholder="Subdivision/village" name="subd" value= "<?=$student ['subd'];?> "></td>
				
			</tr>
			<tr>
				<td>AGE:</td>
				<td><input type="text" name="age" value= "<?=$student ['age'];?> "></td>
				<td><input size="32px" type="text" placeholder="Barangay" name="brgy" value= "<?=$student ['brgy'];?> "></td>

				<td><input size="32px" type="text" placeholder="City/municipality" name="city" value= "<?=$student ['city'];?> "></td>
			</tr>
			<tr>
			<td>CIVIL STATUS</td>
				<td><input size="32px" type="text" name="cstatus" value= "<?=$student ['cstatus'];?> "></td>
					
			<td><input size="32px" type="text" placeholder="Province" name="province" value= "<?=$student ['province'];?> "></td>
			<td><input size="32px" type="text" placeholder="ZIPCODE" name="zip" value= "<?=$student ['zip'];?> "></td>
			</tr>
			<tr>
				<td>HEIGHT(cm):</td>
				<td><input type="text" name="Height" value= "<?=$student ['Height'];?> "></td>     		
			</tr>
			<tr>
				<td>WEIGHT(kg):</td>
				<td><input type="text" name="Weight" value= "<?=$student ['Weight'];?> "></td>

           <td><input type="radio" value="Click if your permanent address is same with Residential"
						style="background-color: lightskyblue;" onclick="copyAddress(this.form)" >Check if your permanent address is same with Residential</td> 
			</tr>
			<tr>
				<td>BLOODTYPE:</td>
				<td><input type="text" name="Btype" value= "<?=$student ['Btype'];?> "></td>
			
			</tr>
			<tr>
				<td>GSIS NO.:</td>
				<td><input type="text" name="GSIS" value= "<?=$student ['GSIS'];?> "></td>

				<td>PERMANENT ADDRESS:</td>
			   <td><input size="32px" type="text" placeholder="House/blk/lot no." name="ahousenum" value= "<?=$student ['ahousenum'];?> "></td>
				
			</tr>
			<tr>
				<td>PAG-IBIG NO.:</td>
				<td><input type="text" name="PagIbig" value= "<?=$student ['PagIbig'];?> "></td>
				<td><input size="32px" type="text" placeholder="Street" name="astreet" value= "<?=$student ['astreet'];?> "></td>
				<td><input size="32px" type="text" placeholder="Subdivision/village" name="asubd" value= "<?=$student ['subd'];?> "></td>
				
			</tr>
			<tr>
				<td>PHILHEALTH NO.:</td>
				<td><input type="text" name="Phealth" value= "<?=$student ['Phealth'];?> "></td>
				<td><input size="32px" type="text" placeholder="Barangay" name="abrgy" value= "<?=$student ['abrgy'];?> "></td>
				<td><input size="32px" type="text" placeholder="City/municipality" name="acity" value= "<?=$student ['acity'];?> "></td>
			
			</tr>
			<tr>
				<td>SSS NO.:</td>
				<td><input type="text" name="SSS" value= "<?=$student ['SSS'];?> "></td>
				<td><input size="32px" type="text" placeholder="Province" name="aprovince" value= "<?=$student ['aprovince'];?> "></td>
				<td><input size="32px" type="text" placeholder="ZIPCODE" name="azip" value= "<?=$student ['azip'];?> "></td>
				
			</tr>
			<tr>
				<td>TIN NO.:</td>
				<td><input type="text" name="Tin" value= "<?=$student ['Tin'];?> "></td>

			</tr>
			<tr>

				<td>AGENCY EMPLOYEE NO.:</td>
				<td><input type="text" name="user_id" value= "<?=$student ['user_id'];?> "></td>
				
			</tr>
          </table>
</br>
<div class="mb-3">
         <td><button type="submit" name="update_student" class="btn btn-primary">
                                            Update
                                        </button></td></div>
                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<script>
function Enableddl (chkddl)
{
var ddl=document.getElementById("DDL");	

ddl.disabled=chkddl.checked ? false : true;

if(!ddl.disabled)
{
ddl.focus();
}
}
</script>

<!-- <input size="45px" type="text" name="child" id="childs" class="myinput form-control">
    <input size="45px" type="button" class="mybox" value="+" onclick="addBox()"> -->
<script>
var counter = 1;
var textBox = "";
var chld = document.getElementById("chld")
function addBox()
{
var div = document.createElement ("div");
div.setAttribute("class", "form-group");
div.setAttribute("id", "box_"+counter);

var textBox = 
"<label>NAME OF CHILD</label> <input type='text' name='child' class='myinput form-control myinput' id='childs"+counter+"'><input class='mybox' type='button' value='-' onclick='removeBox(this)'>";

div.innerHTML = textBox;
chld.appendChild(div);

counter++;
} 

function removeBox(ele)
{
ele.parentNode.remove();
}

</script>
<script>
function copyAddress(form)

{
form.ahousenum.value = form.housenum.value;
form.astreet.value = form.street.value;
form.asubd.value = form.subd.value;
form.abrgy.value = form.brgy.value;
form.acity.value = form.city.value;
form.aprovince.value = form.province.value;
form.azip.value = form.zip.value;
}

</script>

<script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
<script>
  var isAuthenticated = document.cookie.indexOf("authenticated=true") >= 0;

if (isAuthenticated) {
  document.body.className += " authenticated";
}
</script>	

