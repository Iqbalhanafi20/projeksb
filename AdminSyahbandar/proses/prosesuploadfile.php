
	<?php
	include "../../koneksi.php";

// MERUBAH DATA PELAYANAN PUBLIK
if(isset($_POST['ubah'])){

	$id = $_POST['id'];
	$ids = $_POST['ids'];
	$namaseksi = $_POST['namaseksii'];

	$nama =@$_FILES['fileupload']['name'];
	$tmp = @$_FILES['fileupload']['tmp_name'];
	$size = @$_FILES['fileupload']['size'];
	
		move_uploaded_file($tmp, '../../publik/download/' . $nama);
		$direksi = "$nama";

	$ubah = mysql_query("UPDATE t_seksidanfile SET id='$id', nama_seksi='$namaseksi', id_seksi='$ids', berkasfile='$direksi' WHERE id='$id'");
	if($ubah){
	    echo "<script>alert('Update Data Berhasil !!!')</script>";
		echo "<script>window.location.href='../publik.php'</script>";
	}else{
	    echo "<script>alert('Update Data Gagal !!!')</script>";
		echo "<script>window.location.href='../publik.php'</script>";
	}
	}

// HAPUS DATA PUBLIK
if(isset($_POST['delete'])){
	$id = $_POST['idseksi'];

	$hapus = mysql_query("DELETE FROM t_seksidanfile WHERE id='$id'");
	if($hapus){
	    echo "<script>alert('Hapus Data Berhasil !!!')</script>";
		echo "<script>window.location.href='../publik.php'</script>";
	}else{
	    echo "<script>alert('Hapus Data Gagal !!!')</script>";
		echo "<script>window.location.href='../publik.php'</script>";
	}
}


 // MERUBAH GAMBAR DI KELOLA BERANDA
	if(isset($_POST['ubahdataberanda'])){

	$isi = $_POST['ta'];

	$nama =@$_FILES['file']['name'];
	$tmp = @$_FILES['file']['tmp_name'];
	$size = @$_FILES['file']['size'];

	if($size > 500000){
		echo "<script>alert('Ukuran File Terlalu Besar : $size')</script>";
		header('location:prosesuploadfile.php');
		return false;
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

// PROSES INPUT ALAMAT KANTOR SYAHBANDAR PADA KELOLA BERANDA DI PANEL ADMIN
	if(isset($_POST['masukalamat'])){

		$id = $_POST['idKantor'];
		$nama = $_POST['namaKantor'];
		$kelas = $_POST['kelas'];
		$alamat = $_POST['alamat'];

		$masuk = mysql_query("INSERT INTO kantorsyahbandar VALUES('$id','$nama','$kelas','$alamat')");
		if(!$masuk){
			echo "<script>alert('Data Gagal Masuk Ke Database !!!')</script>";
			echo "<script>window.location.href='../beranda.php'</script>";
		}else{
			echo "<script>alert('Data Berhasil di Input')</script>";
			echo "<script>window.location.href='../beranda.php'</script>";
		}
	}

// UPDATE ALAMAT KANTOR SYAHBANDAR PADA KELOLA BERANDA DI PANEL ADMIN
if(isset($_POST['ubahalamat'])){
		$id = $_POST['idKantor'];
		$nama = $_POST['namaKantor'];
		$kelas = $_POST['kelas'];
		$alamat = $_POST['alamat'];

		$ubah = mysql_query("UPDATE kantorsyahbandar SET idKantor='$id', Kantor='$nama', Kelas='$kelas', Alamat='$alamat' WHERE idKantor='$id'");
		if(!$ubah){
			echo "<script>alert('Data Gagal Diubah !!!')</script>";
			echo "<script>window.location.href='../beranda.php'</script>";
		}else{
			echo "<script>alert('Data Berhasil di Ubah')</script>";
			echo "<script>window.location.href='../beranda.php'</script>";
		}
	}



?>

