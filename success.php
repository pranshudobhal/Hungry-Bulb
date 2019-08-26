<?php 
  session_start(); 

  if (!isset($_SESSION['fullname']) && !isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['fullname']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
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

<div class="header">
	<!--<h2>Logged In</h2>-->
</div>
<div class="content card-panel z-depth-4 col s12 center">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <?php  if (isset($_SESSION['fullname'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['fullname']; ?></strong></p>
    	<p> <a href="success.php?logout='1'" style="color: red;">Logout</a> </p>
    <?php endif ?>
    <?php  if (isset($_SESSION['email'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
      <p> <a href="success.php?logout='1'" style="color: red;">Logout</a> </p>
    <?php endif ?>
</div>
		
    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>