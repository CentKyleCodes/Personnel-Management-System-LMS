<?php
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="image.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="photo/ppsc-logo.png" type="image/x-icon">
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
          <a href="dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="index.php">
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
        <a href="employee-create.php" class="active">Personal Information</a>
        <a href="employee-fambg.php">Family Background</a>
        <a href="educbg-create.php">Educational Background</a>
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
	<?php include ('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><center>I. PERSONAL INFORMATION
                        		
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                            <a href="employee-fambg.php" class="btn btn-secondary float-end">NEXT</a>
                        </h4>
                    </div>
                    <div class="card-body">
						<center>

                    <table width="82.2%" border="2px" cellpadding="10px" bgcolor=#F5f5f5>
						<form action="code.php" method="POST" enctype="multipart/form-data">
						<tr>
						     <!-- \\\\\\\\\\\\\\\IMAGE\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
				<td><input type="file" class="enter" id="image" name="image" onchange="loadFile(event)" />
				<img width=100 height=100 id="output"/>
				<script>

  				var loadFile = function(event) {
    			var output = document.getElementById('output');
    			output.src = URL.createObjectURL(event.target.files[0]);
    			output.onload = function() {
      	URL.revokeObjectURL(output.src) // free memory
    }
  };
  
</script></td>
			</tr>
		</div>
        <tr>
		<input size="55px" type="text" name="emp" hidden value="Employee" autofocus="autofocus">
		
				<td width="270px">LASTNAME:</td>
				<td><input size="55px" type="text" name="lname" autofocus="autofocus" required ></td>

			</tr>
			<tr>
				<td>FIRST NAME:</td>
				<td><input size="45px" type="text" name="fname" value=""></td>

				<td>NAME EXTENSION(jr,sr):</td>
				<td><input size="32px" type="text" name="NameEx"></td>
			</tr>

				<td>MIDDLE NAME:</td>
				<td><input size="45px" type="text" name="mname">
				</td>

			<td style="color:red"> Upload PDS file here:</td>
				<td><input style="color:red" type="file" name="pds" class="form-control-file" id="exampleFormControlFile1"  ></td> 
			</tr>
			<tr>
				
				<td>GENDER:</td>
				
				<td><select name="Gender">
					<option>---</option>
					<option>Male</option>
					<option>Female</option>
					<option>Prefer not to say</option>
				</select> </td>
</hr>
</tr>
<tr>
	<td>Citizenship</td>
	<td>
	<input type="radio" id="html" name="Filipino" value="Filipino">
  <label for="html">Filipino</label>
  <input type="radio" id="css" name="Filipino" value="Filipino">
  <label for="css">Dual Citizenship</label>

	<!-- <input type="radio" id="pinoy" name="Filipino" value="PINOY">
  <label for="pinoy">Filipino</label>
<input type="radio" id="dctzen" name="cship" value="DCTZEN">
  <label for="dctzen">Dual Citizenship</label> -->
	   </td>
	   </tr>
<tr>
	<td></td>
	<td>If Dual Citizenship, kindly specify your citizenship:
		<input size="45px" type="text" name="cship">
	   </td>
	   </tr>
	<tr>

				<td>DATE OF BIRTH:</td>
				<td><input size="55px" type="date" name="date"></td>

				<td>RESIDENTIAL ADDRESS:</td>
			   
			</tr>

			<tr>
				<td>PLACE OF BIRTH:</td>
				<td><input size="45px" type="text" name="pbirth"></td>
				<td><input size="32px" type="text" placeholder="House/blk/lot no." name="housenum"></td>
				<td><input size="32px" type="text" placeholder="Street" name="street"></td>
				
				
			</tr>
			<tr>
				<td>AGE:</td>
				<td><input type="number" name="age"></td>
				<td><input size="32px" type="text" placeholder="Barangay" name="brgy"></td>
				<td><input size="32px" type="text" placeholder="Subdivision/village" name="subd"></td>
				
		
			</tr>
			<tr>
			<td>CIVIL STATUS</td>
				<td><select name="cstatus">
					<option>---</option>
					<option>Single</option>
					<option>Married</option>
					<option>Widowed</option>
					<option>Separated</option>
					<option>Others</option>
				</select> 
				<input size="30px" type="text" placeholder="If Others kindly specify" name="cstatus"></td>
			<td><input size="32px" type="text" placeholder="Province" name="province"></td>
			<td><input size="32px" type="text" placeholder="City/municipality" name="city"></td>
			
			</tr>
			<tr>
				<td>HEIGHT(cm):</td>
				<td><input type="number" name="Height"></td>
				<td><input size="32px" type="text" placeholder="ZIPCODE" name="zip"></td>     		
			</tr>
			<tr>
				<td>WEIGHT(kg):</td>
				<td><input type="number" name="Weight"></td>

            
			</tr>
			<tr>
				<td>BLOODTYPE:</td>
				<!-- <td><input type="text" name="Btype"></td> -->
				<td><select name="Btype">
					<option>---</option>
					<option>A+</option>
					<option>A-</option>
					<option>B+</option>
					<option>B-</option>
					<option>O+</option>
					<option>O-</option>
					<option>AB+</option>
					<option>AB-</option>
				</select> </td>
				<td><input type="checkbox" value="Click if your permanent address is same with Residential"
						style="background-color: lightskyblue;" onclick="copyAddress(this.form)"> Check if your permanent address is same with Residential</td>
			</tr>
			<tr>
				<td>GSIS NO.:</td>
				<td><input type="number" name="GSIS"></td>

				<td>PERMANENT ADDRESS:</td>
			   
				
			</tr>
			<tr>
				<td>PAG-IBIG NO.:</td>
				<td><input type="number" name="PagIbig"></td>
				<td><input size="32px" type="text" placeholder="Street" name="astreet"></td>
				<td><input size="32px" type="text" placeholder="House/blk/lot no." name="ahousenum"></td>
				
				
			</tr>
			<tr>
				<td>PHILHEALTH NO.:</td>
				<td><input type="number" name="Phealth"></td>
				<td><input size="32px" type="text" placeholder="Barangay" name="abrgy"></td>
				<td><input size="32px" type="text" placeholder="Subdivision/village" name="asubd"></td>
				
			
			</tr>
			<tr>
				<td>SSS NO.:</td>
				<td><input type="number" name="SSS"></td>
				
				<td><input size="32px" type="text" placeholder="Province" name="aprovince"></td>
				<td><input size="32px" type="text" placeholder="City/municipality" name="acity"></td>
				
				
			</tr>
			<tr>
				<td>TIN NO.:</td>
				<td><input type="number" name="Tin"></td>
				<td><input size="32px" type="text" placeholder="ZIPCODE" name="azip"></td>
			</tr>
			<tr>
				<td>AGENCY EMPLOYEE NO.:</td>
				<td><input type="text" name="user_id"></td>
			</tr>
          </table>
</br>
         <td><button type="submit" name="submit_info" class="btn btn-primary">Submit Form</button></td>
         </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


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

