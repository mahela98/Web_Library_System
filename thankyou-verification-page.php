<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thankyou !</title>
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
        <div style="padding-top: 15vh;">
            <div class=" text-center">
                <h1 class="display-3">Thank You!</h1>
                <p class="lead"><strong>Please check your email</strong> for the verfication key and for further
                    instructions .</p>

                <section class="search-sec ">
                    <div class="container ">
                        <form action="verified.php" method="post">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8 col-10 ">
                                    <div class="row">
                                        <div class=" col-lg-8 col-12 p-0" style="align-items: center !important;">
                                            <input type="text" class="form-control search-slt"
                                                placeholder=" verfication key" name="tPageVKEY">
                                        </div>
                                        <div class="col-lg-4 col-12 p-0">
                                            <button type="submit" class="btn btn-info  btn-block"
                                                name="submit">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </section>


                <hr>
                <p>
                    Having trouble? <a href="">Contact us</a>
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