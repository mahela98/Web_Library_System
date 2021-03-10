<?php
session_start();
if(!isset($_SESSION['userId'])) {
  header("location:login.php?error=LoginFirst"); 
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book View</title>
    <link rel="stylesheet" href="cssf/profile-page.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="cssf/searchbar_with_options.css">

    <style>
        body {
            background-color: rgba(6, 0, 31, 0.822);
        }

        .mybtn {
            border: 12px;
            margin-top: 25px;
            padding: 5px;
            width: 100%;
            background-color: rgb(69, 0, 179);

        }

        .mybtn:hover {
            background-color: rgb(68, 0, 124);

        }

        .mybtnl {
            border: 12px;
            background-color: rgb(69, 0, 179);
            margin-top: 25px;
            padding: 5px;
            width: 100%;
        }

        .mybtnl:hover {
            background-color: rgb(68, 0, 124);

        }
        .text-secondary{
            color: rgba(18, 0, 51, 0.863) !important;
        }
    </style>
</head>


    <?php
    echo '<body style=" background-image: url(\'images/study.jpg\');  background-repeat: no-repeat;
    background-size: cover;">
    <div style="  background-image: linear-gradient(to bottom right, rgba(0, 132, 255, 0.733), rgba(255, 255, 0, 0.705)) !important;
    " >
    ' ;

include 'navigation-bar.php';
include 'error-message.php';
include 'search-bar.php';

?>
    <?php
$bookId1 = $_GET["message"];
require_once "includes/dbh-inc.php";

$sql = "SELECT * FROM books WHERE bookId = '$bookId1' ";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
$imageURL = 'adminPre/book-Images/'.$row["bookImage"];
// echo $row["bookId"]; 

// echo $row["bookName"];
// echo $row["authorName"];

?>
    <div class="container" >
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3" >
                    <div class="card" style="background-color: rgba(255, 255, 255, 0.877);">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                         
                            <img src="<?php echo $imageURL; ?>" alt="book-cover" width="280" height="200" />
                            
                            <!-- <img src="images/23.jpg" alt="Admin" width="280" height="200"> -->
                          
                          <?php
                            echo '
                                <div class="mt-3">
                                    <h4> '.$row["bookName"] .'</h4>
                                    <p class="text-secondary mb-1" style="color: rgb(39, 37, 37) !important;">By: '.$row["authorName"] .'</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8" >
                    <div class="card mb-3 " style="background-color: rgba(243, 243, 243, 0.979) !important;">
                        <div class="card-body" >
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Book Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row["bookName"].'
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Author Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row["authorName"].'
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Catagory</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row["category"].'
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Price</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Rs. '.$row["price"].'
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Discription</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row["discription"].'
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Likes</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row["likes"].'
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
                ';

                include "like-button.php";

                include "borrow-button.php";


echo '
            </div>
        </div>
    </div>
    </div>
    ';
    
    ?>

    <?php
  include "credits-layer.php";
?>

   
<!-- bootstrap and jquery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>