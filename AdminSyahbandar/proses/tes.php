<?php
include "../../koneksi.php";



	// Pengiriman Email admin baru
// include('../phpmailer/class.phpmailer.php');
// include('../phpmailer/class.smtp.php');
// $mail = new PHPMailer();

// $mail->isSMTP();
// $mail->Host = 'relay-hosting.secureserver.net';
// $mail->Port = 25;
// $mail->SMTPAuth = false;
// $mail->SMTPSecure = false;

// $mail->Host     = "ssl://smtp.gmail.com"; 
// $mail->Mailer   = "smtp";
// $mail->SMTPAuth = true; 
 
// $mail->Username = "prioksyahbandar@gmail.com"; 
// $mail->Password = "keselamatanberlayar";
// $webmaster_email = "prioksyahbandar@gmail.com"; 
// $emailku = $email;
// $name = "Nama Penerima"; 
// $mail->From = $webmaster_email;
// $mail->FromName = "Admin Syahbandar";
// $mail->AddAddress($email,$name);
// $mail->AddReplyTo($webmaster_email,"Nama Pengirim");
// $mail->WordWrap = 50; 
// //$mail->AddAttachment("module.txt"); // attachment
// //$mail->AddAttachment("new.jpg"); // attachment
// $mail->IsHTML(true); 
// $mail->Subject = "Email data Admin KESYAHBANDARAN UTAMA TG PRIOK";
// $mail->Body = "<h2>INFORMASI PERUBAHAN DATA ADMIN</h2><br>
//                Username :".$user.
//               "<br>Level :".$level.
//               "<br>Password Baru :".$pass1; 
// $mail->AltBody = "This is the body when user views in plain text format"; 
// // $mail->addAttachment('../tes.html');
// if(!$mail->Send())
// {
// echo "Mailer Error: " . $mail->ErrorInfo;
// }
// else
// {
// echo "email berhasil dikirim";
// }



	

	// Enkripsi Password

	// Ubah data
	mysql_query("UPDATE t_admin SET 
		username='whanafi', 
		password='1111', 
		gambar='wewqeqw', 
		level='1' 
		WHERE email='iqbalfralamp8@gmail.com'");

?>