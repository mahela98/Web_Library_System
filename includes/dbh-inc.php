<?php

$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "login_system";

$conn = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);
if(!$conn){
die("connection Faild" .mysqli_connect_error());
} else{
    // echo "connected to the database";
}
