<?php
include 'db_conn.php';
$old = isset($_POST['old']) ? $_POST['old'] : 'Anonymus';
$name = isset($_GET['name']) ? $_GET['name'] : $old;
$data = isset($_POST['data']) ? $_POST['data'] : '';
$id = isset($_GET['id']) ? 	$_GET['id'] : false;
$error = '';
if($data != ''){
	$add_query = "INSERT INTO ".$name." (Name) VALUES ('$data')";
	$conn->query($add_query);
	header("Location: todo.php?name=".$name);
	
}else{
	$error = "";
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Welcome <?php echo $name; ?></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<button><a href="../index.php">Home</a></button>
	<div style="text-align: center;">
	<form action='todo.php' method="POST">
		<input type="hidden" name="old" value="<?php echo $name; ?>">
		<input type="text" name="data">
		<input type="submit" value="ADD">
	</form>
	<span><?php echo $error; ?></span>
	</div>
	<ul>
		<?php 
			$get_query = "SELECT * FROM {$name}";
			$new_data = $conn->query($get_query);
			while($row = $new_data->fetch_assoc()){
				/*echo $row['Name'];*/
				echo "<li>".$row['Name']."&nbsp;<a href='todo.php?id=".$row['ID']."&name=".$name."'><button>DEL</button></a></li>";
			}

			if($id){
				$new_id = $_GET['id']; 
				$del_query = "DELETE FROM ".$name." WHERE ID = $new_id";
				$conn->query($del_query);
				header("Location: todo.php?name=".$name);
			}
		?>
	</ul>
</body>
</html>