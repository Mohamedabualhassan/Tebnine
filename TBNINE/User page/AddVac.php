<?php 
session_start();

?>

<?php
   include('connection.php');
   
			if(isset($_POST['fname'])){
			//echo "hello";
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$db = $_POST['db'];
			$phnb = $_POST['phnb'];
			$address = $_POST['address'];
			$blood_type = $_POST['bloodtype'];
			$isvaccinated = $_POST['vac1'];
            $type =$_POST['vac'];
			
			$uid=$_SESSION['uid'];
            
           echo $fname;
		   echo $lname;
		   echo $db;
		   echo $phnb;
		   echo $blood_type;
		   echo $isvaccinated;
		   echo $type;
		   echo $uid;
		   

			$query="insert into vaccination (userid,fname,lname,db,address,phnb,bloodtype,isvaccinated,type) values($uid,'$fname','$lname','$db','$address','$phnb','$blood_type','$isvaccinated','$type')";
			$r=mysqli_query($con,$query);
			if($r)//if the query suucefully run
            {
				header("location: Dashboard.php");

			}
			
			}
			
		
?>


