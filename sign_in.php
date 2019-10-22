<?php
session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "juinfo";

$conn = mysqli_connect($servername,$user,$pass);
mysqli_select_db($conn,$dbname);

$s = "SELECT * FROM users_table where username = '$username' && password = '$password'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['img_show'] = $username;
    $_SESSION['getName'] = $username;
    header('location:welcome.php');
}
else{

    header('location:reg.php');


}


?>
