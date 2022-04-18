<?php
session_start();
include "connection.php";

if(isset($_POST['insert'])){

$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$db=$_POST["dateofbirth"];
$phnb=$_POST["phnb"];
$res=$_POST["results"];
$rn =  $_SESSION['rnd'];
$q="INSERT INTO pcrtest (id,firstname,lastname,dateofbirth,phnb,results) values($rn,'$fname','$lname','$db','$phnb','$res') ";
$r=mysqli_query($con,$q);

if($r)//if the query suucefully run
            {
				echo "<script>alert('data inserted succefully');</script>";
			}


}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>PCR Panel</title>
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
<body><div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="#">Menu</a>
    </header>
    <ul class="nav">
      <li>
        <a href="/TBNINE/Admin page/Dashboard.php">
          <i class="zmdi zmdi-view-dashboard"></i> Home
        </a>
      </li>
      
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
          <button type="button" class="btn-danger" onclick="window.location.href='/TBNINE/Login/login.php'" >log out</button>
        </ul>
      </div>
    </nav>


    <div class="container-fluid">
    <h1>Add a new PCR test - أدراج نتيجة جديدة </h1>
     <div style="color:black; font-size:16px">
     
     <form action="AddnewPCR.php" method="post">

     <div class="form-group">
     <?php $rnd =  rand(1, 10000);
      $_SESSION['rnd']=$rnd;
     
     ?>
        <h3>The id of this new PCR Test is <?php echo $rnd ?></h3>
     </div>
  <div class="form-group">
  <label for=""><b>First Name</b></label>
    <input type="text" class="form-control" name="firstname" id="" placeholder="Enter First name">
  </div>
  
  <div class="form-group">
    <label for=""><b>Last Name</b></label>
    <input type="text" class="form-control" name="lastname" id="" placeholder="Enter Last name">
  </div>
  
  <div class="form-group">
    <label for=""> <b>Date of birthday</b></label>
    <input type="date" class="form-control" name="dateofbirth" id=""  placeholder="Enter Birthday">

  </div>

  <div class="form-group">
    <label for=""> <b>Phone Number</b></label>
    <input type="text" class="form-control" name="phnb" id=""  placeholder="Enter the Phone Number">

  </div>
  

  
       <div class="form-group">
              <label for="result">Result</label>
              <select name="results" class="form-control">
              <option value="Positive"><h4>Positive</h4></option>
              <option value="Negative" ><h4>Negative</h4></option>
              </select>
              </div>         
            
  
  
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" class="btn-success p-1"  value="Insert Data" name="insert">
	
 

</form>     

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
  </html>