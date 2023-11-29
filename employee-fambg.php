<?php
session_start();
?>

<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" href="photo/ppsc-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="./fambg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>


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

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><center>II. FAMILY BACKGROUND 
                            <a href="employee-create.php" class="btn btn-danger float-end">BACK</a>
                            <a href="educbg-create.php" class="btn btn-secondary float-end">NEXT</a>
                        </h4>
                    </div>
                    <div class="card-body">
                      
            <center>

    <table  display: flex; width="82.2%" border="2px" cellpadding="10px" bgcolor=#F5f5f5> 
      <form action="code1.php" method="POST">
        <tr>
            <td><input type="text" name="user_id" required placeholder="Agency Employee No."></td>
          </tr>
      <tr><td><strong>note!</strong>
        Click "Yes" if you know your Spouse's information. 
        <br>
        <br>
      <label for ="yes"> Yes
          <input type="radio" name="chk" id="yes" Value="Yes" id="no">
        </label>
        <label for ="no"> No
          <input type="radio" name="chk" value="No" id="yes" >
        </label>
        </td>
        </tr>
        
      
      <tr>
        <td width="270px">SPOUSE'S SURNAME:</td> 
        <td><input size="41px" type="text" padding-top="-220px" id="surname" name="SPlname"  disabled="disabled"/>
        <td> <div class="form-group">
               <label>NAME OF CHILD</label>
                <input size="45px" type="text" name="child" id="childs" class="myinput form-control">
                <input size="45px" type="button" class="mybox" value="+" onclick="addBox()"/>

              
                <input size="45px" type="text" name="child1" id="childs" class="myinput form-control">

            

                <input size="45px" type="text" name="child2" id="childs" class="myinput form-control">        

            
                <input size="45px" type="text" name="child3" id="childs" class="myinput form-control">        
              
                <input size="45px" type="text" name="child4" id="childs" class="myinput form-control">
            </div>
          </td>
      </tr> 
      <tr>
        <tr>
        <td>NAME EXTENSION(jr,sr):</td>
        <td><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
          </script>
<label for ="yes">
  </label>
  <label for ="no">
  </label>
  <input size="44px" type="text" id="txtnumber" name="SPNamex" disabled="disabled"/>
  <script type="text/javascript">
    $(function(){
      $("input[name='chk']").click(function(){
        if ($("#yes").is(":checked")){
          
          $("#txtnumber").removeAttr("disabled");
          $("#txtnumber").focus();
          
        }
        else
        {
          $("#txtnumber").attr("disabled", "disabled")
        }
        
      });
      
      
    });
    
    </script></td></td>
      </tr>
      </tr>
          <tr>
        <td>FIRST NAME:</td>
        <td><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<label for ="yes">
  </label>
  <label for ="no">
  </label>
  <input size="44px"type="text" id="name" name="SPfname" disabled="disabled"/>
  
  <input size="55px" type="text" name="emp" hidden value="Emplyoee" autofocus="autofocus">



  <script type="text/javascript">
    $(function(){
      $("input[name='chk']").click(function(){
          if ($("#yes").is(":checked")){

$("#name").removeAttr("disabled");
$("#name").focus();

          }
else
{
    $("#name").attr("disabled", "disabled")
}

 });


      });

  </script></td></td>
  
      </tr>
      <tr>
        <td>MIDDLE NAME:</td>
        <td><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<label for ="yes">
  </label>
  <label for ="no">
  </label>
  <input size="44px" type="text" id="middle" name="SPmname" disabled="disabled"/>

  <script type="text/javascript">
    $(function(){
      $("input[name='chk']").click(function(){
          if ($("#yes").is(":checked")){

$("#middle").removeAttr("disabled");
$("#middle").focus();

          }
else
{
    $("#middle").attr("disabled", "disabled")
}

 });


      });

  </script></td>
        </td>
      </tr>

      <tr>
        <td>OCCUPATION:</td>
        <td><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<label for ="yes">
  </label>
  <label for ="no">
  </label>
  <input size="44px" type="text" id="occupation" name="occupation" disabled="disabled"/>
  <script type="text/javascript">
    $(function(){
      $("input[name='chk']").click(function(){
          if ($("#yes").is(":checked")){

$("#occupation").removeAttr("disabled");
$("#occupation").focus();
          }
else
{
    $("#occupation").attr("disabled", "disabled")
}

 });
      });
  </script></td>
  </td>
        
      </tr>
      <tr>
      <br>
        <td>EMPLOYER/BUSINESS NAME:   </td>
        <td><input size="45px" type="text" name="employer">
      </td>
     
        
      </tr>
      <tr>
        <td>BUSINESS ADDRESS:</td>
        <td><input size="45px" type="text" name="buaddress"></td>
      </tr>

      <tr>
        <td>TELEPHONE NUMBER:</td>
        <td><input size="34px" type="number" name="TelNum"></td>
      </tr>
    
  </td>
      <tr>
        <td>FATHER'S SURNAME:</td>
        <td><input size="45px" type="text" name="FAname"></td>
      </tr>
      <tr>
        <td>NAME EXTENSION(jr,sr):</td>
        <td><input size="45px" type="text" name="FAnameEx"></td>
      </tr>
      <tr>
        <td>FIRST NAME:</td>
        <td><input size="45px" type="text" name="FAFname"></td>
      
      </tr>
      <tr>
        <td>MIDDLE NAME:</td>
        <td><input size="45px" type="text" name="FAMname"></td>
        
      </tr>


      <tr>
        <td>MOTHER'S MAIDEN NAME:</td>
        <td><input size="45px" type="text" name="MAname"></td>
        
      </tr>
      <tr>
        <td>SURNAME:</td>
        <td><input size="45px" type="text" name="MAlastname"></td>
      
      </tr>
      <tr>
        <td>FIRST NAME:</td>
        <td><input size="45px" type="text" name="MAFname"></td>
        
      </tr>
      <tr>
        <td>MIDDLE NAME:</td>
        <td><input size="45px" type="text" name="MAMname"></td>
      </tr>
</table>

</br>
         <td><button type="submit" name="submit_fambg" class="btn btn-primary">Submit Form</button></td>
         </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="chld">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
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
" <input type='text' name='children[]' class='myinput form-control myinput' id='childs"+counter+"'><input class='mybox' type='button' value='-' onclick='removeBox(this)'>";

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

<script type="text/javascript">
        $(function(){
          $("input[name='chk']").click(function(){
              if ($("#yes").is(":checked")){
    
    $("#surname").removeAttr("disabled");
    $("#surname").focus();
    
              }
    else
    {
        $("#surname").attr("disabled", "disabled")
    }
    
     });
    
    
          });
    
      </script>