<?php
session_start();

	if(isset($_SESSION['login']) ) {
	header('location:publik.php');
	exit;
}
?>

<html>
	<head>
		<title>Login Admin</title>

			  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="../image/x-icon" href="1509094699.ico">
   <!--  <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tampilanformlogin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>




	<div class="wrap">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="background">
						<div class="formlogin responsive">
						<marquee behavior="" direction="left" loop="infinity">Welcome to SYAHBANDAR TANJUNG PRIOK</marquee>
							<br>
							<br>
							<br>
							<form action="proses/proseslogin.php" method="post">
								<h3>LOGIN ADMIN</h3>
								<div class="form-group">
							    	<label for="username">Username</label>
							    	<input type="text" class="form-control" name="username" placeholder="Username" required>
								</div>
								<div class="form-group">
							    	<label for="password">Password</label>
							    	<input type="password" class="form-control"  name="password" placeholder="Password" required>
								</div>
								<!-- <div class="form-group">
						        	<input type="checkbox" class="form-check-input" name="remember"><label class="form-check-label">Remember me</label>
						        </div> -->
								<div class="loginbtn">
								<input type="submit" value="Login" name="login" style="background-color: blue">
								&nbsp <a href="lupapassword.php" style="font-size: 12px;">Forgot Password ?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
	</div>
		
	
	<script src="../js/jquery.js"></script>
    <script src="../js/script.js"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	
	</body>
</html>