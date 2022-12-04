<?php 

include 'check.php';
include 'db_conn.php';


if($overAll){
	$check_query = "SELECT id FROM userinfo WHERE Email = '$email' OR User = '$user'";
	$check_result = $conn->query($check_query);
	$new_arr = [];
	while ($row = $check_result->fetch_assoc()) {
		array_push($new_arr, $row['id']);
	}
	
	if(count($new_arr) == 0){
		$add_query = "INSERT INTO userinfo(Name,User,Email,Password) VALUES ('$name','$user','$email','$password')";
		$conn->query($add_query);
		header("Location: success.php");
	}else{
		$error = "Data Already Present Change Your Mail or User ID";
		include '../reg.php';
	}


}else{
	include '../reg.php';
}







?>