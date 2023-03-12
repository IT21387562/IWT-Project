<?php


//Database connection

$conn= new mysqli('localhost','root','','healthdb');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}


 

?>
