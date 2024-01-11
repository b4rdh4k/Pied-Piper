<?php

$hostname = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "register_login";
$conn = mysqli_connect($hostname,$dbuser, $dbpassword,$dbname);

if(!$conn){
    echo "something went wrong";
}
?>