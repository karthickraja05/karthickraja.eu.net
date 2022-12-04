<?php
include 'db_conn.php';
session_start();
$name = isset($_SESSION['user']) ? $_SESSION['user'] : $old;
$old = isset($_POST['old']) ? $_POST['old'] : 'Anonymus';
$data = isset($_POST['data']) ? $_POST['data'] : '';
$copy = isset($_POST['copy']) ? $_POST['copy'] : '';
$id = isset($_GET['id']) ? 	$_GET['id'] : false;
$error = '';
$user_id = $_SESSION['user_id'];
if($data != ''){
	$add_query = "INSERT INTO todo (user_id, Name, Copy) VALUES ('$user_id', '$data','$copy')";
	$conn->query($add_query);
        $URL="todo.php";
	echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
	
}else{
	$error = "";
}

$logout = isset($_POST['logout']) ? true : false;
if($logout){
	session_unset();
	session_destroy();
	header("Location: ../index.php");
	exit();
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Welcome <?php echo $name; ?></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
	<nav class="navbar navbar-dark bg-primary">
	  <a class="navbar-brand" href="#">Welcome <i><?php echo strtoupper($name); ?></i></a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<form method="post">
	    	<input type="hidden" name="logout">
	    	<span><button type="submit">LOGOUT</button></span>
	      </form>
	    </button>

	    
	</nav>

	<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
		<div style="text-align: center;">
		<form action='todo.php' method="post">
			<input type="hidden" name="old" value="<?php echo $name; ?>">
			<input type="text" name="data" placeholder="Key Name">
			<input type="text" name="copy" placeholder="Copy Content">
			<input type="submit" value="ADD">
		</form>
		</div>
		<span><?php echo $error; ?></span>
	</nav>
	<div class="container">
	
		<div class="row">
	
	<!-- <a href='todo.php?id=".$row['id']."'></a> -->
	
		<?php 
			$get_query = "SELECT * FROM todo WHERE user_id = '$user_id'";
			$new_data = $conn->query($get_query);
			$count = 1;
			while($row = $new_data->fetch_assoc()){
				echo "<div class='col-md-auto'><button class='btn btn-outline-primary' type='button' onclick='myCopy(".$row['id'].")'>".$row['Name']."</button>&nbsp;<button class='btn btn-outline-danger' type='button' onclick='del(".$row['id'].")'><i class='fa fa-trash'></i></button></div>";
				echo "<span class='cont' id='".$row['id']."'>".$row['Copy']."</span>";
				
				if($count == 5){
					$count = 0;
					echo "</div><div class='row'>";
				}
				$count++;
			}

			if($id){
				$new_id = $_GET['id']; 
				$del_query = "DELETE FROM todo WHERE id = '$new_id' AND user_id = '$user_id'";
				$conn->query($del_query);
				$URL="todo.php";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
				
			}
		?>
		</div>
	</div>
</body>
</html>

<script>
	function myCopy(n) {
		var text = document.getElementById(n).innerText;
	    var elem = document.createElement("textarea");
	    document.body.appendChild(elem);
	    elem.value = text;
	    elem.select();
	    document.execCommand("copy");
	    document.body.removeChild(elem);
	}

	function del(id){
		if (confirm('Are you sure you want to delete from the database?')) {
			var url = "todo.php?id=" + id;
			window.location.href=url; 
		} else {
		  console.log('Thing was not saved to the database.');
		}
	}
	


</script>