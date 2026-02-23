<?php

include_once('config.php');

// Get the data from the form fields
$name = $_POST['full_name'];
$email = $_POST['email'];
$plain_password = $_POST['password'];
$encrypted_password = md5($plain_password);

// echo "My Full name: " . $name . "<br>";
// echo "email: " . $email . "<br>";
// echo "password: " . $plain_password . "<br>";
// echo "Encrypted password: " . $encrypted_password;

// INSERT INTO THE DATABASE TABLE
$insertUsersQuery = mysqli_query(
    $connection,
    "INSERT INTO users(name, email, password)VALUES('$name', '$email', '$encrypted_password')"
);

if($insertUsersQuery){ ?>
    <script>
        alert("Registration successful");
        window.location.href = "./login.html";
    </script>
<?php }else{ ?>
    <script>
        alert("Registation failed");
        window.location.href = "./register.html";
    </script>
<?php }



?>