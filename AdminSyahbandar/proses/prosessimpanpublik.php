<!--Insert tabel sekidanfile -->
	<?php
	include "../../koneksi.php";

	if(isset($_POST['insert'])){

	$idr =$_POST['id'];
	$id = strtoupper($idr);
	$namas = $_POST['nama_seksi'];
	$idk =$_POST['id_seksi'];
	$ids = strtoupper($idk);
	
	$nama =@$_FILES['file']['name'];
	$tmp = @$_FILES['file']['tmp_name'];
	$size = @$_FILES['file']['size'];
	$dir = '../../publik/download' . $nama;

	move_uploaded_file($tmp, $dir);
	$direksi = "$nama";

	// cek Ketersediaan id
	$hasil = mysql_query("SELECT id FROM t_seksidanfile WHERE id='$id'");
	if(mysql_fetch_array($hasil)){
		echo "<script>alert('Id tersebut Sudah Ada')</script>";
		echo "<script>window.location='../publik.php'</script>";
		return false;
	}

	$insert = mysql_query("INSERT INTO t_seksidanfile VALUES('$id','$namas','$ids','$direksi')");
	if($insert){
	    echo "<script>alert('Simpan Data Berhasil !!!')</script>";
		echo "<script>window.location.href='../publik.php'</script>";
	}else{
	    echo "<script>alert('Simpan Data Gagal !!!')</script>";
		echo "<script>window.location.href='../publik.php'</script>";
	}
	
	}
	?>
