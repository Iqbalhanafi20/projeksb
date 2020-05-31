<?php
include "../../koneksi.php";

 // MERUBAH GAMBAR DI KELOLA BERANDA
	if(isset($_POST['ubahdataberanda'])){

	$isi = $_POST['ta'];

	$nama =@$_FILES['file']['name'];
	$tmp = @$_FILES['file']['tmp_name'];
	$size = @$_FILES['file']['size'];

	if($size > 500000){
		echo "<script>alert('Ukuran File Terlalu Besar : $size')</script>";
		header('location:prosesuploadfile.php');
	}
		move_uploaded_file($tmp, '../../img/imgSejarah/' . $nama);
		$direksi = "$nama";

	$ubahdata = mysql_query("UPDATE t_beranda SET gambar_sejarah='$direksi', isi_sejarah='$isi' WHERE id='BRD001'");

	if($ubahdata){
	    echo "<script>alert('Ubah Data Berhasil !!!')</script>";
		echo "<script>window.location.href='../beranda.php'</script>";
	}else{
	    echo "<script>alert('Ubah Data Gagal !!!')</script>";
		echo "<script>window.location.href='../beranda.php'</script>";
		}
	}
?>