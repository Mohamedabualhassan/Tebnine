<?php

      include('connection.php');


            if(isset($_POST["ann"]) && $_POST["ann"]!=" ")
            {
                $annoucemnt_name=$_POST['ann'];
                
             
                $file=$_FILES["pdffile"];
                
                
                $dateofupload = date("Y-m-d");
                
                $query="INSERT INTO pdf (pdfname,date) values ('$annoucemnt_name','$dateofupload')";
                
                if(@mysqli_query($con,$query))
                    {
                         move_uploaded_file($file["tmp_name"], "C:/xampp/htdocs/TBNINE/Admin page/Takarir/" . $file["name"]);
                      
                    echo "
                              <div class=\"alert alert-success\">
                              <strong>Success!</strong> Annoucement added succufelly!!
                              </div>";
                    
                    }


                else{
                    echo "<div class=\"alert alert-danger\">
                         <strong>oops!</strong> error adding ann  :(!!
                         </div>";
                }
                
        
}
?>























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
        <a href="Dashboard.php">
          <i class="zmdi zmdi-view-dashboard"></i> Home
        </a>
      </li>
      <li>
        <a href="allannoucment.php">
          <i class="zmdi zmdi-view-dashboard"></i> Upload A New Annoucment
        </a>
      </li>
      <li>
        <a href="allannoucment.php">
          <i class="zmdi zmdi-view-dashboard"></i> All Annoucment
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
    <div class="container-fluid">
      <h1>Add a new Annoucment - اخبار و تقارير </h1>
        <hr>


        <div style="color: black; font-size: 16px; margin:120px">

         <form action="Addnews.php" method="post" enctype="multipart/form-data">


              <div class="form-group" align="center">
              <label for="anname"><h3>Annoucement Name - عنوان التقرير </h3></label><br>
              <input type="text" class="form-control" name="ann">
              </div>
<br>
           <div align="center" class="form-group">
            <input type="file" name="pdffile" class="file-upload">
           </div>
  <br>
        <div align="center">
         <input type="submit" value="Submit"  class="btn-primary">
          </div>
</form>
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

