<?php

function borrowBook($conn,$userId,$bookId,$borrowDate,$returnDate){
    $stmt = mysqli_stmt_init($conn);
    $sql = "INSERT INTO borrowbooks(userId,bookId,borrowDate,returnDate) VALUES (?,?,?,?);";
  
   if (!mysqli_stmt_prepare($stmt,$sql)){
       header("location: ../bookBorrow.php?error=stmtFaild4bookBorrow");
       exit();
            }

   mysqli_stmt_bind_param($stmt,"ssss",$userId,$bookId,$borrowDate,$returnDate);
   mysqli_stmt_execute($stmt); 

   mysqli_stmt_close($stmt);

//    header("location: ../bookSearch.php?error=successfullyBorrowed");
   header('location:../one-book-view.php?message='.$bookId.' &error=successfullyBorrowed');
   exit();}