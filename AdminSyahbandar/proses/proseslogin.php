	<!-- cek user dan admin -->
	<?php
	session_start();
	include "../../koneksi.php";

	// 	if(isset($_COOKIE['email']) && isset($_COOKIE['key']) ) {
	// 	$email = $_COOKIE['email'];
	// 	$key = $_COOKIE['key'];

	// 	// ambil username
	// 	$result = mysql_query("SELECT user FROM t_admin WHERE email = $email");
	// 	$row = mysql_fetch_array($result);

	// 	// cek Cookie
	// 	if($key === hash('sya001', $row['username']) ) {
	// 		$_SESSION['login'] = ture;
	// 		$_SESSION['nama'] = $nama;
	// 		$_SESSION['foto'] = $row['gambar'];
	// 		$_SESSION['email'] = $row['email'];
	// 		$_SESSION['level'] = $row['level'];
	// 	}

	// 	header('location: ../publik.php');
	// 	exit;

	// }

	// if( isset($_COOKIE['login']) ){
	// 	if($_COOKIE['login'] == 'true') {
	// 		$_SESSION['login'] = true;
	// 	}
	// }

	if(isset($_SESSION['login']) ){
		header('location: ../publik.php');
		exit;
	}

	if(isset($_POST['login'])){
		$nama1 = @$_POST['username'];
		$nama = strtoupper($nama1);
		$password = @$_POST['password'];

		$qcek = mysql_query("SELECT * FROM t_admin WHERE username='$nama'");
		// cek user
		$cek = mysql_num_rows($qcek);

		if($cek === 1) {
			$row = mysql_fetch_assoc($qcek);
			$ceks = isset($_POST['remember'])?$_POST['remember']:'';
			// cek password
			if(password_verify($password, $row['password'])){
				// set session
				$_SESSION['login'] = true;
				$_SESSION['nama'] = $nama;
				$_SESSION['foto'] = $row['gambar'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['level'] = $row['level'];

				$_SESSION['logged'] = 1; 

				// if($ceks){
				// 	setcookie('nama',$nama,time() + 3600);
				// 	setcookie('pass',$password,time() + 3600);
				// }


				// set remember me
				// if(isset($_POST['remember']) ){

				// 	setcookie('email',$row['email'], time() + 60 ) ;
				// 	setcookie('key',hash('sya001',  $row['username'] ), time() + 60 ) ;
					

			 //   }	
			  echo "<script>alert('Selamat Datang $nama !!!')</script>";
			  echo "<script>window.location.href='../publik.php'</script>";
			  exit;
			}

		}
	 	echo "<script>alert('Login gagal !!!')</script>";
		echo "<script>window.location.href='../index.php'</script>";
		exit;
	}


	?>
