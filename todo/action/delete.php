<?php
include('db_conn.php');
$name = $_POST['user'];
$password = $_POST['pass'];
$ok_name = $ok_pass = false;
$link = $_POST['link'];
$link1 = $_POST['link1'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(empty($name)){
		$name_err = "This field is Required";
	}else{
		$name_err = '';
		$ok_name = true;
	}

	if(empty($password)){
		$pass_err = "This Field is Required";
	}else{
		$pass_err = '';
		$ok_pass = true;
	}

	if($ok_pass && $ok_name){
		$get_data = "SELECT id,User FROM userinfo WHERE User = '$name' AND Password = '$password'";
		$remove_id = $conn->query($get_data);
		$new_result = $remove_id->fetch_assoc();
		if(empty($new_result)){
			echo "<h1>Your Acccount Does not Exist<br></h1>";
			include('../del.php');			
		}else{
			$id = $new_result['id'];
			$user_name = $new_result['User'];
			$del_tab = "DELETE FROM todo WHERE user_id = '$id'";
			$remove_userinfo = "DELETE FROM userinfo WHERE id = '$id'";
			$conn->query($del_tab);
			$conn->query($remove_userinfo);
			echo "<h1>Successfully Removed<br></h1>";
			include("../index.php");
		}


	}else{
		include("../del.php");
	}



}


?>