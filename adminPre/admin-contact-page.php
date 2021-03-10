<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../cssf/aboutPage.css">
    <style>
td{
    padding-bottom: 2px;
}
    </style>
</head>

<body>
    <!-- navigation -->
    <?php
include 'admin-nav-bar.php';

    ?>
    <div style="  background-image: linear-gradient(to bottom right, rgba(0, 132, 255, 0.733), rgba(255, 255, 0, 0.705)) !important;
    ">
        <div class="container">
            <!-- col-md-8 col-sm-6 -->
            <div class="row" style=" padding-top: 70px; ">
                <div class="col-12">
                    <div class="aboutus-content ">
                        <h1>BOOK <span>Browser</span></h1>
                        <h4>Contact</h4>
                    </div>
                </div>
            </div>

            <!-- second row -->
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">

                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <!-- <svg class="bd-placeholder-img" width="100%" height="250" xmlns="" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg> -->
                                <img src="../profile-images/profile.png" alt="image" srcset="" width="100%" height="auto">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Info</h5>
                                    <p class="card-text">
                                        <table>
                                            <tr>
                                                <td>  <strong> Name  </strong> </td>
                                                <td>:</td>
                                                <td>  E.A.C.M.Siriwardana</td>
                                            </tr>
                                            <tr>
                                                <td>  <strong> Email </strong> </td>
                                                <td>:</td>
                                                <td>  chandimaofficial@outlook.com</td>
                                            </tr>
                                            <tr>
                                                <td>  <strong> Mobile </strong> </td>
                                                <td>:</td>
                                                <td> 0766537018</td>
                                            </tr>
                                            <tr>
                                                <td>  <strong>Address  </strong> </td>
                                                <td>:</td>
                                                <td>  Colombo 03/Sri Lanka</td>
                                            </tr>
                                        </table>
                                       
                                    </p>
                                    <p class="card-text"><small class="text-muted"></small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1981.6366414359366!2d79.96195906297396!3d6.612928436451942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1614831433051!5m2!1sen!2slk"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>


        </div>















        <!-- Footer -->
        <div style="left: 0; bottom: 0; width: 100%; text-align: center; ">

            <footer class="py-5" style="background-color: #04001de1; ">
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