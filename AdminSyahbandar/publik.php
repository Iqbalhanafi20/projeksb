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
	<style>
		#form input{
			width: 100% !important;
		}
		#formupdate input{
			width: 100% !important;
		}
		.isi{
			margin-left: -5px !important;
		}
	</style>
	<body>

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
							  <div class="tab-pane active" id="v-pills-publik" role="tabpanel" >
							  	
							  	<div class="isikelolapublik">
							  	<center><h1>KELOLA PELAYANAN PUBLIK</h1></center>
							  		 <div class="form-group">
									    <label for="layanan publik">Pelayanan Publik</label>
									    <select class="form-control" id="layananpublik"></select>

									    <label for="layanan publik">Pilih Seksi</label>
									    <select class="form-control" id="seksi">
									    	<option value="">--Belum ada Data--</option>
									    </select>

									    <div id="isitabel"></div>
									    <div id="tombolaksi">
									    	<button type="button" class="btn btn-success" class="dataaksi" id="tambahdata">INSERT DATA</button>
									    </div>

							
<div id="formaksi">
	<div class="row">
		<div class="col-md-6">
			<div id="form">
			<h3>FORM INSERT</h3>
			<form action="proses/prosessimpanpublik.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label class="col-form-label" for="formGroupExampleInput" required>Id File</label>
					<input type="text" class="form-control" name="id">
		       </div>
			   <div class="form-group">
					<label class="col-form-label" for="formGroupExampleInput" required>Nama Seksi</label>
					<input type="text" class="form-control" name="nama_seksi">
			   </div>
				<div class="form-group">
					<label class="col-form-label" for="formGroupExampleInput" required>Id Seksi</label>
					<input type="text" class="form-control" name="id_seksi">
				</div>
				<div class="form-group">
					<label for="inputfile">Input File</label>
					<input type="file" class="form-control-file" id="inputfile" name="file">
				</div>
					<button type="submit" class="btn btn-primary" id="insert" name="insert">INSERT</button>
			</form>
			</div>					
		</div>

		<div class="col-md-6">
			<div id="formupdate">
<!-- Form UPDATE dan DELETE -->	
			<h3>FORM UPDATE dan DELETE</h3>
			<form enctype="multipart/form-data" method="post" action="proses/prosesuploadfile.php">
				<div class="form-group">
					<label for="layanan publik">Pelayanan Publik</label>
					 <select class="form-control" id="layanpublik" required style="width: 100% !important"></select>
				</div>
				<div class="form-group">
					 <label for="layanan publik">Pilih Seksi</label>
					 <select class="form-control" id="seksi2" style="width: 100% !important" required>
					 	<option value="">--Belum ada Data--</option>
					 </select>
				</div>
				<div class="form-group">
					<label for="layanan publik">Pilih ID</label>&nbsp<p style="color:red">(<b>Untuk Menghapus Data</b>)</p>
					<select class="form-control" id="idseksi" name="idseksi" style="width: 100% !important" required>
						<option value="">--Belum ada Data--</option>
					</select>
				</div>
				<div class="form-group">
					<label class="col-form-label" for="formGroupExampleInput">Id File</label>
					<input type="text" class="form-control" name="id" id="idfile" required>
				</div>
				<div class="form-group">
					<label class="col-form-label" for="formGroupExampleInput">Id Seksi</label>
					<input type="text" class="form-control" name="ids" id="idseksii" required>
				</div>
				<div class="form-group">
					<label class="col-form-label" for="formGroupExampleInput">Nama Seksi</label>
					<textarea class="form-control" name="namaseksii" id="namaseksii" rows="4" required></textarea>
				</div>
				<div class="form-group">
					<label class="col-form-label" for="formGroupExampleInput">File</label>
					<input type="file" name="fileupload" id="berkas">
				</div>
				<div class="form-group">
					<label class="col-form-label" for="formGroupExampleInput">Nama File</label>
					<input type="text" class="form-control" name="fileupload" id="namafile" disabled>
				</div>

				<button type="submit" class="btn btn-warning" name="ubah" id="ubah">UPDATE</button>
				<button type="submit" class="btn btn-danger" name="delete" id="delete" onclick="return konfirm()">DELETE</button>
			</form>
			</div>
		</div>
	</div>												 
</div>

									</div>
									    
									  </div>
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
   	<script>
 $(document).ready(function(){
 		// $("#formupdate").hide();
 		$("#form").hide();

 		$("#tambahdata").click(function(){
 			// $("#formupdate").slideUp(1500);
 			$("#form").toggle(1500);
 		});

 		// muncul pelayanan publik
 		$.get("prosessimpan.php",{x:'1'},function(data){
				$("#layananpublik").html(data);
			});

 		// tampil form admin
 		$.get("prosessimpan.php",{x:'12'},function(data){
				$("#formAdmin").html(data);
			});

 		// muncul pelayanan publik form update
 		$.get("prosessimpan.php",{x:'5'},function(data){
				$("#layanpublik").html(data);
			});

 		// Combo pelayanan publik berubah
 		$("#layananpublik").change(function(){
 			var nilai = $("#layananpublik").val();

 			$.get("prosessimpan.php",{x:'2',id:nilai},function(data){
				$("#seksi").html(data);
			});
 		})

 		$("#layanpublik").change(function(){
 			var nilai = $("#layanpublik").val();

 			$.get("prosessimpan.php",{x:'6',id:nilai},function(data){
				$("#seksi2").html(data);
			});
 		})

 		// Combo seksi update berubah
 		$("#seksi2").change(function(){
 			var nilai = $("#seksi2").val();

 			$.get("prosessimpan.php",{x:'7',id:nilai},function(data){
				$("#idseksi").html(data);
			});
 		})

 		// ambil id dari id seksi2 update
 			$("#idseksi").change(function(){
				var nilai = $("#idseksi").val();
				$.get("prosessimpan.php",{x:'8',ids:nilai},function(data){
					var cetak = data.split(",");
					$("#idfile").val(cetak[0]);
					$("#idseksii").val(cetak[2]);
					$("#namaseksii").val(cetak[1]);
					$("#namafile").val(cetak[3]);
				})
			})

 		// combo pilih seksi berubah
 		$("#seksi").change(function(){
 			var nilai = $("#seksi").val();

 			$.get("prosessimpan.php",{x:'3',id:nilai},function(data){
				$("#isitabel").html(data);
			});
 		})


 		
 	})
   	</script>
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="js/hapus.js"></script>
	</body>
</html>