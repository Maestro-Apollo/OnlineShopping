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

$profileImage = time(). '_' . $_FILES['imageUp']['name'];
$target = 'Reg_Image/' .$profileImage;

$conn = mysqli_connect($servername,$user,$pass);
mysqli_select_db($conn,$dbname);

$s = "SELECT * FROM users_table where username = '$username'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";
}
else{
    move_uploaded_file($_FILES['imageUp']['tmp_name'], $target);
    $sql = "INSERT INTO users_table(username,email,password,gender,img_name) VALUES('$username','$email','$password','$gender','$profileImage')";

    mysqli_query($conn,$sql);
    $_SESSION['getName'] = $username;
    header('location:welcome.php');


}


?>
