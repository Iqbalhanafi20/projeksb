<?php
$ip = $_SERVER['REMOTE_ADDR']; // Mengambil IP
$tanggal = date("Ymd"); // Mengambil tanggal
$waktu = time(); // mengambil waktu
 
$query1 = mysql_query("select * from statistik where ip='$ip' and tanggal='$tanggal'");
 
if(mysql_num_rows($query1)== 0){
 $ins = mysql_query("insert into statistik(ip,tanggal,hits,online) values('$ip','$tanggal','1','$waktu')");
}else{
 $upd = mysql_query("update statistik set hits=hits+1, online=$waktu where ip='$ip' and tanggal='$tanggal'");
}
 
// pengunjung hari ini
$query1 = mysql_query("select * from statistik where tanggal='$tanggal' group by ip");
$pengunjung = mysql_num_rows($query1);
 
// Total Pengunjung
$query2 = mysql_query("select count(hits) as total from statistik");
$hasil2 = mysql_fetch_array($query2);
$totPengunjung = $hasil2['total'];
 
// Hits hari ini
$query3 = mysql_query("select sum(hits) as jumlah from statistik where tanggal='$tanggal' group by tanggal ");
$hasil3 = mysql_fetch_array($query3);
$hits = $hasil3['jumlah'];
 
// Total hits
$query4 = mysql_query("select sum(hits) as total from statistik");
$hasil4 = mysql_fetch_array($query4);
$totHits = $hasil4['total'];
 
// Pengunjung yang sedang online
$bataswaktu = time()-300;
$pengunjungOnline = mysql_num_rows(mysql_query("select * from statistik where online > $bataswaktu"));
 
// angka total pengunjung dalam bentuk gambar
$folder = "counter";
$ext = ".png";
 
// ubah digit angka menjadi enam digit
$totpengunjunggbr = sprintf("%07d",$totPengunjung);
 
// Ganti angka teks menjadi angka gambar
for($i=0; $i<=9; $i++){
 $totpengunjunggbr = str_replace($i,"<img src='$folder/$i$ext' alt='$i'>",$totpengunjunggbr);
}
?>
		<div class="statistika">
		<?php
			echo"<h3 class='statpengunjung'>Statistik Pengunjung</h3>
			Total Keseluruhan : $totpengunjunggbr<br> 
			 
			Pengunjung Hari ini : $pengunjung<br>
			 
			Total pengunjung : $totPengunjung<br>
			
			Hits hari ini : $hits<br>
			 
			Total Hits : $totHits<br>
			 
			Pengunjung Online : $pengunjungOnline";
		?>
		</div>
