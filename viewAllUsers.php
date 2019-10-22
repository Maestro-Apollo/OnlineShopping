<?php
	$conn = mysqli_connect("localhost","root","","juinfo");
    $sql = "SELECT * from users_table";
    $res = mysqli_query($conn,$sql);


	#var_dump($allUser);
?>
<!DOCTYPE html>
<html>
<head>
	<title>All User</title>
	<link rel="stylesheet" href="css/fontawesme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|Raleway|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bahianita|Kaushan+Script|Lobster|Oleo+Script&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/194452_standard.png" />
</head>
<body>
<?php include 'menu.php'; ?>
	<div class="whole_users_info text-center mb-5">
	    <h2 class="text-center mt-5 mb-4">USER TABLE</h2>
	<table border="2" class="text-center user_table mb-5">

		<tr>
			<th><h2>Name</h2></th>
			<th><h2>Email</h2></th>
			<th><h2>Image</h2></th>

		</tr>
		<?php
		 while($result = mysqli_fetch_assoc($res)) {?>
			<tr>
				<td><p><?php echo $result['username']; ?></p></td>
				<td><p><?php echo $result['email']; ?></p></td>
				<td><img src="Reg_Image/<?php echo $result['img_name']; ?>" alt=""></td>
			</tr>
		<?php }
		?>
	</table>
	<a href="viewAllProducts.php" class="text-center mb-5">View Product Table</a>
	</div>
	<?php include 'footer.php'; ?>



    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
