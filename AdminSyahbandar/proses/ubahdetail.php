
		<?php
		include "../../koneksi.php";
		?>

		<?php

	if(isset($_POST['Ubah']) ){
	$detail = $_POST['detail'];
	$id = $_POST['id'];

	$ubah = mysql_query("UPDATE gallery SET detail='$detail' WHERE id_gambar='$id'");
	if($ubah){
		echo "<script>alert('Gambar Berhasil di Ubah')</script>";
		echo "<script>window.location='../gallery.php'</script>";
	 	}else{
	 	echo "<script>alert('Gambar Gagal di Ubah')</script>";
		echo "<script>window.location='../gallery.php'</script>";
	 	}
	
	}
		?>