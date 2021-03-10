<?php 
$userId= $_SESSION['userId'];

require_once 'includes/dbh-inc.php';


$sql = "SELECT borrowbooks.bookId, books.bookName, books.authorName,borrowbooks.borrowDate,
borrowbooks.returnDate ,books.bookImage FROM borrowbooks 
INNER JOIN books 
ON 
borrowbooks.bookId=books.bookId 
WHERE borrowbooks.userId='$userId' AND borrowbooks.returned=0; ";

$result = $conn->query($sql);

// echo '<div class="row col-12">';
if (mysqli_num_rows($result) > 0) {
echo '<div class="col-12 row "> ';
  while($row = $result->fetch_assoc()) {
    $imageURL = 'adminPre/book-Images/'.$row["bookImage"];

    echo '
    <div class="col-md-3 mb-5 col-6 col-lg-3 ">
            <div class="card h-100" style="background-color: rgb(255, 255, 255); color: rgb(43, 0, 71);">
              <div class="card-body">
                <h5 class="card-title">'.$row["bookName"].'</h5>
'; ?>

                <img src="<?php echo $imageURL; ?>" alt="book-cover" style="width:100%;"/>

                <!-- <img src="images/23.jpg" alt="crysis" style="width:100%;" srcset=""> -->
<?php        
 echo '        
                <p class="card-text" style="font-size: 12px; color: rgb(0, 0, 92);"> 
                  Author : <strong> '.$row["authorName"].'</strong> 
                  <br/>
                  Borrowed Date : <strong> '.$row["borrowDate"].'</strong>
                  <br/>
                  Return Date : <strong> '.$row["returnDate"].'</strong>
                  </p>
                  
              </div>
              <div class="card-footer">
                <a href="one-book-view.php?message='.$row["bookId"].' " class="btn btn-primary btn-sm">View</a>
              </div>
            </div>
          </div>

          
         ';
  }
  echo " </div> ";
} 



?>