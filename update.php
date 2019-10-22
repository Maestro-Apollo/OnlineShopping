<?php

session_start();
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "juinfo";

$conn = mysqli_connect($servername,$user,$pass);
mysqli_select_db($conn,$dbname);

$user = $_SESSION['getName'];
$sql = "SELECT * from users_table where username = '$user'";
$res = mysqli_query($conn,$sql);
$result = mysqli_fetch_array($res);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/fontawesme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|Raleway|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bahianita|Kaushan+Script|Lobster|Oleo+Script&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/index.png" />
</head>
<body>

   <?php include 'menu.php' ?>

    <section class="update_part text-center">

        <div class="container update_layout">

            <form action="update_works.php" method="post">
              <h1 class="pb-4">Update Profile!</h1>
              <input type="text" name="old_username" class="old_username" value="<?php echo $result['username']; ?>" placeholder="Previous Username" required><br><br>

               <input type="text" name="update_username" class="update_username" placeholder="New Username"><br><br>
               <input type="text" name="update_password" class="update_password" value="<?php echo $result['password']; ?>"  placeholder="New Password"><br><br>
               <input type="text" name="update_email" class="update_email" value="<?php echo $result['email']; ?>"  placeholder="New Email"><br><br>

               <input type="submit" name="Submit" value="submit" class="submit"><br><br>
               <input type="submit" name="Submit2" value="Delete" class="delete">

            </form>

        </div>
    </section>

    <div class="end_part">
        <?php include 'footer.php' ?>
    </div>


    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
