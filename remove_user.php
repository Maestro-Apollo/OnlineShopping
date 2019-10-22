<?php
	require 'connection.php';
	$user->deleteUser($_GET['id']);
	header("location:viewAllUsers.php");
?>
