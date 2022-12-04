<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	$err = isset($_SESSION['user_err']) ? true : false;
	?>
	<div class="login">
	    <h1>Login</h1>
	    <?php 
	    	if($err){
	    		echo "<h1>Username already presented</h1>";
	    	}
	    ?>
	    <form action="check.php" method="post">
	        <input type="text" name="room" placeholder="Room Name" required="required" />
	        <input type="password" name="pass" placeholder="Password" required="required" />
	        <input type="text" name="nick" placeholder="Nick Name" required="required" />
	        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
	    </form>
	</div>
</body>
</html>