<?php
	$lifetime=60 * 60 * 24 * 14;
	session_set_cookie_params($lifetime, '/');
	session_start();

	if(empty($_SESSION['cart12'])) $_SESSION['cart12']=array();
	$products=array();
	$products['cca-1132']=array('name' => 'Keyboard Cover', 'cost' => '10.51');
	$products['cca-1008']=array('name' => 'Macbook Pro', 'cost' => '1250.00');
	$products['cca-688']=array('name' => 'H&M T-Shirt', 'cost' => '12.00');
	$products['cca-105']=array('name' => 'Algorithm Textbook', 'cost' => '20.00');

	require_once('cart.php');
	if(isset($_POST['action'])){
		$action=$_POST['action'];
	}
	else if (isset($_GET['action'])){
		$action=$_GET['action'];
	}
	else{
		$action='show_add_item';
	}
	switch($action){
		case 'add':
			add_item($_POST['productkey'], $_POST['itemqty']);
			include('cart_view.php');
			break;
		case 'update':
			$new_qty_list=$_POST['newqty'];
			foreach($new_qty_list as $key => $qty){
				if($_SESSION['cart12'][$key]['qty']!= $qty){
					update_item($key, $qty);
				}
			}
			include('cart_view.php');
			break;
		case 'show_cart':
			include('cart_view.php');
			break;
		case 'show_add_item':
			include('add_item_view.php');
			break;
		case 'empty_cart':
			unset($_SESSION['cart12']);
			include('cart_view.php');
			break;
	}
?>