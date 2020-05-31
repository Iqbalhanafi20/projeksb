<?php
	// input alamat Syahbandar
	if(isset($_POST['masukalamat'])){
		
		$id = $_POST['idKantor'];
		$nama = $_POST['namaKantor'];
		$kelas = $_POST['kelas'];
		$alamat = $_POST['alamat'];

		$masuk = mysql_query("INSERT INTO kantorsyahbandar VALUES('$id','$nama','$kelas','$alamat')");
		if($masuk){
			header("location:../beranda.php");
		}
	}
	?>

