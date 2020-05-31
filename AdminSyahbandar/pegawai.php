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
	
	 <link rel="stylesheet" href="css/style.css">
	    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css" /> -->
		<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../assets/css/jquery-ui.min.css" />
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="css/tampilanpegawaiii.css">

	</head>
	<body>
<style>
	.print{
		margin-left: 20px;
	}
	.print button{
		background-color: #6030FB !important;
		color: black;
	}
	.caridata input{
		width: 100% !important;
		margin-top: 10px;
		margin-left: 3px;
	}
	textarea{
		font-size: 14px !important;
	}
</style>

 <?php 
include "bannerAdmin.php";
  ?>

<div class="row">

<?php include "menu.php"; ?>	

	<div class="col-md-9">
		<div class="kontenkelola">
			<div class="container">	
				<center><h1><b>DATA PEGAWAI</b></h1></center>
				<div class="isikonten">
					<div class="row">
			<div class="tambahPegawai">
				<a href="" data-toggle="modal" data-target=".tambahdata"><img src="gambar/folder.png" alt="">&nbsp Tambah Data Pegawai</a>
			</div>
			
			
<!-- Data pegawai -->
		<div class="col-md-12">
<div id="accordion" role="tablist">

<!-- SYAHBANDAR -->
 			<div class="card">
			    <div class="card-header" role="tab" id="headingFive">
			      <h5 class="mb-0">
			        <a class="collapsed" data-toggle="collapse" href="#syahbnadar" aria-expanded="true" aria-controls="collapseFive">
			          Syahbandar
			        </a>
			      </h5>
			    </div>
			    <div id="syahbnadar" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
			<div class="card-body">
			
		<div class="row">
			   <div class="col-md-12">
					<div class="kontenbiodata">

					<?php
					$q = mysql_query("SELECT * FROM t_pegawai WHERE idBagian='SB'");
					$result = mysql_num_rows($q);
					// jika data kosong
					if($result < 1){ ?>		
					<img src="gambar/nodata.png" alt="" width="100%" height="100%">
					<?php
					}
					?>
					<?php
					while($row = mysql_fetch_array($q) ){
					?>
			<div class="fotoProfile">
			<a href="proses/hapusbiodatapegawai.php?nip=<?php echo $row[0]?>"><img src="gambar/remove.png" alt="" id="removes" onclick="return konfirm()"></a>
			     <div class="col-md-3" id="fotosyahbandar">
			     	<?php if(!$row[14]){ ?>
				     	 <img src="gambar/no.png">
				    <?php } else {?>
						 <img src='gambar/fotopegawai/<?php echo $row[14]?>'>
					<?php } ?> 
			     </div>
			</div>
				<?php } ?>
			 <div class="col-md-9">
			 	<div class="biodataSyahbandar">
			 	<form>
			 	<table class="table table-responsive">
			<?php
			 $q = mysql_query("SELECT * FROM t_pegawai  WHERE idBagian='SB'");
			 while($row = mysql_fetch_array($q) ){
			 ?>
			 	<tbody>
			 			<tr>
							<td>Nip</td>
							<td><?php echo $row[0]?></td>
						</tr>
						<tr>
							<td>Nama pegawai</td>
							<td><b><?php echo $row[1]?></b></td>
						</tr>
						<tr>
							<td>Tempat Lahir</td>
							<td><?php echo $row[2]?></td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td><?php echo $row[3]?></td>
						</tr>
						<tr>
							<td>Agama</td>
							<td><?php echo $row[4]?></td>
						</tr>
						<tr>
							<td>Pendidikan</td>
							<td><?php echo $row[5]?></td>
						</tr>
						<tr>
							<td>Pendidikan Kedinasan</td>
							<td><?php echo $row[6]?></td>
						</tr>
						<tr>
							<td>Pangkat Gol</td>
							<td><?php echo $row[7]?></td>
						</tr>
						<tr>
							<td>TMT</td>
							<td><?php echo $row[8]?></td>
						</tr>
						<tr>
							<td>Kepel</td>
							<td><?php echo $row[9]?></td>
						</tr>
						<tr>
							<td>Penjenjangan</td>
							<td><?php echo $row[10]?></td>
						</tr>
						<tr>
							<td>Jabatan Fungsional</td>
							<td><?php echo $row[11]?></td>
						</tr>
						<tr>
							<td>Kelas Jabatan</td>
							<td><?php echo $row[12]?></td>
						</tr>
						<tr>
							<td>Unit Kerja</td>
							<td><?php echo $row[13]?></td>
						</tr>
					</tbody>
				</table>
				<a href="updatedatapegawai.php?nip=<?php echo $row[0]?>"><button type="button" class="btn btn-success" style="width: 100px;margin-left: 10px;background-color: #78EA4B;">Update</button></a>
				 <a href="cetpdf.php?nip=<?php echo $row[0]?>"><button type="button" class="btn btn-warning" id="cetak"><img src="../open-iconic-master/png/print-2x.png" alt="">&nbspCetak Data</button></a>
				<?php } ?>
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
<!-- TATA USAHA -->
<!-- Cetak data untuk melempar nilai ke cetak pdf -->

			  <div class="card">
			    <div class="card-header" role="tab" id="headingOne">
			      <h5 class="mb-0">
			        <a class="collapsed" data-toggle="collapse" href="#tataUsaha" aria-expanded="true" aria-controls="collapseTwo">
			          Staff Tata Usaha
			        </a>
			      </h5>
			    </div>
			    <div id="tataUsaha" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
			      <div class="card-body">
			        
					 <div class="col-md-12">
					 		
			 				<div class="kontenbiodata">
			     	    		<?php
								$q = mysql_query("SELECT * FROM t_pegawai WHERE idBagian='TU'");
								$result = mysql_num_rows($q);
								// jika data kosong
								if($result < 1){ ?>
								
								<img src="gambar/nodata.png" alt="" width="100%" height="100%">

								<?php
								}else{
								?>

								<div class="print">
								<a href="cetakpdf/cetakpdftu.php">
									<button type="button" class="btn btn-primary"><h5><span><img src="../open-iconic-master/png/print-2x.png" alt=""></span>&nbspCetak Data</h5></button>
							    </a>
								</div>
								<div class="col-12">
								<div class="caridata">
										<input type="text" id="caritu" placeholder="Cari Nip Pegawai">
								</div>
								</div>

								<div class="isitu"></div>	
								<?php  }?>	

			 		</div>
					</div>

			      </div>
			    </div>
			  </div>

		
<!-- SHK DAN SERTIFIKASI -->
			  <div class="card">
			    <div class="card-header" role="tab" id="headingTwo">
			      <h5 class="mb-0">
			        <a class="collapsed" data-toggle="collapse" href="#shk" aria-expanded="false" aria-controls="collapseTwo">
			          Staff SHK dan Sertifikasi
			        </a>
			      </h5>
			    </div>
			    <div id="shk" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
			      <div class="card-body">
			        
					<div class="col-md-12">
							
			 				<div class="kontenbiodata">
			 					
			     	    		<?php
								$q = mysql_query("SELECT * FROM t_pegawai WHERE idBagian='TU'");
								$result = mysql_num_rows($q);
								// jika data kosong
								if($result < 1){ ?>
								
								<img src="gambar/nodata.png" alt="" width="100%" height="100%">

								<?php
								}else{
								?>

								<div class="print">
								<a href="cetakpdf/cetakpdftu.php">
									<button type="button" class="btn btn-primary"><h5><span><img src="../open-iconic-master/png/print-2x.png" alt=""></span>&nbspCetak Data</h5></button>
							    </a>
								</div>
								<div class="col-12">
								<div class="caridata">
										<input type="text" id="carishk" placeholder="Cari Nip Pegawai">
								</div>
								</div>

								<div class="isishk"></div>	
								<?php  }?>	

			 		</div>
					</div>

			      </div>
			    </div>
			  </div>

<!-- KESELAMATAN BERLAYAR -->
			  <div class="card">
			    <div class="card-header" role="tab" id="headingThree">
			      <h5 class="mb-0">
			        <a class="collapsed" data-toggle="collapse" href="#keselamatan" aria-expanded="false" aria-controls="collapseThree">
			          Staff Keselamatan Berlayar
			        </a>
			      </h5>
			    </div>
			    <div id="keselamatan" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
			      <div class="card-body">
			       <div class="col-md-12">
			       			
			 				<div class="kontenbiodata">
			     	    		<?php
								$q = mysql_query("SELECT * FROM t_pegawai WHERE idBagian='KKB'");
								$result = mysql_num_rows($q);
								// jika data kosong
								if($result < 1){ ?>
								
								<img src="gambar/nodata.png" alt="" width="100%" height="100%">

								<?php
								}else{
								?>
								<div class="print">
								<a href="cetakpdf/cetakpdfkkb.php">
									<button type="button" class="btn btn-primary"><h5><span><img src="../open-iconic-master/png/print-2x.png" alt=""></span>&nbspCetak Data</h5></button>
							    </a>
							</div>
								<div class="col-12">
								<div class="caridata">
										<input type="text" id="carikkb" placeholder="Cari Nip Pegawai">
								</div>
								</div>
									<div class="isikkb"></div>
							<?php  }?>	
			 		</div>
					</div>

			      </div>
			    </div>
			  </div>

<!-- PENJAGAAN DAN PATROLI -->
			<div class="card">
			    <div class="card-header" role="tab" id="headingFour">
			      <h5 class="mb-0">
			        <a class="collapsed" data-toggle="collapse" href="#penjagaan" aria-expanded="false" aria-controls="collapseFour">
			          Staff Penjagaan dan Patroli
			        </a>
			      </h5>
			    </div>
			    <div id="penjagaan" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
			      <div class="card-body">
			        
					 <div class="col-md-12">
					 		
			 				<div class="kontenbiodata">
			     	    		<?php
								$q = mysql_query("SELECT * FROM t_pegawai WHERE idBagian='PPP'");
								$result = mysql_num_rows($q);
								// jika data kosong
								if($result < 1){ ?>
								
								<img src="gambar/nodata.png" alt="" width="100%" height="100%">

								<?php
								}else{
								?>
								<div class="print">
								<a href="cetakpdf/cetakpdfppp.php">
									<button type="button" class="btn btn-primary"><h5><span><img src="../open-iconic-master/png/print-2x.png" alt=""></span>&nbspCetak Data</h5></button>
							    </a>
								</div>
								<div class="col-12">
								<div class="caridata">
										<input type="text" id="carippp" placeholder="Cari Nip Pegawai">
								</div>
								</div>
									<div class="isippp"></div>	
						

							<?php  }?>
							
			 		</div>
					</div>

			      </div>
			    </div>
			  </div>
<!-- batas akhir PPP -->
			</div>

		  </div>
<!-- batas data pegawai -->
		</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- MODAL DATA PEGAWAI -->
							<?php
							$q = mysql_query("SELECT * FROM t_pegawai");
							while($row = mysql_fetch_array($q) ){
							?>
	
							<div class="modal fade" id="<?php echo $row[0]?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg">
							    <div class="modal-content" id="addData">
							    	<div class="row">
							    		<div class="col-md-12" id="bio">
							    		<button aria-label="Close" id="tutup" data-dismiss="modal" class="btn btn-success close">CLOSE</button>
							    		<form action="">
							    			<table class="table table-responsive">	
											   	<tbody>
									 			<tr>
													<td>Nip</td>
													<td><?php echo $row[0]?></td>
												</tr>
												<tr>
													<td>Nama pegawai</td>
													<td><b><?php echo $row[1]?></b></td>
												</tr>
												<tr>
													<td>Tempat Lahir</td>
													<td><?php echo $row[2]?></td>
												</tr>
												<tr>
													<td>Tanggal Lahir</td>
													<td><?php echo $row[3]?></td>
												</tr>
												<tr>
													<td>Agama</td>
													<td><?php echo $row[4]?></td>
												</tr>
												<tr>
													<td>Pendidikan</td>
													<td><?php echo $row[5]?></td>
												</tr>
												<tr>
													<td>Pendidikan Kedinasan</td>
													<td><?php echo $row[6]?></td>
												</tr>
												<tr>
													<td>Pangkat Gol</td>
													<td><?php echo $row[7]?></td>
												</tr>
												<tr>
													<td>TMT</td>
													<td><?php echo $row[8]?></td>
												</tr>
												<tr>
													<td>Kepel</td>
													<td><?php echo $row[9]?></td>
												</tr>
												<tr>
													<td>Penjenjangan</td>
													<td><?php echo $row[10]?></td>
												</tr>
												<tr>
													<td>Jabatan Fungsional</td>
													<td><?php echo $row[11]?></td>
												</tr>
												<tr>
													<td>Kelas Jabatan</td>
													<td><?php echo $row[12]?></td>
												</tr>
												<tr>
													<td>Unit Kerja</td>
													<td><?php echo $row[13]?></td>
												</tr>
											</tbody>
							    			</table>
							    		<a href="updatedatapegawai.php?nip=<?php echo $row[0]?>"><button type="button" class="btn btn-success" style="width: 100px;margin-left: 10px;">Update</button></a>
							    		<a href="cetpdf.php?nip=<?php echo $row[0]?>"><button type="button" class="btn btn-warning" id="cetak"><img src="../open-iconic-master/png/print-2x.png" alt="">&nbspCetak Data</button></a>
							    		</form>
							    		</div>
							    	</div>
							    </div>
							   </div>
							 </div>

							<?php } ?>


<!-- Modal tambah Data -->
<div class="modal fade tambahdata" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="addData">
    	<div class="row">
    		<div class="col-md-12" id="tam">
    			<div class="forminsert">
    			<form action="proses/simpandatapegawai.php" method="post" enctype="multipart/form-data">
    				<div class="form-group">
					    <label class="col-form-label">Nip</label>
					    <input type="text" class="form-control" id="" name="nip" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Nama Pegawai</label>
					    <input type="text" class="form-control" id="" name="nama" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Tempat Lahir</label>
					    <input type="text" class="form-control" id="" name="tempat" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Tanggal Lahir</label>
					    <input type="date" class="form-control" id="" name="tgl" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Agama</label>
					    <input type="text" class="form-control" id="" name="agama" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Pendidikan</label>
					    <input type="text" class="form-control" id="" name="pendidikan" required>
				  	</div>
				  	<div class="form-group">
						<label for="exampleFormControlTextarea1">Pendidikan Kedinasan</label>
						<textarea class="form-control"  rows="6" name="pendi" style="resize:none;" required><?php echo $row[6]?></textarea>
					</div>
				  	<div class="form-group">
					    <label class="col-form-label">Pangkat-Gol</label>
					    <input type="text" class="form-control" id="" name="pangkat" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">TMT</label>
					    <input type="date" class="form-control" id="" name="tmt" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Kepel</label>
					    <input type="text" class="form-control" id="" name="kepel" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Penjenjangan</label>
					    <input type="text" class="form-control" id="" name="penjenjangan" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Jabatan Fungsional</label>
					    <input type="text" class="form-control" id="" name="jabatan" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Kelas Jabatan</label>
					    <input type="text" class="form-control" id="" name="kelasjabatan" required>
				  	</div>
				  	<div class="form-group">
					    <label class="col-form-label">Unit Kerja</label>
					    <input type="text" class="form-control" id="" name="unit" required>
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
				  <button type="submit" class="btn btn-primary btn-lg btn-block" name="add">Insert</button>
				  <button type="submit" class="btn btn-primary btn-lg btn-block" name="tutup" id="tutup"  data-dismiss="modal" style="background-color: red !important;">Close</button>
				</form>
    			</div>
    		</div>
    	</div>
    </div>
  </div>
</div>



    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   	<script src="../js/jquery.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="../assets/js/jquery-1.11.3.min.js"></script>
    <script src="../assets/js/jquery-ui.custom.min.js"></script>
    <script src="../assets/js/jquery-2.1.4.min.js"></script>
	<script src="../assets/js/jquery-ui.min.js"></script>
	<script src="js/hapus.js"></script>
	<script>
		$(document).ready(function(){
	//tampil data shk
	$.get("dataku.php",{x:8},function(data){
		$(".isishk").html(data);
	}) 

	// TU
	$.get("dataku.php",{x:9},function(data){
		$(".isitu").html(data);
	}) 

	// PPP
	$.get("dataku.php",{x:10},function(data){
		$(".isippp").html(data);
	}) 

	// KKB
	$.get("dataku.php",{x:11},function(data){
		$(".isikkb").html(data);
	}) 

// // Memunculkan data KKB otomatis dengan autocomplete
// 					$.get("dataku.php",{x:4},function(data){
// 						var cetak = data.split(",");
					
// 					$("#carikkb").autocomplete({
// 						source : cetak
// 					});
// 				})

// // Memunculkan data PPP otomatis dengan autocomplete
// 					$.get("dataku.php",{x:5},function(data){
// 						var cetak = data.split(",");
					
// 					$("#carippp").autocomplete({
// 						source : cetak
// 					});
// 				})

// // Memunculkan data TU otomatis dengan autocomplete
// 					$.get("dataku.php",{x:6},function(data){
// 						var cetak = data.split(",");
					
// 					$("#caritu").autocomplete({
// 						source : cetak
// 					});
// 				})

// // Memunculkan data SHK otomatis dengan autocomplete
// 					$.get("dataku.php",{x:7},function(data){
// 						var cetak = data.split(",");
					
// 					$("#carishk").autocomplete({
// 						source : cetak
// 					});
// 				})

// Auto Complete data pegawai tu
					$("#caritu").keyup(function(){
					var nilai = $("#caritu").val();
					$.get("dataku.php",{x:9,cmb:nilai},function(data){
						$(".isitu").html(data);
					})
				})

// Auto Complete data pegawai shk
					$("#carishk").keyup(function(){
					var nilai = $("#carishk").val();
					$.get("dataku.php",{x:8,cmb:nilai},function(data){
						$(".isishk").html(data);
					})
				})

// Auto Complete data pegawai ppp
					$("#carippp").keyup(function(){
					var nilai = $("#carippp").val();
					$.get("dataku.php",{x:10,cmb:nilai},function(data){
						$(".isippp").html(data);
					})
				})

// Auto Complete data pegawai kkb
					$("#carikkb").keyup(function(){
					var nilai = $("#carikkb").val();
					$.get("dataku.php",{x:11,cmb:nilai},function(data){
						$(".isikkb").html(data);
					})
				})
		})
	</script>
	</body>
</html>