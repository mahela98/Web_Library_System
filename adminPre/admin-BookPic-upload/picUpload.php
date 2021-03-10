<?php
session_start();
if(!isset($_SESSION['userId'])) {
  header("location:login.php?error=LoginFirst"); 
}

include '../../includes/dbh-inc.php';
$UserID=$_SESSION['userId'];

// File upload path
$targetDir = "../profile-images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["save_profile"]) && !empty($_FILES["file"]["name"])){

    $allowTypes = array('jpg','png','jpeg');
    if(in_array($fileType, $allowTypes)){
        // Upload file to to the folder
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("UPDATE users SET imageURL = '".$fileName."' WHERE userId = '".$UserID."';");

            if($insert){
                // echo "The file ".$fileName. " has been uploaded successfully.";
                header('location:../profile-page.php?message=ProfilePicUploadedSuccessfully');
                // echo $fileName;
                // echo $UserID;
            }else{
                echo "File upload failed, please try again.";
            } 
        }else{
            echo "Sorry, there was an error uploading your file.";
        }
    }else{
        echo 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    echo 'Please select a file to upload.';
}


?>