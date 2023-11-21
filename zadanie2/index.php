<?php
session_start();

include("connection.php");
include("functions.php");


 $_SESSION;

 $u_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 2</title>
</head>
<body>
    <h1> witaj, <?php echo $u_data['u_name'];?>.</h1>
    <p>kliknij tu, aby sie <a href="logout.php">wylogowac</p>
</body>
</html>