<?php
include "../../koneksi.php";

$hapus = mysql_query("DELETE FROM t_komentar WHERE email='$_GET[email]'");

if($hapus){
	echo "<script>alert('Data Berhasil Dihapus')</script>";
		echo "<script>window.location='../komentar.php'</script>";
}

?>