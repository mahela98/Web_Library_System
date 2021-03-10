<style>
    .alert {
        padding: 9px;
        background-color: #e7003a;
        color: white;
        opacity: 1;
        transition: opacity 0.6s;
        margin: 0px;
        margin-top: 55px;
        margin-bottom: 0px;
        border: 100%;
        border-radius: 1px;

    }

    .alert.success {
        background-color: #09b40f;
        padding: 9px;
    }


    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: rgb(126, 0, 0);
    }
</style>


<?php
   if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyInput") {
                         echo '
                          <div class="alert fixed-top">
                                        <span class="closebtn">&times;</span>  
                                        <strong>Error !</strong>  <span>  Enter username and password.</span>
                                      </div>';
                                  }
                                  else if ($_GET["error"] == "UserDoesNotExists") {
                                   echo '
                                   <div class="alert fixed-top">
                                     <span class="closebtn">&times;</span>  
                                     <strong>Error !</strong>  <span>  Entered Username or Password is Wrong.</span>
                                   </div>';

                                         }

                                         else if ($_GET["error"] == "LoginFirst") {
                                          echo '
                                          <div class="alert fixed-top">
                                            <span class="closebtn">&times;</span>  
                                            <strong>Error !</strong>  <span>  LOGIN first....!</span>
                                          </div>';
       
                                                }

                                                else if ($_GET["error"] == "emptyInputbookNameinedit") {
                                                  echo '
                                                  <div class="alert fixed-top">
                                                    <span class="closebtn">&times;</span>  
                                                    <strong>Error !</strong>  <span>  Enter Book Name and Author name....!</span>
                                                  </div>';
               
                                                        }

                                         else if ($_GET["error"] == "wronglogin") {
                                            echo '
                                            <div class="alert fixed-top">
                                              <span class="closebtn">&times;</span>  
                                              <strong>Error !</strong>  <span>  Entered Username or Password is Wrong.</span>
                                            </div>';
                                                 }
                                                 else if ($_GET["error"] == "adminBookDeleted") {
                                                  echo '
                                                  <div class="alert fixed-top">
                                                    <span class="closebtn">&times;</span>  
                                                    <strong>Book Deleted !</strong>
                                                  </div>';
                                                       }
                                                 else if ($_GET["error"] == "successful") {
                                                    echo '
                                                    <div class="alert success fixed-top">
                                                    <span class="closebtn">&times;</span>
                                                    Log-in successful.. !
                                                </div>';
                                                         }
                                                        else if ($_GET["error"] == "invalidUserName") {
                                                            echo '
                                                            <div class="alert fixed-top">
                                                              <span class="closebtn">&times;</span>  
                                                              <strong>Error !</strong>  <span>  Enter a valid Username.</span>
                                                            </div>';
                                                              }
                                                 
                                                         else if ($_GET["error"] == "invalidEmail") {
                                                            echo '
                                            <div class="alert fixed-top">
                                              <span class="closebtn">&times;</span>  
                                              <strong>Error !</strong>  <span>  Enter a valid Email address.</span>
                                            </div>';
                                                        }
                     
                                                         else if ($_GET["error"] == "passwordsdosentmatch") {
                                                            echo '
                                                            <div class="alert fixed-top">
                                                              <span class="closebtn">&times;</span>  
                                                              <strong>Error !</strong>  <span>  Entered passwords does not match. </span>
                                                            </div>';
                                                            }
                     
                                                             else if ($_GET["error"] == "userNameTaken") {
                                                                echo '
                                                                <div class="alert fixed-top">
                                                                  <span class="closebtn">&times;</span>  
                                                                  <strong>Error !</strong>  <span>  Entered email is already taken.</span>
                                                                </div>';
                                                                }
                                                                else if ($_GET["error"] == "signedin") {
                                                                  echo '
                                                                  <div class="alert success fixed-top">
                                                                  <span class="closebtn">&times;</span>
                                                                  sign-in successful.. !
                                                              </div>';
                                                                  }

                                                                  else if ($_GET["error"] == "emptyBNandANInput") {
                                                                    echo '
                                                                    <div class="alert fixed-top">
                                                                      <span class="closebtn">&times;</span>  
                                                                      <strong>Error !</strong>  <span>  Enter Book-name and Author-name.</span>
                                                                    </div>';
                                                                    }
                                                                    else if ($_GET["error"] == "errorInChangingPWEnteredPWIsWrong") {
                                                                      echo '
                                                                      <div class="alert fixed-top">
                                                                        <span class="closebtn">&times;</span>  
                                                                        <strong>Error !</strong>  <span> In changing password..!</span>
                                                                      </div>';
                                                                      }
                                                                    else if ($_GET["error"] == "successfullyBookAdded") {
                                                                      echo '
                                                                      <div class="alert success fixed-top">
                                                                      <span class="closebtn">&times;</span>
                                                                      Book successfuly added.. !
                                                                  </div>';
                                                                      }
                                                                      else if ($_GET["error"] == "userAdded") {
                                                                        echo '
                                                                        <div class="alert success fixed-top">
                                                                        <span class="closebtn">&times;</span>
                                                                        User successfuly added.. !
                                                                    </div>';
                                                                        }
                                                                        else if ($_GET["error"] == "bookeditedsuccessfuly") {
                                                                          echo '
                                                                          <div class="alert success fixed-top">
                                                                          <span class="closebtn">&times;</span>
                                                                          Book successfuly added.. !
                                                                      </div>';
                                                                          }
                                                                          else if ($_GET["error"] == "successfullyBorrowed") {
                                                                            echo '
                                                                            <div class="alert success fixed-top">
                                                                            <span class="closebtn">&times;</span>
                                                                            Book successfuly Borrowed.. !
                                                                        </div>';
                                                                            }

                                                                          else if ($_GET["error"] == "bookReturnedSuccessfully") {
                                                                            echo '
                                                                            <div class="alert success fixed-top">
                                                                            <span class="closebtn">&times;</span>
                                                                            Book successfuly Returned.. !
                                                                        </div>';
                                                                            }
                                                                            else if ($_GET["error"] == "passwordeChangedSuccessfuly") {
                                                                              echo '
                                                                              <div class="alert success fixed-top">
                                                                              <span class="closebtn">&times;</span>
                                                                              Password Changed Successfuly.. !
                                                                          </div>';
                                                                              }

                                                                      else if ($_GET["error"] == "BookIsInTheDatabase") {
                                                                        echo '
                                                                        <div class="alert fixed-top">
                                                                          <span class="closebtn">&times;</span>  
                                                                          <strong>Error !</strong>  <span>  Book is already added </span>
                                                                        </div>';
                                                                        }
                               }   

                               ?>

<script>
    var close = document.getElementsByClassName("closebtn");
    var i;

    for (i = 0; i < close.length; i++) {
        close[i].onclick = function () {
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function () {
                div.style.display = "none";
            }, 500);
        }
    }
</script>