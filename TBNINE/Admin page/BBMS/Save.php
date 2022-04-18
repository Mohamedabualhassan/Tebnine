<?php

$userid=$_GET['userid'];
    $id= $_GET['id'];
    include "connection.php";
    
    $firstname=$_GET["firstname"];
    $lastname=$_GET["lastname"];
    $db=$_GET["db"];
    $address=$_GET["address"];
    $bloodtype=$_GET["bloodtype"];//
    $bloodtype = str_replace(' ','',$bloodtype);
    $phnb=$_GET["phnb"];
   
    echo $bloodtype;

    $q="INSERT INTO newdonor(userid,firstname,lastname,db,address,bloodtype,phnb) values($userid,'$firstname','$lastname','$db','$address','$bloodtype','$phnb') ";
     $r=mysqli_query($con,$q);

     $QQ ="DELETE FROM newdonortemp where id=$id";
     $r1=mysqli_query($con,$QQ);

    header("location: Alldonorstemp.php");


?>