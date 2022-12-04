<?php
	$name = isset($name) ? $name : '';
	$email = isset($email) ? $email : '';
	$password = isset($password) ? $password : '';
	$user = isset($user) ? $user : '';
	$repassword = isset($repassword) ? $repassword : '';
	$error = isset($error) ? $error : '';

	$name_err = !isset($name_err) ? "" : $name_err;
	$email_err = !isset($email_err) ? "" : $email_err;
	$user_err = !isset($user_err) ? "" : $user_err;
	$pass_err = !isset($pass_err) ? "" : $pass_err;
	$repass_err = !isset($repass_err) ? "" : $repass_err;
	$newlink = !isset($newlink) ? 'action/add.php' : $newlink; 
	
	$url = $_SERVER['REQUEST_URI'];
	//echo $url;
	$url_arr = explode('/', $url);
	$page = $url_arr[count($url_arr) - 1];
	//echo $page;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php if($page == 'add.php') { ?>

	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">

	<?php }else{ ?>
	
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

	<?php } ?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" action="<?php echo $newlink; ?>" method="post">
					<input type="hidden" name="newlink" value="add.php">
					<span class="login100-form-title p-b-32">
						Register <br>
						<span style="color: red; font-size: 15px;"><?php echo $error; ?></span>
					</span>

					<span class="txt1 p-b-11">
						Name
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="name" value='<?php echo htmlspecialchars($name) ?>'>
						<span class="focus-input100"></span>
						
					</div>
					<div><?php echo "<span>$name_err</span>"; ?></div>

					<span class="txt1 p-b-11">
						User Name
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="user" value='<?php echo htmlspecialchars($user) ?>'>
						<span class="focus-input100"></span>
						
					</div>
					<div><?php echo "<span>$user_err</span>"; ?></div>


					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="email" value='<?php echo htmlspecialchars($email) ?>'>
						<span class="focus-input100"></span>
						
					</div>
					<div><?php echo "<span>$email_err</span>"; ?></div>

					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" value="<?php echo htmlspecialchars($password); ?>">
						<span class="focus-input100"></span>
						
					</div>
					<div><?php echo "<span>$pass_err</span>"; ?></div>

					<span class="txt1 p-b-11">
						Retype-Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="repass" value="<?php echo htmlspecialchars($repassword); ?>">
						<span class="focus-input100"></span>
						
					</div>
					<div><?php echo "<span>$repass_err</span>"; ?></div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Register
						</button>
					</div>

					<div class="flex-sb-m w-full p-t-55">
						<div>
							<a href="index.php" class="txt3">
								Already Have a Account? Click Here
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<?php if($page == 'add.php') { ?>

	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../vendor/animsition/js/animsition.min.js"></script>
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
	<script src="../vendor/select2/select2.min.js"></script>
	<script src="../vendor/countdowntime/countdowntime.js"></script>
	<script src="../js/main.js"></script>

	<?php }else{ ?>	

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<?php } ?>

</body>
</html>