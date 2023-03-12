<?php

if (isset($_POST["loginbtn"])) {
    
    $email = $_POST["email"];
    $password = $_POST["password"];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogIn($email, $password)) {
        header("location:../login.php?error=emptyinput");
        exit(); 
    }

    loginUser($conn, $email, $password);

}

else {
    header("location:../login.php");
    exit();
}