<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "praktyki_zadanie2";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("nie udalo sie polaczyc");

}