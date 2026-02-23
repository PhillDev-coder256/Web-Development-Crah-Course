<?php
//  This file will establish a database connection

// We need 4 variables to connnect to our database
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "intern_sunday";

// Connect to the database
$connection = mysqli_connect(
    $servername,
    $username,
    $password,
    $databasename
);

// Check if connection connection was successful
if($connection){
    // echo "Connection successful";
}else{
    echo "Connection failed";
}

?>