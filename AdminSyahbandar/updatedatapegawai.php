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
   <!--  <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="css/styleadmin.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="css/tampilanpegawais.css">
	</head>
	<body>
<style>
	.formupdate input, select, textarea{
		width: 80% !important;
		resize: none;
	}

	.formupdate{
		margin: 20px 20px 20px 40px;
	}
	#update{
		background-color: #78EA4B;
		padding: 10px;
		font-size: 12px;
		color: black;
		font-weight: bold;
	}
</style>

 <?php 
include "bannerAdmin.php";
  ?>

<div class="row">

<?php include "menu.php"; ?>	

<?php
include "../koneksi.php"; 
$cetak = mysql_query("SELECT * FROM t_pegawai WHERE nip='$_GET[nip]'");
$row = mysql_fetch_array($cetak);
?>
<div class="col-md-9">
	<center><h1>FORM UPDATE PEGAWAI</h1></center>
	<div class="formupdate">
    			<form action="proses/editbiodatapegawai.php" method="post" enctype="multipart/form-data">
    				<div class="form-group">
					    <label class="col-form-label">Nip</label>
					    <input type="text" class="form-control" id="" name="nip" value="<?php echo $row[0]?>" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Nama Pegawai</label>
					    <input type="text" class="form-control" id="" name="nama" value="<?php echo $row[1]?>" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Tempat Lahir</label>
					    <input type="text" class="form-control" id="" name="tempat" value="<?php echo $row[2]?>" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Tanggal Lahir</label>
					    <input type="text" class="form-control" id="" name="tgl" value="<?php echo $row[3]?>" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Agama</label>
					    <input type="text" class="form-control" id="" name="agama" value="<?php echo $row[4]?>" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Pendidikan</label>
					    <input type="text" class="form-control" id="" name="pendidikan" value="<?php echo $row[5]?>" required>
				  	</div>
				  	<div class="form-group">
						<label for="exampleFormControlTextarea1">Pendidikan Kedinasan</label>
						<textarea class="form-control"  rows="6" name="pendi"  required><?php echo $row[6]?></textarea>
					</div>
				  	<div class="form-group">
					    <label class="col-form-label">Pangkat/Gol</label>
					    <input type="text" class="form-control" id="" name="pangkat" value="<?php echo $row[7]?>" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">TMT</label>
					    <input type="text" class="form-control" id="" name="tmt" value="<?php echo $row[8]?>" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Kepel</label>
					    <input type="text" class="form-control" id="" name="kepel" value="<?php echo $row[9]?>" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Penjenjangan</label>
					    <input type="text" class="form-control" id="" name="penjenjangan" value="<?php echo $row[10]?>" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Jabatan Fungsional</label>
					    <input type="text" class="form-control" id="" name="jabatan" value="<?php echo $row[11]?>" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Kelas Jabatan</label>
					    <input type="text" class="form-control" id="" name="kelasjabatan" value="<?php echo $row[12]?>" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Unit Kerja</label>
					    <input type="text" class="form-control" id="" name="unit" value="<?php echo $row[13]?>" required>
				  	</div>
				  	<div class="form-group">
						<label>Pilih Seksi Bagian</label>
						<select name="idBagian" class="form-control" id="seksi" required>
						<option value="">--Pilih Data--</option>
							<?php
							$seksi = array(
								'SB' => 'Syahbandar',
								'TU' => 'Tata Usaha',
								'SHK' => 'Status Hukum Kapal',
								'KKB' => 'Keselamatan Berlayar',
								'PPP' => 'Penjagaan dan Patroli' 
							);
							// Pengulangan seksi
							foreach ($seksi as $data => $val) { ?>
						<option value="<?php echo $data ?>"><?php echo $val?></option>
							<?php	
							}
							?>
						</select>
					</div>
				  	<div class="form-group">
					    <label class="col-form-label">Foto Pegawai</label>
					    <input type="file" name="fileFoto">
				  	</div>
				  <input type="submit" name="ubah" value="UPDATE" id="update">
				</form>
    			</div>
</div>
</div>





    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   	<script src="../js/jquery.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="js/hapus.js"></script>
	</body>
</html>