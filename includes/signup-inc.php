<?php

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $fullName = $_POST["name"];
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    $passwordRep = $_POST["passwordRep"];
    
    // for email verification
    $vkey =  md5(time().$email);
    echo $vkey;

    echo $email;
    echo $fullName;

   

    require_once "dbh-inc.php";
    require_once 'functions-ini.php';

    if (emptyInputsignup($email,$fullName,$userName,$password,$passwordRep ) !==false) {
        header("location: ../signup.php?error=emptyInput");
        exit();
    }

    if (invaliduserName($userName) !==false) {
        header("location: ../signup.php?error=invalidUserName");
        exit();
    }

    if (invalidEmail($email) !==false) {
        header("location: ../signup.php?error=invalidEmail");
        exit();
    }
 
    if (passwordMatch($password,$passwordRep) !==false) {
        header("location: ../signup.php?error=passwordsdosentmatch");
        exit();
    }

    if (usernameExists($conn,$userName,$email) !==false) {
        header("location: ../signup.php?error=userNameTaken");
        exit();  
    }

createUser($conn,$email,$fullName,$userName,$password, $vkey);


}
else{
    header("location: ../signup.php");
    exit();
 }