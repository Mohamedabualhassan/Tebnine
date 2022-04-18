<?php

include('connection.php');


$id = $_GET['id'];

$q="DELETE FROM newdonortemp where id =$id";
$r=mysqli_query($con,$q);

header("location: Alldonorstemp.php");

?>