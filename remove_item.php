<?php
	require 'connection.php';
	$user->deleteItem($_GET['id']);
	header("location:viewAllProducts.php");
?>
