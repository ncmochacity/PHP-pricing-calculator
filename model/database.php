<?php
	$username='root';
	$password='root';
	$host = 'localhost';
	//$db_port = '2083';
	$dbname = 'accessory_shop1';
	//$dsn="mysql:host=$host;dbname=$dbname;port=$db_port";
	$dsn="mysql:host=$host;dbname=$dbname"; 
	
	try{
		$db = new PDO($dsn,$username,$password);
	}  catch(PDOException $e){
		$error_message=$e->getMessage();
		include('database_error.php');
		exit();
	}

?>