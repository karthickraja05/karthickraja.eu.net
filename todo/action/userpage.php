<?php 
include('db_conn.php');
session_start();
$name = $_POST['user'];
$password = $_POST['pass'];
$link = $_POST['link'];
$link1 = $_POST['link1'];
$ok_name = $ok_password = false;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(empty($name)){
		$name_err = "This Field is Required";
	}else{
		$name_err = '';
		$ok_name = true;
	}

	if(empty($password)){
		$pass_err = "This Field is Required";
	}else{
		$pass_err = '';
		$ok_password = true;
	}


	if($ok_name && $ok_password){
		$check = "SELECT id FROM userinfo WHERE User = '$name' AND Password = '$password'";
		$get_id = $conn->query($check);
		$new_arr_id = [];
		while ($row = $get_id->fetch_assoc()) {
			array_push($new_arr_id, $row['id']);
		}
		if(count($new_arr_id) != 0){
			$_SESSION['user'] = $name;
			$_SESSION['user_id'] = $new_arr_id[0];
			/*header("Location: todo.php?name=".$name);*/
			header("Location: todo.php");
		}else{
			$error = "Data not present in DataBase<br>Check Your Input or Create New Account";
			include('../index.php');
		}

		
	}else{
		include('../index.php');
	}
}





?>