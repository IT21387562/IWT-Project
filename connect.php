<?php

include_once 'includes/connection.php';

$fName = $_POST['firstName'];
$lName = $_POST['secondName'];
$pnum = $_POST['phoneNo'];
$emails = $_POST['email'];
$Adress=$_POST['address'];
$dob = $_POST['date'];
$pswrd=$_POST['Re-password'];



$sql = "INSERT INTO register(firstName,lName,pnum,email,Adress,dob,pswrd)
    VALUES('$fName','$lName','$pnum','$emails','$Adress','$dob','$pswrd')";

$result = mysqli_query($connection,$sql);

header("Location:home_A.html?=Registration Succsesfull");


?>