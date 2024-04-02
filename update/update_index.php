<?php

session_start();
include '../connection.php';
// include '../update/update.php';

if (!isset($_COOKIE['cobra'])) {
    header("location: http://localhost/project/login/login_index.php");
    exit();
}
if (isset($_SESSION['registration_alert'])) {
    echo '<div  style="
    color: #ebf8ff;
    background: red;
    position: absolute;
    top: 10rem;
    left: 50%;
    padding: 5px;
    border-radius: 5px;
     ">' . $_SESSION['registration_alert'] . '</div>';

    unset($_SESSION['registration_alert']);
}

$id = $_COOKIE['cobra'];


$fetch = "SELECT * FROM COOKIE_TASK WHERE id ='$id'";

$result =  mysqli_query($conn, $fetch);
if ($result && $row = mysqli_fetch_assoc($result));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .update-form {
            width: 13%;
            top: 15rem;
            left: 50%;

            position: relative;
            padding: 9px 5px 10px 14px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .btnn {
            position: absolute;
            top: 0%;
            right: 0%;
        }
    </style>

    <title>Document</title>
</head>

<body>
    <div class="update-form">
        <form action="update.php" method="post" style="width: 150px;">
            <input type="hidden" name="id">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" id="name" value="<?php echo $row['name'] ?>">
            <label for="name">Mobile:</label>
            <input type="text" name="mobile" class="form-control" id="mobile" value="<?php echo $row['mobile'] ?>" maxlength="10" size="10">
            <label for="name">Email:</label>
            <input type="email" name="email" class="form-control" id="email" value="<?php echo $row['email'] ?>">

            <button type="button" class="btn-close" aria-label="Close" onclick="cancel()" style="position: absolute;
                                top: 0%;
                                left: 86%;">
            </button>
            <button type="submit" name="submit" class="btn btn-success">submit</button>
        </form>

    </div>
    <div class="btnn m-4 p-3">
        <a href="http://localhost/project/dashboard.php"><button type="button" class="btn btn-success">Home</button></a>
        <a href="../logout.php"><button type="button" class="btn btn-info">Log Out</button></a>
    </div>

    <script>
        // cancel
        function cancel() {
            window.location.href = 'http://localhost//project/dashboard.php';
        }
    </script>
</body>

</html>