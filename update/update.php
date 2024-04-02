<?php
session_start();
include '../connection.php';

if (!isset($_COOKIE['cobra'])) {
    header("location: http://localhost/project/login/login_index.php");
    exit();
}


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $id = $_COOKIE['cobra'];

    
    
    $update = "UPDATE COOKIE_TASK SET name='$name',email='$email',mobile='$mobile' WHERE id = '$id'";
    $result =  mysqli_query($conn, $update);
    
   
    if ($result) {
        $_SESSION['registration_alert'] = "Update successful.";
        header("location: http://localhost/project/update/update_index.php");
        exit();
    }
}
