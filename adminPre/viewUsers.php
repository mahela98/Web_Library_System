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
    <title>User Search</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="../cssf/body.css" rel="stylesheet">
<link rel="stylesheet" href="../cssf/searchbar_with_options.css">

<body  style="background-image: linear-gradient(to bottom right, rgb(0, 180, 156), rgb(34, 0, 46)) !important;
   ">

<div >

    <?php
  include 'admin-nav-bar.php';

  ?>
      <?php

include '../error-message.php';

?>

    <section class="search-sec" style="padding-top:70px; padding-bottom:50px">
        <div class="container">
        <!--  -->
            <form action="viewUsers-inc.php" method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-12 p-0">
                                <input type="text" class="form-control search-slt" placeholder="Enter Search"
                                    name="quary1">
                            </div>
                          
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <button type="submit" class="btn btn-danger wrn-btn" name="submit">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

<!-- table section -->
    <div class="row">

    <div class="col-1"></div>
        
        <section class="col-10">
        <?php
        include "user-view-inc.php";

            ?>
        </section>
    </div>
    </div>
    </div>
    <?php
  include "admin-footer.php";
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