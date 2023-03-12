<?php

 $con= new mysqli("localhost","root","","hims");
 
 if($con->connect_error)
 {
	 die("Connection failed : ".$con->coonect_error);
 }
 else
 {
	 echo "connected succesfully";
 }
  
?>