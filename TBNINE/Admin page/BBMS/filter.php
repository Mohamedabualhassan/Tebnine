

<?php

$bt=$_POST['bloodtype'];

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
                <b style="font-size:30px;">List Of donors : &nbsp;&nbsp;&nbsp;<?php echo $bt;?> </b>
                <a style="margin-left: 20px;" class="btn btn-primary" href="alldonors.php">Go Back</a>
              <hr>
              
                <?php

include "connection.php";
$q="Select * from newdonor where bloodtype='$bt'";
$r=mysqli_query($con,$q);
if($r)
{
    echo "<table class=\"table table-striped\"><thead><tr>
    <td><b>ID</b></td><td><b>FirstName</b></td><td><b>LastName</b></td><td><b>Date Of Birth</b></td><td><b>Address<b/></td><td><b>Phone Number</b></td><td><b>Blood Type</b></td><td><b>Option</b></td>
    </tr></thead>";
    while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
           echo "<tr>
           <td>$row[id]</td>
           <td>$row[firstname]</td>
           <td>$row[lastname]</td>
           <td>$row[db]</td>
           <td>$row[address]</td>
           <td>$row[phnb]</td>
           <td>$row[bloodtype]</td>
           <td><a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a></td>
           

           </tr>"; 
    }
    echo "</table>";
    
}


?>
            </div>
         </div>