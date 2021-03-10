<?php

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $fullName = $_POST["name"];
    $userName = $_POST["userName"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $passwordRep = $_POST["passwordRep"];
    $admin = $_POST["admin"];
    $adminYesNo;
    $vkey =  md5(time().$email);


    if($admin=='yes'){
    $adminYesNo=1;
    }else{
        $adminYesNo=0;
    }
    require_once "../../includes/dbh-inc.php";
    require_once 'admin-functions-inc.php';

if (passwordMatch($password,$passwordRep) !==false) {
    header("location: ../admin-add-user.php?error=passwordsdosentmatch");
    exit();
}
if (usernameExists($conn,$userName,$email) !==false) {
    header("location: ../admin-add-user.php?error=userNameTaken");
    exit();  
}
createUser($conn,$email,$fullName,$userName, $mobile,$password,$adminYesNo,$vkey);
// echo $email . $admin . $adminYesNo.$mobile;
}
else{
    header("location: ../admin-add-user.php?error=errorInAddUserIncfile");
    exit();
}