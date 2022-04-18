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
        <a href="AllVAC.php">
          <i class="zmdi zmdi-view-dashboard"></i> Dashboard
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

    <div class="content">
                    <h1>List Of No Vaccinated Peoples </h1><br>
         <?php

                include "connection.php";
                $q="Select * from vaccination where isvaccinated='no'";
                $r=mysqli_query($con,$q);
                if($r)
                {
                    echo "<table class=\"table table-striped\"><thead><tr>
                    <td><b>ID</b></td><td><b>FirstName</b></td><td><b>LastName</b></td><td><b>Date Of Birth</b></td><td><b>Phone Number<b/></td><td><b>Blood Type<b/></td><td><b>Result</b></td><td><b>Type of vaccine</b></td>
                    <td><b>Option</b></td>
                    </tr></thead>";
                    while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                           echo "<tr>
                           <td>$row[id]</td>
                           <td>$row[fname]</td>
                           <td>$row[lname]</td>
                           <td>$row[db]</td>
                           <td>$row[phnb]</td>
                           <td>$row[bloodtype]</td>
                           
                           <td>$row[isvaccinated]</td>
                           <td>$row[type]</td>
                           <td>
                           <a href=\"\">Vaccinated</a>
                           </td>
                           

                           </tr>"; 
                    }
                    echo "</table>";
                    
                }
            

         ?>

         </div>
          














    
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
  </html>