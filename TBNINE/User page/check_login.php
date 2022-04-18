<?php

session_start();

include('connection.php');


  

if(isset($_POST["username"])){

     $username=$_POST['username'];
     
     $password=$_POST['password'];
     
     $query="SELECT * FROM medical_record where username ='$username' and password='$password' ";
     
     $result = mysqli_query($con,$query);
     
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     $uid=$row['id'];
     echo $uid;
     
    
     $count = mysqli_num_rows($result);

     $_SESSION['uid']=$uid;
     $cookie_name = "uid";
     $cookie_value = $uid;
     setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
     
      if($count == 1) {
     
          header("Location:Dashboard.php");
       }


     else {
         header("location: Dashboard.php?er=er");
   

}

}



?>