	<!-- Upload ke tabel komentar -->
<?php
include "koneksi.php";

if(isset($_POST['submit'])){
	$namauserr =$_POST['namaLengkap'];
	$namauser = ucfirst($namauserr);
	$email = $_POST['email'];
	$komentar = $_POST['komentar'];
	date_default_timezone_set('Asia/Jakarta');
	$waktu = date('Y-M-d, H:i');

	$nama =@$_FILES['fileFoto']['name'];
	$tmp = @$_FILES['fileFoto']['tmp_name'];
	$size = @$_FILES['fileFoto']['size'];
	$dir = 'img/img_komen/' . $nama;
	$target_file = $dir . basename($_FILES["fileFoto"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	// cek tipe file
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "<script>alert('File harus berformat JPG, JPEG, PNG & GIF')</script>";
		echo "<script>window.location='kotakKomentar.php'</script>";
		exit;
	}

	// cek ukuran file
	if($size > 500000){
		echo "<script>alert('Ukuran Foto Terlalu Besar : $size')</script>";
		echo "<script>window.location='kotakKomentar.php'</script>";
		exit;
	}

	$insert = mysql_query("INSERT INTO t_komentar VALUES('$namauser','$email','$nama','$komentar','$waktu')");
	if($insert){
		echo "<script>alert('Komentar anda berhasil kami terima')</script>";
		echo "<script>window.location='kotakKomentar.php'</script>";
	}
	move_uploaded_file($tmp, $dir);
	
}


?>