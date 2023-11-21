<?php
function check_login($con)
{ 
    if(isset($_SESSION['u_id']))
    {
        $id = $_SESSION['u_id'];
        $query = "select * from user where u_id = '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $u_data = mysqli_fetch_assoc($result);
            return $u_data;
        }
    }
    header("Location: login.php");
    die;
};

function random_num($lenght)
{
  $text = "";
  if($lenght < 5)
  {
    $lenght = 5;
  }
  $len = rand(4,$lenght);


  for ($i=0; $i < $len; $i++){
    $text .= rand(0,9);
  }
  return $text;
};