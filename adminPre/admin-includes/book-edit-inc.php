
<?php
   session_start();
   $bookId1 =$_GET["message"];
 
if(isset($_SESSION['userId'])) {
   
if (isset($_POST["submit"])) {

    $bookName = $_POST["bookName"];
    $authorName = $_POST["authorName"];
    $publishedDate = $_POST["publishedDate"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];
    $category = $_POST["category"];
    $discription =$_POST["discription"];

    require_once '../../includes/dbh-inc.php';
    require_once 'addBookFunctions-ini.php';
    // escapes illigel charactors
    $discription = mysqli_real_escape_string($conn, $discription);
    $bookName = mysqli_real_escape_string($conn, $bookName);
    $authorName = mysqli_real_escape_string($conn, $authorName);


    if (emptyBookInput($bookName,$authorName)) {
        header('location:../admin-book-edit-inc.php?message='.$bookId1.' &error=emptyInputbookNameinedit');
        exit();
    }

    editBook($conn,$bookId1,$bookName,$authorName,$publishedDate,$price,$amount,$category,$discription);

}
else{
header("location:../admin-book-edit-inc.php?error=notworkingbookedit");
    exit();
}
}

else{
    header("location:../../login.php?error=LoginFirst"); 
}