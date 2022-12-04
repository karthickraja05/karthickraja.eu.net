<?php
include('db.php');

$room_id = $_POST['room'];

$query = "SELECT data,user_id FROM chat_data WHERE room_id = '$room_id' ORDER BY id DESC";
$data = $conn->query($query);
$result = [];
while($row = $data->fetch_assoc()){
	$result[] = $row['user_id'];
	$result[] = $row['data'];		
}

// echo json_encode($result);


$query = "SELECT id,user_name FROM user WHERE room_id = '$room_id'";
$user = $conn->query($query);
while($col = $user->fetch_assoc()){
	$temp[$col['id']] = $col['user_name'];
}



foreach ($result as $key => $value) {
	if($temp[$value]){
		$result[$key] = $temp[$value];
	}
}


echo json_encode($result);
