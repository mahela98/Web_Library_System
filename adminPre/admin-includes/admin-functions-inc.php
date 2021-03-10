<?php

function passwordMatch($password,$passwordRep){
    if ($password !== $passwordRep) {
        $result= true; 
    }else{
        $result= false;
    }
    return $result;
}

function usernameExists($conn,$userName,$email){
    $sql = "SELECT * FROM users WHERE userName = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../signup.php?error=stmtFaild1");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$userName,$email);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    
    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
    
    }

    function createUser($conn,$email,$fullName,$userName, $mobile,$password,$adminYesNo,$vkey){
        $stmt = mysqli_stmt_init($conn);
        $sql = "INSERT INTO users (userEmail,fullName,userName,mobile,userPassword,adminOrNot,vkey) VALUES (?,?,?,?,?,?,?)  ;";
      
       if (!mysqli_stmt_prepare($stmt,$sql)) {
           header("location: ../signup.php?error=stmtFaild2");
           exit();
       }
    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
    
    
       mysqli_stmt_bind_param($stmt,"sssssss",$email,$fullName,$userName, $mobile,$hashedPassword,$adminYesNo,$vkey);
       mysqli_stmt_execute($stmt); 
    
       mysqli_stmt_close($stmt);

            //sending mail using sendmail
        $to = $email;
        $subject = "Email Validation";
        $message = "<a href = 'http://http://localhost/my_test/sem_chandima/verified.php?vkey=$vkey'>Register Account</a>
        </br>
            <h1> BOOK BROWSER </h1> 
            </br>
            <p> Your verification key :  $vkey </p>
            </br>
            <p> Thankyou ! </p>
        ";
        // add your email
        $headers = "From: \r\n";

        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
        mail($to,$subject,$message,$headers);
    
       header("location: ../admin-add-user.php?error=userAdded");
       exit();
    
       
       }
    