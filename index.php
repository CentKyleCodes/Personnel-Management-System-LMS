
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
          <a href="index.php"  class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Employee</span>
          </a>
        </li>
        <li>
          <a href="Admin_Adduser.php" >
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
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Admin</span>
        
      </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <?php include('message.php'); ?>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              <?php include('message.php'); ?>
                        <h4><center>Employee Details         
                          <a href="index2.php" class="btn btn-secondary float-end">NEXT</a>
                          <a href="employee-create.php" class="btn btn-primary float-end">Add Employee</a>
                          <a href="download.php?file=pds.xlsx" class="btn btn-light float-end">Download PDS</a>
                        </h4>
                      </div>
                      <form action="" method="post">
                        <input type="text" name="filter_value" class="form-control" placeholder="Search Agency Employee Number">
                      <div class="card-body">
                        <table class="table table-bordered table-striped">
                          <thead>
                              
                              <button type="submit" name="filter_btn" class="btn btn-primary">Show Employee</button>
                              <a><button type="submit" name="filter_btn" class="btn btn-secondary">Search</button></a>                       
                                <tr>
                                    <th>Image</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>User ID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                <?php 
                                  $connection = mysqli_connect("localhost", "root", "","test");
                                  if(isset($_POST['filter_btn']))
                                  {
                                    $value_filter = $_POST['filter_value'];
                                    $query = "SELECT * FROM tbl_upload WHERE CONCAT(user_id,fname,lname,user_id) LIKE '%$value_filter%' ";
                                    $query_run = mysqli_query($connection, $query);
                                   
                                    
                                    if(mysqli_num_rows($query_run) > 0)
                                  {
                                    while($row = mysqli_fetch_array($query_run))
                                    {
                                         ?>
                                           <tr height="20%">
                                              <td><img src="<?php echo "upload/" .$row["image"]; ?>" width = 80 height = 80 alt="Image" > </td>
                                              <td><?= $row['fname']; ?></td>
                                              <td><?= $row['lname']; ?></td>
                                              <td><?= $row['user_id']; ?></td>
                                              <td>
                                              <a href="employee-view.php?id=<?= $row['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                  <a href="employee-edit.php?id=<?= $row['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                  <form action="code.php" method="POST" class="d-inline">
                                                      <button type="submit" name="delete_student" value="<?=$row['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                  </form>
                                              </td>
                                          </tr>
                                          <?php
                                    }
                                  }
                                  else
                                  {
                                    echo "No record found.!";
                                  }
                                }
                                  ?>
                                           
                    </div>
                    </form>
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