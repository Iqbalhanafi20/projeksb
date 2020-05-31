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
      <!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="../x-icon" href="../1509094699.ico">
   <!-- link css autocomplte -->
   <link rel="stylesheet" href="../assets/css/jquery-ui.custom.min.css">
	<link rel="stylesheet" href="css/tampilanpegawai.css">
	 <link rel="stylesheet" href="css/style.css">
	    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css" /> -->
		<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../assets/css/jquery-ui.min.css" />
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
	<link rel="stylesheet" href="css/tampilanberanda.css">
	</head>
	<body>
	<style>
		.inputDataAlamat input{
			width: 100% !important;
		}
		.isiAlamat input{
			width: 100% !important;
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
							<center><h1>KELOLA BERANDA</h1></center>

							<table border="1px" class="table" id="tabelSejarah">
							  <thead class="thead-dark">
							    <tr>
							      <th scope="col">No</th>
							      <th scope="col">Gambar</th>
							      <th scope="col">Isi Sejarah</th>
							    </tr>
							  </thead>
							  	<?php
							  	 $no = 1;
							  	 $c = mysql_query("SELECT * FROM t_beranda");
							  	while($cet = mysql_fetch_array($c)){?>
							  <tbody>
							    <tr>
							      <th scope="row"><?php echo $no++?></th>
							      <td><img src="../img/imgSejarah/<?php echo $cet[1]?>" alt="" width="100px" height="70px"></td>
							      <td><?php echo $cet[2]?></td>
							    </tr>
							  </tbody>
							  <?php } ?>
							</table>
					
					<!-- isi tabel alamat syahbandar -->
						<table class="table table-striped">
						    <thead class="thead-light">
						    <tr>
						      <th scope="col">No</th>
						      <th scope="col">Kantor</th>
						      <th scope="col">Kelas</th>
						      <th scope="col">Alamat</th>
						      <th scope="col">Action</th>
						    </tr>
						  </thead>

						<!-- Tampil data alamat -->
						<?php
							$no = 1;
							$cari = @$_POST['cari'];
							$qcetak = mysql_query("SELECT * FROM kantorsyahbandar WHERE Kantor like '%$cari%'");
							while($cetakdata = mysql_fetch_array($qcetak)){ ?>
								      <tbody>
									    <tr>
									      <th scope="row"><?php echo $no++?></th>
									      <td><?php echo $cetakdata[1]?></td>
									      <td><?php echo $cetakdata[2]?></td>
									      <td><?php echo $cetakdata[3]?></td>
									      <td><a href="proses/proseshapusberanda.php?id=<?php echo $cetakdata[0]?>"><img src="gambar/delete.png" alt="" id="hap" onclick="return konfirm()"></a></td>
									    </tr>
									  </tbody>
						<?php
							}
						?>

						</table>

							<hr>
				<div class="tombol">		
					 <button type="submit" class="btn btn-outline-success ubah" id="sejarah">UBAH SEJARAH</button>
				     <button type="submit" class="btn btn-outline-success ubah" id="alamat">UBAH ALAMAT</button>
				      <button type="submit" class="btn btn-outline-success ubah" id="inputalamat">INPUT ALAMAT</button>
				</div>

<!-- EDIT ALAMAT KESYAHBANDARAN -->
				     		<div class="isiAlamat">
								<fieldset>
										<legend>Form Edit</legend>
							 	<form action="proses/prosesuploadfile.php" method="post" enctype="multipart/form-data">
											 <div class="form-group">
											    <label class="col-form-label" for="formGroupExampleInput">Id Kantor</label>
											    <select name="idKantor" id="idKantor">
											    <option value="">--Pilih Data--</option>
											     <?php
													  $c = mysql_query("SELECT * FROM kantorsyahbandar");
											  		  while($cet = mysql_fetch_array($c) ) { ?>

																<option value="<?php echo $cet[0]?>"><?php echo $cet[0]?></option>
												<?php	}  ?>
												 </select>
											  </div>
											   <div class="form-group">
											    <label class="col-form-label" for="formGroupExampleInput">Nama Kantor</label>
											    <input type="text" class="form-control" id="nakam"  name="namaKantor" required>
											  </div>
											   <div class="form-group">
											    <label class="col-form-label" for="formGroupExampleInput">Kelas</label>
											    <input type="text" class="form-control" id="kelas" name="kelas" required>
											  </div>
											  <div class="form-group">
											    <label class="col-form-label" for="formGroupExampleInput">Alamat</label>
											    <input type="text" class="form-control" id="alamatsyah" name="alamat" required>
											  </div>
											  <button type="submit" class="btn btn-outline-success" id="ubahalamat" name="ubahalamat">UPDATE</button>
								</form>
								</fieldset>
							 </div>
								
<!-- UBAH SEJARAH PADA KELOLA BERANDA -->
								<div class="isiSejarah">
									<fieldset>
										<legend>Form Edit Sejarah</legend>
										<form action="proses/prosesubahsejarah.php" method="post" enctype="multipart/form-data">
											 <div class="form-group">
											    <label>Pilih Gambar</label>
											    <input type="file" name="file" required>
											  </div>
											 <div class="form-group">

											<?php
											$q = mysql_query("SELECT * FROM t_beranda");
											$c = mysql_fetch_array($q);
											?>
												
											    <label class="col-form-label" for="formGroupExampleInput">Gambar</label>
											    <input type="text" class="form-control" id="gambar" value="<?php echo $c[1] ?>" readonly="on">
											  </div>
											 <div class="form-group">
												<label for="exampleFormControlTextarea1">Isi Sejarah</label>
											    <textarea class="form-control" id="isi" rows="8" name="ta" required><?php echo $c[2]?></textarea>
										     </div>
											 <button type="submit" class="btn btn-outline-success" id="ubahdataberanda" name="ubahdataberanda">UPDATE</button>
										</form>

									</fieldset>	
								
								<div class="col-md 6">
									<div class="isigambar">
										<img src="../img/imgSejarah/<?php echo $c[1]?>" alt="" class="isiGambarBeranda" width="300px" height="250px">
									</div>
								</div>
							 </div> 
							
<!-- FORM INPUT ALAMAT PADA KELOLA BERANDA -->
<div class="col-md-6">
		<div class="inputDataAlamat">
							
		<!-- tampil kode otomatis -->
		<?php
		$hasil = mysql_query("SELECT max(idKantor) as maxId FROM kantorsyahbandar");
		$data  = mysql_fetch_array($hasil);
		$id = $data['maxId'];

		$noUrut = (int) substr($id, 1, 3);
		$kode = $noUrut+1;
		if($kode < 10){
			$id = "K00".$kode;
		}else{
			$id = "K0".$kode;
		}
		?>
		<form action="proses/prosesuploadfile.php" method="post">
		<div class="form-group">
		    <label>Id Kantor</label>
		    <input type="text" class="form-control" name="idKantor" value="<?php echo $id ?>" readonly="on" required>
		</div>
		<div class="form-group">
		    <label>Nama Kantor</label>
		    <input type="text" class="form-control" name="namaKantor" required>
		</div>
		<div class="form-group">
		    <label>Kelas</label>
		    <input type="text" class="form-control" name="kelas" required>
		</div>
		<div class="form-group">
		    <label>Alamat</label>
			<textarea name="alamat" id="" cols="30" rows="5"></textarea>
		</div>
			<button type="submit" name="masukalamat" class="btn btn-primary">Insert</button>
		</form>			
</div>
</div>

					 <div class="editCarrousel">
					 <center><h3><b>EDIT CARROUSEL</b></h3></center>
					 	<div class="row">
					 		<div class="col-md-6">
					 			<table class="table">
								  <thead>
								    <tr>
								      <th scope="col">No</th>
								      <th scope="col">Gambar</th>
								      <th scope="col">Action</th>
								    </tr>
								  </thead>
								 <?php
								 $no = 1;
				                    $qcet = mysql_query("select * from t_carrousel");
				                    while ( $row = mysql_fetch_array($qcet) ) { ?>
								  <tbody>
								    <tr>
								      <th scope="row"><?php echo $no++ ?></th>
								      <td><center><img src="../img/carrousel/<?php echo $row[1]?>" id="carousel"></center></td>
								  	  <td><a href="beranda.php?id=<?php echo $row[0]?>"><center><img src="gambar/update.png" alt="" id="gbrUpdate"></center></a></td>
								   </tr>	
								 </tbody>
								  <?php }  ?>
								</table> 	
					 		</div>
	
				<?php
				 $id = @$_GET[id];
				 $qcet = mysql_query("select * from t_carrousel where id_gambar='$id'");
			     $row = mysql_fetch_array($qcet) ?>
					 		<div class="col-md-6">
					 			<div class="editCarrousel">
					 			<h4>Update Gambar</h4>
					 				<form method="post" action="proses/prosesCarrousel.php" enctype="multipart/form-data">
									  <div class="form-group">
									    <label for="exampleFormControlFile1">File</label>
									    <input type="file" name='file' class="form-control-file" id="exampleFormControlFile1" required>
									  </div>
									 <label class="col-form-label" for="formGroupExampleInput">Id Gambar</label><br>
								  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="id_gambar" required>
							        <option value="<?php echo $row[0]?>"><?php echo $row[0]?></option>
							      </select>
									  <div class="form-group">
									    <label class="col-form-label" for="formGroupExampleInput">Gambar</label>
									    <input type="text" class="form-control" id="formGroupExampleInput" readonly="on" value="<?php echo $row[1]?>">
									  </div>
									  <button type="submit" class="btn btn-outline-success" name="save">Save</button>
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
   	<script>
   	$(document).ready(function(){
   		$.get("prosessimpan.php",{x:'14'},function(data){
				$("#ta").html(data);
			});

   		$(".isiSejarah").hide();
   		$(".isiAlamat").hide();
   		$(".inputDataAlamat").hide();

   		$("#sejarah").click(function(){
   			$(".isiSejarah").slideDown(1500);
   			$(".inputDataAlamat").slideUp(1500);
   			$(".isiAlamat").slideUp(1500);
   		});

   		$("#alamat").click(function(){
   			$(".isiSejarah").slideUp(1500);
   			$(".inputDataAlamat").slideUp(1500);
   			$(".isiAlamat").slideDown(1500);
   		});

   		$("#inputalamat").click(function(){
   			$(".isiSejarah").slideUp(1500);
   			$(".isiAlamat").slideUp(1500);
   			$(".inputDataAlamat").slideDown(1500);
   		});

   		$("#idKantor").change(function(){
   			var idkan = $("#idKantor").val();
   			$.get("prosessimpan.php",{x:'16',id:idkan},function(data){
	        var cetak = data.split('+');
	      	$("#nakam").val(cetak[1]);
	      	$("#kelas").val(cetak[2]);
	      	$("#alamatsyah").val(cetak[3]);
	      });
   		});


   	})
   	</script>
	<script src="jsAdmin/ajax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="js/hapus.js"></script>
	</body>
</html>