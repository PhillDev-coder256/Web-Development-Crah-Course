<?php

include_once('config.php');

// First pick the the login details from the logiin form
$email = $_POST['email'];
$password = $_POST['password'];
$encrypted_password = md5($password);

// Check if the account exists
$checkIfUserEmailExistsQuery = mysqli_query(
    $connection,
    "SELECT * FROM users WHERE email = '$email'"
);

$num_rows = $checkIfUserEmailExistsQuery->num_rows;

// echo $num_rows;

if($num_rows > 0){ 
    $checkForUserPasswordQuery = mysqli_query(
        $connection,
        "SELECT * FROM users WHERE email = '$email' AND password = '$encrypted_password'"
    );

    $num_rows2 = $checkForUserPasswordQuery->num_rows;

    if($num_rows2 > 0){ ?>
        <script>
            alert("Login is successful");
            window.location.href = "./login.html";

        </script>
    <?php }else{ ?>
        <script>
            alert("Wrong credentials, check your password again");
            window.location.href = "./login.html";
        </script>
    <?php }
?>
    
<?php }else{ 
    ?>
    <script>
        alert("User account not found, please register");
        window.location.href = "./register.html";
    </script>
<?php }

?>