<?php
session_start();
include '../connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $Confirm_password = $_POST['Confirm_password'];
    $date = $_POST['date'];

    // fetch email and mobile to check already exit or not 
    $fetch = "SELECT * FROM COOKIE_TASK WHERE email ='$email' OR mobile='$mobile'";
    $res =  mysqli_query($conn, $fetch);
    $nums = mysqli_num_rows($res);

    if ($nums > 0) {
        $row = mysqli_fetch_assoc($res);
        if ($row['email'] == $email) {
            $_SESSION['error'] = 'email already';
        } elseif ($row['mobile'] == $mobile) {
            $_SESSION['error'] = 'mobile already';
            header("location: http://localhost/project/registration/registration_index.php");
            exit();
        }
    }

    // email validation
    function checkEmail($str)
    {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? false : true;
    }
    if (!checkEmail("$email")) {
        $_SESSION['error'] = 'Invalid email address';
        header("location: http://localhost/project/registration/registration_index.php");
        exit();
    }
    //  password validation
    if (strlen($password) < 8) {
        $_SESSION['error'] = "Password must be at least 8 characters long!";
        header("Location: http://localhost/project/registration/registration_index.php");
        exit();
    }    // for space in password 
    elseif (preg_match('/\s/', $password)) {
        $_SESSION['error'] = "password has whitespace!";
        header("location: http://localhost/project/registration/registration_index.php");
        exit();
    }

    // check password same or not 
    if ($password !== $Confirm_password) {
        $_SESSION['error'] = "Passwords do not match.";
        header("location: http://localhost/project/registration/registration_index.php");
        exit();
    } else {

        // insert into table
        $insert = "INSERT INTO COOKIE_TASK (name,email,mobile,password,dob)VALUES('" . $name . "','" . $email . "','" . $mobile . "','" . $password . "','" . $date . "') ";

        $result = mysqli_query($conn, $insert);

        if ($result) {
     

            $_SESSION['registration_alert'] = "Registration successful. Please login.";
            header("location: http://localhost/project/registration/registration_index.php");
            exit();
        } else {
            $_SESSION['error'] = "Error occurred during registration.";
            header("location: http://localhost/project/registration/registration_index.php");
            exit();
        }
    }
}
