<?php
	$username='manarsap_psd';
	$password='random2014TW';
	$host = 'localhost';
	//$db_port = '2083';
	$dbname = 'manarsap_accessory';
	//$dsn="mysql:host=$host;dbname=$dbname;port=$db_port";
	$dsn="mysql:host=$host;dbname=$dbname";
	
	try{
		$db = new PDO($dsn,$username,$password);
		echo 'Connected to database. Now what...?';
	}  catch(PDOException $e){
		$error_message=$e->getMessage();
		include('database_error.php');
		exit();
	}

?>