<?php
include "../koneksi.php";
require('pdf/fpdf.php');

$pdf = new FPDF("P","cm","A4");
$pdf->AddPage();

// Header
$pdf->Image("gambar/dis.jpg",2,1,2,2);
$pdf->Image("gambar/dharmajala.jpg",18,1,2,2);
$pdf->setFont("times","B",14);
$pdf->Cell(20,1,"DATA PEGAWAI","",1,"C");
$pdf->setFont("times","BU",12);
$pdf->Cell(20,0.5,"KANTOR KESYAHBANDARAN UTAMA TANJUNG PRIOK","",1,"C");
$pdf->setFont("times","",8);
$pdf->Cell(20,0.5,"Jln Padamarang No 4 Tanjung Priok Jakarta 14310, Telepon : 43931364, 43934157 (Hunting)","",1,"C");
$pdf->Cell(20,0.5,"Email : syahbandar_tg.priok@yahoo.com","",1,"C");
$pdf->Ln(1);

$q = mysql_query("SELECT * FROM t_pegawai WHERE nip='$_GET[nip]'");
while($row = mysql_fetch_array($q) ){
$pdf->setFont("times","",10);
$pdf->Cell(1,1,"","","","L");
$pdf->Cell(5,1,"Nip","","","L");
$pdf->Cell(19,1,": ".$row[0],"",1,"L");

$pdf->Cell(1,1,"","","","L");
$pdf->Cell(5,1,"Nama Pegawai","","","L");
$pdf->Cell(19,1,": ".$row[1],"",1,"L");

$pdf->Cell(1,1,"","","","L");
$pdf->Cell(5,1,"Tempat Lahir","","","L");
$pdf->Cell(19,1,": ".$row[2],"",1,"L");

$pdf->Cell(1,1,"","","","L");
$pdf->Cell(5,1,"Tanggal Lahir","","","L");
$pdf->Cell(19,1,": ".$row[3],"",1,"L");

$pdf->Cell(1,1,"","","","L");
$pdf->Cell(5,1,"Agama","","","L");
$pdf->Cell(19,1,": ".$row[4],"",1,"L");

$pdf->Cell(1,1,"","","","L");
$pdf->Cell(5,1,"Pendidikan","","","L");
$pdf->Cell(19,1,": ".$row[5],"",1,"L");

$pdf->Cell(1,1,"","","","L");
$pdf->Cell(5,1,"Pangkat Gol","","","L");
$pdf->Cell(19,1,": ".$row[7],"",1,"L");

$pdf->Cell(1,1,"","","","L");
$pdf->Cell(5,1,"TMT","","","L");
$pdf->Cell(19,1,": ".$row[8],"",1,"L");

$pdf->Cell(1,1,"","","","L");
$pdf->Cell(5,1,"Kepel","","","L");
$pdf->Cell(19,1,": ".$row[9],"",1,"L");

$pdf->Cell(1,1,"","","","L");
$pdf->Cell(5,1,"Penjenjangan","","","L");
$pdf->Cell(19,1,": ".$row[10],"",1,"L");

$pdf->Cell(1,1,"","","","L");
$pdf->Cell(5,1,"Jabatan Fungsional","","","L");
$pdf->Cell(19,1,": ".$row[11],"",1,"L");

$pdf->Cell(1,1,"","","","L");
$pdf->Cell(5,1,"Kelas Jabatan","","","L");
$pdf->Cell(19,1,": ".$row[12],"",1,"L");

$pdf->Cell(1,1,"","","","L");
$pdf->Cell(5,1,"Unit Kerja","","","L");
$pdf->Cell(19,1,": ".$row[13],"",1,"L");


$start_awal=$pdf->GetX(); 
$get_xxx = $pdf->GetX();
$get_yyy = $pdf->GetY();

$width_cell = 25;  
$height_cell = 0.1;                 

$get_xxx=$start_awal;                      
$get_yyy+=$height_cell;                  

$pdf->SetXY($get_xxx, $get_yyy);

$pdf->Cell(1,1,"","","","L");
$pdf->MultiCell(6,1,'Pendidikan Kedinasan',"","");
$get_xxx+=5;
$pdf->SetXY($get_xxx,$get_yyy);

$pdf->Cell(1,1,"","","","L");
$pdf->MultiCell(13,1,": ".$row[6],"","");
$get_yyy+=3;  
$pdf->SetXY($get_xxx, $get_yyy);


}
$pdf->Output();
?>

