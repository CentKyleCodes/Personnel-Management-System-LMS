<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPSC</title>
    <link rel="icon" href="photo/ppsc-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style1.css"> 
    <link rel="stylesheet" href="educbg.css"> 
    <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
          <a href="employee-create.php">Personal Information</a>
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
    <br>
    <?php include ('message.php'); ?>

    <div class="wrapper">
      <header>III. EDUCATIONAL BACKGROUND <a href="employee-fambg.php" class="btn btn-danger" style="float: right">BACK</a></header>
      <input type="radio" name="slider" checked id="home">
    <input type="radio" name="slider" id="blog">
    <input type="radio" name="slider" id="code">
    <input type="radio" name="slider" id="help">
    <input type="radio" name="slider" id="about">
    <nav class="wrapper1">
      <label for="home" class="home"><i class="fas fa-home"></i>ELEMENTARY</label>
      <label for="blog" class="blog"><i class="fas fa-blog"></i>SECONDARY</label>
      <label for="code" class="code"><i class="fas fa-code"></i>TRADE COURSE</label>
      <label for="help" class="help"><i class="far fa-help"></i>COLLEGE</label>
      <label for="about" class="about"><i class="far fa-about"></i>GRADUATE</label>
      <div class="slider"></div>
    </nav>
    
    
    <section>
      <form action="code3.php" method="POST" >
        <br>
      <tr>
            <td><input type="text" name="user_id" placeholder="Agency Employee No."></td>
          </tr>
        <div class="content content-1">
          <div class="title">Elementary School</div>
          <div class="container">
            <div class="row">
              <div class="col-xl-6">  
                </div>
                <div class="col-xl-6">
                  <div class="float-right">
                    <input type="button" value="Add More" class="btn btn-primary" id="addmorebtn" />
                  </div>
                </div>
                
                <div class="col-xl-18">
                  
                  
                  <div class="MutipleRecord">
                    <div class="row duplicate-row">
                      <input type="button" value="&#xf014;" class="btn btn-danger btn-remove" />
                      
                      <div class="col-xl-3">
                        <label for="">Name of School</label>
                        <input type="text" placeholder="Name of School" name="Elemnos" id="" class="form-control" />
                      </div>
                      
                      <div class="col-xl-3">
                        <label for="">Basic Education/Course</label>
                        <input type="text" placeholder="Basic Education/Course" name="Elembec" id="" class="form-control" />
                      </div>
                      <div class="col-xl-3">
                        <label for="">Period of Attendance</label>
                        <input type="text" placeholder="Period of Attendance" name="Elempos" id="" class="form-control" />
                      </div>
                      <div class="col-xl-3">
                        <label for="">Units Earned</label>
                        <input type="text" placeholder="Units Earned" name="Elemue" id="" class="form-control" />
                      </div>
                      <div class="col-xl-3">
                        <label for="">Year Graduated</label>
                        <input type="text" placeholder="Year Graduated" name="Elemyg" id="" class="form-control" />
                      </div>
                      <div class="col-xl-3">
                        <label for="">Honors Recieved</label>
                        <input type="text" placeholder="Honors Received" name="Elemhr" id="" class="form-control" />
                      </div>
                      
                    </div>
                    
                    
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          
         

          <div class="content content-2">
            <div class="title">Secondary School</div>
            <div class="container">
              <div class="row">
                <div class="col-xl-6">
                  </div>
                  <div class="col-xl-6">
        <div class="float-right">
          <input type="button" value="Add More" class="btn btn-primary" id="addmorebtn1" />
        </div>
      </div>
      <div class="col-xl-18">
         <div class="MutipleRecord1">
           <div class="row duplicate-row1">
              <input type="button" value="&#xf014;" class="btn btn-danger btn-remove1" />
             
             <div class="col-xl-3">
              <label for="">Name of School</label>
              <input type="text" placeholder="Name of School" name="Secnos" id="" class="form-control" />
             </div>
             
              <div class="col-xl-3">
              <label for="">Basic Education/Course</label>
              <input type="text" placeholder="Basic Education/Course" name="Secbec" id="" class="form-control" />
             </div>
              <div class="col-xl-3">
              <label for="">Period of Attendance</label>
              <input type="text" placeholder="Period of Attendance" name="Secpoa" id="" class="form-control" />
             </div>
              <div class="col-xl-3">
              <label for="">Units Earned</label>
              <input type="text" placeholder="Units Earned" name="" id="Secue" class="form-control" />
             </div>
             <div class="col-xl-3">
              <label for="">Year Graduated</label>
              <input type="text" placeholder="Year Graduated"  name="Secyg" id="" class="form-control" />
             </div>
             <div class="col-xl-3">
              <label for="">Honors Recieved</label>
              <input type="text" placeholder="Honors Received" name="Sechr" id="" class="form-control" />
             </div>
      </div>
</div>
  </div>
</div>
</div>
</div>
      <div class="content content-3">
        <div class="title">Vocational/Trade Course</div>
        <div class="container">
    <div class="row">
      <div class="col-xl-6">
      </div>
      <div class="col-xl-6">
        <div class="float-right">
          <input type="button" placeholder="123-45-678" value="Add More" class="btn btn-primary" id="addmorebtn2" />
        </div>
      </div>
      
      <div class="col-xl-18">

         <div class="MutipleRecord2">
           
           <div class="row duplicate-row2">
           <input size="55px" type="text" name="emp" hidden value="Emplyoee" autofocus="autofocus">
           
              <input type="button" value="&#xf014;" class="btn btn-danger btn-remove2" />
             
             <div class="col-xl-3">
              <label for="">Name of School</label>
              <input type="text" placeholder="Name of School"  name="Vocnos" id="" class="form-control" />
             </div>
             
              <div class="col-xl-3">
              <label for="">Basic Education/Course</label>
              <input type="text" placeholder="Basic Education/Course" name="Vocbec" id="" class="form-control" />
             </div>
              <div class="col-xl-3">
              <label for="">Period of Attendance</label>
              <input type="text" placeholder="Period of Attendance" name="Vocpoa" id="" class="form-control" />
             </div>
              <div class="col-xl-3">
              <label for="">Units Earned</label>
              <input type="text" placeholder="Units Earned" name="Vocue" id="" class="form-control" />
             </div>
             <div class="col-xl-3">
              <label for="">Year Graduated</label>
              <input type="text" placeholder="Year Graduated" name="Vocyg" id="" class="form-control" />
             </div>
             <div class="col-xl-3">
              <label for="">Honors Recieved</label>
              <input type="text" placeholder="Honors Received" name="Vochr" id="" class="form-control" />
             </div>
      </div>
</div>
  </div>
</div>
</div>
</div>




<div class="content content-4">
        <div class="title">College School</div>
        <div class="container">
    <div class="row">
      <div class="col-xl-6">
      </div>
      <div class="col-xl-6">
        <div class="float-right">
          <input type="button" value="Add More" class="btn btn-primary" id="addmorebtn3" />
        </div>
      </div>
      
      <div class="col-xl-18">
         <div class="MutipleRecord3">
           
           <div class="row duplicate-row3">
           
              <input type="button" value="&#xf014;" class="btn btn-danger btn-remove3" />
             
             <div class="col-xl-3">
              <label for="">Name of School</label>
              <input type="text" placeholder="Name of School" name="Colnos" id="" class="form-control" />
             </div>
             
              <div class="col-xl-3">
              <label for="">Basic Education/Course</label>
              <input type="text" placeholder="Basic Education/Course" name="Colbec" id="" class="form-control" />
             </div>
              <div class="col-xl-3">
              <label for="">Period of Attendance</label>
              <input type="text" placeholder="Period of Attendance" name="Colpoa" id="" class="form-control" />
             </div>
              <div class="col-xl-3">
              <label for="">Units Earned</label>
              <input type="text" placeholder="Units Earned" name="" id="Colua" class="form-control" />
             </div>
             <div class="col-xl-3">
              <label for="">Year Graduated</label>
              <input type="text" placeholder="Year Graduated" name="Colyg" id="" class="form-control" />
             </div>
             <div class="col-xl-3">
              <label for="">Honors Received</label>
              <input type="text" placeholder="Honors Received" name="Colhr" id="" class="form-control" />
             </div>
      </div>
  </div>
</div>
</div>
</div>
</div>



<div class="content content-5">
  <div class="title">Graduate Studies</div>
  <div class="container">
    <div class="row">
      <div class="col-xl-6">
              </div>
              <div class="col-xl-6">
                <div class="float-right">
                  <input type="button" value="Add More" class="btn btn-primary" id="addmorebtn4" />
                </div>
              </div>
              
              <div class="col-xl-18">
                <div class="MutipleRecord4">
                  <div class="row duplicate-row4">
                    
                    
                   
                    <input type="button" value="&#xf014;" class="btn btn-danger btn-remove4" />
                    
                    
                    <div class="col-xl-3">
                      <label for="">Name of School</label>
                      <input type="text" placeholder="Name of School" name="Gradnos" id="" class="form-control" />
                    </div>
                    
                    <div class="col-xl-3">
                      <label for="">Basic Education/Course</label>
                      <input type="text" placeholder="Basic Education/Course" name="Gradbec" id="" class="form-control" />
                    </div>
                    <div class="col-xl-3">
                      <label for="">Period of Attendance</label>
                      <input type="text" placeholder="Period of Attendance" name="Gradpoa" id="" class="form-control" />
                    </div>
                    <div class="col-xl-3">
                      <label for="">Units Earned</label>
                      <input type="text" placeholder="Units Earned" name="" id="Gradue" class="form-control" />
                    </div>
                    <div class="col-xl-3">
                      <label for="">Year Graduated</label>
                      <input type="text" placeholder="Year Graduated" name="Gradyg" id="" class="form-control" />
                    </div>
                    <div class="col-xl-3">
                      <label for="">Honors Recieved</label>
                      <input type="text" placeholder="Honors Received" name="Gradhr" id="" class="form-control" />
                    </div>
      </div>
</div>
</div>
</div>
</div>
</div>
<br>
<td><button type="submit" name="submit_educbg" class="btn btn-primary">Submit Form</button></td>
</form>
    </section>
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    $(document).ready(function(){
      $("#addmorebtn").click(function(){
        $(".MutipleRecord .duplicate-row:last-child").clone().appendTo(".MutipleRecord");
      });
      
      $(document).on('click','.btn-remove',function(){
          if($(".MutipleRecord .duplicate-row").length > 1)
          {
            $(this).parents(".duplicate-row").remove();
          }
      });
      
    });
  </script>

  <script>
    $(document).ready(function(){
      $("#addmorebtn1").click(function(){
        $(".MutipleRecord1 .duplicate-row1:last-child").clone().appendTo(".MutipleRecord1");
      });
      
      $(document).on('click','.btn-remove1',function(){
          if($(".MutipleRecord1 .duplicate-row1").length > 1)
          {
            $(this).parents(".duplicate-row1").remove();
          }
      });
      
    });
  </script>




  <script>
    $(document).ready(function(){
      $("#addmorebtn2").click(function(){
        $(".MutipleRecord2 .duplicate-row2:last-child").clone().appendTo(".MutipleRecord2");
      });
      
      $(document).on('click','.btn-remove2',function(){
          if($(".MutipleRecord2 .duplicate-row2").length > 1)
          {
            $(this).parents(".duplicate-row2").remove();
          }
      });
      
    });
  </script>


  <script>
    $(document).ready(function(){
      $("#addmorebtn3").click(function(){
        $(".MutipleRecord3 .duplicate-row3:last-child").clone().appendTo(".MutipleRecord3");
      });
      
      $(document).on('click','.btn-remove3',function(){
          if($(".MutipleRecord3 .duplicate-row3").length > 1)
          {
            $(this).parents(".duplicate-row3").remove();
          }
      });
      
    });
  </script>


  <script>
    $(document).ready(function(){
      $("#addmorebtn4").click(function(){
        $(".MutipleRecord4 .duplicate-row4:last-child").clone().appendTo(".MutipleRecord4");
      });
      
      $(document).on('click','.btn-remove4',function(){
          if($(".MutipleRecord4 .duplicate-row4").length > 1)
          {
            $(this).parents(".duplicate-row4").remove();
          }
      });
      
    });
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


</body>
</html>