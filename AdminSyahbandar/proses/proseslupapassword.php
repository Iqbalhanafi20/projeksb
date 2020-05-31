<!-- proses kirim email -->
<?php
if(isset($_POST['submit']) ){
$emails = @$_POST['email'];
$email = strtolower($emails);

// cek data pada database 
$qcek = mysql_query("SELECT * FROM t_admin WHERE email='$email'");
$row = mysql_fetch_array($qcek);
// Pengiriman email
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
$mail->Subject = "KESYAHBANDARAN UTAMA TANJUNG PRIOK";
$mail->Body = "<h2>INFORMASI DATA ADMIN</h2><br>
               Username :".$row[0]. 
              "<br>password :".$row[1];  
$mail->AltBody = "This is the body when user views in plain text format"; 
// $mail->addAttachment('../tes.html');
if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
echo "<script>alert('Email Tidak Sesuai')</script>";
echo "<script>window.location='../index.php'</script>";
}
else
{
echo "<script>alert('Data berhasil dikirim ke email anda')</script>";
echo "<script>window.location='../index.php'</script>";
}

}
?>