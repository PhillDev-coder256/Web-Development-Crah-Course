<?php

include_once('config.php');

// Get the parameters
$user_id = $_GET['user_id'];
$name = $_GET['name'];

$deleteUserQuery = mysqli_query(
    $connection,
    "DELETE FROM users WHERE user_id = '$user_id'"
);

if($deleteUserQuery){ ?>
    <script>
        alert("User deleted successfully");
        window.location.href = "view_users.php";
    </script>
<?php }else{ ?>
    <script>
        alert("User delete failed");
        window.location.href = "view_users.php";

    </script>
<?php }

?>