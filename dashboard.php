<?php
session_start();
include './connection.php';

// echo "value of ".$_COOKIE['cobra'];
// die;

if (!isset($_COOKIE['cobra'])) {
    header("location: http://localhost/project/login/login_index.php");
    exit();
}
$id = $_COOKIE['cobra'];
$fetch_img = "SELECT image FROM COOKIE_TASK WHERE id = '$id'";
$result_img = mysqli_query($conn, $fetch_img);
$data = mysqli_fetch_assoc($result_img);
// print_r($data);die;
if ($data && !empty($data['image'])) {
    echo " <img src='./upload/" . $data['image'] . "' style='width:302px ;position: absolute; left: 20rem;
    top: 9.9rem;'> ";
} else {
    echo " <img src='./assets/user.png' style='width: 50px;
    ";
}

$fetch = "SELECT * FROM COOKIE_TASK WHERE id ='$id'";
$result =  mysqli_query($conn, $fetch);
$nums = mysqli_num_rows($result);
if ($nums > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "
   <div class='profile'>
   <div class='profile-text'>
   <h1>" . $row['name'] . "</h1>
   <p>" . $row['mobile'] . "</p>
   <h4>" . $row['email'] . "</h4>
   
   </div>
   </div>
   
   
   ";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .profile {
            margin: auto;
            height: 67%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    
    <div class="display-img">
        <?php

        ?>
    </div>
    <div class="setbtn d-flex justify-content-between mx-5 p-4">
        <div class="bottom-button">
            <a href="./upload/image_index.php"><button type="button" class="btn btn-primary">upload photo</button></a>
            <a href="./update/update_index.php"><button type="button" class="btn btn-secondary">update </button></a>
        </div>
        <div class="button-corner">
            <a href="./password/password_index.php"> <button type="button" class="btn btn-warning">Change Password</button></a>
            <a href="./logout.php"><button type="button" class="btn btn-danger">log out</button></a>

        </div>
    </div>

</body>

</html>