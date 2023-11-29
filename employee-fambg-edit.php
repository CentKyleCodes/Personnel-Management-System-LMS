<?php
session_start();
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
        <a href="employee-create.php">Personal Information</a>
        <a href="employee-fambg.php">Family Background</a>
        <a href="educbg-create.php">Educational Background</a>
        </div>
      </div>
      <<div class="profile-details">
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
                        <h4>Employee Background View Details
                            <a href="index2.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    	
                    <?php
                        if(isset($_GET['id']))
                        {
                            $familybg_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM tbl_family WHERE id='$familybg_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $familybg = mysqli_fetch_array($query_run);
                                ?>

                                   <table width="82.2%" border="2px" cellpadding="10px" bgcolor=#F5f5f5>
    <form action="code1.php" method="POST">
      
      <input type="text" name="user_id" value="<?= $familybg['user_id']; ?>">
      <tr>
        <td width="270px">SPOUSE'S SURNAME:</td>
        <td><input size="45px" type="text" name="SPlname"  autofocus="autofocus" required value="<?=$familybg['SPlname'];?>"></td>
        <td>
        <div class="form-group">
                <label>NAME OF CHILD</label>
                <input size="45px" type="text" name="child" value="<?=$familybg['child'];?>" id="childs" class="myinput form-control">
                <input size="45px" type="button" class="mybox" value="+" onclick="addBox()"/>
                <label>NAME OF CHILD</label>
                <input size="45px" type="text" name="child1" value="<?=$familybg['child1'];?>" id="childs" class="myinput form-control">
                <label>NAME OF CHILD</label>
                <input size="45px" type="text" name="child2" value="<?=$familybg['child2'];?>" id="childs" class="myinput form-control">
                <label>NAME OF CHILD</label>
                <input size="45px" type="text" name="child3" value="<?=$familybg['child3'];?>" id="childs" class="myinput form-control">
                <label>NAME OF CHILD</label>
                <input size="45px" type="text" name="child4" value="<?=$familybg['child4'];?>" id="childs" class="myinput form-control">
            </div>
          </td>
          </div>
            
      </tr> 

      <tr>
        <tr>
        <td>NAME EXTENSION(jr,sr):</td>
        <td><input size="45px" type="text" name="SPNamex" value="<?=$familybg['SPNamex'];?>"></td>
      </tr>
      </tr>
      <tr>
        <td>FIRST NAME:</td>
        <td><input size="45px" type="text" name="SPfname" value="<?=$familybg['SPfname'];?>" ></td>
  
      </tr>
      <tr>
        <td>MIDDLE NAME:</td>
        <td><input size="45px" type="text" name="SPmname" value="<?=$familybg['SPmname'];?>">
        </td>
      </tr>

      <tr>
        <td>OCCUPATION:</td>
        <td><input size="45px" type="text" name="occupation" value="<?=$familybg['occupation'];?>" ></td>
        
      </tr>
      <tr>
        <td>EMPLOYER/BUSINESS NAME:</td>
        <td><input size="45px" type="text" name="employer" value="<?=$familybg['employer'];?>" ></td>
        
      </tr>
      <tr>
        <td>BUSINESS ADDRESS:</td>
        <td><input size="45px" type="text" name="buaddress"value="<?=$familybg['buaddress'];?>" ></td>
      </tr>

      <tr>
        <td>TELEPHONE NUMBER:</td>
        <td><input size="34px" type="number" name="TelNum"value="<?=$familybg['TelNum'];?>" ></td>
      </tr>
      <tr>
        <td>FATHER'S SURNAME:</td>
        <td><input size="45px" type="text" name="FAname"value="<?=$familybg['FAname'];?>" ></td>
      </tr>
      <tr>
        <td>NAME EXTENSION(jr,sr):</td>
        <td><input size="45px" type="text" name="FAnameEx"value="<?=$familybg['FAnameEx'];?>" ></td>
      </tr>
      <tr>
        <td>FIRST NAME:</td>
        <td><input size="45px" type="text" name="FAFname"value="<?=$familybg['FAFname'];?>" ></td>
      
      </tr>
      <tr>
        <td>MIDDLE NAME:</td>
        <td><input size="45px" type="text" name="FAMname"value="<?=$familybg['FAMname'];?>" ></td>
      </tr>
      <tr>
        <td>MOTHER'S MAIDEN NAME:</td>
        <td><input size="45px" type="text" name="MAname"value="<?=$familybg['MAname'];?>" ></td>
        
      </tr>
      <tr>
        <td>SURNAME:</td>
        <td><input size="45px" type="text" name="MAlastname"value="<?=$familybg['MAlastname'];?>" ></td>
      
      </tr>
      <tr>
        <td>FIRST NAME:</td>
        <td><input size="45px" type="text" name="MAFname"value="<?=$familybg['MAFname'];?>" ></td>
        
      </tr>
      <tr>
        <td>MIDDLE NAME:</td>
        <td><input size="45px" type="text" name="MAMname"value="<?=$familybg['MAMname'];?>" ></td>
      </tr>
</table>

</br>
         <td><button type="submit" name="update_familybg" class="btn btn-primary">Update</button></td>
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
