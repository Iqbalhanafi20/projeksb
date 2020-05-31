<?php
include "../koneksi.php";
?>
<html>
	<head>
		<title>Pelayanan</title>

		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

	<link rel="shortcut icon" type="image/x-icon" href="../1509094699.ico">
    <link href="../orgchart/orgchart.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="../orgchart/orgchart.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

    <link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
	  <link rel="stylesheet" href="../css/navban.css">
  <link rel="stylesheet" href="../css/footer.css">
	<style>
	p, li{
		font-size: 14px;
	}
	h3{
		font-weight: bold;
		color: #F4B357;
	}
	h2{
		color: black;
	}
  .kotakk{
    position: relative;
    height: 250px;
    margin-bottom: 200px;
  }
	</style>
	</head>
		

<!-- Navigasi bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navi">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php"><span class="icon-cari"><img src="../open-iconic-master/png/home-2x.png" alt=""></span>Beranda<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../profile.php"><span class="icon-cari"><img src="../open-iconic-master/png/person-2x.png" alt=""></span>Profile</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="icon-cari"><img src="../open-iconic-master/png/people-2x.png" alt=""></span>Tentang Kami
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../tentang_kami/struktur.php">Struktur Organisasi</a>
          <a class="dropdown-item" href="../kotakKomentar.php">Kotak Komentar</a>
          <a class="dropdown-item" href="../tentang_kami/Lokasi.php">Lokasi Kami</a>
          <a class="dropdown-item" href="../tentang_kami/gallery.php">Galleri</a>
          <a class="dropdown-item" href="../tentang_kami/galleryPegawai.php">Data Pegawai</a>
        </div>
      </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Layanan Publik
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="">Bagian Tata Usaha</a>
          <a class="dropdown-item smooth" href="layanan_publik.php">Bidang Status Hukum dan Sertifikasi Kapal</a>
          <a class="dropdown-item" href="keselamatanBerlayar.php">Bidang Keselamatan Berlayar</a>
          <a class="dropdown-item" href="bidangpatroli.php">Bidang Penjagaan dan Patroli</a>
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
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Tata Usaha
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item scroll" href="#tu">Seksi Patroli</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<?php include "../bodyweb/banner.php"; ?>

<div class="kotakk">
  <div class="container stat">
  		<div class="row">
  			<div class="col-md 12">
  			

  		<div class="statusHukum">
  				<center><h1>BIDANG TATA USAHA</h1></center>
  			
  				<!-- tabel Download Tata Usaha -->
  				<section id="tu">
  				<h3>Seksi Patroli</h3>
  						<table class="table table-dark">
  						<?php
              $qcet = mysql_query("SELECT * FROM t_seksidanfile WHERE id_seksi ='S010'");
              while($cet = mysql_fetch_array($qcet)){
            ?>
              <tbody>
                <tr>
                   <td><?php echo $cet[1];?>
                 <a href="download/download.php?nama_file=<?php echo $cet[3]?>"><button type="button" class="btn btn-info float-right">Download File</button></a>
                  </td>
                </tr>
              </tbody>

              <?php  }  ?>
  						</table>
  				</section>
  				

  			</div>
  		</div>
  	</div>
  </div>

</div>

<?php include "../bodyweb/footer.php" ?>

<script src="../js/script.js"></script>
    
    <script src="jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script>
      $(document).ready(function(){
        // membuat smooth scrolling
        $('.scroll').click(function(e){
          
          // ambil isi href
          var href = $(this).attr('href');
          console.log(href);
          // tangkap elemen 
          var elemenHref = $(href);

          $('body').animate({
            scrollTop: elemenHref.offset().top - 55
            }, 1250, 'easeOutSine');

          e.preventDefault();
        })
      })
    </script>
	</body>
</html>