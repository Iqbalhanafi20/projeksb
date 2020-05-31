<?php
include "../../koneksi.php";

if(isset($_POST['ubahdata'])){
	$user1 = strtolower(stripslashes($_POST['user']));
	$user = strtoupper($user1);
	$level = $_POST['level'];
	$pass1 = $_POST['password1'];
	$pass2 = $_POST['password2'];
	$email = @$_POST['emails'];

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
$mail->Subject = "Email data Admin KESYAHBANDARAN UTAMA TG PRIOK";
$mail->Body = "<h2>INFORMASI PERUBAHAN DATA ADMIN</h2><br>
               Username :".$user.
              "<br>Level :".$level.
              "<br>Password Baru :".$pass1; 
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



	if($pass1 !== $pass2){
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

	// Ubah data
		$ubahdata = mysql_query("UPDATE t_admin SET 
		username='$user', 
		password='$password', 
		gambar='$nama', 
		level='$level' 
		WHERE email='$email'");

	if($ubahdata){
		echo "<script>alert('Data Berhasil DiUbah')</script>";
		echo "<script>window.location='../admin.php'</script>";
	}else{
		echo "<script>alert('Data Gagal DiUbah !!!')</script>";
		echo "<script>window.location='../admin.php'</script>";
	}	
}


// ubah data

?>