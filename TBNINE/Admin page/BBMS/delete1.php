<?php

include('connection.php');


$id = $_GET['id'];

$q="DELETE FROM newdonor where id =$id";
$r=mysqli_query($con,$q);

header("location: Alldonors.php");

?>