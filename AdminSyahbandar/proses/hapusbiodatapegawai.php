<?php
include "../../koneksi.php";

$hapus = mysql_query("DELETE FROM t_pegawai WHERE nip='$_GET[nip]'");
if($hapus){
		echo "<script>alert('Data Berhasil di Hapus')</script>";
		echo "<script>window.location='../pegawai.php'</script>";
}else{
		echo "<script>alert('Data Gagal di Hapus')</script>";
		echo "<script>window.location='../pegawai.php'</script>";
}
?>