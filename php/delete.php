<?php
    require_once('connect.php');

    $id= $_GET['id'];

    $deleteQuery = "DELETE FROM menu WHERE id = '$id'";
    $result = mysqli_query($con, $deleteQuery);
    if($result){
    header("Location: admin.php");
    }else{
        echo "Error deleting user with an id of ".$id;
    }
?>