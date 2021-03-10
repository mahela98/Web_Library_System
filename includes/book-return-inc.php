<?php
session_start();
if(!isset($_SESSION['userId'])) {
  header("location:login.php?error=LoginFirst"); 
}

$userId= $_SESSION['userId'];
$bookId = $_GET["message"];

require_once 'dbh-inc.php';

editBook($conn,$bookId,$userId);

function editBook ($conn,$bookId,$userId){

    $sql = " UPDATE borrowbooks SET returned= 1 
    WHERE bookId = '$bookId' AND userId=$userId AND returned=0;";

    if (mysqli_query($conn, $sql)) {
        header('location:../one-book-view.php?message='.$bookId.' &error=bookReturnedSuccessfully');
        // echo $userId. $bookId;
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
    exit();


}