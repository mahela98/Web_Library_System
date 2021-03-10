<?php
   session_start();
   $userID =$_SESSION['userId'];
   
if(isset($_SESSION['userId'])) {
    echo $userID;
   

if (isset($_POST["submit"])) {
    echo "submit";
    $fullName = $_POST["fullName"];
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $mobile = $_POST["mobile"];
    require_once 'dbh-inc.php';
    
    function emptyUserInput($userName,$fullName){
        $result;
       if (empty($userName)||empty($fullName)) {
          $result= true; 
       }else{
           $result= false;
       }
       return $result;
    }

    function editUser($conn,$userID,$fullName,$userName,$userEmail,$mobile){

        $sql = " UPDATE users SET userEmail = '$userEmail',fullName= '$fullName', userName='$userName' ,mobile ='$mobile'
        WHERE userId = '$userID'; ";
    
        if (mysqli_query($conn, $sql)) {
            header('location:../profile-edit.php?message='.$userId.' &error=usereditedsuccessfuly');
           
        } else {
            echo "Error updating record: " . mysqli_error($conn);
          }
        exit();
    }
    
    if (emptyUserInput($userName,$fullName)) {
        header('location:../profile-edit.php?message='.$userId.' &error=emptyInputbookNameinedit');
        exit();
    }

    editUser($conn,$userID,$fullName,$userName,$userEmail,$mobile);

}
else{
header("location:../profile-edit.php?error=notworkinguserEdit");
    exit();
}
}

else{
    header("location:../../login.php?error=LoginFirst"); 
}