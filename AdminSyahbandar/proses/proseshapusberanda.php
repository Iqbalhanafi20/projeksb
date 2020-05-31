<?php
include "../../koneksi.php";

$hapus = mysql_query("DELETE FROM kantorsyahbandar WHERE idKantor='$_GET[id]'");
if($hapus){
	echo "<script>alert('Data berhasil dihapus !!!')</script>";
	echo "<script>window.location.href='../beranda.php'</script>";
}else{
	echo "<script>alert('Data gagal dihapus !!!')</script>";
	echo "<script>window.location.href='../beranda.php'</script>";
}
?>