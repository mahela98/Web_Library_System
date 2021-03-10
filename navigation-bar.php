
 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark   fixed-top" style="background-color: #001b2e;">
     <div class="container">
         <a class="navbar-brand" href="bookSearch.php">Book Browser</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
             aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">


                 <?php
                //  echo isset($_SESSION['userId']);

                if(isset($_SESSION['userId'])) {

                // echo '<li class="nav-item dropdown">
                // <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                //   aria-haspopup="true" aria-expanded="false">
                //   Catagory
                // </a>
                // <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                //   style=" background-color:   #001b2e ; border: none;">
                //   <style>.mydropdown-item {
                //     color: rgb(180, 180, 180);
                //     border: none;
                //   }
                  
                //   .mydropdown-item:hover {
                //     color: rgb(255, 255, 255);
                //     background-color: rgba(15, 0, 146, 0.541);
                //   }
                //   </style>
                //   <a class="dropdown-item mydropdown-item" href="#">All </a>
                //   <div class="dropdown-divider"></div>
                //   <a class="dropdown-item mydropdown-item" href="#"> Information Tec </a>
                //   <a class="dropdown-item mydropdown-item" href="#">Managment</a>

                //   <a class="dropdown-item mydropdown-item" href="#">Law</a>
                // </div>

                // </li>';
           echo "  <li class='nav-item'> <a class='nav-link' href='borrowed-books.php'>Borrowed Books</a></li> ";
           echo "  <li class='nav-item'> <a class='nav-link' href='profile-page.php'>Profile</a></li> ";
           echo "  <li class='nav-item'> <a class='nav-link' href='contact-page.php'>Contact</a></li> "; 
           echo "  <li class='nav-item'> <a class='nav-link' href='aboutPage.php'>About</a></li> "; 
           echo "  <li class='nav-item'> <a class='nav-link' href='includes/logout-inc.php'>Logout</a></li> "; 
          }

          else{
            echo "  <li class='nav-item'> <a class='nav-link' href='login.php'>Log-In</a></li> "; 
            echo "  <li class='nav-item'> <a class='nav-link' href='signup.php'>Sign-In</a></li> "; 
            echo "  <li class='nav-item'> <a class='nav-link' href='aboutPage.php'>About</a></li> "; 
            echo "  <li class='nav-item'> <a class='nav-link' href='contact-page.php'>Contact</a></li> "; 

          
          }

          ?>


             </ul>
         </div>
     </div>
 </nav>