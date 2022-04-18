<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="/TBNINE/imgs/hh.png">
    
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
        <a href="Dashboard.php">
          <i class="zmdi zmdi-view-dashboard"></i> Dashboard
        </a>
      </li>
      <li>
        <a href="Addnews.php">
          <i class="zmdi zmdi-calendar"></i> Upload new Annoucement
        </a>
      </li>
      <li>
        <a href="/TBNINE/Admin page/BBMS/dashboard.php">
          <i class="zmdi zmdi-widgets"></i> BBMS
        </a>
      </li>
      <li>
        <a href="/TBNINE/Admin page/PCR/AllPCR.php">
          <i class="zmdi zmdi-widgets"></i> PCR LAB
        </a>
      </li>
      <li>
        <a href="/TBNINE/Admin page/VACC/AllVAC.php">
          <i class="zmdi zmdi-calendar"></i> VACCINATION
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
     <div style="color:black; font-size:16px">
     
         
   
<div class="row"> <h3 align="center">Blood Bank NEWS</h3>
<hr>
<div class="col-sm-2 col-md-2">
</div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="caption">
        <h3>DONORS IN STOCK </h3>
        <br>
        <?php
              include "connection.php";
              $q = "SELECT * FROM newdonor  ";

              $r = mysqli_query($con, $q);
              $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
              $count = mysqli_num_rows($r); // function get number of row fetched (selected)
              echo $count;
              ?>
              
              
               <p><a href="/TBNINE/Admin page/BBMS/Alldonors.php" class="btn btn-primary"  role="button" style="margin-left: 100px;">check stock</a> 
      </div>
    </div>
  </div>



  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="caption">
        <h3>NEW SUBMITED DONORS</h3>
        <?php
              include "connection.php";
              $q = "SELECT * FROM newdonortemp  ";

              $r = mysqli_query($con, $q);
              $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
              $count = mysqli_num_rows($r); // function get number of row fetched (selected)
              echo $count;
              ?>
              
              <br><br>
               <p><a href="/TBNINE/Admin page/BBMS/Alldonorstemp.php" class="btn btn-primary"  role="button" style="margin-left: 100px;">check New</a> 
  




      </div>
    </div>
  </div>
</div>



   
<div class="row"> <h3 align="center">PCR RESULTS</h3>
<hr>
<div class="col-sm-2 col-md-2">
</div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="caption">
        <h3>All PCR Tests</h3>
       
        <?php
            include "connection.php";
            $q = "SELECT * FROM pcrtest";

            $r = mysqli_query($con, $q);
            $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
            $count = mysqli_num_rows($r); // function get number of row fetched (selected)
            echo $count;
            ?>

        <p><a href="/TBNINE/Admin page/PCR/AllPCR.php" class="btn btn-primary" role="button" style="margin-left: 100px;">Check</a>
      </div>
    </div>
  </div>


  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="caption">
        <h3>ADD NEW PCR RESULTS</h3>
        <br>
        <p><a href="/TBNINE/Admin page/PCR/AddnewPCR.php" class="btn btn-primary" role="button" style="margin-left: 140px;" >GO</a>
      </div>
    </div>
  </div>
</div>
         
         
         
            
<div class="row"> <h3 align="center">VACCINATION NEWS</h3>
<hr>
<div class="col-sm-2 col-md-2">
</div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="caption">
        <h3>VACCINATED PEOPLE</h3>
      
        <?php
            include "connection.php";
            $q = "SELECT * FROM vaccination";

            $r = mysqli_query($con, $q);
            $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
            $count = mysqli_num_rows($r); // function get number of row fetched (selected)
            echo $count;
            ?>
       <p><a href="/TBNINE/Admin page/VACC/AllVac.php" class="btn btn-primary" role="button" style="margin-left: 100px;" >Check</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="caption">
        <h3> NO VACCINATED PEOPLE</h3>


        <?php
              include "connection.php";
              $q = "SELECT * FROM vaccination where isvaccinated='no'  ";

              $r = mysqli_query($con, $q);
              $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
              $count = mysqli_num_rows($r); // function get number of row fetched (selected)
              echo $count;
              ?>
        <p><a href="/TBNINE/Admin page/VACC/NOVACC.php" class="btn btn-primary"  style="margin-left: 100px;"  role="button">Check</a> 
      </div>
    </div>
  </div>
</div>
        

         
     </div>
    </div>
  
<br><br><br>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
  </html>