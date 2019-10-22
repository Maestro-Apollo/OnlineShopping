<?php
	require 'connection.php';
	$allProduct = $user->getAllProduct();
	#var_dump($allUser);
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Product</title>
	<link rel="stylesheet" href="css/fontawesme.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|Raleway|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bahianita|Kaushan+Script|Lobster|Oleo+Script&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/194452_standard.png" />
</head>
<body>
<?php include 'menu.php'; ?>
	<h2 class="text-center mt-5 mb-4">Product Table</h2>

	<div class="whole_users_info text-center mb-5">
	    <table border="1" class="user_table text-center mb-5">
		<tr>
			<th>Name</th>
			<th>Price/kg</th>
			<th>Image</th>
			<th>Action</th>

		</tr>
		<?php
		foreach ($allProduct as $singleProduct) {?>
			<tr>
				<td><?php echo $singleProduct['name']; ?></td>
				<td><?php echo $singleProduct['price']; ?></td>
				<td><img src="images/<?php echo $singleProduct['image']; ?>" alt=""> </td>

				<td><a class="delete_product" href="remove_item.php?id=<?php echo $singleProduct['id'] ?>">Remove ITEM</a></td>

			</tr>
		<?php }
		?>
	</table>
	<a href="image_up.php" class="new_btn">Add New Product </a>
	</div>

	<?php include 'footer.php'; ?>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
