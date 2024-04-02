<?php


session_start();
// include '../connection.php';


// if (isset($_POST['submit'])) {

//     $email = $_POST['email'];

//     $password = $_POST['password'];

//     $fetch = "SELECT * FROM COOKIE_TASK WHERE email ='$email'";


//     $result =  mysqli_query($conn, $fetch);
//     $nums = mysqli_num_rows($result);

//     if ($nums == 1) {
//         $row = mysqli_fetch_assoc($result);

//         // cookie
//         $storedPassword = $row['password'];
//         $_SESSION['id'] = $row['id'];
//         $name = 'cobra';
//         $value = $row['id'];
//         $time = time() + 60;
//         setcookie($name, $value, $time, "/");


//         if ($password != $storedPassword) {

//             $_SESSION['error'] = 'Incorrect password';
//             header("location: http://localhost/project/login/login_index.php");
//             exit();
//         } else {

//             header("location: http://localhost/project/dashboard.php");

//             exit();
//         }
//     }
// }


include '../connection.php';

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $fetch = "SELECT * FROM COOKIE_TASK WHERE email ='$email'";

    $result =  mysqli_query($conn, $fetch);
    $nums = mysqli_num_rows($result);

    if ($nums == 1) {
        $row = mysqli_fetch_assoc($result);

        // cookie
        $storedPassword = $row['password'];
        // $_COOKIE['id'] = $row['id'];

   

        $name = 'cobra';
        $value = $row['id'];
        $time = time() + 3600;
  setcookie($name, $value, $time, "/");    

    //  var_dump(setcookie($name, $value, $time, "/"));die;

        if ($password != $storedPassword) {
            $_SESSION['error'] = 'Incorrect password';
            header("location: http://localhost/project/login/login_index.php");
            exit();
        } else {
            header("location: http://localhost/project/dashboard.php");
            exit();
        }
    }
}
