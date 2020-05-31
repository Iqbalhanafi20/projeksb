<?php
include "../../koneksi.php";

if(isset($_POST['tambah'])){
	$user1 = strtolower(stripslashes($_POST['user']));
	$user = strtoupper($user1);
	$level = $_POST['level'];
	$pass1 = mysql_real_escape_string($_POST['password1']);
	$pass2 = mysql_real_escape_string($_POST['password2']);
	$emails = $_POST['email'];
	$email = strtolower($emails);

		// Proses input file
	$nama =@$_FILES['fileupload']['name'];
	$tmp = @$_FILES['fileupload']['tmp_name'];
	$size = @$_FILES['fileupload']['size'];


// Pengiriman Email admin baru
include('../phpmailer/class.phpmailer.php');
include('../phpmailer/class.smtp.php');
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'relay-hosting.secureserver.net';
$mail->Port = 25;
$mail->SMTPAuth = false;
$mail->SMTPSecure = false;

$mail->Host     = "ssl://smtp.gmail.com"; 
$mail->Mailer   = "smtp";
$mail->SMTPAuth = true; 
 
$mail->Username = "prioksyahbandar@gmail.com"; 
$mail->Password = "keselamatanberlayar";
$webmaster_email = "prioksyahbandar@gmail.com"; 
$emailku = $email;
$name = "Nama Penerima"; 
$mail->From = $webmaster_email;
$mail->FromName = "Admin Syahbandar";
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"Nama Pengirim");
$mail->WordWrap = 50; 
//$mail->AddAttachment("module.txt"); // attachment
//$mail->AddAttachment("new.jpg"); // attachment
$mail->IsHTML(true); 
$mail->Subject = "Email data Admin Baru KESYAHBANDARAN UTAMA TG PRIOK";
$mail->Body = "<h2>INFORMASI DATA ADMIN BARU</h2><br>
               Username :".$user.
              "<br>Level :".$level.
              "<br>Password :".$pass1; 
$mail->AltBody = "This is the body when user views in plain text format"; 
// $mail->addAttachment('../tes.html');
if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "email berhasil dikirim";
}


	// cek Ketersediaan user
	$hasil = mysql_query("SELECT username FROM t_admin WHERE username='$user'");
	if(mysql_fetch_array($hasil)){
		echo "<script>alert('Username yang dipilih sudah ada')</script>";
		echo "<script>window.location='../admin.php'</script>";
		return false;
	}
 
	if($pass1 !== $pass2 ){
		// pengecekan password
		echo "<script>alert('Password Tidak Sesuai')</script>";
		echo "<script>window.location='../admin.php'</script>";
		return false;
	}

	// input Foto ke Folder
	move_uploaded_file($tmp, '../gambar/fotoProfile/' . $nama);
	$direksi = $nama;

	// Enkripsi Password
	$password = password_hash($pass1, PASSWORD_DEFAULT);

	$masukdata = mysql_query("INSERT INTO t_admin VALUES('$user','$password','$direksi','$email','$level')");
	// masuk data
	if($masukdata){
		echo "<script>alert('Data Berhasil Diinput')</script>";
		echo "<script>window.location='../admin.php'</script>";
	}else{
		echo "<script>alert('Data Gagal Diinput !!!')</script>";
		echo "<script>window.location='../admin.php'</script>";
	}	
}




?>