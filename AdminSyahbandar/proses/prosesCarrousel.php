<?php
include "../../koneksi.php";

if(isset($_POST['save'])){
$id_gambar = $_POST['id_gambar'];

$nama =@$_FILES['file']['name'];
$tmp = @$_FILES['file']['tmp_name'];
$size = @$_FILES['file']['size'];
$direksi = '../../img/carrousel/'.$nama;
$imageFileType = pathinfo($direksi,PATHINFO_EXTENSION);

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script>alert('File harus berformat JPG, JPEG, PNG & GIF')</script>";
	echo "<script>window.location='../beranda.php'</script>";
	exit;
}

if($size > 500000){
	echo "<script>alert('Ukuran file terlalu besar : $size')</script>";
	echo "<script>window.location='../beranda.php'</script>";
	exit;
}

move_uploaded_file($tmp, $direksi);

$upd = mysql_query("UPDATE t_carrousel SET gambar='$nama' WHERE id_gambar='$id_gambar'");

if($upd){
	echo "<script>alert('Gambar Berhasil di Ubah')</script>";
	echo "<script>window.location='../beranda.php'</script>";
}else{
	echo "<script>alert('Gambar Gagal di Ubah')</script>";
	echo "<script>window.location='../beranda.php'</script>";
}
	}
?>