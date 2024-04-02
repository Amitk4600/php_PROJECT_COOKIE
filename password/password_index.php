<?php
session_start();

include '../displayPassword.php';
if (!isset($_COOKIE['cobra'])) {
    header("location: http://localhost/project/login/login_index.php");
    exit();
}

if (isset($_SESSION['error'])) {
    echo '<div  style="
  color: #000c12;
  background: red;
  position: absolute;
  left: 17.5rem;
  padding: 5px;
  border-radius: 5px;
       ">' . $_SESSION['error'] . '</div>';

    unset($_SESSION['error']);
} elseif (isset($_SESSION['update'])) {
    echo '<div  style="
  background-color: #2f8d46;
      width: 15rem;
     text-align: center;
      padding: 5px;
    border-radius: 5px;
   ">' . $_SESSION['update'] . '</div>';

    unset($_SESSION['update']);
};

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            width: 38vw;
            height: 62vh;
            margin: auto;
        }

        .pass-form {
            position: relative;
            top: 38%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            padding: 12px;
            margin: 10px;
            width: 100%;
            height: 100%;
        }

        span {
            position: relative;
            bottom: 3rem;
            left: 27rem;
        }

        label {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="pass-form rounded">
        <form action="password.php" method="post" class="p-5 ">
            <label for="current">Current password</label>
            <input type="password" name="current_password" id="current_password" class="input-pass form-control mb-3" placeholder="Current password"><span><img src="./eye.svg" onclick="display('current_password')" id="eye"></span>

            <label for="current">New password</label>
            <input type="password" name="new_password" id="new_password" class="input-pass form-control mb-3" placeholder="New password"><span><img src="./eye.svg" id="eye" onclick="display('new_password')"></span>

            <label for="current">Confirm password</label>
            <input type="password" name="confirm_password" id="confirm_password" class="input-pass form-control mb-3" placeholder="Confirm password"><span><img src="./eye.svg" id="eye" onclick="display('confirm_password')"></span>

            <input type="submit" value="submit " class="btn btn-warning" name="submit">
            <input type="submit" value="Home" class="btn btn-info" name="home">
        </form>
    </div>
</body>

</html>