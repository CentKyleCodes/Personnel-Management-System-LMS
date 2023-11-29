<?php
include('dbConfig.php');

if (!isset($_SESSION['USER_ID'])) {
  header("location:login.php");
  die();
}



$user = $_SESSION['UNSER_NAME'];
$query = mysqli_query($conn,"select * from news_user where email = '$user'");
$rowr =mysqli_fetch_array($query);
$id = $rowr['id'];


$query1 = mysqli_query($conn,"select * from tbl_educbg where user_id = '$id'");
$result = mysqli_num_rows($query1);

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>PPSC EMPLOYEE</title>
</head>
<body>
    <div class="sidebar">
    <div class="logo-details">
      <i class=''></i>
      <span class="logo_name">PPSC</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="user_dashboard.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="user_index.php"  class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Employee</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Payroll</span>
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
        <a href="user_index.php">Personal Information</a>
        <a href="user_index2.php">Family Background</a>
        <a href="user_index3.php">Educational Background</a>
        </div>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name"><?php echo $_SESSION['UNSER_NAME'] ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
  
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <h4><center>Employee Details
                            <a href="user_index2.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                            
                                    <th>Elem Name Of School</th>
                                    <th>Secondary Name Of School</th>
                                    <th>Vocational/Trade Course Name Of School </th>
                                    <th>College Name Of School</th>
                                    <th>Graduate Studies Name Of School </th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
    for($i=1; $i<=$result;$i++)
{
     $row =  mysqli_fetch_array($query1)
 	?>
  <tr>
                                              
                                                <td><?= $row['Elemnos']; ?></td>
                                                <td><?= $row['Secnos']; ?></td>
                                                <td><?= $row['Vocnos']; ?></td>
                                                <td><?= $row['Colnos']; ?></td>
                                                <td><?= $row['Gradnos']; ?></td>
                                                <td>
                                                <a href="user_educbg-view.php?id=<?= $row['id']; ?>" class="btn btn-info btn-sm"> View </a>
                                                   </tr>
                                                <?php } ?> 
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