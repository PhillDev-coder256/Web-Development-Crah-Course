<?php
include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW ALL USERS</title>
</head>
<body>
    <h1>LIST OF USERS</h1>
    <table border="2" >
        <thead>
            <tr>
                <th>USER ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>DATE</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $fetchUsersQuery = mysqli_query(
                    $connection,
                    "SELECT * FROM users"
                );
                while($row = mysqli_fetch_assoc($fetchUsersQuery)){ ?>
                    <tr>
                        <td><?php echo $row['user_id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['password'] ?></td>
                        <td><?php echo $row['date'] ?></td>
                        <td><a href="?user_id=<?php echo $row['user_id']; ?>&name=<?php echo $row['name']; ?>">Update</a> | <a href="delete_user.php?user_id=<?php echo $row['user_id']; ?>&name=<?php echo $row['name']; ?>">Delete</a></td>
                    </tr>
                <?php }
            ?>
        </tbody>
    </table>
</body>
</html>