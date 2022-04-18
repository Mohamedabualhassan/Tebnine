<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
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
        <a href="/TBNINE/Admin page/Dashboard.php">
          <i class="zmdi zmdi-view-dashboard"></i> Home
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
          <button type="button" class="btn-danger" onclick="window.location.href='/TBNINE/Login/login.php'" >log out</button>
        </ul>
      </div>
    </nav>

    <h1 style="padding-left: 250px;"> BLOOD BANK MANAGMENT SYSTEM</h1>
    <br><br>
    <div class="row">
        <div class="col-md-6" style="padding-left: 380px;">
          <div class="jumbotron" style=" background-color:brown; margin-left:10%; width:300px; height:300px">
            <h2 align="center" style="color: white;"> All stocked units : </h2>
            <h3 align="center" style="color: white;">
              <?php
              include "connection.php";
              $q = "SELECT * FROM newdonor  ";

              $r = mysqli_query($con, $q);
              $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
              $count = mysqli_num_rows($r); // function get number of row fetched (selected)
              echo $count;
              ?>

            </h3>
            <p align="center"><a class="btn btn-primary btn-lg" href="Alldonors.php" role="button">More Details</a></p>
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