<?php
include "koneksi.php";
?>
<html>
	<head>
		<title>Kotak Komentar</title>

		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="1509094699.ico">
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
    <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="css/navban.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/komentar.css">
	</head>
	<body>

<!-- Navigasi bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navi">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><span class="icon-cari"><img src="open-iconic-master/png/home-2x.png" alt=""></span>Beranda<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php"><span class="icon-cari"><img src="open-iconic-master/png/person-2x.png" alt=""></span>Profile</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="icon-cari"><img src="open-iconic-master/png/people-2x.png" alt=""></span>Tentang Kami
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="tentang_kami/struktur.php">Struktur Organisasi</a>
          <a class="dropdown-item" href="">Kotak Komentar</a>
          <a class="dropdown-item" href="tentang_kami/Lokasi.php">Lokasi Kami</a>
           <a class="dropdown-item" href="tentang_kami/gallery.php">Galleri</a>
            <a class="dropdown-item" href="tentang_kami/galleryPegawai.php">Data Pegawai</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Layanan Publik
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="publik/tataUsaha.php">Bagian Tata Usaha</a>
          <a class="dropdown-item" href="publik/layanan_publik.php">Bidang Status Hukum dan Sertifikasi Kapal</a>
          <a class="dropdown-item" href="publik/keselamatanBerlayar.php">Bidang Keselamatan Berlayar</a>
          <a class="dropdown-item" href="publik/bidangpatroli.php">Bidang Penjagaan dan Patroli</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Info Umum
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://www.dephub.go.id/">Kementrian Perhubungan</a>
          <a class="dropdown-item" href="http://www.bmkg.go.id/cuaca/prakiraan-cuaca-indonesia.bmkg">BMKG Info</a>
          <a class="dropdown-item" href="#">AIS</a>
          <a class="dropdown-item" href="https://www.pelni.co.id/welcome">Kapal Penumpang</a>
        </div>
      </li>
    </ul>
    
  </div>
</nav>

  <!-- Banner -->
  <div class="banner">
    <div class="row">
      <div class="col-md 7">
        <img src="img/direktorat.png" class="img-fluid" alt="Responsive image">
        <h4>KANTOR KESYAHBANDARAN UTAMA TANJUNG PRIOK</h4>
      </div>  

      <div class="col-md 5">
      
      </div>
    </div>
  </div>



	<div class="row">
    <div class="col-md-4"></div>
		<div class="col-md-4 formKomen">
			<div class="komenwrap">
					   <center><h3>Kotak Saran</h3></center>
						<form action="prosesSimpanKomentar.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
						    	<label class="col-form-label" for="nama">Nama Lengkap</label>
						    	<input type="text" class="form-control" name="namaLengkap" placeholder="Nama Lengkap" required>
						  	</div>
						  	<div class="form-group">
						    	<label for="email">Email</label>
						    	<input type="email" class="form-control" aria-describedby="emailHelp" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
							    <label for="foto">Upload Foto</label>
							    <input type="file" class="form-control-file" id="uploadFoto" name="fileFoto" required>
							 </div>
							 <div class="form-group">
							    <label for="komentar">Komentar</label>
							    <textarea class="form-control" name="komentar" rows="3" required></textarea>
							 </div>
							 <button type="submit" class="btn btn-primary float-right" name="submit">Submit</button>
				
			</div>
		</div>
     <div class="col-md-4"></div>
</div>
    
           
</div>

<?php include "footer.php" ?>
		


	<script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
   	<script src="js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>