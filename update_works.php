<?php
session_start();

$old_username = $_POST['old_username'];

$up_username = $_POST['update_username'];
$up_password = $_POST['update_password'];
$up_email = $_POST['update_email'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juinfo";

$conn = mysqli_connect($servername,$username,$password,$dbname);



$sql = "SELECT * FROM users_table";
$s = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($s);

if(isset($_POST['Submit'])){
    $change = "update users_table SET username = '$up_username',email = '$up_email', password = '$up_password' where username = '$old_username'";
    mysqli_query($conn,$change);
    echo "Data Changed!";
}

if(isset($_POST['old_username'])){
    if(isset($_POST['Submit2'])){
    $delete = "DELETE from users_table where username = '$old_username'";
    mysqli_query($conn,$delete);
    echo "Account Deleted!";
}
}
else{
    echo "Enter Your Username!";
}

?>
