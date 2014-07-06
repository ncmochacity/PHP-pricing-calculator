<?php
	$dsn='mysql:host=localhost;dbname="accessory_shop1';
	$username='msdproduct';
	$password='hello';

	try{
		$db=new PDO($dsn,$username,$password);
	}  catch(PDOException $e){
		$error_message=$e->getMessage();
		include('database_error.php');
		exit();
	}

?>