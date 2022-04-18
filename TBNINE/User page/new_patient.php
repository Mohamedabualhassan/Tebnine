<?php
session_start();


include('connection.php');

if(isset($_POST["username"])){

    $username=$_POST["username"];
    $password = $_POST["password"];
    $firstname=$_POST["fname"];
    $lastname=$_POST["lname"];
    $dob=$_POST["dob"];
    $address=$_POST["address"];
  
    $phnb=$_POST["phnb"];
   
$bld=$_POST["bloodtype"];
    $q1="Select max(id) as id from medical_record";

    $r1=mysqli_query($con,$q1);
    if($r1)
    {

        while($row=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
        
            $idd = $row['id'];
            echo $idd;
        }
    
    
    
    }
    else{
        
    }

    

    $q="INSERT INTO medical_record (fname,lname,address,dob,phnb,bloodtype,username,password) values('$firstname','$lastname','$address','$dob','$phnb','$bld','$username','$password') ";
     $r=mysqli_query($con,$q);

     $_SESSION['uid']=$idd+1;
     $cookie_name = "uid";
     $cookie_value = $idd+1;
     setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
     


     header("location: Dashboard.php");

}

?>