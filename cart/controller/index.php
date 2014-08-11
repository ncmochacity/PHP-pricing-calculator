<?php
require_once('../model/textfields.php');
require_once('../model/validate.php');

$validate=new Validate();
$fields=$validate->getFields();
$fields->addField('first_name');
$fields->addField('last_name');
$fields->addField('phone', 'Use 000-111-333 format. ');
$fields->addField('email', 'Must be a valid email address. ');

if(isset($_POST['action'])){
	$action=$_POST['action'];
}
else{
	$action='reset';
}
$action=strtolower($action);
switch($action){
	case 'reset':
		include('../view/register.php');
		break;
	case 'register':
		$first_name=trim($_POST['first_name']);
		$last_name=trim($_POST['last_name']);
		$phone=trim($_POST['phone']);
		$email=trim($_POST['email']);

		$validate->text('first_name', $first_name);
		$validate->text('last_name', $last_name);
		$validate->phone('phone', $phone);
		$validate->email('email', $email);

		if($fields->hasErrors()){
			include '../view/register.php';

		}
		else{
			include '../view/success.php';
		}
}
?>