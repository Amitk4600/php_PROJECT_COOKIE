<?php
session_start();
include '../connection.php';


if (!isset($_COOKIE['cobra'])) {
    header("location: http://localhost/project/login/login_index.php");
    exit();
}

if (isset($_POST['submit'])) {
    $id = $_COOKIE['cobra'];

    $file = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];

    

    // check file size and type

    if (($file_size > 1048576 || $file_size < 2040)) {
        $_SESSION['error'] = "File must be less than 1MB and greater than 200KB.";
        header("location: http://localhost/project/upload/image_index.php");
        exit();
    } elseif (
        ($file_type != 'image/jpg') &&
        ($file_type != 'image/jpeg') &&
        ($file_type != 'image/png') &&
        ($file_type != 'image/gif')
    ) {
        $_SESSION['error'] = "Invalid file type. Only  JPG, GIF and PNG types are accepted.";
        header("location: http://localhost/project/upload/image_index.php");
        exit();
    } else {
        $folder = "imageData/" . $file;

        if (move_uploaded_file($tmp_name, $folder)) {
            $sql = "UPDATE COOKIE_TASK SET image = '$folder' WHERE id = '$id'";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                $_SESSION['alert'] = "Image upload successful.";
                header("location: http://localhost/project/upload/image_index.php");
                exit();
            }
        } else {
            $_SESSION['error'] = "Image upload failed.";
            header("location: http://localhost/project/upload/image_index.php");
            exit();
        }
    }
}
if (isset($_POST['home'])) {
    header("location: http://localhost/project/dashboard.php");
    exit();
}
