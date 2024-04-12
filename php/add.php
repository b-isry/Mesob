<?php
session_start();
require_once('connect.php');

$name = $_POST['name'];
$price = $_POST['price'];
$type = $_POST['Ftype'];
$description = $_POST['description'];

if(isset($_POST['submit'])){
    $insertMenu = "INSERT INTO menu (name, price, type, description, R_id) VALUES ('$name', '$price', '$type', '$description', '".$_SESSION['id']."')";
    $menu = mysqli_query($con, $insertMenu);
    
    if($menu){
        header('Location: admin.php');
        exit();
    }
    else{
        echo "Error: " . mysqli_error($con); 
    }
}
?>