<?php 
include "../koneksi.php"; 
session_start();
?>
<html>
	<head>
		<title>Panel Admin</title>

			  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="../x-icon" href="../1509094699.ico">
   <!-- link css autocomplte -->
   <link rel="stylesheet" href="../assets/css/jquery-ui.custom.min.css">
   <!--  <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="css/styleadmin.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="css/tampilanpegawai.css">
	 <link rel="stylesheet" href="css/style.css">
	    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css" /> -->
		<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../assets/css/jquery-ui.min.css" />
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
	</head>
	<body>
	<style>
		#lupa input{
			width: 100% !important;
		}
		#lupa{
			margin-top: 100px;
		}
	</style>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<a href="index.php">
				 <button type="submit"  class="btn btn-outline-primary" name="reset"><span><img src="../open-iconic-master/png/action-undo-3x.png" alt="">&nbsp Kembali</span></button>
				 </a>
			</div>
			<div class="col-md-4">
			<form method="post" action="proses/lupapassword.php">
			<div id="lupa">
			  <div class="form-group">
			    <label>Email address</label>
			    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label>New Password</label>
			    <input type="password" class="form-control" id="password1" placeholder="Password" name="password1">
			  </div>
			  <div class="form-group">
			    <label>Re-Type New Password</label>
			    <input type="password" class="form-control" id="password2" placeholder="Password" name="password2">
			  </div>
			  </div>
			  <button type="submit" class="btn btn-primary btn-lg btn-block" name="reset">Reset</button>
			</form></div>
		</div>
		<div class="col-md-4"></div>
	</div>


    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   	<script src="../js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="js/hapus.js"></script>
	</body>
</html>