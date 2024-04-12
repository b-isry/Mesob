<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $type = $_POST['type'];
    $description = $_POST['about'];
    $open_hours = $_POST['time'];
    $password = $_POST['password'];

    $Fname = $_POST['Fname'];
    $price = $_POST['price'];
    $Ftype = $_POST['Ftype'];
    $description = $_POST['description'];

    $password = password_hash($password, PASSWORD_ARGON2ID);

    $insertRest = "INSERT INTO restaurants(name, email, phone, type, description, open_hours, password) VALUES ('$name', '$email', '$phone', '$type', '$description', '$open_hours', '$password')";
    $result = mysqli_query($con, $insertRest);

    if ($result) {
        $restaurantId = mysqli_insert_id($con);

        $insertAddress = "INSERT INTO address(R_id, address) VALUES ('$restaurantId', '$address')";
        $add = mysqli_query($con, $insertAddress);
        if ($add) {
            $insertMenu = "INSERT INTO menu(name, price, type, description, R_id) VALUES ('$Fname', '$price', '$Ftype', '$description', '$restaurantId')";
            $menu = mysqli_query($con, $insertMenu);
            if ($menu) {
                header("Location: ../menu.html");
                exit();
            } else {
                echo "Error: " . mysqli_error($con);
                exit();
            }
        } else {
            echo "Error: " . mysqli_error($con);
            exit();
        }
    } else {
        echo "Error: " . mysqli_error($con);
        exit();
    }
}
