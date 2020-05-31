<?php
include "../koneksi.php";
?>

<html lang="en">
	<head>
		<title>Kesyahbandaran Utama Tanjung Priok</title>
		  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="../1509094699.ico">
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
    <link rel="stylesheet" href="../css/pegawai.css">
     <style>
     </style>
  </head>
	<body>
<style>

</style>

  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navi">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">
          <span class="icon-cari"><img src="../open-iconic-master/png/home-2x.png" alt=""></span>Beranda<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../profile.php"><span class="icon-cari"><img src="../open-iconic-master/png/person-2x.png" alt=""></span>Profile</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <span class="icon-cari"><img src="../open-iconic-master/png/people-2x.png" alt=""></span>
          Tentang Kami
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="struktur.php">Struktur Organisasi</a>
          <a class="dropdown-item" href="../kotakKomentar.php">Kotak Komentar</a>
          <a class="dropdown-item" href="Lokasi.php">Lokasi Kami</a>
          <a class="dropdown-item" href="gallery.php">Gallery</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Layanan Publik
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../publik/tataUsaha.php">Bagian Tata Usaha</a>
          <a class="dropdown-item" href="../publik/layanan_publik.php">Bidang Status Hukum dan Sertifikasi Kapal</a>
          <a class="dropdown-item" href="../publik/keselamatanBerlayar.php">Bidang Keselamatan Berlayar</a>
          <a class="dropdown-item" href="../publik/bidangpatroli.php">Bidang Penjagaan dan Patroli</a>
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
  <?php include "../bodyweb/banner.php"; ?>

<div id="isi"></div>

<center><h1 class="title">DATA PEGAWAI KESYAHBANDARAN</h1></center>

<!-- Button Trigger -->
<div class="row">
  <div class="bungkus">
    <div class="col-md-4"><button class="btn btn-primary  btn-lg btn-block" id="1">Syahbandar</button></div>
    <div class="col-md-4"> <button class="btn btn-primary  btn-lg btn-block" id="2">Tata Usaha</button></div>
    <div class="col-md-4"><button class="btn btn-primary  btn-lg btn-block hukum" id="3">Status Hukum Kapal dan Sertifikasi Kapal</button></div>
    <div class="col-md-4"><button class="btn btn-primary  btn-lg btn-block" id="4">Bidang Keselamatan Berlayar</button></div>
    <div class="col-md-4"><button class="btn btn-primary  btn-lg btn-block" id="5">Bidang Penjagaan dan Patroli</button></div>
  </div>
</div>


<!-- Tampil Foto Pegawai -->
<div class="isiPegawai">
  <!-- SHK -->
  <div id="shk">
    <div class="caridata">
      <span class="icon-cari"><img src="../open-iconic-master/png/magnifying-glass-3x.png" alt=""></span>
          <input type="text" id="carishk" placeholder="Cari Nama Pegawai">
    </div>
   
   <div class="judulPegawai">
        <h2>Status Hukum Kapal dan Sertifikasi Kapal</h2>
   </div>

    <div class="row">
         <div class="isi"></div>
    </div>
  </div>

  <!-- TU -->
  <div id="tu">
    <div class="caridata">
      <span class="icon-cari"><img src="../open-iconic-master/png/magnifying-glass-3x.png" alt=""></span>
          <input type="text" id="caritu" placeholder="Cari Nama Pegawai">
    </div>
   
   <div class="judulPegawai">
        <h2>Tata Usaha</h2>
   </div>

    <div class="row">
         <div class="isitu"></div>
    </div>
  </div>

<!-- KKB -->
  <div id="kkb">
    <div class="caridata">
      <span class="icon-cari"><img src="../open-iconic-master/png/magnifying-glass-3x.png" alt=""></span>
          <input type="text" id="carikkb" placeholder="Cari Nama Pegawai">
    </div>
   
   <div class="judulPegawai">
        <h2>Keselamatan Berlayar</h2>
   </div>

    <div class="row">
         <div class="isikkb"></div>
    </div>
  </div>

<!-- PPP -->
  <div id="ppp">
    <div class="caridata">
      <span class="icon-cari"><img src="../open-iconic-master/png/magnifying-glass-3x.png" alt=""></span>
          <input type="text" id="carippp" placeholder="Cari Nama Pegawai">
    </div>
   
   <div class="judulPegawai">
        <h2>Penjagaan dan Patroli</h2>
   </div>

    <div class="row">
         <div class="isippp"></div>
    </div>
  </div>

  <!-- Syahbandar -->
  <div id="sb">
       <div class="row">
          <?php
        $q = mysql_query("SELECT * FROM t_pegawai WHERE idBagian='SB' ORDER BY nip");
        while ($row = mysql_fetch_array($q)) {
          ?>
            <div class="col-md-3">
            <div class="foto">
              <?php if(!$row[14]){?>
              <img src="../AdminSyahbandar/gambar/no.png" alt="">
              <?php } ?>
              <img src="../AdminSyahbandar/gambar/fotoPegawai/<?php echo $row[14]?>" alt="">
              <div class="detail">
              <h6><?php echo $row[1]?></h6>
               <a href="#detailPeg" style="font-size: 12px"  data-toggle="modal" data-target=".<?php echo $row[0]?>">Lihat Detail</a>
               </div>
            </div>
          </div>
          <?php  } ?>
        </div>
  </div>

</div>

<?php
$q = mysql_query("SELECT * FROM t_pegawai WHERE idBagian='SHK' || idBagian='SB' || idBagian='PPP' || idBagian='KKB' || idBagian='TU'");
while($row = mysql_fetch_array($q)) {
?>
<div class="modal fade <?php echo $row[0]?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="dataPegawai">
        <button aria-label="Close" id="close" data-dismiss="modal" class="btn btn-success close"><span><img src="../open-iconic-master/png/circle-x-3x.png" alt=""></span></button>
        <h2 style="font-weight: bold">DATA PEGAWAI</h2>
        <br>
          <table class="table table-responsive">  
                          <tbody>
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

      </div>
    </div>
  </div>
</div>
<?php } ?>

			
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	 
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
    $(".isi").html(data);
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

// Auto Complete data pegawai shk
          $("#carishk").keyup(function(){
          var nilai = $("#carishk").val();
          $.get("dataku.php",{x:8,cmb:nilai},function(data){
            $(".isi").html(data);
          })
        })


// Auto Complete data pegawai tu
          $("#caritu").keyup(function(){
          var nilai = $("#caritu").val();
          $.get("dataku.php",{x:9,cmb:nilai},function(data){
            $(".isitu").html(data);
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
    <script>
      $(document).ready(function(){

        $("#shk").hide();
        $("#tu").hide();
        $("#sb").hide();
        $("#kkb").hide();
        $("#ppp").hide();

        $("#1").click(function(){
          $("#shk").hide();
          $("#tu").hide();
          $("#sb").show();
          $("#kkb").hide();
          $("#ppp").hide();
        })

         $("#2").click(function(){
          $("#shk").hide();
          $("#tu").show();
          $("#sb").hide();
          $("#kkb").hide();
          $("#ppp").hide();
        })

          $("#3").click(function(){
          $("#shk").show();
          $("#tu").hide();
          $("#sb").hide();
          $("#kkb").hide();
          $("#ppp").hide();
        })

           $("#4").click(function(){
          $("#shk").hide();
          $("#tu").hide();
          $("#sb").hide();
          $("#kkb").show();
          $("#ppp").hide();
        })

            $("#5").click(function(){
          $("#shk").hide();
          $("#tu").hide();
          $("#sb").hide();
          $("#kkb").hide();
          $("#ppp").show();
        })

  
      })
    </script>
	</body>
</html>