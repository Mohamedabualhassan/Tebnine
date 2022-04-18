
<?php


include('connection.php');
if(isset($_POST["firstname"])){

    $firstname=$_POST["firstname"];
    echo $firstname;
    $lastname=$_POST["lastname"];
    $db=$_POST["db"];
    $address=$_POST["address"];
    $bloodtype=$_POST["bloodtype"];
    $phnb=$_POST["phnb"];
   
    

    $q="INSERT INTO newdonor (firstname,lastname,db,address,bloodtype,phnb) values('$firstname','$lastname','$db','$address','$bloodtype','$phnb') ";
     $r=mysqli_query($con,$q);



     header("location: Dashboard.php");


}
else{}









?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>New donor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" type="text/css" href="side-bar.css">
  
<script>
var siteWidth = 1280;
var scale = screen.width /siteWidth;

document.querySelector('meta[name="viewport"]').setAttribute('content', 'width='+siteWidth+', initial-scale='+scale+'');
</script>

</head>
<body>
<div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="#">Menu</a>
    </header>
    <ul class="nav">
      <li>
        <a href="dashboard.php">
          <i class="zmdi zmdi-view-dashboard"></i> Dashboard
        </a>
      </li>
      <li>
        <a href="newdonor.php">
          <i class="zmdi zmdi-calendar"></i>Add New Donor
        </a>
      </li>
      <li>
        <a href="Alldonors.php">
          <i class="zmdi zmdi-widgets"></i> All Donors
        </a>
      </li>
      <li>
        <a href="Alldonorstemp.php">
          <i class="zmdi zmdi-widgets"></i> Donors Need To Validated
        </a>
      </li>
      <li>
        <a href="information.php">
          <i class="zmdi zmdi-calendar"></i>Information 
        </a>
      </li>
    </ul>
  </div>


  <!-- Content -->
  <div id="content">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
            </a>
          </li>
            <b>Admin Page </b>
          <button type="button" class="btn-danger" onclick="window.location.href='login.php'" >log out</button>
        </ul>
      </div>
    </nav>

    <div class="container">
              <div class="container-fluid">
                <h1>Add New Donor </h1><hr>
          
              <div style="color: black;font-size: 16px;margin-left:120px ; margin-right: 220px" >
                <form action="newdonor.php" method="post">

              <div class="form-group">
              <label for="firstname">First Name</label>
              <input type="text" class="form-control" name="firstname" >
              </div>

              <div class="form-group">
              <label for="lastname">Last Name</label>
              <input type="text" class="form-control" name="lastname" >
              </div> 
            
             <div class="form-group">
              <label for="db">Date of birth</label>
              <input type="date" class="form-control" name="db">
              </div>
              <div class="form-group">
              <label for="phnb">Phone Number</label>
              <input type="tel" class="form-control" name="phnb">
              </div>
              <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address">
              </div>
            
            
            <div class="form-group">
              <label for="bloodtype">Blood Type</label>
              <select name="bloodtype" class="form-control">
              <option value="O+"><h4>O+</h4></option>
              <option value="O-" ><h4>O-</h4></option>
              <option value="A+" ><h4>A+</h4></option>
              <option value="A-" ><h4>A-</h4></option>
              <option value="B+" ><h4>B+</h4></option>
              <option value="B-" ><h4>B-</h4></option>
              <option value="AB+" ><h4>AB+</h4></option>
              <option value="AB-" ><h4>AB-</h4></option>
              </select>
              </div>
            
          
          <div align="center">
            <button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add New Donor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
            </div>

          </form>
<br><br>
              </div>
            </div>
         </div>
      </div>
      </div>

      
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
  </html>