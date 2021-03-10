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

    $sql = " UPDATE booklikes SET liked= 0 
    WHERE bookId = '$bookId' AND userId=$userId AND liked=1;";

    if (mysqli_query($conn, $sql)) {
        header('location:../one-book-view.php?message='.$bookId.' &error=bookUnliked');
        // echo $userId. $bookId;
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
    exit();


}