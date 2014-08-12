<?php
	class Validate{
		private $fields;

<<<<<<< HEAD
		public function __construct(){
=======
		public function_construct(){
>>>>>>> FETCH_HEAD
			$this->fields=new Fields();
		}
		public function getFields(){
			return $this->fields;
		}
		public function text($name,$value,$required=true,$min=1,$max=255){
			$field=$this->fields->getField($name);
			if(!$required && empty($value)){
				$field->clearErrorMessage();
				return;
			}
			if($required && empty($value)){
				$field->setErrorMessage('Required');
			}
			else if (strlen($value) < $min){
				$field->setErrorMessage('Too Short');
			}
			else if (strlen($value) > $max){
				$field->setErrorMessage('Too Long');
			}
			else{
				$field->clearErrorMessage();
			}
		}
		public function pattern($name,$value,$pattern,$message,$required=true){
			$field=$this->fields->getField($name);
			if(!$required && empty($value)){
				$field->clearErrorMessage();
				return;
			}
			$match=preg_match($pattern, $value);
			if ($match === false) {
				$field->setErrorMessage('Error testing field. ');
			}
			else if ($match !=1){
				$field->setErrorMessage($message);
			}
			else{
				$field->clearErrorMessage();
			}
		}
<<<<<<< HEAD
		public function phone($name,$value,$required=false){
			$field=$this ->fields->getField($name);
			$this ->text($name,$value,$required);
=======
		public function phone($name,$value,$equired=false){
			$field=$this->fields->getField($name);
			$this->text($name,$value,$required);
>>>>>>> FETCH_HEAD
			if($field->hasError()){
				return;
			}
			$pattern='/^[[:digit:]]{3}-[[:digit:]]{3}-[[:digit:]]{4}$/';
			$message='Invalid phone number';
			$this->pattern($name,$value,$pattern,$message,$required);
		}
		public function email($name,$value,$required=true){
<<<<<<< HEAD
			$field=$this ->fields ->getField($name);
=======
			$field=$this->fields->getField($name);
>>>>>>> FETCH_HEAD
			if(!$required && empty($value)){
				$field->clearErrorMessage();
				return;
			}
			$this->text($name,$value,$required);
			if($field->hasError()){
				return;
			}
			$parts=explode('@', $value);
			if(count($parts) < 2){
				$field->setErrorMessage('At sign required. ');
				return;
			}
			if(count($parts) > 2){
				$field->setErrorMessage('Only one at sign allowed. ');
				return;
			}
			$local=$parts[0];
			$domain=$parts[1];
			if(strlen($local) > 64){
				$field->setErrorMessage('Username length too long. ');
				return;
			}
			if(strlen($domain) > 255){
				$field->setErrorMessage('Domain name too long. ');
				return;
			}
<<<<<<< HEAD
			$atom='[[:alnum:]_!#$%&\'*+\/=?^`{|}~~]+';
=======
			$atom='[[:alnum:]_!#$%&\*+\/=?^`{|}~~]+';
>>>>>>> FETCH_HEAD
			$dotatom='(\.' . $atom .')*';
			$address='(^' . $atom . $dotatom . '$)';
			$char='([^\\\\"])';
			$esc='(\\\\[\\\\"])';
			$text='(' . $char . ' | ' . $esc . ')+';
			$quoted='(^"' . $text . '"$)';
<<<<<<< HEAD
			$localPattern='/' . $address . '|' . $quoted . '/';
=======
			$localPattern='/' .$address . '|' . $quoted . '/';
>>>>>>> FETCH_HEAD

			$this->pattern($name,$local, $localPattern,'Invalid Username');
			if($field->hasError()){
				return;
			}
			$hostname='([[:alnum:]]([-[:alnum:]]{0,62}[[:alnum:]])?)';
			$hostnames='(' . $hostname . '(\.' . $hostname . ')*)';
			$top='\.[[:alnum:]]{2,6}';
			$domainPattern='/^' . $hostnames . $top . '$/';
			$this->pattern($name, $domain, $domainPattern,'Invalid domain name. ');
		}
	}
?>