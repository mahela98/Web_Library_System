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
    <title>Admin Book Edit</title>
    <link rel="stylesheet" href="cssf/profile-page.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../cssf/searchbar_with_options.css">
    <style>
.form-control-label {
    font-size: 12px;
    color: #dddddd;
    font-weight: bold;
    letter-spacing: 1px;
  }

        body {
           background-image: linear-gradient(to bottom right, rgb(0, 180, 156), rgb(34, 0, 46)) !important;
    
        }

        .mybtn {
            border: 12px;
            margin-top: 25px;
            padding: 5px;
            width: 100%;
            background-color: rgb(31, 128, 255);

        }

        .mybtn:hover {
            background-color: rgba(0, 180, 9, 0.699);

        }

        .mybtnl {
            border: 12px;
            background-color: rgb(31, 128, 255);
            margin-top: 25px;
            padding: 5px;
            width: 100%;
        }

        input:focus {
            outline: none;
            box-shadow: 0 0 0;

            border-right: 5px solid rgba(15, 175, 0, 0.541);

        }

        textarea:focus {
            outline: none !important;
            border: none !important;
            box-shadow: 0 0 0 !important;

            border-right: 5px solid rgba(15, 175, 0, 0.541) !important;
        }

        .mybtnl:hover {
            background-color: rgb(160, 0, 27);

        }

        .myinp01 {
            width: 100%;
            border: none;
        }
    </style>
</head>

<body>

    <?php

include 'admin-nav-bar.php';
include '../error-message.php';



include 'admin-search-bar.php';
?>
    <?php

$bookId1 =$_GET["message"];
// $bookId1 =7;
require_once "../includes/dbh-inc.php";

$sql = "SELECT * FROM books WHERE bookId = '$bookId1' ";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
$message = $row["bookId"] ;

$bookName=$row["bookName"];
$authorName=$row["authorName"];
$publishedDate=$row["publishedDate"];
$catagory=$row["category"];
$price=$row["price"];
$amount=$row["amount"];
$discription=$row["discription"];

$imageURL = 'book-Images/'.$row["bookImage"];

?>

    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">


                            <img src="<?php echo $imageURL; ?>" alt="book-cover" width="280" height="200"/>

<?php
                                echo '
                                <div class="mt-3">
                                    <h4> '.$row["bookName"] .'</h4>
                                    <p class="text-secondary mb-1">'.$row["authorName"] .'</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-8">
                    <form action="admin-includes/book-edit-inc.php?message='.$message.'" method="POST">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Book Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary"> ';

                               echo '
                               
                                <input class="myinp01"
                                 type="text" value="'. "$bookName".'"   name="bookName" required>
                                 
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Author Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input class="myinp01"
                                    type="text" value="'.$authorName.'"  name="authorName" required>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Published date</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input class="myinp01"
                                    type="date" value="'.$publishedDate.'"  name="publishedDate" required>
                                </div>
                            </div>
                            <hr>

                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Catagory</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input class="myinp01"
                                    type="text" value="'.$catagory.'" name= "category" required>
                                  
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Price</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <div class="row">
                                    <div class="col-2">  Rs. </div>
                                    <div class="col-10">
                                    <input class="myinp01" type="number" value="'.$price.'" name="price" required></div>
                                </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Amount</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input class="myinp01" type="number" value="'.$amount.'" name="amount" required></div>
                           
                           
                        </div>
                        <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Discription</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  
                                    <textarea class="form-control myinp01" rows="3" id="discription" name="discription">'."$discription".'</textarea>
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
                <button class="mybtnl btn btn-primary">Delete</button>
            </a>
                </div>

                <div class="col-6 col-lg-9">
             
                  
                    <button type="submit" name="submit" class="mybtn btn btn-primary">SAVE</button>
             
                </div>
                </form> ';
               
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