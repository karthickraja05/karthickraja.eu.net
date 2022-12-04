<?php 
include('db.php');
$room_id = $_POST['room'];
$user_id = $_POST['user'];
$data = $_POST['data'];

$query = "INSERT INTO chat_data(room_id,user_id,data) VALUES('$room_id','$user_id','$data')";
if($conn->query($query)){
	echo "data added successfully";
}else{
	echo "data not added successfully";
}


