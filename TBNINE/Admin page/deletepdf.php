<?php

$id = $_GET['id'];


// get the pdf name : 

$q1= "select * from pdf where id=$id";

$r=mysqli_query($con,$q);
if($r)
{

    while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
            $pdfname=$row['pdfname'];
        }


}



//echo $id;
include "connection.php";
$q = "Delete from pdf where id=$id";

mysqli_query($con,$q);

// deleted from folder:

$path="C:/xampp/htdocs/TBNINE/Admin page/Takarir/$pdfname.pdf";
                                        
unlink($path);//this function delete a file 

header("location: allannoucment.php");



?>