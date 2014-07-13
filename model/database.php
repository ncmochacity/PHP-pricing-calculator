<?php
	include('config_database.php');
	
	$dbname = 'accessory_shop1';
	$dsn="mysql:host=$host;dbname=$dbname"; 
	
	try{
		$db = new PDO($dsn,$username,$password);
	}  catch(PDOException $e){
		$error_message=$e->getMessage();
		include('database_error.php');
		exit();
	}

?>