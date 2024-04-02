<?php
// session_start();
// include '../connection.php';


// if (!isset($_SESSION['id'])) {
//     header("location: http://localhost/project/login/login_index.php");
//     exit();
// }

// if (isset($_POST['submit'])) {

//     $id = $_SESSION['id'];
//     $current  = $_POST['current_password'];



//     $new = $_POST['new_password'];
//     $confirm  = $_POST['confirm_password'];

//     //fetch data 

//     $fetch = "SELECT * FROM COOKIE_TASK WHERE id = '$id'";

//     $result = mysqli_query($conn, $fetch);
//     $num = mysqli_num_rows($result);

//     if ($num == 1) {
//         $rows = mysqli_fetch_assoc($result);
//         $storedPassword = $rows['password'];
//         // $_SESSION['id'] = $rows['id'];
//         $name = 'cobra';
//         $value = $_POST['current_password'];
//         $time = time() + 10;
//         setcookie($name, $value, $time, "/");
//         if ($current != $storedPassword) {

//             $_SESSION['error'] = 'Incorrect password';
//             header("location: http://localhost/project/password/password_index.php");
//             exit();
//         } elseif (preg_match('/\s/', $new)) {
//             $_SESSION['error'] = "password has whitespace!";
//             header("location: http://localhost/project/password/password_index.php");
//             exit();
//         } else {
//             header("location: http://localhost/project/dashboard.php");

//             exit();
//         }

//         if ($new !== $confirm) {
//             $_SESSION['error'] = "Passwords do not match.";
//             header("location: http://localhost/project/password/password_index.php");
//             exit();
//         } else {

//             // $name = 'cobra';
//             // $value = $_POST['current_password'];
//             // $time = time() + 10;
//             // setcookie($name, $value, $time, "/");

//             $update = "UPDATE COOKIE_TASK SET password = '$new' WHERE id = '$id'";

//             $record = mysqli_query($conn, $update);
//             if ($record) {
//                 $_SESSION['update'] =
//                     "Password Update successful.";
//                 header("location: http://localhost/project/password/password_index.php");
//                 exit();
//             }
//         }
//     }
// }
// if (isset($_POST['home'])) {
//     header("location: http://localhost/project/dashboard.php");
//     exit();
// }


include '../connection.php';

// Start the session
session_start();

if (!isset($_COOKIE['cobra'])) {
    header("location: http://localhost/project/login/login_index.php");
    exit();
}

if (isset($_POST['submit'])) {
    $id = $_COOKIE['cobra'];
    $current = $_POST['current_password'];
    $new = $_POST['new_password'];
    $confirm = $_POST['confirm_password'];

    // Fetch data 
    $fetch = "SELECT * FROM COOKIE_TASK WHERE id = '$id'";

    $result = mysqli_query($conn, $fetch);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $rows = mysqli_fetch_assoc($result);

        $storedPassword = $rows['password'];

        if ($current != $storedPassword) {

            $_SESSION['error'] = 'Incorrect password';
        } elseif (preg_match('/\s/', $new)) {
            $_SESSION['error'] = "Password has whitespace!";
        } elseif ($new !== $confirm) {
            $_SESSION['error'] = "Passwords do not match.";
        } else {
            $update = "UPDATE COOKIE_TASK SET password = '$new' WHERE id = '$id'";

            $record = mysqli_query($conn, $update);
            if ($record) {
                $_SESSION['update'] = "Password Update successful.";
            }
        }
    }


    header("location: http://localhost/project/password/password_index.php");
    exit();
}

if (isset($_POST['home'])) {
    header("location: http://localhost/project/dashboard.php");
    exit();
}
