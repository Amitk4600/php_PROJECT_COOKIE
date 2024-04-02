<?php
session_start();
include '../connection.php';
if (!isset($_COOKIE['cobra'])) {
    header("location: http://localhost/project/login/login_index.php");
    exit();
}

if (isset($_SESSION['alert'])) {
    echo '<div style="
    color: white;
    background: green;
    position: absolute;
    top: 53%;
    padding: 5px;
    border-radius: 5px;
    ">' . $_SESSION['alert'] . '</div>';

    unset($_SESSION['alert']);
} elseif (isset($_SESSION['error'])) {
    echo '<div style="
        color: red;
        background: none; /* Set a background color here or remove this line */
        position: absolute;
        top: 53%;
        padding: 5px;
        border-radius: 5px;
        ">' . $_SESSION['error'] . '</div>';

    unset($_SESSION['error']);
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
        .upload-sec {
            position: relative;
            top: 8rem;
            gap: 15px;
        }

        .display-img {

            position: relative;
            top: 4rem;
            left: 45%
        }
    </style>
</head>

<body>
    <div class="display-img">
        <?php
        
        $id = $_COOKIE['cobra'];
        $fetch = "SELECT image FROM COOKIE_TASK WHERE id = '$id'";
      
        $result = mysqli_query($conn,$fetch);
        $data = mysqli_fetch_assoc($result);
     
   
        if ($data && !empty($data['image'])) {
            echo " <img src='". $data['image'] ."' style='width:302px'> ";
        } else {
            echo " <img src='../assets/user.png' style='width: 50px;
        position: absolute;
        left: 44rem;
        top: 3rem;' >";
        }
        ?>
    </div>
    <form action="upload_image.php" method="post" enctype="multipart/form-data">
        <div class="upload-sec d-flex flex-column  justify-content-center align-items-center">

            <input type="file" name="file" id="">
            <input type="submit" value="Upload " class="btn btn-warning" name="submit">
            <input type="submit" value="Home" class="btn btn-info" name="home">
        </div>

    </form>
</body>

</html>