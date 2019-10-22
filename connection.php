<?php
	require 'function.php';
	try{
		$con=new PDO("mysql:host=localhost;dbname=practise","root","");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$user = new User($con);
	}
	catch(PDOException $e){
		 echo $e->getMessage();
	}
?>
