<?php

$userId= $_SESSION['userId'];
$bookId = $_GET["message"];

require_once 'includes/dbh-inc.php';

$sql = "SELECT * FROM borrowbooks WHERE userId =  '$userId'  and  bookId =  '$bookId'";
$result = $conn->query($sql);

$returnedOrNot=1;

while($row = $result->fetch_assoc()) {

    if($row["returned"]==0){
        // echo 'not returned';
        $returnedOrNot=0;
    }elseif($row["returned"]==1){
        // echo 'returned';
        $returnedOrNot=1;
    }
  }



    if($returnedOrNot==1){
        echo '
        <div class="col-6 col-lg-9">
        <a href="includes/book-borrow.php?message='.$bookId1.' ">
        <button type="submit" class="mybtn btn btn-primary">Borrow</button>
       </a>
       
       </div>';
    }
    else{
        echo '
        <div class="col-6 col-lg-9">
        <a href="includes/book-return-inc.php?message='.$bookId1.' ">
        <button type="submit" class="mybtn btn btn-primary">Return Book</button>
       </a>
       
       </div>';   
}
