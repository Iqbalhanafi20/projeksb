<?php include "../koneksi.php"; 
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
	.formEditProfile input{
		width: 100% !important;
	}
	.kontenkelola{
		margin-left: -50px !important;
	}
</style>
	
			

			<!-- Menu admin -->
 <?php 
include "bannerAdmin.php";


 ?>


<div class="row">

  <?php include "menu.php"; ?>

		<div class="col-md-9">
			<div class="kontenkelola">
				<div class="container">	
					<div class="isi">
			<div class="tab-content" id="v-pills-tabContent">
				<div class="tab-pane active" role="tabpanel" >
					<div class="isiProfile">
					<center><h1>KELOLA PROFILE</h1></center>
					<br>
						<table border="1px" class="table table-responsive" id="tabelSejarah">
							  	<?php
								$q = mysql_query("SELECT * FROM t_profile");
								while ($c = mysql_fetch_array($q)) { ?>
							  <tbody>
							    <tr>
							      <td>Visi</td>
							      <td><?php echo $c[1]?></td>
							    </tr>
							     <tr>
							      <td>Misi</td>
							      <td><?php echo $c[2]?></td>
							    </tr>
							     <tr>
							      <td>Isi Sejarah</td>
							      <td><?php echo $c[3]?></td>
							    </tr>
							     <tr>
							      <td>File Video</td>
							      <td><?php echo $c[4]?></td>
							    </tr>
							  </tbody>
							  <?php } ?>
							</table>
					</div>
					
					<div class="formEditProfile">
					<fieldset>
						<legend><b>FORM EDIT</b></legend>

						<?php
						$q = mysql_query("SELECT * FROM t_profile");
						$c = mysql_fetch_array($q);
						?>
				<form method="post" action="proses/prosesubahprofile.php">
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Visi</label>
				    	<textarea class="form-control" id="visi" rows="8" name="visi" required><?php echo $c[1]?></textarea>
					</div>

					<div class="form-group">
						<label for="exampleFormControlTextarea1">Misi</label>
				    	<textarea class="form-control" id="misi" rows="8" name="misi" required><?php echo $c[2]?></textarea>
					</div>

					<div class="form-group">
					<label for="exampleFormControlTextarea1">Isi Sejarah</label>
				    <textarea class="form-control" id="isi" rows="8" name="isi" required><?php echo $c[3]?></textarea>
				    </div>

					<div class="form-group">
						<label class="col-form-label" for="formGroupExampleInput">Video</label>
						<p style="color:red"><i>Paste Your Video URL here !!!</i></p>
						Contoh Penulisan : http://www.youtube.com/embed/linEFcjJ6xM
						<input type="text" class="form-control" name="video" value="<?php echo $c[4]?>" required>
					</div>
					<button type="submit" class="btn btn-outline-success" name="ubahprofile">UPDATE</button>
				</form>
					</fieldset>
					</div>
				</div>
			</div>

				</div>
			</div>
		</div>
</div>
		</div>



    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   	<script src="../js/jquery.js"></script>
   	<script type="text/javascript" src="js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
   	<script>
   		tinyMCE.init({
        	// General options
        	mode : "textareas",
        	theme : "advanced",
	});
   	</script>
	<script src="jsAdmin/ajax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="js/hapus.js"></script>
	</body>
</html>