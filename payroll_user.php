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
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
          <a href="Admin_Adduser.php">
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
    <div class="leave print-container">
    <!-- <a href="payroll.php" style="position: absolute; left:1460px; bottom:1211px;" class="btn btn-danger">BACK</a> -->
    <button onclick="window.print();" style = "position:relative; left:1550px; top:50px;" class="btn btn-primary" id="print-btn">Print</button>
    

                      <!-- PAYROLL EMPLOYEE INFORMATION -->


    <?php
                        if(isset($_GET['user_id']))
                  
                        {
                         
                            $student_id = mysqli_real_escape_string($con, $_GET['user_id']);
                            $query = "SELECT * FROM tbl_upload WHERE user_id='$student_id'";
                            $query_run = mysqli_query($con, $query);


                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?> 

                                   
    <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
            <h3 class="mb-4">Employee Profile</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>Photo</label>
                    <br>
                    <img src="<?php echo "upload/" .$student["image"]; ?>" width = 80 height = 80 alt="Image" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" disabled  class="form-control" placeholder="No. of Leave Request" value= "<?=$student ['fname'];?>">
                  <label>Middle Name</label>
                  <input type="text" disabled  class="form-control" placeholder="No. of Leave Request" value= "<?=$student ['mname'];?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label>Employee ID</label>
                    <input type="text" disabled  class="form-control" placeholder="Employee ID" value="<?=$student['user_id']; ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" disabled class="form-control" placeholder="No. of Leave Request" value= "<?=$student ['lname'];?>">
                </div>
              </div>
            </div>
            <div>
             
            </div>
          </div>
        </div>
        <?php

            }
            else
            {
                echo "<h4></h4>";
            }
        }
        ?>



                                                                          <!-- PAYROLL USER APPLY LEAVE -->
                        


                                                               <!-- MAXIMUM              LEAVES              AVAILABLE -->
                      <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">

                        <?php
                        if(isset($_GET['user_id']))
                  
                        {
                         
                            $student_id = mysqli_real_escape_string($con, $_GET['user_id']);
                            $query = "SELECT * FROM maximum_leave WHERE user_id='$student_id'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?> 

        <form action="Maximum_leave.php" method="POST">
          <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">

        <?php include('message.php'); ?>
            <h3 class="mb-4">Edit Employee Leaves Available </h3>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>Employee ID</label>
                    <input type="text" class="form-control"  disabled name="user_id" placeholder="Employee ID" value="<?=$student['user_id']; ?>">
      
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Maximum Sick Leave Available</label>
                  <input type="text" name="Sick_L" placeholder="Sick Leave Available" class="form-control" value="<?=$student['Sick_L']; ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Maximum Vacation Leave Available</label>
                  <input type="text" name="Vacation_L" class="form-control" placeholder="No. of Leave Request" value="<?=$student['Sick_L']; ?>" >
                </div>
              </div>
              
                  <br>
                  <br>
                  <div class="col-md-6">
                <div class="form-group">

                  <br>
                
                   <button type="submit" class="btn btn-primary" name="update_leaves" onClick="ShowOrHide()">Apply</button>
                 
                 
                </div>
              </div>
            </form>
            <?php
            }
            else
            {
                echo "<h4></h4>";
            }
        }
        ?>
                                                                                        
                                                                                      </div>
                                                                                    </div>
                                                                                  </div>
      </div>
      <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
      
      <?php
                        if(isset($_GET['user_id']))
                  
                        {
                         
                            $student_id = mysqli_real_escape_string($con, $_GET['user_id']);
                            $query = "SELECT * FROM tbl_upload WHERE user_id='$student_id'";
                            $query_run = mysqli_query($con, $query);


                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?> 
        <form action="Add_leave.php" method="POST">
          <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
        <?php include('message.php'); ?>
            <h3 class="mb-4">Leave Application</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>Employee ID</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Employee ID" value="<?=$student['user_id']; ?>">
      
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
              </div>
                            </form>
              <?php
            }
            else
            {
                echo "<h4></h4>";
            }
        }
        ?>
                                                                                        
                                                                                      </div>
                                                                                    </div>
                                                                                  </div>
                                                                                  <div>
                                                                                    
                                                                                    
                                                                                    
                                                                                    <!-- Employee Leave Lists        -->
                                                                                   
                                                                                    <table class="table table-bordered table-striped">
        <br>
        <tr>  
      <th>Vacation Leaves</th>


      <th>
      <?php
                        if(isset($_GET['user_id']))
                  
                        {
                         
                            $student_id = mysqli_real_escape_string($con, $_GET['user_id']);
                            $query = "SELECT * FROM maximum_leave WHERE user_id='$student_id'";
                            $query_run = mysqli_query($con, $query);


                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?> 

<?= $student['Vacation_L']; ?>

<?php } 
                                        }?> 


      </th>

      <th>Sick Leaves</th>
   <th>
   <?php
                        if(isset($_GET['user_id']))
                  
                        {
                         
                            $student_id = mysqli_real_escape_string($con, $_GET['user_id']);
                            $query = "SELECT * FROM maximum_leave WHERE user_id='$student_id'";
                            $query_run = mysqli_query($con, $query);


                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?> 
<?= $student['Sick_L']; ?>

<?php } 
                                        }?> 
   </th>







                                      </tr>

      <tr>
        <h4>Employee Leaves</h4>    
        <th>Vacation Leaves Used</th>

        <?php
        
        if(isset($_GET['user_id']))
        {
            $student_id = mysqli_real_escape_string($con, $_GET['user_id']);
               $results = mysqli_query($con, "SELECT sum(Leave_req) FROM leave_application WHERE user_id='$student_id' AND TypeOfLeave='Vacation Leave'")  or die(mysqli_error());
               while ($rows = mysqli_fetch_array($results)){?>
               <th> <?php echo $rows['sum(Leave_req)']; ?>
              </th>
     <?php
     }
        }
     ?>

     
   

        <th>Sick Leaves Used</th>
        <?php
    if(isset($_GET['user_id']))
     {
          $student_id = mysqli_real_escape_string($con, $_GET['user_id']);     
          $results = mysqli_query($con, "SELECT sum(Leave_req) FROM leave_application WHERE user_id='$student_id' AND TypeOfLeave='Sick Leave'")  or die(mysqli_error());
              while($rows = mysqli_fetch_array($results)){?>
          <th> <?php echo $rows['sum(Leave_req)']; ?>
         
<?php
}
   }
?>
</th>
      </tr>
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <br>
                            <br>
                            <h4>Employee Filed Lists</h4>    
                            <tr>
                                    <th>Agency Number</th>
                                    <th>Leave Request</th>
                                    <th>Date Of Filling</th>
                                    <th>Type Of Leave</th>
                                  
                                   
                                </tr>
                            </thead>
                            <tbody>
                              
                            <?php
                        if(isset($_GET['user_id']))
                        {
                          $id = ['id'];

                          $student_id = mysqli_real_escape_string($con, $_GET['user_id']);
                          $query1 = mysqli_query($con,"select * from leave_application where user_id ='$student_id'");
                          $result = mysqli_num_rows($query1);

                          for($i=1; $i<=$result;$i++)
                          {
                               $student =  mysqli_fetch_array($query1)
                             ?>
                                           <tr height="20%">
                                           <td><?= $student['user_id']; ?></td>
                                              <td><?= $student['Leave_req']; ?></td>
                                              <td><?= $student['DateOfFill']; ?></td>
                                              <td><?= $student['TypeOfLeave']; ?></td>
                                            
                                          </tr>
                                        <?php } 
                                        }?> 
                                          </tbody>
                                  </thead>
                                </table>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./hidescript.js"></script>

</body>
</html>