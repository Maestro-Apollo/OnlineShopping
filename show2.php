

<!DOCTYPE html>
<?php


    session_start();


$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "juinfo";



$conn = mysqli_connect($servername,$user,$pass);
mysqli_select_db($conn,$dbname);




    $username = $_SESSION['getName'];
    $sql2 = "SELECT * FROM users_table where username = '$username'";
    $result = mysqli_query($conn,$sql2);

    $usersbase = mysqli_fetch_assoc($result);


?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/fontawesme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_events.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|Raleway|Roboto&display=swap" rel="stylesheet">
</head>
<body>

   <?php include 'menu.php' ?>

   <div class="update_btn">
           <a href="update.php">Update Profile</a>
    </div>

    <div class="container mt-5">


        <div class="row">

            <div class="col-md-6 img1">
               <img src="images/n1.jpg">
                <div class="overImg">
                    <img src="images/e1%20-%20Copy.jpg">
                </div>
            </div>

            <div class="col-md-6 text1">
                <h2 class="mb-3 mt-4">Boishakhai Fair</h2>
                <i class="fas fa-calendar-alt"></i>
                <span>5 May, 2019</span>
                <i class="far fa-clock ml-5"></i>
                <span>8:00am - 5:00pm</span>
                <i class="fas fa-map-marker-alt ml-5"></i>
                <span>Jahangirnagar University</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit aspernatur ipsam voluptatum esse doloremque dignissimos, expedita nesciunt, dolorum corrupti vitae eum nemo magnam inventore similique quaerat debitis ex totam, sequi facere nihil! Accusamus eum quasi, officia mollitia esse necessitatibus rerum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit aspernatur ipsam voluptatum esse doloremque dignissimos,</p>
            </div>

        </div>

        <div class="row">



            <div class="col-md-6 text1">
                <h2 class="mb-3 mt-4">Science Fair</h2>
                <i class="fas fa-calendar-alt"></i>
                <span>5 May, 2019</span>
                <i class="far fa-clock ml-5"></i>
                <span>8:00am - 5:00pm</span>
                <i class="fas fa-map-marker-alt ml-5"></i>
                <span>Jahangirnagar University</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit aspernatur ipsam voluptatum esse doloremque dignissimos, expedita nesciunt, dolorum corrupti vitae eum nemo magnam inventore similique quaerat debitis ex totam, sequi facere nihil! Accusamus eum quasi, officia mollitia esse necessitatibus rerum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit aspernatur ipsam voluptatum esse doloremque dignissimos,</p>
            </div>

            <div class="col-md-6 img1">
               <img src="images/n3.jpg">
                <div class="overImg">
                    <img src="images/e3.jpg">
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6 img1">
               <img src="images/n5.jpg">
                <div class="overImg">
                    <img src="images/butterfly-1127666_1920.jpg">
                </div>
            </div>

            <div class="col-md-6 text1">
                <h2 class="mb-3 mt-4">Butterfly Fair</h2>
                <i class="fas fa-calendar-alt"></i>
                <span>5 May, 2019</span>
                <i class="far fa-clock ml-5"></i>
                <span>8:00am - 5:00pm</span>
                <i class="fas fa-map-marker-alt ml-5"></i>
                <span>Jahangirnagar University</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit aspernatur ipsam voluptatum esse doloremque dignissimos, expedita nesciunt, dolorum corrupti vitae eum nemo magnam inventore similique quaerat debitis ex totam, sequi facere nihil! Accusamus eum quasi, officia mollitia esse necessitatibus rerum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit aspernatur ipsam voluptatum esse doloremque dignissimos,</p>
            </div>

        </div>

        <div class="row">



            <div class="col-md-6 text1">
                <h2 class="mb-3 mt-4">Annual COncert</h2>
                <i class="fas fa-calendar-alt"></i>
                <span>5 May, 2019</span>
                <i class="far fa-clock ml-5"></i>
                <span>8:00am - 5:00pm</span>
                <i class="fas fa-map-marker-alt ml-5"></i>
                <span>Jahangirnagar University</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit aspernatur ipsam voluptatum esse doloremque dignissimos, expedita nesciunt, dolorum corrupti vitae eum nemo magnam inventore similique quaerat debitis ex totam, sequi facere nihil! Accusamus eum quasi, officia mollitia esse necessitatibus rerum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit aspernatur ipsam voluptatum esse doloremque dignissimos,</p>
            </div>

            <div class="col-md-6 img1">
               <img src="images/n7.jpg">
                <div class="overImg">
                    <img src="images/e4.jpg">
                </div>
            </div>

        </div>

    </div>

    <?php include 'footer.php' ?>

</body>
</html>
