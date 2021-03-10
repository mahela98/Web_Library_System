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
    <title>Book Input</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- vendor\bootstrap -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">

    <style>
        .mycont {
            /* background-color: rgba(0, 1, 83, 0.719); */
            background-image: linear-gradient(rgb(22, 181, 255), rgb(0, 17, 172));
            padding: 30px;
            border-radius: 10px;
            align-items: center;
        }

        label {
            color: black;
            font-size: 15px;
            font-weight: bold;
        }

        input {
            border: 0px;
        }

        textarea {
            border: 0px;
        }

        input:hover {
            border-color: rgb(156, 0, 196);
            border: 0px;
            border-bottom: 4px solid #2e009b;
        }

        textarea:hover {
            border-color: rgb(156, 0, 196);
            border: 0px;
            border-bottom: 5px solid #2e009b;
        }

        h2 {
            font-size: 30px;
            font-style: normal;
            text-align: center;
            padding: 7px;
            background-color: rgba(7, 0, 100, 0.559);
            border-radius: 10px;
            color: white;
        }

        .btn {
            background-color: rgb(0, 21, 61);
            border: none;
        }

        .btn:hover {
            background-color: rgb(54, 0, 105);
        }
    </style>

</head>

<body style="background-image: linear-gradient(to bottom right, rgb(0, 180, 156), rgb(34, 0, 46)) !important;
   ">

    <!-- nav-bar -->
    <?php
include 'admin-nav-bar.php';
  ?>

    <!-- error message -->
    <?php
include '../error-message.php';
?>

    <div>
        <div class="container" style="padding-top:70px; padding-bottom:50px">

            <div class=" col-lg-12" style="padding-bottom: 10px;">
                <h2>Add Books </h2>
            </div>

            <!-- form -->

            <div class="col-12  mycont">
                <!-- ../includes/bookInput-inc.php -->
                <form action="admin-includes/bookInput-inc.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Book Name</label>
                            <input type="text" class="form-control" name="bookName" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Author Name</label>
                            <input type="text" class="form-control" name="authorName" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Published date</label>
                            <input type="date" class="form-control" name="publishedDate" required>
                        </div>
                        

                     

                        <div class="form-group">
                            <div class="form-group green-border-focus">
                                <label for="exampleFormControlTextarea5">Discription</label>
                                <textarea class="form-control" name="discription" id="discription" rows="3"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="col col-lg-6">

                        <div class="form-group">
                            <label class="form-control-label" for="inputState">Category</label>
                            <select id="category" class="form-control" name="category">
                                <option>Information Tec</option>
                                <option>Law</option>
                                <option>Managment</option>
                                <option>Bio Science</option>
                                <option selected>Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Price</label>
                            <input type="number" class="form-control" name="price" placeholder="Rs." required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Amount</label>
                            <input type="number" class="form-control" name="amount" required>
                        </div>

                        <!-- cove photo upload -->
                        <div class="form-group" style="padding-top: 10px;">
                            <div class="custom-file mb-3" >
                                <input type="file" class="custom-file-input" id="customFile" name="file" required>
                                <label class="custom-file-label" for="customFile">Choose Cover Photo</label>
                              </div>
                             </div>

                    </div>

                </div>

                    <div class="col-lg-12 loginbttm">
                        <div class="col-lg-12  lg-padding">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Add Book
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- Footer -->

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
<script>
    // name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>

</body>

</html>