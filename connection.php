<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = mysqli_connect($servername,$username,$password,$dbname);


if(!$conn){
    die("error".mysqli_connect_error());
}
// $sql = "CREATE DATABASE project";

// $sql = "CREATE TABLE COOKIE_TASK(
// id INT (6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(50),
// image VARCHAR(300),
// email VARCHAR(200) UNIQUE, 
// mobile VARCHAR (20) UNIQUE,
// password VARCHAR(200) , 
// dob VARCHAR(30)
//  )";

// if(mysqli_query($conn,$sql)){
//     echo "table successful";
// }

// mysqli_close($conn);

?>