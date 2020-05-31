<?php
include "../koneksi.php";
?>
<html>
	<head>
		<title>Struktur Instansi</title>

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
    <link rel="stylesheet" href="../css/struktur.css">

	</head>
	<body>

	

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
          <a class="dropdown-item" href="">Struktur Organisasi</a>
          <a class="dropdown-item" href="../kotakKomentar.php">Kotak Komentar</a>
          <a class="dropdown-item" href="Lokasi.php">Lokasi Kami</a>
          <a class="dropdown-item" href="gallery.php">Gallery</a>
          <a class="dropdown-item" href="galleryPegawai.php">Data Pegawai</a>
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
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Info Umum
        </a>
        <div class="dropdown-menu">
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

<div class="container">
	<div class="row">
		<div class="col-md 12 float-left">
			<p style="font-size: 40px;">Struktur Organisasi</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md 6">

			<div class="pasalKiri">
			<div class="row">
				<div class="col-md-12" id="struktur">
					<img src="../img/struktur.jpg" alt="">
				</div>
			</div>
				<h2>PERATURAN MENTERI PERHUBUNGAN NOMOR PM 34 TAHUN 2012 </h2>
			<br>
			<h4>TENTANG : ORGANISASI DAN TATA KERJA KANTOR KESYAHBANDARAN UTAMA </h4>
			<br>
			<h5>Menteri Perhubungan</h5>
				<p>Menimbang : bahwa dalam rangka meningkatkan efektivitas pelaksanaan tugas dan fungsi di bidang keselamatan dan keamanan pelayaran, perlu menetapkan Peraturan Menteri Perhubungan tentang Organisasi dan Tata Kerja Kantor Kesyahbandaran Utama </p>
				<p>Mengingat :</p>
			<ul>
				<li>Undang-Undang Nomor 17 Tahun 2008 tentang Pelayaran (Lembaran Negara Republik Indonesia Tahun 2008 Nomor 64, Tambahan Lembaran Negara Republik Indonesia Nomor 4849); </li>
				<li>Peraturan Pemerintah Nomor 61 Tahun 2009 tentang Kepelabuhan (Lembaran Negara Republik Indonesia Tahun 2009 Nomor 151, Tambahan Lembaran Negara Republik Indonesia Nomor 5070); </li>
				<li>Peraturan Pemerintah Nomor 5 Tahun 2010 tentang Kenavigasian (Lembaran Negara Republik Indonesia Tahun 2010 Nomor 8, Tambahan Lembaran Negara Republik Indonesia Nomor 5093); </li>
				<li>Peraturan Pemerintah Nomor 20 Tahun 2010 tentang Angkutan di Perairan (Lembaran Negara Republik Indonesia Tahun 2010 Nomor 26, Tambahan Lembaran Negara Republik Indonesia Nomor 5108), sebagaimana telah diubah dengan Peraturan Pemerintah Nomor 22 Tahun 2011 (Lembaran Negara Republik Indonesia Tahun 2011 Nomor 43, Tambahan Lembaran Negara Republik Indonesia Nomor 5208); </li>
				<li>Peraturan Pemerintah Nomor 21 Tahun 2010 tentang Perlindungan Lingkungan Maritim (Lembaran Negara Republik Indonesia Tahun 2010 Nomor 27, Tambahan Lembaran Negara Republik Indonesia Nomor 5109);</li>
				<li>Peraturan Presiden Nomor 47 Tahun 2009 tentang Pembentukan dan Organisasi Kementerian Negara, sebagaimana telah diubah terakhir dengan Peraturan Presiden Nomor 91 Tahun 2011; </li>
				<li>Peraturan Presiden Nomor 24 Tahun 2010 tentang Kedudukan, Tugas, dan Fungsi Kementerian Negara serta Susunan Organisasi, Tugas, dan Fungsi Eselon I Kementerian Negara, sebagaimana telah diubah terakhir dengan Peraturan Presiden Nomor 92 Tahun 2011; </li>
				<li>Peraturan Menteri Perhubungan Nomor KM 60 Tahun 2010 tentang Organisasi dan Tata Kerja Kementerian Perhubungan; </li>
				<li>Peraturan Menteri Pendayagunaan Aparatur Negara Nomor PER/ 18./M.PAN/ 11/2008 tentang Pedoman Organisasi Unit Pelaksana Teknis Kementerian dan Lembaga Pemerintah Non Kementerian; </li>
			</ul>
				<p>Memperhatikan:</p>
				<p>Persetujuan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi dalam Surat Nomor B/ 1300/M.PAN-RB/4/2012 Tanggal 30 April 2012; </p>
				<p>Memutuskan : </p>
				<p>Menetapkan : </p>
			<h2>PERATURAN MENTERI PERHUBUNGAN TENTANG ORGANISASI DAN TATA KERJA KANTOR KESYAHBANDARAN UTAMA </h2>
			<h2>BAB I : Kedudukan, Tugas, dan Fungsi</h2>
			<h3>Pasal 1</h3>
			<ul>
				<li>Kantor Kesyahbandaran Utama adalah Unit Pelaksana Teknis di lingkungan Kementerian Perhubungan yang berada di bawah dan bertanggung jawab kepada Direktur Jenderal Perhubungan Laut.</li>
				<li>Kantor Kesyahbandaran Utama dipimpin oleh seorang Kepala.</li>
			</ul>
			<h3>Pasal 2 </h3>
				<p>Kantor Kesyahbandaran Utama mempunyai tugas melaksanakan pengawasan dan penegakan hukum di bidang keselamatan dan keamanan pelayaran, serta koordinasi kegiatan pemerintahan di pelabuhan. </p>
			<h3>Pasal 3 </h3>
				<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 2, Kantor Kesyahbandaran Utama menyelenggarakan fungsi: </p>
			<ul>
				<li>Pelaksanaan pengawasan dan pemenuhan kelaiklautan kapal, keselamatan, keamanan dan ketertiban di pelabuhan serta penerbitan Surat Persetujuan Berlayar; </li>
				<li>Pelaksanaan pengawasan tertib lalu lintas kapal di perairan pelabuhan dan alur pelayaran; </li>
				<li>Pelaksanaan pengawasan kegiatan alih muat di perairan pelabuhan, kegiatan salvage dan pekerjaan bawah air, pemanduan dan penundaan kapal; </li>
				<li>Pelaksanaan pengawasan keselamatan dan keamanan pelayaran terkait dengan kegiatan bongkar muat barang berbahaya, barang khusus, limbah bahan berbahaya dan beracun (B3), pengisian bahan bakar, ketertiban embarkasi dan debarkasi penumpang, pembangunan fasillitas pelabuhan, pengerukan dan reklamasi; </li>
				<li>Pelaksanaan bantuan pencarian dan penyelamatan (Search And Rescue/ SAR), pengendalian dan koordinasi penanggulangan pencemaran dan pemadaman kebakaran di pelabuhan serta pengawasan pelaksanaan perlindungan lingkungan maritim;</li>
				<li>Pelaksanaan pemeriksaan kecelakaan kapal</li>
				<li>Penegakan hukum di bidang keselamatan dan keamanan pelayaran sesuai dengan ketentuan peraturan perundang-undangan; </li>
				<li>Pelaksanaan koordinasi kegiatan pemerintahan di pelabuhan yang terkait dengan pelaksanaan pengawasan dan penegakan hukum di bidang keselamatan dan keamanan pelayaran; dan </li>
				<li>Pengelolaan urusan tata usaha, kepegawaian, keuangan, hukum dan hubungan masyarakat. </li>
			</ul>
			<h2>BAB II : Susunan Organisasi Kantor Kesyahbandaran Utama</h2>
			<h3>Pasal 4 </h3>
				<p>Organisasi Kantor Kesyahbandaran Utama, terdiri atas : </p>
			<ul>
				<li>Bagian Tata Usaha;</li>
				<li>Bidang Status Hukum dan Sertifikasi Kapal;</li>
				<li>Bidang Keselamatan Berlayar; dan</li>
				<li>Bidang Penjagaan, Patroli dan Penyidikan </li>
			</ul>
			<h3>Pasal 5 </h3>
				<p>Bagian Tata Usaha mempunyai tugas melaksanakan urusan perencanaan, keuangan, kepegawaian dan umum, hukum dan hubungan masyarakat serta pelaporan di lingkungan Kantor Kesyahbandaran Utama. </p>
			<h3>Pasal 6</h3>
				<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 5, Bagian Tata Usaha menyelenggarakan fungsi: </p>
			<ul>
				<li>Pelaksanaan urusan perencanaan, kepegawaian, pembinaan dan pengembangan jabatan fungsional; </li>
				<li>Pengelolaan urusan keuangan, pelaporan Sistem Akuntansi Instansi (SAI) serta pengelolaan Penerimaan Negara Bukan Pajak (PNBP); </li>
				<li>Pelaksanaan urusan surat menyurat , kearsipan, kerumah tanggaan dan urusan umum; dan </li>
				<li>Pelaksanaan penyiapan penyusunan peraturan perundang-undangan, pertimbangan dan bantuan hukum, serta hubungan masyarakat.</li>
			</ul>
			<h3>Pasal 7</h3>
				<p>Bagian Tata Usaha, terdiri atas: </p>
			<ul>
				<li>Subbagian Perencanaan dan Keuangan; dan</li>
				<li>Subbagian Umum dan Hubungan Masyarakat</li>
			</ul>
			<h3>Pasal 8</h3>
			<ul>
				<li>Subbagian Perencanaan dan Keuangan mempunyai tugas melakukan urusan penyusunan rencana, program, anggaran, dan penyusunan laporan evaluasi kinerja, serta pengelolaan urusan keuangan, pelaporan Sistem Akuntansi Instansi (SAI) dan pengelolaan Penerimaan Negara Bukan Pajak (PNBP) </li>
				<li>Subbagian Umum dan Hubungan Masyarakat mempunyai tugas melakukan urusan kepegawaian, administrasi jabatan fungsional, surat menyurat, kearsipan, kerumahtanggaan dan urusan umum, serta pertimbangan dan bantuan hukum, dan hubungan masyarakat.</li>
			</ul>
			<h3>Pasal 9</h3>
				<p>Bidang Status Hukum dan Sertifikasi Kapal mempunyai tugas melaksanakan pemeriksaan, pengujian, dan sertifikasi keselamatan kapal, pencegahan pencemaran dari kapal dan manajemen keselamatan kapal, serta penetapan status hukum kapal. </p>
			<h3>Pasal 10</h3>
				<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 9, Bidang Status Hukum dan Sertifikasi Kapal menyelenggarakan fungsi:</p>	
			<ul>
				<li>Pelaksanaan pengukuran, pendaftaran, balik nama dan hipotik kapal serta penyiapan penetapan surat tanda kebangsaan; </li>
				<li>elaksanaan penilikan rancang bangun, pengawasan pembangunan dan perombakan serta dock kapal; </li>
				<li>Pelaksanaan pemeriksaan nautis, teknis, radio dan elektronika serta perlengkapan kapal; </li>
				<li>Pelaksanaan perhitungan dan pengujian stabilitas kapal dan percobaan berlayar; </li>
				<li>Pelaksanaan pemeriksaan peralatan pencegahan pencemaran dan pembersihan tangki serta verifikasi manajemen keselamatan dan pencegahan pencemaran dari kapal; dan </li>
				<li>Penyiapan bahan penerbitan sertifikasi keselamatan, pencegahan pencemaran dari kapal dan manajemen keselamatan kapal.</li>
			</ul>
			<h3>Pasal 11</h3>
				<p>Bidang Status Hukum dan Sertifikasi Kapal, terdiri atas: </p>
			<ul>
				<li>Seksi Status Hukum Kapal</li>
				<li>Seksi Sertifikasi Keselamatan Kapal ; dan</li>
				<li>Seksi Sertifikasi Pencegahan Pencemaran dan Manajemen Keselamatan Kapal.</li>
			</ul>
			<h3>Pasal 12</h3>
			<ul>
				<li>Seksi Status Hukum Kapal mempunyai tugas melakukan penyiapan bahan pengukuran, pendaftaran, balik nama, hipotek dan surat tanda kebangsaan, penggantian bendera kapal serta pemasangan tanda selar.</li>
				<li>Seksi Sertiflkasi Keselamatan Kapal mempunyai tugas melakukan pemeriksaan, penilikan rancang bangun kapal, pengawasan pembangunan, perombakan dan docking kapal, pemeriksaan dan pengujian nautis, teknis, radio, elektronika kapal, penghitungan dan pengujian stabilitas kapal, percobaan berlayar serta penyiapan bahan penerbitan sertifikat keselamatan kapal.</li>
				<li>Seksi Sertifikasi Pencegahan Pencemaran dan Manajemen Keselamatan Kapal mempunyai tugas melakukan pemeriksaan, pengujian peralatan, verifikasi, penyiapan bahan penerbitan sertifikat manajemen keselamatan dan pencegahan pencemaran dari kapal, pembersihan tangki serta perlindungan ganti rugi pencemaran.</li>
			</ul>
			<h3>Pasal 13</h3>
				<p>Bidang Keselamatan Berlayar mempunyai tugas melaksanakan pengawasan tertib lalu lintas kapal di perairan pelabuhan dan alur pelayaran, pemanduan dan penundaan kapal, serta penerbitan Surat Persetujuan Berlayar. </p>
			<h3>Pasal 14</h3>
				<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 13, Bidang Keselamatan Berlayar menyelenggarakan fungsi: </p>
		<ul>
			<li>Penilikan pemenuhan persyaratan pengawakan kapal; </li>
			<li>Penyiapan bahan penerbitan dokumen kepelautan, perjanjian kerja laut dan penyijilan awak kapal serta perlindungan awak kapal; </li>
			<li>Pelaksanaan pengawasan tertib bandar dan tertib berlayar, lalu lintas keluar masuk kapal, pergerakan kapal (shifting), pemanduan dan penundaan kapal </li>
			<li>Pelaksanaan pengawasan pemenuhan persyaratan kelaiklautan kapal;</li>
			<li>Pelaksanaan penerbitan Berlayar; dan</li>
			<li>Pelaksanaan pengawasan kapal asing (port state control dan flag state control. </li>
		</ul>
			</div>
		</div>

		<div class="col-md 6">
			<div class="pasalKanan">
				<h3>Pasal 15</h3>
				<p>Bidang Keselamatan Berlayar, terdiri atas: </p>
				<ul>
					<li>Seksi Kepelautan</li>
					<li>Seksi Tertib Bandar; dan</li>
					<li>Seksi Tertib Berlayar</li>
				</ul>
				<h3>Pasal 16</h3>
				<ul>
					<li>Seksi Kepelautan mempunyai tugas melakukan penilikan pemenuhan persyaratan pengawakan kapal, penyiapan bahan penerbitan dokumen kepelautan, perjanjian kerja laut dan penyijilan awak kapal serta perlindungan awak kapal.</li>
					<li>Seksi Tertib Bandar mempunyai tugas melakukan pelaksanaan pengawasan tertib bandar, pergerakan kapal (shifting), pemanduan dan penundaan kapal di perairan pelabuhan.</li>
					<li>Seksi Tertib Berlayar mempunyai tugas melakukan pengawasan tertib berlayar, lalu lintas keluar masuk kapal, kapal asing (port state control, flag state control dan pemenuhan persyaratan kelaiklautan kapal serta penerbitan Surat Persetujuan Berlayar.</li>
				</ul>
				<h3>Pasal 17</h3>
					<p>Bidang Penjagaan, Patroli dan Penyidikan mempunyai tugas melaksanakan pengawasan keselamatan dan keamanan pelayaran terkait dengan kegiatan bongkar muat barang berbahaya, barang khusus, pengisian bahan bakar, limbah bahan berbahaya dan beracun (B3), ketertiban embarkasi dan debarkasi penumpang, pembangunan fasillitas pelabuhan, pengerukan dan reklamasi, kegiatan alih muat di perairan pelabuhan, salvage dan pekerjaan bawah air, pelaksanaan bantuan pencarian dan penyelamatan (Search And Rescue/SAR), pengendalian dan koordinasi penanggulangan pencemaran dan pemadaman kebakaran di pelabuhan, pengawasan pelaksanaan perlindungan lingkungan maritim, pemeriksaan dan verifikasi sistem keamanan kapal dan fasilitas pelabuhan (International Ship and Port Facility Security Code/ISPS-Code), pemeriksaan pendahuluan pada kecelakaan kapal, penegakan hukum di bidang keselamatan dan keamanan pelayaran serta koordinasi kegiatan pemerintahan di pelabuhan yang terkait dengan pelaksanaan pengawasan dan penegakan hukum di bidang keselamatan dan keamanan pelayaran. </p>
				<h3>Pasal 18</h3>
					<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 17, Bidang Penjagaan, Patroli dan Penyidikan menyelenggarakan fungsi: </p>
				<ul>
					<li>Pelaksanaan penjagaan, pengamanan dan penertiban embarkasi dan debarkasi penumpang di pelabuhan;</li>
					<li>Pelaksanaan pengawasan kegiatan bongkar muat barang khusus dan barang berbahaya dan pengisian bahan bakar, limbah bahan berbahaya dan beracun (B3), pembangunan fasillitas pelabuhan serta pengerukan dan reklamasi;</li>
					<li>Pelaksanaan patroli di perairan pelabuhan, pengawasan dan pengamanan terhadap keselamatan kapal yang masuk keluar pelabuhan, kapal sandar dan berlabuh;</li>
					<li>Penyiapan bahan koordinasi dan pemberian bantuan pencarian dan penyelamatan (Search And Rescue / SAR),penanggulangan pencemaran laut serta pencegahan dan pemadaman kebakaran di perairan pelabuhan serta pengawasan perlindungan lingkungan maritim;</li>
					<li>Pelaksanaan pengawasan kegiatan alih muat di perairan pelabuhan, salvage dan pekerjaan bawah air;</li>
					<li>Pelaksanaan pemeriksaan dan verifikasi sistem keamanan kapal dan fasilitas pelabuhan (Intemational Ship and Port Facility Security Code/ISPS-Code);</li>
					<li>Penyiapan bahan pemeriksaan pendahuluan pada kecelakaan kapal; dan</li>
					<li>Pelaksanaan penyidikan tindak pidana di bidang pelayaran sesuai dengan peraturan perundang-undangan.</li>
				</ul>
			<h3>Pasal 19</h3>
			<p>Bidang Penjagaan, Patroli dan Penyidikan, terdiri atas : </p>
			<ul>
				<li>Seksi Penjagaan</li>
				<li>Seksi Patroli; dan</li>
				<li>Seksi Penunjang Keselamatan dan Penyidikan</li>
			</ul>
			<h3>Pasal 20</h3>
			<ul>
				<li>Seksi Penjagaan mempunyai tugas melakukan penjagaan, pengamanan dan penertiban embarkasi dan debarkasi penumpang di pelabuhan, pengawasan kegiatan bongkar muat barang khusus, barang berbahaya, pengisian bahan bakar, limbah bahan berbahaya dan beracun (B3), pembangunan fasillitas pelabuhan serta pengerukan dan reklamasi.</li>
				<li>Seksi Patroli mempunyai tugas melakukan patroli di perairan pelabuhan, pengawasan dan pengamanan terhadap keselamatan kapal yang masuk keluar pelabuhan, kapal sandar dan berlabuh, penyiapan bahan koordinasi dan pemberian bantuan pencarian dan penyelamatan (Search And Rescue / SAR), penanggulangan pencemaran laut serta pencegahan dan pemadaman kebakaran di perairan pelabuhan.</li>
				<li>Seksi Penunjang Keselamatan dan Penyidikan mempunyai tugas melakukan pengawasan kegiatan alih muat di perairan pelabuhan, salvage dan pekerjaan bawah air, pemeriksaan dan veriflkasi sistem keamanan kapal dan fasilitas pelabuhan (International Ship and Port Facility Security Code/ISPS-Code), penyiapan bahan pemeriksaan pendahuluan pada kecelakaan kapal serta penyidikan tindak pidana di bidang pelayaran sesuai dengan peraturan perundang-undangan.</li>
			</ul>
			<h3>Pasal 21</h3>
			<p>Struktur Organisasi Kantor Kesyahbandaran Utama sebagaimana tercantum dalam Lampiran Peraturan ini</p>
			
			<h2>BAB III : Kelompok Jabatan Fungsional</h2>
			<h3>Pasal 22</h3>
				<p>Kelompok Jabatan Fungsional mempunyai tugas melakukan kegiatan sesuai dengan jabatan fungsional masing-masing berdasarkan peraturan perundang- undangan. </p>
			<ul>
				<li>Kelompok Jabatan Fungsional sebagaimana dimaksud dalam Pasal 22 terdiri atas sejumlah tenaga fungsional yang terbagi dalam kelompok jabatan fungsional sesuai dengan bidang tugas keahliannya berdasarkan peraturan perundang- undangan.</li>
				<li>Kelompok Jabatan Fungsional sebagaimana dimaksud pada ayat (1) dikoordinasikan oleh seorang tenaga fungsional senior yang ditunjuk Kepala Kantor Kesyahbandaran.</li>
				<li>Jumlah tenaga fungsional sebagaimana dimuat pada ayat (1) ditentukan berdasarkan kebutuhan dan beban kerja.</li>
				<li>Jenis dan jenjang jabatan fungsional sebagaimana dimaksud pada ayat (1) diatur berdasarkan peraturan perundang-undangan.</li>
			</ul>
			
			<h2>BAB IV : Tata Kerja</h2>
			<h3>Pasal 24</h3>
				<p>Dalam melaksanakan tugasnya, Kepala Kantor Kesyahbandaran Utama , Kepala Bagian, Para Kepala Bidang, Para Kepala Subbagian, Para Kepala Seksi dan para pejabat fungsional wajib menerapkan prinsip koordinasi, integrasi dan sinkronisasi, baik dalam lingkungan masing-masing maupun antar satuan organisasi di lingkungan Kantor Kesyahbandaran Utama sesuai dengan tugas masing-masing. </p>
			<h3>Pasal 25</h3>
				<p>Setiap pimpinan satuan organisasi wajib mengawasi bawahannya masing-masing dan apabila terjadi penyimpangan agar mengambil langkah-Iangkah yang diperlukan sesuai dengan peraturan perundang- undangan. </p>
			<h3>Pasal 26</h3>
				<p>Setiap pimpinan satuan organisasi di lingkungan Kantor Kesyahbandaran Utama bertanggung jawab memimpin dan mengkoordinasikan bawahannya masing-masing dan memberikan bimbingan serta petunjuk bagi pelaksanaan tugas bawahannya. </p>
			<h3>Pasal 27</h3>
				<p>Setiap pimpinan satuan organisasi wajib mengikuti dan mematuhi petunjuk serta bertanggung jawab kepada atasan masing-masing dan menyampaikan laporan secara berkala tepat pada waktunya. </p>
			<h3>Pasal 28</h3>
				<p>Setiap laporan yang diterima oleh pimpinan satuan organisasi dari bawahan wajib diolah dan dipergunakan sebagai bahan untuk penyusunan laporan lebih lanjut dan untuk memberikan petunjuk kepada bawahan. </p>
			<h3>Pasal 29</h3>
				<p>Dalam menyampaikan laporan kepada atasan, tembusan laporan wajib disampaikan kepada satuan organisasi lain yang secara fungsional mempunyai hubungan kerja. </p>
			<h3>Pasal 30</h3>
				<p>Dalam melaksanakan tugasnya, setiap pimpinan satuan organisasi dibantu oleh kepala satuan organisasi dibawahnya dan dalam rangka bimbingan kepada bawahan masing-masing wajib mengadakan rapat secara berkala. </p>
			<h2>BAB V : Eselon</h2>
			<h3>Pasal 31</h3>
				<ul>
					<li>Kepala Kantor Kesyahbandaran Utama merupakan jabatan Struktural Eselon II.a.</li>
					<li>Kepala Bagian dan Kepala Bidang pada Kantor Kesyahbandaran Utama merupakan jabatan Struktural Eselon III.a.</li>
					<li>Kepala Seksi dan Kepala Sub Bagian pada Kantor Kesyahbandaran Utama merupakan jabatan Struktural EselonIV.a.</li>
				</ul>
			<h2>BAB VI : Lokasi Kantor Kesyahbandaran Utama</h2>
			<h3>Pasal 32</h3>
				<p>Kantor Kesyahbandaran Utama dibentuk pada 4 (empat) lokasi, terdiri atas : </p>
			<ul>
				<li>Kantor Kesyahbandaran Utama Belawan, Medan;</li>
				<li>Kantor Kesyahbandaran Utama Tanjung Priok, Jakarta;</li>
				<li>Kantor Kesyahbandaran Utama Tanjung Perak, Surabaya; dan</li>
				<li>Kantor Kesyahbandaran Utama Makasar, Makasar</li>
			</ul>
			
			<h2>BAB VIII : Ketentuan Penutup</h2>
			<h3>Pasal 34</h3>
				<p>Perubahan dan penyempurnaan Organisasi dan Tata Kerja menurut Peraturan Menteri ini ditetapkan oleh Menteri Perhubungan setelah lebih dahulu mendapat persetujuan tertulis dari Menteri yang bertanggung jawab di bidang Pendayagunaan Aparatur Negara dan Reformasi Birokrasi. </p>
			<h3>Pasal 35</h3>
				<p>Dalam waktu paling lama 2 (dua) tahun sejak Peraturan Menteri ini mulai berlaku, Kepala Kantor Utama harus telah menyampaikan usulan rumusan jabatan fungsional umum, uraian jenis-jenis kegiatan organisasi, satuan hasil kerja jabatan, waktu capaian hasil kerja jabatan dan peta jabatan Kantor Kesyahbandaran Utama Kepada Menteri Perhubungan melalui Direktur Jenderal Perhubungan Laut untuk ditetapkan menjadi Peraturan Menteri Perhubungan. </p>
			<h3>Pasal 36</h3>
				<p>Peraturan Menteri ini mulai berlaku pada tanggal diundangkan. Agar setiap orang mengetahuinya, memerintahkan pengundangan Peraturan Menteri ini dengan Penempatannya dalam Berita Negara Republik Indonesia </p>
			

		
		
			
			
</div></div>
</div></div></div></div>
			</div>
		</div>
	</div>
</div>


 <?php include "../bodyweb/footer.php" ?>
		


		

	<script src="../js/jquery.js"></script>
    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
   	<script src="../js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>