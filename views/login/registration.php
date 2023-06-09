<?php   
    include_once("../../libs/routing.php");
	$routing = new Routing();
	if(isset($_POST['btnReg']))
	{
		include_once('doReg.php');
	}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=$routing->base_url_backend;?>assets/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$routing->base_url_backend;?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$routing->base_url_backend;?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$routing->base_url_backend;?>assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$routing->base_url_backend;?>assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=$routing->base_url_backend;?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$routing->base_url_backend;?>assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$routing->base_url_backend;?>assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=$routing->base_url_backend;?>assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$routing->base_url_backend;?>assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=$routing->base_url_backend;?>assets/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form method="POST" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Registration Account
					</span>
                    <span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Họ tên
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Phone number is required">
						<input class="input100" type="text" name="name" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Số điện thoại
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Phone number is required">
						<input class="input100" type="text" name="phone" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Địa chỉ
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Address is required">
						<input class="input100" type="text" name="address" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="btnReg">
							Registration
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?=$routing->base_url_backend;?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$routing->base_url_backend;?>assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$routing->base_url_backend;?>assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=$routing->base_url_backend;?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$routing->base_url_backend;?>assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$routing->base_url_backend;?>assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=$routing->base_url_backend;?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=$routing->base_url_backend;?>assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=$routing->base_url_backend;?>assets/login/js/main.js"></script>

</body>
</html>