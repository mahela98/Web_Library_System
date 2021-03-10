<!DOCTYPE html>
<html>
<head>
    <title>Book Browser-Sign-In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="cssf/signup.css" rel="stylesheet" type="text/css" media="all" />
    <style>
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

<body>
    <?php
  include 'navigation-bar.php';
  ?>
    <div class="mybackground" style="  background-image: linear-gradient(to bottom right, rgba(0, 132, 255, 0.733), rgba(255, 255, 0, 0.705)) !important;
    ">
        <?php
include 'error-message.php';
?>
        <!-- main -->
        <div class="container" style="padding-top:75px;">
            <div class="row">
                <div class="col-lg-3 col-md-2"></div>
                <div class="col-lg-6 col-md-8 login-box">
                    <div class="col-lg-12 login-title">
                        Register
                    </div>
                    <div class="col-lg-12 login-form">
                        <div class="col-lg-12 login-form">

                            <form name="myForm" action="includes/signup-inc.php" onsubmit="return validateForm();"
                                method="POST">
                                <div class="form-group">
                                    <label class="form-control-label">EMAIL</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">FULL NAME</label>
                                    <input type="text" class="form-control  input-field" name="name" id="name" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">USER NAME</label>
                                    <input type="text" class="form-control input-field" name="userName" id="username"
                                        maxlength="20" minlength="6" required>
                              
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">PASSWORD</label>
                                    <input type="password" class="form-control  input-field" id="password"
                                        name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}"
                                        oninvalid="this.setCustomValidity('Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters')"
                                        oninput="this.setCustomValidity('')">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">RE-ENTER YOUR PASSWORD</label>
                                    <input type="password" class="form-control  input-field" name="passwordRep" required
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}"
                                    oninvalid="this.setCustomValidity('Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters')"
                                    oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col-lg-12 loginbttm">
                                    <div class="col-lg-12  lg-padding">
                                        <button type="submit" id="submit" class="btn btn-primary btn-lg btn-block"
                                            name="submit">Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="col-6 ">
                                <a href="login.php" class="already">
                                    <p>Already have an account</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php
  include "credits-layer.php";
  ?>


    <script src="javaScript/userSignIn-Validation.js"></script>

<!-- bootstrap and jquery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>