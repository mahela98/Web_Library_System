<?php

$userId= $_SESSION['userId'];
$bookId = $_GET["message"];

require_once 'includes/dbh-inc.php';

$sql = "SELECT * FROM booklikes WHERE userId =  '$userId'  and  bookId =  '$bookId'";
$result = $conn->query($sql);

$likedOrNot=0;

while($row = $result->fetch_assoc()) {

    if($row["liked"]==0){
        // echo 'not returned';
        $likedOrNot=0;
    }elseif($row["liked"]==1){
        // echo 'returned';
        $likedOrNot=1;
    }
  }



    if($likedOrNot==0){
        echo '
        <div class="col-6 col-lg-3">
        <a href="includes/book-like.php?message='.$bookId.' ">
        <button type="submit" class="mybtnl btn btn-primary">Like</button>
        </a>
    </div>';
    }
    else{
        echo '
        <div class="col-6 col-lg-3">
        <a href="includes/book-unlike.php?message='.$bookId.' ">   
        <button type="submit" class="mybtnl btn btn-primary">Unlike</button>
        </a>
    </div>';   
}
