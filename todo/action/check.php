<?php
$newlink = $_POST['newlink'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pass'];
$repassword = $_POST['repass'];
$user = $_POST['user'];

$ok_name = $ok_user = $ok_pass = $ok_email = false;

$overAll = false;

function removeAllSpaces($a){
	return str_replace(" ", "", $a);
	}

$name = removeAllSpaces($name);
$user = removeAllSpaces($user);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(empty($name)){
		$name_err = "This Field is required";
	}else{
		$len_name = strlen($name);
		if($len_name < 5 || $len_name > 20){
			$name_err = "Char between 5 to 20";	
		}else{
			if(preg_match("~[0-9]~", $name) || preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $name)){
				$name_err = "Name must contains only letters";
			}else{
				$ok_name = true;
				$name_err = "";
			}
		}

	}

	if(empty($user)){
		$user_err = "This field is required";
	}else{
		$user = strtolower($user);
		$len_user = strlen($user);
		if($len_user < 5 || $len_name > 20){
			$user_err = "Char between 5 to 20";
		}else{
			$user_err = "";
			$ok_user = true;
		}
	}

	if(empty($password)){
		$pass_err = "This field is required";
	}else{
		$len_pass = strlen($password);
		if($len_pass < 8 || $len_pass > 30){
			$pass_err = "Password length between 8 to 30";
		}else{
			$pass_err = '';

		}
	}


	if(empty($repassword)){
		$repass_err = "This field is required";
	}else{
		if($password !== $repassword){
			$repass_err = "Password not match";
		}else{
			$repass_err = "";
			$ok_pass = true;
		}
	}

	if(empty($email)){
		$email_err = "This field is required";
	}else{
		$ok_email = true;
		$email_err = "";
	}


	if($ok_name && $ok_email && $ok_pass && $ok_user){
		$overAll = true;
	}

}




?>