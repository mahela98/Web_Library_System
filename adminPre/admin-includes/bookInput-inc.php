<?php
session_start();
 ?>

<?php
if(isset($_SESSION['userId'])) {

if (isset($_POST["submit"])) {

    $bookName = $_POST["bookName"];
    $authorName = $_POST["authorName"];
    $publishedDate = $_POST["publishedDate"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];
    $category = $_POST["category"];
    $discription = $_POST["discription"];


    // $file = $_POST["file"];
// for cover photo
// File upload path
$targetDir = "../book-Images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$allowTypes = array('jpg','png','jpeg');
// -----------------

//    echo $file;

    require_once '../../includes/dbh-inc.php';
    require_once 'addBookFunctions-ini.php';
   
 

    if (emptyBookInput($bookName,$authorName)) {
        header("location:../bookInput.php?error=emptyBNandANInput");
        exit();
    }
    // have to enter other error handlers
    if (bookNameExists($conn,$bookName,$authorName) !==false) {
        header("location:../bookInput.php?error=BookIsInTheDatabase");
        exit();  
    }




    if(in_array($fileType, $allowTypes)){
        // Upload file to to the folder
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            if ( createBook($conn,$bookName,$authorName,$publishedDate,$price,$amount,$category,$discription,$fileName)==0){
                header("location: ../bookInput.php?error=successfullyBookAdded");
                // echo $fileName;
            
            }else {
                echo "error in connecting";
            } 

        }else{
            echo "Sorry, there was an error uploading your file.";
        }
    }else{
        echo 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }












   
}
else{
header("location:../bookInput.php?error=not working");
    exit();
}
}

else{
    header("location:../login.php?error=LoginFirst"); 
}