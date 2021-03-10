<?php
session_start();
if(!isset($_SESSION['userId'])) {
  header("location:login.php?error=LoginFirst"); 
}


$userId= $_SESSION['userId'];
$bookId = $_GET["message"];
$borrowDate =  date("Y/m/d");
$returnDate = date("Y/m/d" ,  strtotime('+7 days'));
// get date and time of borrow in utc form

require_once 'dbh-inc.php';
require_once 'borrowBooksFunctions-ini.php';

// echo  $borrowDate . "<br>".$returnDate . "<br>". $bookId. "<br>".$userId ;

borrowBook($conn,$userId,$bookId,$borrowDate,$returnDate);

 ?>