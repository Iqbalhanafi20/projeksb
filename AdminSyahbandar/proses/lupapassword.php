<?php
include "../../koneksi.php";

if(isset($_POST['reset'])){
	$pass1 = $_POST['password1'];
	$pass2 = $_POST['password2'];
	$email = @$_POST['email'];


	if($pass1 !== $pass2){
		// pengecekan password
		echo "<script>alert('Password Tidak Sesuai')</script>";
		echo "<script>window.location='../index.php'</script>";
		return false;
	}

	// cek Ketersediaan user
	$hasil = mysql_query("SELECT email FROM t_admin WHERE email='$email'");
	$nil = mysql_fetch_array($hasil);
	if(!$nil){
		echo "<script>alert('Email tersebut tidak terdaftar!!!')</script>";
		echo "<script>window.location='../index.php'</script>";
		return false;
	}
 


	// Enkripsi Password
	$password = password_hash($pass1, PASSWORD_DEFAULT);

	// Ubah data
		$ubahdata = mysql_query("UPDATE t_admin SET 
		password='$password' 
		WHERE email='$email'");

	if($ubahdata){
		echo "<script>alert('Data Berhasil DiUbah')</script>";
		echo "<script>window.location='../index.php'</script>";
	}else{
		echo "<script>alert('Data Gagal DiUbah !!!')</script>";
		echo "<script>window.location='../index.php'</script>";
	}	
}


?>