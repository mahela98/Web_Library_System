
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



<body style=" background-image: url('images/study.jpg');  background-repeat: no-repeat;
  background-size: cover;">

      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark   fixed-top" style="background-color: #001b2e;">
        <div class="container">
            <a class="navbar-brand" href="#">Book Browser</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class='nav-item'> <a class='nav-link' href='#'>About</a></li>
                    <li class='nav-item'> <a class='nav-link' href='login.php'>Log-In</a></li>
                    <li class='nav-item'> <a class='nav-link' href='signup.php'>Sign-In</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div style="  background-image: linear-gradient(to bottom right, rgba(0, 132, 255, 0.733), rgba(255, 255, 0, 0.705)) !important;
    height: 100vh; ">
        //thankyou part
        <div style="padding-top: 25vh;">
            <div class=" text-center">
                <?php

if (isset($_POST["submit"])) {
    //process verification
    $vkey = $_POST['tPageVKEY'];
    require_once "includes/dbh-inc.php";
    require_once 'includes/functions-ini.php';

    $sql = "SELECT * FROM users WHERE verified = 0 AND vkey = ?;";

            $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("location: ../signup.php?error=stmtFaild1");
            exit();
        }
        mysqli_stmt_bind_param($stmt,"s",$vkey);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

    if($resultData->num_rows==1){
        //validate email
        $sql = " UPDATE users Set verified = 1 WHERE vkey = '$vkey' LIMIT 1";

        if (mysqli_query($conn, $sql)) {
            echo "<h1 class='display-3'>Congratulations!</h1>
            <p class='lead'><strong>Your account is verified</strong> </p>"; 
        }else{
            echo mysqli_error($conn);
            echo "<h1 class='display-3'>ERROR!</h1>
            <p class='lead'><strong>error</strong> </p>";
        }
    }else{
        // echo "This account is invalid or already verified";
        echo "<h1 class='display-3'>Error!</h1>
            <p class='lead'><strong>This validation key is invalid or already verified</strong> </p>";
    }
}else{
    die("problem in verification link 404");
}

                ?>
                <hr>
                <p>
                    Having trouble? <a href="">Contact us</a>
                </p>
                <p class="lead">
                    <a class="btn btn-primary btn-sm" href="login.php" role="button">Log-In</a>
                </p>
            </div>

        </div>





        <div style="left: 0; bottom: 0; width: 100%; text-align: center; position: fixed;">

            <footer class="py-5" style="background-color: #060221c9; ">
                <div class="container">
                    <p class="m-0 text-center text-white">Copyright &copy; Book Browser 2020 <br>Made By EACMS</p>
                </div>
            </footer>
        </div>

    </div>



 
<!-- bootstrap and jquery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


</body>

</html>