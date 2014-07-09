tets
<?php

	$category_id=$_POST['category_id'];
	$code=$_POST['code'];
	$name=$_POST['name'];
	$price=$_POST['price'];

	//validate

	if(empty($code) || empty($name) || empty($price)){
		$error="Invalid product data. Check all fields and try again.";
		include('error.php');
	}
	else{
		require_once('database.php');
		$query="INSERT INTO products

					(categoryID, productCode, productName, listPrice)
					VALUES
					('$category_id', '$code' , '$name', '$price')";
		$db->exec($query);
		//display product list
		include('product.php');
	}
	
?>