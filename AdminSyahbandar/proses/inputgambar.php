		<!-- tampil kode otomatis -->
		<?php
		include "../../koneksi.php";
		?>

		<?php

	if(isset($_POST['simpan']) ){
		// membuat id gambar otomatis
		$hasil = mysql_query("SELECT max(id_gambar) as maxId FROM gallery");
		// $q = mysql_query("SELECT * FROM gallery");
		// $result = mysql_num_rows($q);
		$data  = mysql_fetch_array($hasil);
		$id = $data['maxId'];

		$noUrut = (int) substr($id, 3, 3);
		$kode = $noUrut+1;
		 if($kode < 10){
			$id = "GLR00".$kode;
		}else{
			$id = "GLR0".$kode;
		}

	$id_gbr = $id;

	$nama =@$_FILES['filegambar']['name'];
	$tmp = @$_FILES['filegambar']['tmp_name'];
	$size = @$_FILES['filegambar']['size'];
	$dir = '../../img/imgGallery/' . $nama;
	$detail = $_POST['detail'];
	$target_file = $dir . basename($_FILES["filegambar"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	// cek tipe file
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "<script>alert('File harus berformat JPG, JPEG, PNG & GIF')</script>";
		echo "<script>window.location='../gallery.php'</script>";
		exit;
	}
	
	if($size > 500000){
		echo "<script>alert('Ukuran file terlalu besar : $size')</script>";
		echo "<script>window.location='../gallery.php'</script>";
		exit;
	}

	$insert = mysql_query("INSERT INTO gallery VALUES('$id_gbr','$nama','$detail')");
	if($insert){
		echo "<script>alert('Gambar Berhasil di Input')</script>";
		echo "<script>window.location='../gallery.php'</script>";
	 	}
	 move_uploaded_file($tmp, $dir);
	}
		?>