<?php
include "../../koneksi.php";

if(isset($_POST['insert']) ){
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

	$masukdata = mysql_query("INSERT INTO profileadmin VALUES('$nama','$alamat','$tempat','$tgl_lahir','$tentang','$email')");

	if($masukdata){
		echo "<script>alert('Data Berhasil Diinput')</script>";echo "<script>window.location='../admin.php'</script>";
		
	}
}


?>