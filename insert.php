<?php
$server = "localhost" ;
$username= "root" ;
$password= "" ;
$dbname= "Claim";

$conn = mysqli_connect($server ,$username , $password , $dbname );

	
	
		$Name = $_POST['name'];
		$ID = $_POST['ID'];
		$nic = $_POST['nic'];
		$pi = $_POST ['pi'];
		$claim= $_POST ['claim'];
		
		$query = "insert into claims(Name,Id,Nic,Policy_ID,Type_of_claim) values ('$Name' ,'$ID' ,'$nic','$pi','$claim')" ;
		$run = mysqli_query($conn,$query) or die(mysqli_error());
		
		if($run){
			echo " Form submitted successfully";
		}
		else{
			echo "Form not submitted.Try again" ;
			
		}

	
		
?>