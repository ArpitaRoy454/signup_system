<?php

$db_SERVER="localhost";
$username="root";
$password="";
$database="users454";

$conn = mysqli_connect($db_SERVER, $username,$password, $database);
if(!$conn){
    echo ("Connection Faied ").mysqli_connect_error();
    exit;

}

?>