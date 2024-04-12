<?php

    session_start();
    require_once('connect.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];


        $checkUser = "SELECT * FROM user WHERE name = '$name'";

        $result = mysqli_query($con, $checkUser);
        $row = mysqli_fetch_assoc($result);



        if(mysqli_num_rows($result)>0){
            $returnedName = $row['name'];
            $hashedPassword = $row['password'];
            $id = $row['id'];

            if(password_verify($password,$hashedPassword)){

                //if password match
                $_SESSION['userId'] = $id; 
                header('Location: ../index.html');
                exit();

            }else{
                echo "Name or Password is incorrect";
            }

        }

    }else{
        echo "user is not registered!";
    }

?>