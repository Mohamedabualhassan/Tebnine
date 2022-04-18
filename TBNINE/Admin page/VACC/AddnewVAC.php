<?php
   include('connection.php');
   
			if(isset($_POST['insert'])){
			//echo "hello";
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$db = $_POST['db'];
			$phnb = $_POST['phnb'];
			$blood_type = $_POST['bloodtype'];
			$isvaccinated = $_POST['vac1'];
      if(strcmp($isvaccinated,"yes")==0){
      $type =$_POST['vac'];}
      else{
        $type="None";
      }
		
			
			$query="insert into vaccination (fname,lname,db,phnb,bloodtype,isvaccinated,type) values('$fname','$lname','$db','$phnb','$blood_type','$isvaccinated','$type')";
			$r=mysqli_query($con,$query);
			if($r)//if the query suucefully run
            {
				echo "<script>alert('data inserted succefully');</script>";
			}
			
			}
			
		
?>


















<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vaccnition</title>
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

<script>
    function show(){
      //alert("okk");
      document.getElementById("vactype").style.visibility="visible";
    }
    function unshow(){
      //alert("okk");
      document.getElementById("vactype").style.visibility="hidden";
    }
    
  </script>
    
<div id="viewport">
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
          <button type="button" class="btn-danger" onclick="window.location.href='/TBNINE/Login/login.php'" >log out</button>
        </ul>
      </div>
    </nav>


    <div class="container-fluid">
    <h1>Add a new Vaccnition data - أدراج معلومات جديدة </h1>
     <div style="color:black; font-size:16px">
     
     <form action="AddnewVAC.php" method="post">
  <div class="form-group">
  <label for=""><b>First Name</b></label>
    <input type="text" class="form-control" name="fname" id="" placeholder="Enter First name">
  </div>
  
  <div class="form-group">
    <label for=""><b>Last Name</b></label>
    <input type="text" class="form-control" name="lname" id="" placeholder="Enter Last name">
  </div>
  
  <div class="form-group">
    <label for=""> <b>Date of birthday</b></label>
    <input type="date" class="form-control" name="db" id=""  placeholder="Enter Birthday">

  </div>

  <div class="form-group">
    <label for=""> <b>Phone Number</b></label>
    <input type="text" class="form-control" name="phnb" id=""  placeholder="Enter the Phone Number">

  </div>
  

  <div class="form-group">
              <label for="BLoodtype">Blood type</label>
              <select name="bloodtype" class="form-control">
              <option selected value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
              
            </select>
              </div> 
  <br>
  <div class="form-group">
    <label for=""> <b> Is Vaccinated ?</b> </label>
    <b>Yes</b><input type="radio" onchange="show();" name="vac1" value="yes"/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<b>No</b><input type="radio" name="vac1" onchange="unshow();" value="no"/>

  </div>
  <br>

   <div style="visibility: hidden;" id="vactype">
  <div class="form-group">
    <label for=""> <b> Vaccine type :</b> </label>
    <b>Phizer</b><input type="radio" name="vac" value="Phizer"/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<b>Astrazeneca</b><input type="radio" name="vac" value="Astrazeneca"/>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<b>Moderna</b><input type="radio" name="vac" value="Moderna"/>

  </div>
   </div>
  
  
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" class="btn-success p-1" style="margin-left:500px;" value="Insert Data" name="insert">
	
 

</form>     
<BR><BR><BR><HR>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
  </html>