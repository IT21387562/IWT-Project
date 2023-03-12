<?php

function emptyInputSignup($f_name, $l_name, $DOB, $NIC, $Address, $Email, $Password, $PasswordRepeat){
    $result;
    if (empty($f_name) || empty($l_name) || empty($DOB) || empty($NIC) || empty($Address) || empty($Email) || empty($Password) || empty($PasswordRepeat) ) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidNIC($NIC){
    $result;
    if (!preg_match("/^[vV0-9]*$/", $NIC)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($Email){
    $result;
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($Password, $PasswordRepeat){
    $result;
    if ($Password !== $PasswordRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function userExist($conn, $NIC, $Email){
    $sql = "SELECT * FROM insuree WHERE NIC = ? OR Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../signup.php?error=statementfailed");
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "ss", $NIC, $Email);
    mysqli_stmt_execute($stmt);

    $resultsData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultsData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $Address, $DOB, $f_name, $l_name, $NIC, $Email, $Password){
    $sql = "INSERT INTO insuree (Address, DOB, f_name, l_name, NIC, Email, Password) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../signup.php?error=statementfailed");
        exit(); 
    }

    $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssss", $Address, $DOB, $f_name, $l_name, $NIC, $Email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location:../signup.php?error=none");
    exit();
    
}

function emptyInputLogIn($email, $password){
    $result;
    if (empty($email) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $password){
    $userExists = userExist($conn, $username, $username);

    if ($userExists === false) {
        header("location:../login.php?error=wronglogin");
        exit();
    }


    $passwordHashed = $userExists["Password"];
    $checkPassword = password_verify($password, $passwordHashed);

    if ($checkPassword === false) {
        header("location:../login.php?error=wronglogin");
        exit();
    }
    elseif ($checkPassword === true) {
        session_start();
        $_SESSION["InsureeID"] = $userExists["InsureeID"];
        $_SESSION["firstName"] = $userExists["f_name"];
        $_SESSION["lastName"] = $userExists["L_name"];
        header("location:../index.php");
        exit();
    }
}