<?php
session_start();
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
          <a href="index.php">
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
          <a href="payroll.php" class="active">
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
    <div class="container">
      <div class="profile-details">
        
        </div>
      </nav>
      <br>
      <br>
      <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
        <form action="Add_leave.php" method="POST">
          <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
        <?php include('message.php'); ?>
            <h3 class="mb-4">Leave Application</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>Employee ID</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Employee ID">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label>Date of Filing:</label>
                    <input type="date" name="DateOfFill" class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label>No. of Leave Request</label>
                    <input type="text" name="Leave_req" class="form-control" placeholder="No. of Leave Request">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label>Type of Leave</label>
                    <select name="TypeOfLeave" class="form-control">   
                      <option>---</option>
                      <option value="Sick Leave">Sick Leave</option>
                      <option value="Vacation Leave">Vacation Leave</option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit">Apply</button>
                  </form>
                </div>
              </div>
            </div>


           
        <form action="Maximum_leave.php" method="POST">
          <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
        <?php include('message.php'); ?>
            <h3 class="mb-4">Employee Maximum Leaves</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>Employee ID</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Employee ID">
      
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Sick Leave Available</label>
                  <input type="text" name="Sick_L" placeholder="Sick Leave Available" class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Vacation Leave Available</label>
                  <input type="text" name="Vacation_L" class="form-control" placeholder="No. of Leave Request">
                </div>
              </div>
              <br>
                  <br>
                  <div class="col-md-6">
                <div class="form-group">

                  <br>
                
                   <button type="submit" class="btn btn-primary" name="Apply" onClick="ShowOrHide()">Apply</button>
                 
              </div>
                            </form>
                                                                                        
                                                                                      </div>
                                                                                    </div>
                                                                                  </div>
      </div>
            


      
    </div>
  </div>
</div>






<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                
                <h4><center>Employee Leave Lists       
                  </h4>
                      </div>
                      <form action="" method="post">
                        <input type="text" name="filter_value" class="form-control" placeholder="Search Agency Employee Number">
                        <div class="card-body">
                          <table class="table table-bordered table-striped">
                            <thead>
                              
                              <button type="submit" name="filter_btn" class="btn btn-primary" id="clicker">Show Employee</button>
                              <a><button type="submit" name="filter_btn" class="btn btn-secondary">Search</button></a>                       
                              <tr>
                                <th>Image</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Middle Name </th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                              
                            <?php 
                                  $connection = mysqli_connect("localhost", "root", "","test");
                                  if(isset($_POST['filter_btn']))
                                  {
                                    $value_filter = $_POST['filter_value'];
                                    $query = "SELECT * FROM tbl_upload WHERE CONCAT(user_id,fname,lname,mname,emp) LIKE '%$value_filter%' ";
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
                                              <td><?= $row['mname']; ?></td>
                                              <td>
                                              <a href="payroll_user.php?user_id=<?= $row['user_id']; ?>" class="btn btn-info btn-sm">View</a>
                                                
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

<script>
  var button = document.getElementedById('clicker');
  setInterval(function(){
    button.click()
  },1)

  </script> 