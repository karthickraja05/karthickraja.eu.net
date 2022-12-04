<?php 
$name = isset($name) ? $name : '';
$password = isset($password) ? $password : '';

$link = isset($link) ? $link : 'action/delete.php';
$link1 = isset($link1) ? $link1 : 'reg.php';

$name_err = isset($name_err) ? $name_err : ''; 
$pass_err = isset($pass_err) ? $pass_err : '';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login For Todo</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<form action='<?php echo $link; ?>' method="post">
		<input type="hidden" name="link" value="delete.php">
		<input type="hidden" name="link1" value="../reg.php">
		<table>
			<tr>
				<td>Username: </td>
				<td><input type="text" name="user" value="<?php echo htmlspecialchars($name); ?>"><br><?php echo "<span>$name_err</span>"; ?></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" name="pass" value="<?php echo htmlspecialchars($password); ?>"><br><?php echo "<span>$pass_err</span>"; ?></td>
			</tr>
			<tr>
				<td><button><a href="<?php echo $link1; ?>">Register</a></button></td>
				<td style="text-align: right;"><input type="submit" value="Delete Account"></td>
			</tr>
		</table>
	</form>
</body>
</html>