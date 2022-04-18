
<?php

session_start();

include('connection.php');
if(isset($_POST["add"])){

    
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $db=$_POST["db"];
    $address=$_POST["address"];
    $bloodtype=$_POST["bloodtype"];
    $phnb=$_POST["phnb"];
   //$uid=$_SESSION['uid'];
    $uid=$_COOKIE["uid"];

    echo $uid;

    $q="INSERT INTO newdonortemp (userid,firstname,lastname,db,address,bloodtype,phnb) values($uid,'$firstname','$lastname','$db','$address','$bloodtype','$phnb') ";
     $r=mysqli_query($con,$q);

     header("location: Dashboard.php");



}
else{}









?>
