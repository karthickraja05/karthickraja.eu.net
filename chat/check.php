<?php 
session_start();
include('db.php');

$nick = strtolower($_POST['nick']);
$room = strtolower($_POST['room']);
$pass = $_POST['pass'];


/*echo $nick;
echo "<br>";
echo $room;
echo "<br>";
echo $pass;
*/
if($conn){
	$query = "SELECT id FROM room WHERE room_name = '$room' AND password = '$pass'";
	$data = $conn->query($query);
	if($data->num_rows == 0){
		$query = "INSERT INTO room(room_name,password) VALUES('$room','$pass')";
		$conn->query($query);
		$query = "SELECT id FROM room WHERE room_name = '$room' AND password = '$pass'";
		$data = $conn->query($query);
		while($row = $data->fetch_assoc()){
			$room_id = $row['id'];
		}

		$query = "INSERT INTO user(room_id,user_name) VALUES('$room_id','$nick')";
		$conn->query($query);
		$query = "SELECT id FROM user WHERE room_id = '$room_id' AND user_name = '$nick'";
		$data = $conn->query($query);
		while($row = $data->fetch_assoc()){
			$user_id = $row['id'];
		}
		$_SESSION["room"] = $room;
		$_SESSION["room_id"] = $room_id;
		$_SESSION["user"] = $nick;
		$_SESSION["user_id"] = $user_id;
		header("Location: chat.php");
		exit();
	}else{
		$query = "SELECT id FROM room WHERE room_name = '$room' AND password = '$pass'";
		$data = $conn->query($query);
		while($row = $data->fetch_assoc()){
			$room_id = $row['id'];
		}
		$query = "SELECT id FROM user WHERE room_id = '$room_id' AND user_name = '$nick'";
		$data = $conn->query($query);
		if($data->num_rows == 0){
			$query = "INSERT INTO user(room_id,user_name) VALUES('$room_id','$nick')";
			$conn->query($query);
			$query = "SELECT id FROM user WHERE room_id = '$room_id' AND user_name = '$nick'";
			$data = $conn->query($query);
			while($row = $data->fetch_assoc()){
				$user_id = $row['id'];
			}
			$_SESSION["room"] = $room;
			$_SESSION["room_id"] = $room_id;
			$_SESSION["user"] = $nick;
			$_SESSION["user_id"] = $user_id;
			header("Location: chat.php");
			exit();
		}else{
			$_SESSION["user_err"] = "data already presented";
			header("Location: index.php");
			exit();
		}
	}
}else{
	
}


