<?php
session_start();
if(!isset($_SESSION['userId'])) {
  header("location:../login.php?error=LoginFirst"); 
}
 ?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Add User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin-css/registerUser.css"   />

<style>
    .form-control-label {
    font-size: 12px;
    color: #00d9e9;
    font-weight: bold;
    letter-spacing: 1px;
  }
  .login-title {


    color: #dfdfdf !important;
  }
  .input-field:valid {
            color: rgb(4, 0, 37) !important;
        }
        .input-field:invalid {
            color: red !important;
        }
        .red {
            color: red !important;
        }
        .green {
            color: rgb(4, 0, 37) !important;
        }
</style>


</head>

<body style="  background-image: linear-gradient(to bottom right, rgb(0, 180, 156), rgb(34, 0, 46)) !important;
    ">


<?php
include 'admin-nav-bar.php';
?>
    <?php

include '../error-message.php';

?>

    <div>
        <!-- main -->
        <div class="container" style="padding-top:30px;">
            <div class="row">
                <div class="col-lg-3 col-md-2"></div>
                <div class="col-lg-6 col-md-8 login-box" style=" background-color:  #0700497a !important;
                ">
                    <div class="col-lg-12 login-title"> Add-User</div>
                    <div class="col-lg-12 login-form" >
                        <div class="col-lg-12 login-form" >
                            <form name="myForm" action="admin-includes/add-user-inc.php" method="POST" onsubmit="return validateForm();">
                                <div class="form-group">
                                    <label class="form-control-label">EMAIL</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">FULL NAME</label>
                                    <input type="text" class="form-control input-field" name="name"  maxlength="20" minlength="6" required >
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">USER NAME</label>
                                    <input type="text" class="form-control input-field" name="userName"  maxlength="20" minlength="6" required >
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">CONTACT-NUMBER</label>
                                    <input type="tel" class="form-control input-field" name="mobile" 
                                        placeholder="0771223456" pattern="[0-9]{10}"  required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">PASSWORD</label>
                                    <input type="password" class="form-control input-field" name="password" required
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}"
                                    oninvalid="this.setCustomValidity('Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters')"
                                    oninput="this.setCustomValidity('')" >
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">RE-ENTER PASSWORD</label>
                                    <input type="password" class="form-control input-field" name="passwordRep" required
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}"
                                    oninvalid="this.setCustomValidity('Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters')"
                                    oninput="this.setCustomValidity('')">
                                </div>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <label class="form-control-label">ADMIN
                                            <input class="form-check-input" type="radio" name="admin"
                                                id="yes" value="yes"> YES
                                            <input checked class="form-check-input" type="radio"
                                                name="admin" id="no" value="no"> NO
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 loginbttm">
                                    <div class="col-lg-12  lg-padding">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"
                                            name="submit">Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <?php
  include 'admin-footer.php';

  ?>

  <script src="../javaScript/userSignIn-Validation.js"></script>

<!-- bootstrap and jquery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


</body>

</html>