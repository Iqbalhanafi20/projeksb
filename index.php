<?php
include "koneksi.php";
?>

<html lang="en">
	<head>
		<title>Kesyahbandaran Utama Tanjung Priok</title>
		  <!-- Required meta tags -->
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
    <link rel="stylesheet" href="css/beranda.css">
    <link rel="stylesheet" href="css/navban.css">
    <link rel="stylesheet" href="css/footer.css">
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
        <a class="nav-link" href="#"><span class="icon-cari"><img src="open-iconic-master/png/home-2x.png" alt=""></span>Beranda<span class="sr-only">(current)</span></a>
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
          <a class="dropdown-item" href="kotakKomentar.php">Kotak Komentar</a>
          <a class="dropdown-item" href="tentang_kami/Lokasi.php">Lokasi Kami</a>
          <a class="dropdown-item" href="tentang_kami/gallery.php">Gallery</a>
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


<center><h2 class="title"></h2></center>
<!-- konten Kiri -->
<div class="konten">
	<div>
         <div class="row">
            <div class="col-md-5 menuKiri">
             	<div class="row">
             		<div class="col-md-12">
             			<center><h3>Sejarah</h3></center>
                  <?php 
                  $q = mysql_query("SELECT * FROM t_beranda");
                  $cet = mysql_fetch_array($q);
                  ?>
             			<img src="img/imgSejarah/<?php echo $cet[1]?>" class="img-fluid" alt="Responsive image" id="imgHistory">
             		</div>
             	</div>
             	<div class="row">
             		<div class="col-sm-12">
              <div id="isisejarah">
             	<p>
              <?php echo $cet[2]?>
					    </p>
              </div>
    <!-- Statistik Pengunjung -->
    <div class="stat">
    <?php include "statistik.php"; ?>
    </div>
             		</div>
             	</div>
            </div>


            <div class="col-md-7 menuKanan">
            	<div class="row">
            		<div class="isiAlamat">
            			<table class="table table-striped table-responsive">
						  <thead>
						    <tr>
						      <th scope="col">No</th>
						      <th scope="col">Kantor</th>
						      <th scope="col">Kelas</th>
						      <th scope="col">Alamat</th>
						    </tr>
						  </thead>

						<!-- Tampil data alamat -->
						<?php
							$no = 1;
							$cari = @$_POST['cari'];
							$qcetak = mysql_query("SELECT * FROM kantorsyahbandar");
							while($cetakdata = mysql_fetch_array($qcetak)){ ?>
								      <tbody>
									    <tr>
									      <th scope="row"><?php echo $no++?></th>
									      <td><?php echo $cetakdata[1]?></td>
									      <td><?php echo $cetakdata[2]?></td>
									      <td><?php echo $cetakdata[3]?></td>
									    </tr>
									  </tbody>
						<?php
							}
						?>

						</table>
            		</div>
            	</div>

            	<div class="row">
            		<div class="col-sm 12">
            			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      						  <ol class="carousel-indicators">
      						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      						  </ol>
                   
      						  <div class="carousel-inner">
      						    <div class="carousel-item active">
                    <?php
                    $qcet = mysql_query("select * from t_carrousel where id_gambar='CR001'");
                    while ( $row = mysql_fetch_array($qcet) ) { ?>
                        <img class="d-block w-100" src="img/carrousel/<?php echo $row[1]?>" alt="First slide">
                    <?php }  ?>
      						    </div>

      						    <div class="carousel-item">
                      <?php
                      $qcet = mysql_query("select * from t_carrousel where id_gambar='CR002'");
                      while ( $row = mysql_fetch_array($qcet) ) { ?>
                         <img class="d-block w-100" src="img/carrousel/<?php echo $row[1]?>" alt="Second slide">
                      <?php }  ?>
      						    </div>

      						    <div class="carousel-item">
                       <?php
                      $qcet = mysql_query("select * from t_carrousel where id_gambar='CR003'");
                      while ( $row = mysql_fetch_array($qcet) ) { ?>
                        <img class="d-block w-100" src="img/carrousel/<?php echo $row[1]?>" alt="Third slide">
                      <?php }  ?>
      						    </div>

      						  </div>
      						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      						    <span class="sr-only">Previous</span>
      						  </a>
      						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
      						    <span class="sr-only">Next</span>
      						  </a>
      						</div>
            		</div>
            		
            	</div>

            	</div>
            </div>
        </div>
    </div>

     <!-- Logo-Logo -->
            <div class="kontenLogo">
            	<div class="row logo">
	            	<div class="col-lg-12 md-6 sm-4">
	            		<div class="row">
	            			<div class="col-md 4 pilihLogo"><a href="publik/bidangpatroli.php"><img data-toggle="tooltip" data-placement="top" title="Bidang Penjagaan Patroli & Penyidikan" src="img/BigKn4XjT.png" alt="..." class="rounded"></a></div>
	            			<div class="col-md 4 pilihLogo"><a href="publik/layanan_publik.php"><img data-toggle="tooltip" data-placement="top" title="Bidang Status Hukum & Sertifikasi Kapal" src="img/55616-certification-document-text-paper-black-interface-symbol.png" alt="..." class="rounded"></a></div>
	            			<div class="col-md 4 pilihLogo"><a href="publik/tataUsaha.php"><img data-toggle="tooltip" data-placement="top" title="Bagian Tata Usaha" src="img/paper-sheet-outline_icon-icons.com_70653.png" alt="..." class="rounded"></a></div>
	            			<div class="col-md 4 pilihLogo"><a href="publik/keselamatanBerlayar.php"><img data-toggle="tooltip" data-placement="top" title="Bidang Keselamatan Berlayar" src="img/help-buoy_icon-icons.com_50373.png" alt="..." class="rounded"></a></div>
	            		</div>
	            	</div>
	            </div>
            </div>


<!-- footer -->
<?php include "footer.php" ?>

			
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	 <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>