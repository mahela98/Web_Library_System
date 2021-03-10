<?php
session_start();
$userID=$_SESSION["userId"];

if (isset($_POST["submit"])) {

    $currentPassword = $_POST["currentPassword"];
    $newPassword = $_POST["newPassword"];
    $reNewPassword = $_POST["reNewPassword"];

    require_once "dbh-inc.php";
    require_once 'functions-ini.php';
    $sql = "SELECT * FROM users WHERE userId = '$userID'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $hashPassword = $row["userPassword"];
}
$checkpwd=password_verify($currentPassword,$hashPassword);
    if (!$checkpwd) {
        echo "wrong";
        header ("location:../profile-page.php?error=errorInChangingPWEnteredPWIsWrong");
        exit (); 
    }
    else if ($checkpwd) {
        function emptyPassword($newPassword,$reNewPassword){
            $result;
           if ( empty($newPassword)||empty($reNewPassword )) {
              $result= true; 
           }else{
               $result= false;
           }
           return $result;   
        }
        function changePW($conn,$userID,$newPassword){
            $hashedNewPassword = password_hash($newPassword,PASSWORD_DEFAULT);

            $sql = " UPDATE users SET userPassword = '$hashedNewPassword'
            WHERE userId = '$userID'; ";

            if (mysqli_query($conn, $sql)) {
                header('location:../profile-page.php?error=passwordeChangedSuccessfuly'); 
            } 
            else {
                echo "Error changing password : " . mysqli_error($conn);
              }
           }

        if (emptyPassword($newPassword,$reNewPassword) !==false) {
            header ("location:../profile-page.php?error=errorInChangingPWEnteredPWIsWrong");
            exit();
            }
        if (passwordMatch($newPassword,$reNewPassword) !==false) {
            header ("location:../profile-page.php?error=errorInChangingPWEnteredPWIsWrong");
            exit();
            }
        changePW($conn,$userID,$newPassword);
        exit (); 
    }









// $password=123;
//     $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
//     echo $hashedPassword;

