<?php
include "../../koneksi.php";

if(isset($_POST['ubah'])){

	// Proses input file
	$nips = stripslashes($_POST['nip']);
	$nip = strtoupper($nips);
	$namapegs =  $_POST['nama'];
	$namapeg = strtoupper($namapegs);
	$tempatt =  $_POST['tempat'];
	$tempat = strtoupper($tempatt);
	
	$tgl_lahir = $_POST['tgl'];
	$agama =  $_POST['agama'];
	$pendidikann =  $_POST['pendidikan'];
	$pendidikan = strtoupper($pendidikann);
	$kedinasan = $_POST['pendi'];
	$kedi = strtoupper($kedinasan);
	$pangkatt = $_POST['pangkat'];
	$pangkat = strtoupper($pangkatt);
	$tm =  $_POST['tmt'];
	$tmt = strtoupper($tm);
	$kepels = $_POST['kepel'];
	$kepel = strtoupper($kepels);
	$jenjangs = $_POST['penjenjangan'];
	$jenjang = strtoupper($jenjangs);
	$jabatans = $_POST['jabatan'];
	$jabatan = strtoupper($jabatans);
	$kelass = $_POST['kelasjabatan'];
	$kelas = strtoupper($kelass);
	$units =  $_POST['unit'];
	$unit = strtoupper($units);
	$bagian =  $_POST['idBagian'];

	$nama =@$_FILES['fileFoto']['name'];
	$tmp = @$_FILES['fileFoto']['tmp_name'];
	$size = @$_FILES['fileFoto']['size'];
	$dir = '../gambar/fotopegawai/' . $nama;

	// cek ukuran file
	if($size > 500000){
		echo "<script>alert('Ukuran Foto Terlalu Besar : $size')</script>";
		echo "<script>window.location='../pegawai.php'</script>";
		exit;
	}

	$ubah = mysql_query("UPDATE t_pegawai SET 
		  nip='$nip', 
		  namaPegawai='$namapeg',
		  tempatLahir='$tempat',
		  tanggalLahir='$tgl_lahir', 
		  agama='$agama', 
		  pendidikan='$pendidikan', 
		  pendidikanKedinasan='$kedi', 
		  pangkatGol='$pangkat', 
		  tmt='$tmt', 
		  kepel='$kepel', 
		  penjenjangan='$jenjang', 
		  jabatan='$jabatan', 
		  kelasJabatan='$kelas', 
		  unitKerja='$unit', 
		  foto='$nama',  
		  idBagian='$bagian' 
		  WHERE nip=$nip");
	if(!$ubah){
		echo "<script>alert('Data gagal diubah mohon tidak memberi tanda kutip')</script>";
		echo "<script>window.location='../pegawai.php'</script>";
	}else{
		echo "<script>alert('Data Pegawai Berhasil di Ubah')</script>";
		echo "<script>window.location='../pegawai.php'</script>";
	}

	move_uploaded_file($tmp, $dir);
}
?>