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
    <title>Profile Edit</title>
    <link rel="stylesheet" href="profile-page02.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>

  input:focus {
            outline: none;
            box-shadow: 0 0 0;

            border-right: 5px solid rgba(15, 175, 0, 0.541);

        }
      .myinp01 {
            width: 100%;
            border: none;
        }

        .input-field:valid {
            color: rgb(255, 255, 255) !important;
        }
        .input-field:invalid {
            color: red !important;
        }
        .red {
            color: red !important;
        }
        .green {
            color: rgb(255, 255, 255) !important;
        }

</style>

</head>

<body style="background-image: url('images/study.jpg');  background-repeat: no-repeat;
background-size: cover;  background-color:#020016e7; ">

    <section style="  background-image: linear-gradient(to bottom right, rgba(0, 132, 255, 0.733), rgba(255, 255, 0, 0.705)) !important;
    " >
        <div style="  padding-bottom: 0px;">

            <?php
            include 'navigation-bar.php';
            ?>
            <?php 

$userID=$_SESSION["userId"];
require_once "includes/dbh-inc.php";
$sql = "SELECT * FROM users WHERE userId = '$userID'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$imageURL = 'profile-images/'.$row["imageURL"];
?>
            <div style="padding-bottom: 70px;"></div>
            <div class="container">
                <div class="main-body">
                    <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                    <img src="<?php echo $imageURL; ?>" alt="Admin" class="rounded-circle" width="150"
                                        height="150"/>
                                       
                                        
                                        <?php
                                        echo '
                                    <div class="mt-3">
                                        <h4>'.$row["userName"].'</h4>   
                                        <p class="text-secondary mb-1">Contact : '.$row["mobile"].'</p>
                                        <p class="text-muted font-size-sm" </p> </div> </div> </div> </div> </div> <div
                                            class="col-md-8">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                               
                                                <form action="includes/profile-edit-inc.php" method="POST">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Full Name</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                        <input class="myinp01"
                                                        type="text" value="'.$row["fullName"].'"  name="fullName" required>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">User Name</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                        <input class="myinp01"
                                                        type="text" value="'.$row["userName"].'"  name="userName" minlength="6" maxlength="20"  required>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Email</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                        <input class="myinp01"
                                                        type="email" value="'.$row["userEmail"].'"  name="userEmail" id= "userEmail" required>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Mobile</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                        <input class="myinp01"
                                                        type="tel" value="'.$row["mobile"].'"  name="mobile" pattern="[0-9]{10}"  required>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                     
                                                        <div class="col-10">
                                                           
                                                        </div>
                                                        <div class="col-2 text-secondary" style="padding-right: 15px; padding-left: 5px; ">
                                                            <button type="submit"  name="submit" style="padding:2px; padding-right: 15px; padding-left: 15px;"
                                                              class="btn btn-primary">
                                                            Save
                                                            </button>

                                                            
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        
                                        </div>
                                        
                                    </div>  ';

                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div style="
    background-color: rgba(255, 255, 255, 0.932);
     padding: 5px;
     border: none;
     outline: none;
     ">
            <h5 style="padding-top: 2px; text-align: center;">Borrowed Books</h5>

        </div>


        <div style="padding-bottom: 10px; padding-top: 10px;">

            <?php
    include 'item-box.php';

?>
        </div>

        </div>


        <?php
    include 'credits-layer.php';
    
    ?>
        </section>

    
<!-- bootstrap and jquery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>