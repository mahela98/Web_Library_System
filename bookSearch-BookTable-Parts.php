<?php 

require_once 'adminPre/admin-includes/addBookFunctions-ini.php';
require_once "includes/dbh-inc.php";
$bookNumber=1;
if (isset($_POST["submit"])) {

    $quary = $_POST["quary"];

$sql = "SELECT * FROM books WHERE bookName LIKE  '%$quary%'  OR  authorName LIKE  '%$quary%'";
$result = $conn->query($sql);
// OR  authorName LIKE='$quary' '$quary'



if (mysqli_num_rows($result) > 0) {

  echo '<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">
        <h6>#</h6>
      </th>
      <th scope="col">
        <h6>Book Name</h6>
      </th>
      <th scope="col">
        <h6>Author Name</h6>
      </th>
      <th scope="col">
      <h6>Availability</h6>
    </th>
    </tr>
  </thead>  <tbody>';
  
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if ($row["bookAvailability"]==1) {
      $ava = 'Availabile';
    }else{ $ava = 'Not Availabile';}

    $message = $row["bookId"] ;
    echo "<tr>
    <td>". $bookNumber."</td> 
    <td> <a href='one-book-view.php?message=".$message." '>".$row["bookName"]." </a> </td> 
    <td>".$row["authorName"]."</td> 
    <td>".$ava."</td> 
    </tr> ";
$bookNumber++;
  }
  echo "</tbody> </table>";
} 

//  if the search field is empty
elseif(empty($quary)===true ){
$sql = "SELECT * FROM books";
$result = $conn->query($sql);


      if (mysqli_num_rows($result) > 0) {

        echo '<table class="table table-sm table-dark">
        <thead>
          <tr>
            <th scope="col">
              <h6>#</h6>
            </th>
            <th scope="col">
              <h6>Book Name</h6>
            </th>
            <th scope="col">
              <h6>Author Name</h6>
            </th>
            <th scope="col">
            <h6>Availability</h6>
          </th>
          </tr>
        </thead>  <tbody>';
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if ($row["bookAvailability"]==1) {
            $ava = 'Availabile';
          }else{ $ava = 'Not Availabile';}

     
    $message = $row["bookId"] ;
    echo "<tr>
    <td>".$bookNumber."</td> 
    <td> <a href='one-book-view.php?message=".$message." '>".$row["bookName"]." </a> </td> 
    <td>".$row["authorName"]."</td> 
    <td>".$ava."</td> 
    </tr> ";

    $bookNumber++;
        }
        echo "</tbody> </table>";

      } 


}
else {
  echo '<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">
        <h6>#</h6>
      </th>
      <th scope="col">
        <h6>Book Name</h6>
      </th>
      <th scope="col">
        <h6>Author Name</h6>
      </th>
      <th scope="col">
      <h6>Availability</h6>
    </th>
    </tr>
  </thead>  <tbody>

    <tr><td> 0 results found</td><td></td>  <td></td> </tr>
  </tbody>
    </table>';
  }
$conn->close(); 

} 

else{
  $sql = "SELECT * FROM books";
  $result = $conn->query($sql);
  
  
        if (mysqli_num_rows($result) > 0) {
  
          echo '<table class="table table-sm table-dark">
          <thead>
            <tr>
              <th scope="col">
                <h6>#</h6>
              </th>
              <th scope="col">
                <h6>Book Name</h6>
              </th>
              <th scope="col">
                <h6>Author Name</h6>
              </th>
              <th scope="col">
              <h6>Availability</h6>
            </th>
            </tr>
          </thead>  <tbody>';
          // output data of each row
          while($row = $result->fetch_assoc()) {
            if ($row["bookAvailability"]==1) {
              $ava = 'Availabile';
            }else{ $ava = 'Not Availabile';}
            
       
    $message = $row["bookId"] ;
    echo "<tr>
    <td>".$bookNumber."</td> 
    <td> <a href='one-book-view.php?message=".$message." '>".$row["bookName"]." </a> </td> 
    <td>".$row["authorName"]."</td> 
    <td>".$ava."</td> 
    </tr> ";
    $bookNumber++;
          }
          echo "</tbody> </table>";
  
        } 
  
  
  
  else {
    echo '<table class="table table-sm table-dark">
    <thead>
      <tr>
        <th scope="col">
          <h6>#</h6>
        </th>
        <th scope="col">
          <h6>Book Name</h6>
        </th>
        <th scope="col">
          <h6>Author Name</h6>
        </th>
        <th scope="col">
        <h6>Availability</h6>
      </th>
      </tr>
    </thead>  <tbody>
  
      <tr><td> 0 results found</td><td></td>  <td></td> </tr>
    </tbody>
  </table>';
  }
  $conn->close(); 
}