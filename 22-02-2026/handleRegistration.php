<?php
include_once('config.php');

// Pick value from the input fields
$fullname = $_POST['firstname'];
$email = $_POST['email'];
$plain_password = $_POST['password'];

$encrypted_password = md5($plain_password);

// INSERT THE DATA TO THE DATABASE
$insertQuery = mysqli_query(
    $connection,
    "INSERT INTO users(name, email, password)VALUES('$fullname', '$email', '$encrypted_password')"
);


if($insertQuery){ ?>
    <script>
        alert("User registered successfully");
        window.location.href = "login.html";
    </script>
<?php }else{ ?>
    <script>
        alert("User registration failed");
        window.location.href = "register.html";

    </script>
<?php }


?>