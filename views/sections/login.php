<?php
require_once('../../helper/constants.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nídαnα - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" href="<?php echo BASEASSETS;?>img/favicon.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo BASEASSETS;?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo BASEASSETS;?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo BASEASSETS;?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo BASEASSETS;?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo BASEASSETS;?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo BASEASSETS;?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASEASSETS;?>css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<a href="<?php echo BASEURL;?>"><img src="<?php echo BASEASSETS;?>img/service.png" alt="IMG" ></a>
				</div>

				<form class="login100-form validate-form" method='POST' action="<?php echo BASEURL?>helper/login-helper.php">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div>
						<select class="custom-select input100" id="inputGroupSelect01" name="type[]">
							<option selected disabled>Choose...</option>
							<option value="patient">Patient</option>
							<option value="doctor">Doctor</option>
						</select>
					</div>

					
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" value="Login" name="login_submit" type="submit">
					</div>

					<div class="text-center p-t-40">
						<a class="txt2" href="<?php echo BASEURL;?>register">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?php echo BASEASSETS;?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo BASEASSETS;?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo BASEASSETS;?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo BASEASSETS;?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo BASEASSETS;?>vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		});
		$('#customSwitch1').prop('indeterminate', true)
	</script>
<!--===============================================================================================-->
	<script src="<?php echo BASEASSETS;?>js/main.js"></script>

</body>
</html>