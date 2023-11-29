<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <title>PPSC</title>
   <link rel="stylesheet" href="style1.css">
   <link rel="icon" href="photo/ppsc-logo.png" type="image/x-icon">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class=''></i>
      <span class="logo_name">PPSC</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" >
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
          <a href="Admin_Adduser.php" class="active">
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
      <div class="profile-details">
        <span class="admin_name">Admin</span>
      </div>
    </nav>
    <body background="photo/background.jpg" >
      <section class="vh-100" >
        <div class="container py-4 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-8">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img style="height: 20rem; padding-top: 5rem; padding-left: 4rem; border-radius: 1rem;" src="photo/PPSC.jpg"
              alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">


                                                              <!-- CONNECTION -->
                                                              <?php include('message.php'); ?>
                <form action="Add_User.php" method="POST">
                  <div class="error" style="color: red; text-align: center;">  
                    
                </div>
                <div class="d-flex align-items-center mb-3 pb-1">
                  <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Create Employee Account</span>
                   
                  </div>
                 
                  
                  <div class="form-outline mb-4">
                    <input type="input"  name="id"  class="form-control form-control-lg" placeholder="Agency Employee No."/>
                    <label class="form-label" for="form2Example27" >Agency Employee Number</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Username"/>
                    <label class="form-label" for="form2Example17">Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="input" name="password" class="form-control form-control-lg" placeholder="Password" />
                    <label class="form-label" for="form2Example17">Password</label>
                  </div>
                  <div class="pt-1 mb-4">
                    <button type="submit" class="btn btn-dark btn-lg btn-block"  name="submit">Create</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>