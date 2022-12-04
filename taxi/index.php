<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Taxi Booking Site</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
  	<div class="jumbotron">
  		<div style="text-align: center;">
  			<button id="data" class="btn btn-info">TAXI Details</button>
  			<button id="set" class="btn btn-danger">SET A DAY</button>
  		</div>
  		<h1 style="text-align: center;">Taxi Booking</h1>
	<form style="text-align: center;">
		<button  class="btn btn-success"><a href="index.php?id=A">Point A</a></button>
		<button  class="btn btn-success"><a href="index.php?id=B">Point B</a></button>
		<button  class="btn btn-success"><a href="index.php?id=C">Point C</a></button>
		<button  class="btn btn-success"><a href="index.php?id=D">Point D</a></button>
		<button  class="btn btn-success"><a href="index.php?id=E">Point E</a></button>
		<button  class="btn btn-success"><a href="index.php?id=F">Point F</a></button>
	</form>
	</div>

	<?php 
	$entry = isset($_GET['id']) ? true : false;
	if($entry){
		$pp = $_GET['id'];
		$pp = '"'.$pp.'"';
	?>
	<div class="jumbotron">
	<form action="action.php" method="post" id="form">
		<table class="table">
			<tr>
				<td>Enter Current Time: </td>
				<td><input type="number" name="bt" id="bt" max="24"></td>
				<input type="hidden" name="pp" id="pp" value=<?php echo $pp; ?>>
				<td><span id="err1"></span></td>
			</tr>
			<tr>
				<td>Select Drop Point: </td>
				<td>
					<select name="dp" id="dp">
						<option value="0" selected disabled>Select - Drop Point</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
					</select>
				</td>
				<td><span id="err2"></span></td>
			</tr>
			</form>
			<tr>
				<td colspan="2" style="text-align: right;"><button id="btn">Submit</button></td>
			</tr>
		</table>
		
		</div>
	</div>
	
	<?php
	}
	?>
        <?php
        
        

        $sess1 = isset($_SESSION['result']) ? true : false;
        if($sess1){
                $alert = $_SESSION['result'];
                echo "<p id ='alert'>".$alert."</p>";
                session_unset();
                session_destroy();
        }
        
        
        $sess2 = isset($_SESSION['pt']) ? true : false;
        if($sess2){
                $a = $_SESSION['pt'];
                $b = $_SESSION['taxi'];
                $c = "No: ".$b." Taxi, Pick Up from your location at ".$a."(Time)";
                echo "<p id='success'>".$c."</p>";
                session_unset();
                session_destroy();
        }
        
        ?>

</body>
</html>
<script type="text/javascript" src="demo.js"></script>