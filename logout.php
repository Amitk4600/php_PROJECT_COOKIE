<?php
session_start();
session_destroy();
$value = $row['id'];
$name = 'cobra';
$time = time() - 10;
setcookie($name, $value, $time, "/");
header("location: http://localhost/project/login/login_index.php");

?>