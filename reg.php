

<?php

include 'allworks.php';


?>
<!DOCTYPE html>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/fontawesme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sign_reg.css">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|Raleway|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bahianita|Kaushan+Script|Lobster|Oleo+Script&display=swap" rel="stylesheet">
</head>
<body>

   <?php include 'menu.php'; ?>

    <section>
       <div class="reg_part">



        <div class="reg_box text-center">

            <form action="registration.php" method="post" autocomplete="off" enctype="multipart/form-data">

                <h1>Registration</h1>
                <input type="text" name="username" placeholder="Username" class="username" autocomplete="off" required><br><br>
                <input type="email" name="email" placeholder="Email" class="email" autocomplete="off" required><br><br>
                <input type="password" name="password" placeholder="Password" class="password" autocomplete="off" required><br><br>

                <select name="gender" id="gender" class="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br><br>
                <input type="file" name="imageUp" id="imageUp" class="img_up" required>
                <label for="imageUp" class="up_img">Choose a photo</label><br><br>
                <input type="submit" value="Submit" class="submit" name="Submit"><br><br>
                <span class="plain_txt mr-5">Already have an account?</span>
                <a href="sign.php" class="sign_up ml-5">Sign Up</a>


            </form>

        </div>

       </div>
    </section>

    <?php include 'footer.php'; ?>






    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
