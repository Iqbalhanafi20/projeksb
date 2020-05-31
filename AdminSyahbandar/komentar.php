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
	<link rel="stylesheet" href="css/tampilankomentars.css">
	</head>
	<body>
<style>
	.kom{
		margin-left: -30px !important;
	}
	#konten{
		margin-left: -40px;
	}

</style>
			
			<!-- Menu admin -->
 <?php 
include "bannerAdmin.php";


  ?>


<div class="row">

 <?php include "menu.php"; ?>	

	<div class="col-md-9">
		<div id="konten">
			<div class="container">	
				<div class="isi">
					
						


							<div class="kom">
									<!-- Pagination -->
							<h3><b>Kotak Komentar / Saran</b></h3>
							<br>
								<?php
								$q = mysql_query("SELECT * FROM t_komentar");
								$result = mysql_num_rows($q);
								if($result === 0){ ?>
									<div class="row">
										<div class="col-md-4"></div>
										<div class="col-md-4">
											<img src="gambar/datakosong.png" alt="" id="dataKosong">
										</div>
										<div class="col-md-4"></div>
									</div>
									
									<?php
									}else{
										$perhalaman = 10;
										$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1 ;
										$mulai = ($halaman > 1) ? ($halaman * $perhalaman) - $perhalaman : 0 ; 

										$artikel = "SELECT * FROM t_komentar ORDER BY waktu DESC LIMIT $mulai, $perhalaman";
										$artikel2 = mysql_query($artikel);

										$semuanya = "SELECT * FROM t_komentar ORDER BY waktu DESC";
										$hasil = mysql_query($semuanya);
										$total = mysql_num_rows($hasil);


										$pages = ceil($total/$perhalaman);
										?>
								

								<div class="row">
										<div class="col-md-12" id="isiKom">
										<table>
											<tr>
												<th>Foto</th>
												<th>Nama</th>
												<th>Isi Komentar</th>
												<th>Tanggal</th>
												<th>Waktu</th>
												<th>Aksi</th>
											</tr>
									<?php
									while($row = mysql_fetch_array($q) ){
									?>
									<tr>
										<td><img src="../img/img_komen/<?php echo $row['foto']?>" alt="" class="fotoProfile"></td>
										<td><?php echo $row[0]?></td>
										<td class="komen"><?php echo $row['komentar']?></td>
										<?php 
											$data = $row['waktu'];
											// Cetak tanggal
											$tanggal = substr($data, 9,2);
											$bulan =  substr($data, 5,3);
											$tahun = substr($data, 0,4);
														
											$waktu = substr($data, 12,6)?>
										<td><?php echo $tanggal."-".$bulan."-".$tahun?></td>
										<td><?php echo $waktu?></td>
										<td><a href="proses/hapuskomen.php?email=<?php echo $row[1]; ?>"><img src="gambar/delete.png" id="hapuskomen" onclick="return konfirm()"></a></td>
									</tr>
									<?php } ?>
									<!-- akhir pengulangan -->
									</table>
									</div>

									<div class="col-md-12">
									<div class="pagin">
										<?php for($i=1; $i<=$pages; $i++){ ?>
											-<a href="?halaman=<?php echo $i?>" id="pagination"><?php echo $i?></a>-
										<?php }  }?>
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
	<script src="jsAdmin/ajax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="js/hapus.js"></script>
	</body>
</html>