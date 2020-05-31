<?php
include "../../koneksi.php";

if(isset($_POST['add'])){
	

	// Proses input file
	$nips = stripslashes($_POST['nip']);
	$nip = strtoupper($nips);
	$namapegs =  $_POST['nama'];
	$namapeg = strtoupper($namapegs);
	$tempatt =  $_POST['tempat'];
	$tempat = strtoupper($tempatt);
	$waktu = $_POST['tgl'];
	$hari = substr($waktu, 8,2);
	$bulan = substr($waktu, 5,2);
	$tahun = substr($waktu, 0,4);

	$tgl_lahir = $hari."/".$bulan."/".$tahun;
	$agama =  $_POST['agama'];
	$pendidikann =  $_POST['pendidikan'];
	$pendidikan = strtoupper($pendidikann);
	$kedinasan = $_POST['pendi'];
	$kedi = strtoupper($kedinasan);
	$pangkatt = $_POST['pangkat'];
	$pangkat = strtoupper($pangkatt);
	$tmt =  $_POST['tmt'];
	$hari2 = substr($tmt, 8,2);
	$bulan2 = substr($tmt, 5,2);
	$tahun2 = substr($tmt, 0,4);

	$tm = $hari2."/".$bulan2."/".$tahun2;
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
	// $target_file = $dir . basename($_FILES["fileFoto"]["name"]);
	// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	// // cek tipe file
	// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	// && $imageFileType != "gif" ) {
	//     echo "<script>alert('File harus berformat JPG, JPEG, PNG & GIF')</script>";
	// 	echo "<script>window.location='../pegawai.php'</script>";
	// 	exit;
	// }

	// cek Ketersediaan user
	$hasil = mysql_query("SELECT nip FROM t_pegawai WHERE nip='$nip'");
	if(mysql_fetch_array($hasil)){
		echo "<script>alert('NIP tersebut sudah ada')</script>";
		echo "<script>window.location='../pegawai.php'</script>";
		return false;
	}
 
// cek ukuran file
	if($size > 500000){
		echo "<script>alert('Ukuran Foto Terlalu Besar : $size')</script>";
		echo "<script>window.location='../pegawai.php'</script>";
		exit;
	}

	$insert = mysql_query("INSERT INTO t_pegawai VALUES('$nip','$namapeg','$tempat','$tgl_lahir','$agama','$pendidikan','$kedi','$pangkat','$tmt','$kepel','$jenjang','$jabatan','$kelas','$unit','$nama','$bagian')");
	if($insert){
		echo "<script>alert('Data Pegawai Berhasil di Input')</script>";
		echo "<script>window.location='../pegawai.php'</script>";
	}else{
		echo "<script>alert('Data gagal disimpan mohon tidak memberi tanda kutip')</script>";
		echo "<script>window.location='../pegawai.php'</script>";
	}
	move_uploaded_file($tmp, $dir);

}



?>