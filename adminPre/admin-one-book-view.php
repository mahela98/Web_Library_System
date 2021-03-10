<?php
session_start();
if(!isset($_SESSION['userId'])) {
  header("location:../login.php?error=LoginFirst"); 
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
    <link rel="stylesheet" href="../cssf/searchbar_with_options.css">
    <style>
        body {
            background-image: linear-gradient(to bottom right, rgb(0, 180, 156), rgb(34, 0, 46)) !important;
        }
        .mybtnE {
            border: 12px;
            margin-top: 25px;
            padding: 5px;
            width: 100%;
            background-color: rgb(31, 128, 255) !important;
        }
        .mybtnE:hover {
            background-color: rgba(143, 140, 0, 0.842) !important;
        }
        .mybtnl {
            border: 12px;
            background-color: rgb(31, 128, 255) !important;
            margin-top: 25px;
            padding: 5px;
            width: 100%;
        }
        .mybtnl:hover {
            background-color: rgb(160, 0, 27) !important;
        }
    </style>
</head>

<body>
    
    <?php

include 'admin-nav-bar.php';
include 'admin-search-bar.php';

?>

    <?php
    $bookId1 = $_GET["message"];


require_once "../includes/dbh-inc.php";

$sql = "SELECT * FROM books WHERE bookId = '$bookId1' ";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
$imageURL = 'book-Images/'.$row["bookImage"];
// echo $row["bookId"]; 

// echo $row["bookName"];
// echo $row["authorName"];
$message = $row["bookId"] ;
?>
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">

                             
                                <img src="<?php echo $imageURL; ?>" alt="book-cover" width="280" height="200"/>

                  <?php             echo '
                                <div class="mt-3">
                                    <h4> '.$row["bookName"] .'</h4>
                                    <p class="text-secondary mb-1">'.$row["authorName"] .'</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
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
                


                echo '
                <div class="col-6 col-lg-3">
                    <a href="admin-includes/admin-book-delete-inc.php?message='.$message.'">
                        <button  class="mybtnl btn btn-primary">Delete</button>
                    </a>
                </div>

                <div class="col-6 col-lg-9">
                    <a href="admin-book-edit-inc.php?message='.$message.'">
                    <button type="submit" class="mybtnE btn btn-primary">Edit</button>
                </a>
                </div> ';
               
                echo '
            </div>
        </div>
    </div>';
    ?>
<div style="padding-bottom: 40px;"></div>
    <?php
  include "../credits-layer.php";
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