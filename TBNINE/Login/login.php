<?php

   

     include('connection.php');


  

           if(isset($_POST["click"])){
          
                $username=$_POST['username'];
                
                $password=$_POST['password'];
                
                $query="SELECT * FROM login where username ='$username' and password='$password' ";
                
                $result = mysqli_query($con,$query);
                
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                
                
               
                $count = mysqli_num_rows($result);
                
                 if($count == 1) {
                
                     header("Location: /TBNINE/Admin page/Dashboard.php");
                  }


                else {
                    //header("location: Login.php?er=er");
              
          
          }

        }
         
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="/TBNINE/imgs/hh.png">
    
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>


<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Welcome back!</h3>
              <form method="POST" action="login.php">
                <div class="form-label-group">
                  <input type="text" id="inputEmail" name="username"class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email address or username</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>

                
                <input type="submit" name="click" value="login" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">
                <div class="text-center">
                  
              </form>
            </div>
          </div>
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