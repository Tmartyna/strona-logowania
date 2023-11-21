<?php

session_start();

if(isset($_SESSION['u_id']))
{
    unset($_SESSION['u_id']);
}
header("Location: login.php");
die;