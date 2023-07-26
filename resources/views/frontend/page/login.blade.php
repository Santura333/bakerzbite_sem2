<!DOCTYPE HTML>
<html>

<head>
	<title>Login</title>
	<script src="../frontend/js/jquery.log.js"></script>
	<!-- Custom Theme files -->
	<link href="{{ asset('frontend/css/login.css') }}" rel="stylesheet">
	<!-- for-mobile-apps -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords"
		content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- Favicon -->

	<link rel="shortcut icon" type="image/png" href="{{asset('frontend/img/images/logo.png')}}">

	<!-- //for-mobile-apps -->
	<!--Google Fonts-->
</head>

<body>
	<!--header start here-->
	<div class="header">
		<div class="header-main">
			<img src="frontend/img/images/Bakerz_logo6_edit-removebg-preview.png" alt="">

			<h1> Login </h1>
			<div class="header-bottom">
				<div class="header-right w3agile">

					<div class="header-left-bottom agileinfo">

						<form action="#" method="post">
							<input type="text" value="User name" name="name" onfocus="this.value = '';"
								onblur="if (this.value == '') {this.value = 'User name';}" />
							<input type="password" value="Password" name="password" onfocus="this.value = '';"
								onblur="if (this.value == '') {this.value = 'password';}" />
							<div class="remember">
								<span class="checkbox1">
									<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember
										me</label>
								</span>
								<div class="forgot">
									<h6><a href="#">Forgot Password?</a></h6>
								</div>
								<div class="clear"> </div>
							</div>

							<input type="submit" value="Login">
						</form>
						<div class="header-left-top">

						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
	<!--header end here-->

	<!--footer end here-->
</body>

</html>