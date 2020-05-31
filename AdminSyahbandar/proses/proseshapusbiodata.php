<?php
include "../../koneksi.php";

$hapus = mysql_query("DELETE FROM profileadmin WHERE email='$_GET[email]'");
if($hapus){
	echo "<script>alert('Data berhasil dihapus !!!')</script>";
	echo "<script>window.location.href='../admin.php'</script>";
}else{
	echo "<script>alert('Data gagal dihapus !!!')</script>";
	echo "<script>window.location.href='../admin.php'</script>";
}
?>