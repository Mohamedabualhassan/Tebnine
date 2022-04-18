<?php 

include('connection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>ALL DONORS</title>
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

    <a href="/TBNINE/Admin page/Dashboard.php">
          <i class="zmdi zmdi-view-dashboard"></i> Home
        </a>
      </li>
      <li>
        <a href="/TBNINE/Admin page/News/Addnews.php">
          <i class="zmdi zmdi-calendar"></i> Upload new Annoucment
        </a>
      </li>
      <li>
        <a href="allnews.php">
          <i class="zmdi zmdi-calendar"></i> All Annoucment
        </a>
      </li>
      

    </ul>
  </div>
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
      </div>
    </nav>



        <!-- Content -->
        <div id="content">
        
          <div class="container">
              <div class="container-fluid">
                <b style="font-size:30px;">List Of Added PDFs</b>
               
                </form>
              <hr>
              
                <?php

include "connection.php";
$q="Select * from pdf";
$r=mysqli_query($con,$q);
if($r)
{
    echo "<table class=\"table table-striped\"><thead><tr>
    <td><b>ID</b></td><td><b> PDF Name</b></td><td><b> PDF Date</b></td><td><b>Option</b></td>
    </tr></thead>";
    while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
           echo "<tr>
           <td>$row[id]</td>
           <td>$row[pdfname]</td>
           <td>$row[date]</td>
        
           <td><a class='btn btn-danger' href='delete1.php?id=$row[id]'>Delete</a></td>
           

           </tr>"; 
    }
    echo "</table>";
    
}


?>
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