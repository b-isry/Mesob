<?php
session_start();
require_once('connect.php');

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['Ftype'];
    $description = $_POST['description'];

    $updateMenu = "UPDATE menu SET name = '$name', price = '$price', type = '$type', description = '$description' WHERE id = '$id'";
    $menu = mysqli_query($con, $updateMenu);
    if ($menu) {
        header('Location: admin.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
