<?php
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" href="photo/ppsc-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
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
        <a href="index.php">Personal Information</a>
        <a href="index2.php">Family Background</a>
        <a href="index3.php">Educational Background</a>
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

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Employee View Details
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

                                     <table width="82.2%" border="2px" cellpadding="10px" bgcolor=#D3D3D3>
                                <form action="code.php" method="POST">

									
                        <tr>
                    Agency No:
							<input  disabled type="text" name ="user_id" value="<?=$student['user_id']; ?>">
							
				<td width="270px">SURNAME:</td>
			 <td><input size="55px"  disabled type="text" name="lname" value= "<?=$student ['lname'];?>" autofocus="autofocus" required></td> 
             

				<td>UPLOAD PHOTO:</td>
				<td> <input type="file"  disabled name="image" id ="image" accept=".jpg, .jpeg, .png" value= "<?=$student ['image'];?>"></td>

			</tr>
			<tr>
				<td>FIRST NAME:</td>
				<td><input size="55px" disabled  type="text" name="fname" value= "<?=$student ['fname'];?>"></td>

				<td>NAME EXTENSION(jr,sr):</td>
				<td><input size="32px" disabled type="text" name="NameEx" value= "<?=$student ['NameEx'];?>"></td>
			</tr>

				<td>MIDDLE NAME:</td>
				<td><input size="55px"disabled  type="text" name="mname" value= "<?=$student ['mname'];?>">
      </td>
      
      <td>UPLOAD FILE:</td>
      <td><input size="32px"disabled  type="text" name="pds" value= "<?=$student ['pds'];?>">

    </tr>            
			<tr>
				
				<td>GENDER:</td>
				
				<td><input disabled size="55px" type="text" name="Gender" value= "<?=$student ['Gender'];?>"> </td>
</hr>
</tr>
<tr>
	<td>Citizenship</td>
	<td>

	<input  disabled type="radio" name="Filipino" value="Filipino" value= "<?=$student ['Filipino'];?> ">Filipino</input>

	<input  disabled type="radio" id="chkddl" value ="No Dualcitizenchip" onclick="Enableddl(this)"/>
		Dualcitizenship 

	<input disabled  type="text" id="DDL" disabled="disabled" value="No" name="cship" value= "<?=$student ['cship'];?> " />
	   </td>
	   </tr>
	<tr>

				<td>DATE OF BIRTH:</td>
				<td><input disabled  size="55px" type="text" name="date" value= "<?=$student ['date'];?> "></td>

				<td>RESIDENTIAL ADDRESS:</td>
			   <td><input disabled size="32px" type="text" placeholder="House/blk/lot no." name="housenum" value= "<?=$student ['housenum'];?> "></td>
			</tr>

			<tr>
				<td>PLACE OF BIRTH:</td>
				<td><input disabled size="55px" type="text" name="pbirth" value= "<?=$student ['pbirth'];?> "></td>
				<td><input disabled size="32px" type="text" placeholder="Street" name="street" value= "<?=$student ['street'];?> "></td>

				<td><input  disabled size="32px" type="text" placeholder="Subdivision/village" name="subd" value= "<?=$student ['subd'];?> "></td>
				
			</tr>
			<tr>
				<td>AGE:</td>
				<td><input disabled  type="text" name="age" value= "<?=$student ['age'];?> "></td>
				<td><input disabled size="32px" type="text" placeholder="Barangay" name="brgy" value= "<?=$student ['brgy'];?> "></td>

				<td><input disabled size="32px" type="text" placeholder="City/municipality" name="city" value= "<?=$student ['city'];?> "></td>
		
			</tr>
			<tr>
			<td>CIVIL STATUS</td>
				<td><input disabled size="32px" type="text" name="cstatus" value= "<?=$student ['cstatus'];?> "></td>
					
			<td><input disabled size="32px" type="text" placeholder="Province" name="province" value= "<?=$student ['province'];?> "></td>
      
			<td><input disabled size="32px" type="text" placeholder="ZIPCODE" name="zip" value= "<?=$student ['zip'];?> "></td>
			</tr>
			<tr>
				<td>HEIGHT(cm):</td>
				<td><input disabled type="text" name="Height" value= "<?=$student ['Height'];?> "></td>     		
			</tr>
			<tr>
				<td>WEIGHT(kg):</td>
				<td><input disabled type="text" name="Weight" value= "<?=$student ['Weight'];?> "></td>

           <td><input disabled type="radio" value="Click if your permanent address is same with Residential"
						style="background-color: lightskyblue;" onclick="copyAddress(this.form)" >Check if your permanent address is same with Residential</td> 
			</tr>
			<tr>
				<td>BLOODTYPE:</td>
				<td><input  disabled type="text" name="Btype" value= "<?=$student ['Btype'];?> "></td>
			
			</tr>
			<tr>
				<td>GSIS NO.:</td>
				<td><input disabled type="text" name="GSIS" value= "<?=$student ['GSIS'];?> "></td>

				<td>PERMANENT ADDRESS:</td>
			   <td><input disabled size="32px" type="text" placeholder="House/blk/lot no." name="ahousenum" value= "<?=$student ['ahousenum'];?> "></td>
				
			</tr>
			<tr>
				<td>PAG-IBIG NO.:</td>
				<td><input disabled  type="text" name="PagIbig" value= "<?=$student ['PagIbig'];?> "></td>
				<td><input disabled size="32px" type="text" placeholder="Street" name="astreet" value= "<?=$student ['astreet'];?> "></td>
				<td><input disabled size="32px" type="text" placeholder="Subdivision/village" name="asubd" value= "<?=$student ['subd'];?> "></td>
				
			</tr>
			<tr>
				<td>PHILHEALTH NO.:</td>
				<td><input disabled type="text" name="Phealth" value= "<?=$student ['Phealth'];?> "></td>
				<td><input disabled size="32px" type="text" placeholder="Barangay" name="abrgy" value= "<?=$student ['abrgy'];?> "></td>
				<td><input disabled size="32px" type="text" placeholder="City/municipality" name="acity" value= "<?=$student ['acity'];?> "></td>
			
			</tr>
			<tr>
				<td>SSS NO.:</td>
				<td><input disabled type="text" name="SSS" value= "<?=$student ['SSS'];?> "></td>
				<td><input disabled size="32px" type="text" placeholder="Province" name="aprovince" value= "<?=$student ['aprovince'];?> "></td>
				<td><input disabled size="32px" type="text" placeholder="ZIPCODE" name="azip" value= "<?=$student ['azip'];?> "></td>
				
			</tr>
			<tr>
				<td>TIN NO.:</td>
				<td><input disabled type="text" name="Tin" value= "<?=$student ['Tin'];?> "></td>
			</tr>
			<tr>
				<td>AGENCY EMPLOYEE NO.:</td>
				<td><input disabled type="text" name="user_id" value= "<?=$student ['user_id'];?> "></td>
			</tr>
          </table>
</br>
<div class="mb-3">
                            </div>
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
