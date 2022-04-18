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



    <div style="margin-left: 120px;" class="container">
            <h2></h2>
            <div class="row">
            
                <section  class="col-xs-4 col-md-4 col-md-6">
                    
                    <h2>Blood Table information</h2>
                    <img src="/TBNINE/imgs/bb2.jpg"  width="400px" height="300px" style="margin-top: 20px;" alt="" >
                </section>
            
                <section style="margin-left: 80px;" class="col-xs-4 col-md-4 col-md-6 ">
                    <h2>Some  important Rules : </h2>
                    <div style="margin-top: 40px; font-size:20px">

                    <b> 1. O can transfer to O , A , B or AB .</b>
                    <br><br>
                    <b> 2. A can transfer to A or AB.</b>
                    <br><br>
                    <b> 3. B can transfer to B or AB .</b>
                    <br><br>
                    <b> 4. AB can only transfer to AB.</b>
                    <br><br>
                    <b> 5. (-) can transfer to (-) or (+) </b>
                    <br><br>
                    <b> 6. (+) can  only transfer to (+) .</b>
                    </div>
                </section>
               
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