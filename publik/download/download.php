<?php
// Source Code Download File dengan PHP
if(isset($_GET['nama_file'])){
	$file = @$back_dir.$_GET['nama_file'];
	
	if (file_exists($file))
	{
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.basename($file));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: private');
		header('Pragma: private');
		header('Content-Length: ' . filesize($file));
		ob_clean();
		flush();
		readfile($file);
		exit;

	} 
	else 
	{
		echo "<script>alert('File Sudah tidak ada!!!!')</script>";
		echo "<script>window.location.href='../layanan_publik.php'</script>";

	}
	
}
?>