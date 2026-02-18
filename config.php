<?php
// Establish a connection to our database

// Declare variables - 4
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "intern_demo";

// Connect to the database\
$connection = mysqli_connect(
    $servername,
    $username,
    $password,
    $database_name
);

// Check if the connection was successful
if($connection){
    echo "Connection to the database successul";
}else{
    echo "Connection to the db failed";
}

?>