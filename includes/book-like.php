<?php
session_start();
if(!isset($_SESSION['userId'])) {
  header("location:login.php?error=LoginFirst"); 
}

$userId= $_SESSION['userId'];
$bookId = $_GET["message"];

require_once 'dbh-inc.php';
$liked =1;
likeBook($conn,$userId,$bookId,$liked);

function likeBook($conn,$userId,$bookId,$liked){
    $stmt = mysqli_stmt_init($conn);
    $sql = "INSERT INTO booklikes (userId,bookId,liked) VALUES (?,?,?);";
  
   if (!mysqli_stmt_prepare($stmt,$sql)){
       header("location: ../one-book-view.php?error=stmtFaild4bookLike");
       exit();
            }

   mysqli_stmt_bind_param($stmt,"sss",$userId,$bookId,$liked);
   mysqli_stmt_execute($stmt); 

   mysqli_stmt_close($stmt);
   header('location:../one-book-view.php?message='.$bookId.' &error=successfullyLiked');
//    header("location: ../bookSearch.php?error=successfullyBorrowed");
   exit();}


 ?>