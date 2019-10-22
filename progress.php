
<?php
include 'allworks.php' ;


    $sql2 = "SELECT * FROM users_info WHERE id=(
    SELECT max(id) FROM users_info
    )";
    $result = mysqli_query($conn,$sql2);

    $usersbase = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">

        <div class="row">

            <div class="col-4 offset-md-4 mt-5">



                <img src="images/<?php echo $usersbase['img_name']; ?>" width="80px" alt="">
                <?php echo $usersbase['img_name']; ?>



            </div>

        </div>

    </div>

</body>
</html>
