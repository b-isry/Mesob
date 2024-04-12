<?php

$server = "localhost";
$user = 'root';
$password = '';
$database = 'project';

$con = mysqli_connect($server, $user, $password, $database);

if(!$con){
    die("Can not connect to database");
}else
{
    echo "connected successfully!";
}

?>