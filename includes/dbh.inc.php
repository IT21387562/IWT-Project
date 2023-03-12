<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBname = "hims";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBname);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}