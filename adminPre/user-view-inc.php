
<?php 
// echo 'loarded--inc';
require_once 'admin-includes/addBookFunctions-ini.php';
require_once "../includes/dbh-inc.php";

if (isset($_POST["submit"])) {

    $quary = $_POST["quary1"];

$sql = "SELECT * FROM users WHERE userName LIKE  '%$quary%'  OR  userEmail LIKE  '%$quary%'"; // OR  fullName LIKE  '%$quary%'
$result = $conn->query($sql);




if (mysqli_num_rows($result) > 0) {

  echo '<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">
        <h6>User Id</h6>
      </th>
      <th scope="col">
        <h6>User Name</h6>
      </th>
      <th scope="col">
        <h6>Email</h6>
      </th>
      <th scope="col">
      <h6>Contact Number</h6>
    </th>
    </tr>
  </thead>  <tbody>';
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>".$row["userId"]."</td> 
    <td>".$row["userName"]."</td> 
    <td>".$row["userEmail"]."</td> 
    <td>".$row["mobile"]."</td> 
    </tr>";

  }
  echo "</tbody> </table>";
} 

//  if the search field is empty
elseif(empty($quary)===true ){
$sql = "SELECT * FROM users";
$result = $conn->query($sql);


      if (mysqli_num_rows($result) > 0) {

       
  echo '<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">
        <h6>User Id</h6>
      </th>
      <th scope="col">
        <h6>User Name</h6>
      </th>
      <th scope="col">
        <h6>Email</h6>
      </th>
      <th scope="col">
      <h6>Contact Number</h6>
    </th>
    </tr>
  </thead>  <tbody>';
        // output data of each row
        while($row = $result->fetch_assoc()) {
          
          echo "<tr>
          <td>".$row["userId"]."</td> 
    <td>".$row["userName"]."</td> 
    <td>".$row["userEmail"]."</td> 
    <td>".$row["mobile"]."</td> 
 
          </tr>";
        }
        echo "</tbody> </table>";

      } 


}

// if there is no data on in that name
elseif(mysqli_num_rows($result) === 0) {
  echo '<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">
        <h6>User Id</h6>
      </th>
      <th scope="col">
        <h6>User Name</h6>
      </th>
      <th scope="col">
        <h6> Email</h6>
      </th>
      <th scope="col">
      <h6>Contact Number</h6>
    </th>
    </tr>
  </thead>  <tbody>

    <tr><td> 0 results found</td><td></td>  <td></td> </tr>
  </tbody>
    </table>';
  }
  else{
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
   
      echo '<table class="table table-sm table-dark">
      <thead>
        <tr>
          <th scope="col">
            <h6>User Id</h6>
          </th>
          <th scope="col">
            <h6>User Name</h6>
          </th>
          <th scope="col">
            <h6>Email</h6>
          </th>
          <th scope="col">
          <h6>Contact Number</h6>
        </th>
        </tr>
      </thead>  <tbody>';
            // output data of each row
            while($row = $result->fetch_assoc()) {
              
              echo "<tr>
              <td>".$row["userId"]."</td> 
        <td>".$row["userName"]."</td> 
        <td>".$row["userEmail"]."</td>  
        <td>".$row["mobile"]."</td> 

              </tr>";
            }
            echo "</tbody> </table>";
  }
$conn->close(); 
} 

else{
  $sql = "SELECT * FROM users";
  $result = $conn->query($sql);
 
    echo '<table class="table table-sm table-dark">
    <thead>
      <tr>
        <th scope="col">
          <h6>User Id</h6>
        </th>
        <th scope="col">
          <h6>User Name</h6>
        </th>
        <th scope="col">
          <h6>Email</h6>
        </th>
        <th scope="col">
        <h6>Contact Number</h6>
      </th>
      </tr>
    </thead>  <tbody>';
          // output data of each row
          while($row = $result->fetch_assoc()) {
            
            echo "<tr>
            <td>".$row["userId"]."</td> 
            <td>".$row["userName"]."</td> 
            <td>".$row["userEmail"]."</td>  
            <td>".$row["mobile"]."</td> 

            </tr>";
          }
          echo "</tbody> </table>";
  
        
          $conn->close(); 
          
}
