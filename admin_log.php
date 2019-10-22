<?php
session_start();

$username = $_POST['username'];
$pass = $_POST['password'];
$pin = $_POST['pinnumber'];

if(strcmp($username,"Admin") == 0 && strcmp($pass,"admin")==0 && strcmp($pin,"12345")==0) {
    header('location:viewAllUsers.php');
}
else{
    echo "Gotcha,You are not an admin!";
}

?>
