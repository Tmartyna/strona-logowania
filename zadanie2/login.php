<?php
session_start();

    include("connection.php");
    include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
    {

       $u_name = $_POST['u_name'];
       $password = $_POST['password'];

       if(!empty($u_name) && !empty($password) && !is_numeric($u_name))
       {
   
            $query = "select * from user where u_name = '$u_name' limit 1";

            $result = mysqli_query($con, $query);

            if($result && mysqli_num_rows($result) > 0)
                {
                    $u_data = mysqli_fetch_assoc($result);
                    if($u_data['password'] === $password)
                    {
                        $_SESSION['u_id'] = $u_data['u_id'];
                        header("Location: index.php");
                         die;
                    }
                }
                echo "zła nazwa użytkownika bądź hasło";
       }
       else
       {
        echo "prosze wpisac poprawne informacje";
       }
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
</head>
<body>
    <p>zaloguj sie</p>
    <nav id="box"> 
        <form method="post">
             <input type="text" name="u_name">
             <input type="password" name="password">
             <input type="submit" value="login">
             <p>kliknij aby sie <a href="signup.php">zarejestrowac</a></p>
        </form>
</body>
</html>