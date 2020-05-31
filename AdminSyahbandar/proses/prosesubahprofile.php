<?php
include "../../koneksi.php";
if(isset($_POST['ubahprofile'])){
		$visi = $_POST['visi'];
		$misi = $_POST['misi'];
		$isi = $_POST['isi'];
		$video = $_POST['video'];

		$ubah = mysql_query("UPDATE t_profile SET visi='$visi', misi='$misi', sejarah='$isi', video='$video' WHERE id_profile='PRF001'");
		if(!$ubah){
			echo "<script>alert('Data Gagal Diubah !!!')</script>";
			echo "<script>window.location.href='../profile.php'</script>";
		}else{
			echo "<script>alert('Data Berhasil di Ubah')</script>";
			echo "<script>window.location.href='../profile.php'</script>";
		}
	}
?>