<?php
include "../../koneksi.php";

if(isset($_POST['ubahdata']) ){
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tempat = $_POST['tptlahir'];

	$waktu = $_POST['tgl_lahir'];
	$hari = substr($waktu, 8,2);
	$bulan = substr($waktu, 5,2);
	$tahun = substr($waktu, 0,4);

	$tgl_lahir = $hari."/".$bulan."/".$tahun;
	$tentang = @$_POST['tentangsaya'];
	$email = @$_POST['email'];

	$ubah = mysql_query("UPDATE profileadmin SET Nama_lengkap='$nama', Alamat='$alamat', Tempat_Lahir='$tempat', Tanggal_Lahir='$tgl_lahir', Tentang='$tentang' WHERE email='$email'");

	if($ubah){
		echo "<script>alert('Data Berhasil Di Ubah')</script>";
		echo "<script>window.location='../admin.php'</script>";
	}else{
		echo "<script>alert('Data gagal diubah')</script>";
		echo "<script>window.location='../admin.php'</script>";
	}
}


?>