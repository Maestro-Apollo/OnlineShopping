<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "practise");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    // Get image name
    $image = $_FILES['image']['name'];

    // Get text
    $price = mysqli_real_escape_string($db, $_POST['price']);
    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO tbl_product(name,image,price) VALUES ('$name','$image','$price')";
    // execute query
    if(mysqli_query($db, $sql)){
        header('location:viewAllProducts.php');
    }
    else{
        echo "Error";
    }
  }
  $result = mysqli_query($db, "SELECT * FROM tbl_product");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" href="css/fontawesme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sign_reg.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signstyle_admin.css">

     <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|Raleway|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bahianita|Kaushan+Script|Lobster|Oleo+Script&display=swap" rel="stylesheet">

</head>
<body>
<?php include 'menu.php'; ?>


    <section>
       <div class="sign_part">



        <div class="sign_box text-center">

            <form method="post" enctype="multipart/form-data" autocomplete="off">
               <input type="hidden" name="size" value="1000000">

                <h1>New Product!</h1>
                <input type="text" name="name" placeholder="Product Name" class="username" autocomplete="off"><br><br>

                <input type="text" name="price" placeholder="Price" class="username" autocomplete="off"><br><br>
                <input type="file" name="image" autocomplete="off" class="" id="imageUp">
                <label for="imageUp" class="up_img">Choose a photo</label><br><br>
                <input type="submit"
                name="upload" class="submit" value="UPLOAD"><br><br>



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
