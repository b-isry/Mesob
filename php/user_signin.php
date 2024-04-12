<?php
require_once("connect.php");


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = password_hash($password, PASSWORD_ARGON2ID);

    $insertUser = "INSERT INTO user(name,phone, email, address, password) VALUES ('$name', '$phone', '$email', '$address','$password')";
    $result = mysqli_query($con, $insertUser);
    if ($result) {
        header("Location: ../index.html");
        exit();
    } else {
        echo "Error " . mysqli_error($con);
        exit();
    }
} else {
    header("location: ../index.html");
};

?>