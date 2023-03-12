<?php

if (isset($_POST["submit"])) {
    
    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    $DOB = $_POST["DOB"];
    $NIC = $_POST["NIC"];
    $Address = $_POST["Address"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $PasswordRepeat = $_POST["PasswordRepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($f_name, $l_name, $DOB, $NIC, $Address, $Email, $Password, $PasswordRepeat) !== false) {
        header("location:../signup.php?error=emptyinput");
        exit(); 
    }

    if (invalidNIC($NIC) !== false) {
        header("location:../signup.php?error=inavlidNIC");
        exit(); 
    }

    if (invalidEmail($Email) !== false) {
        header("location:../signup.php?error=inavlidEmail");
        exit(); 
    }

    if (pwdMatch($Password, $PasswordRepeat) !== false) {
        header("location:../signup.php?error=passwordsdontmatch");
        exit(); 
    }

    if (userExist($conn, $NIC, $Email) !== false) {
        header("location:../signup.php?error=userisalreadyregistered");
        exit(); 
    }

    createUser($conn, $Address, $DOB, $f_name, $l_name, $NIC, $Email, $Password);



}
else{
    header("location:../signup.php");
    exit();
}