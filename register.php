<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
		<title>Hungry Bulb</title>
		<!-- Material icons -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
		
		<!-- Local Stylesheet -->
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body class="blue-grey darken-3">
		
		<div id="register_page">
			<form class="col s12 z-depth-4 card-panel center" method="POST" action="register.php">
				<?php include('errors.php'); ?>
				<div class="row margin">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="fullname" name="fullname" type="text" class="validate">
						<label for="fullname">Full Name</label>
					</div>
				</div>
				<div class="row margin">
					<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
						<input id="email" name="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row margin">
					<div class="input-field col s12">
						<i class="material-icons prefix">lock_outline</i>
						<input id="password" name="password" type="password" class="validate">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="row margin">
					<button class="btn waves-effect waves-light btn-medium" type="submit" name="reg_user">Register
					
					</button>
				</div>
				<div class="row margin">
					<div class="input-field col s12">
						<p class="margin center-align medium-small">Already a Member?<a href="login.php"> Sign In!</a></p>
					</div>
				</div>
			</form>
		</div>
		
		<!-- jQuery CDN -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	</body>
</html>