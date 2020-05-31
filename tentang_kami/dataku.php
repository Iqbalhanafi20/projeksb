<?php
include '../koneksi.php';
$x = @$_GET['x'];
$combo = @$_GET['cmb'];

// tampil SHK
if($x==8){
	       $q=mysql_query("SELECT * FROM t_pegawai WHERE idBagian='SHK' AND namaPegawai LIKE '%$combo%'");
		$result = mysql_num_rows($q);
		while($row = mysql_fetch_array($q) ){
		?>
			 <div class="col-md-3">
            <div class="foto">
              <?php if(!$row[14]){?>
              <img src="../AdminSyahbandar/gambar/no.png" alt="">
              <?php } ?>
              <img src="../AdminSyahbandar/gambar/fotoPegawai/<?php echo $row[14]?>" alt="">
              <div class="detail">
              <h6 style="margin: -10px 10px 5px 10px;"><?php echo $row[1]?></h6>
               <a href="#detailPeg" style="font-size: 12px;margin: -10px 10px 5px 10px;"  data-toggle="modal" data-target=".<?php echo $row[0]?>">Lihat Detail</a>
               </div>
            </div>
          </div>

			<?php
		}						
}


// tampil TU
if($x==9){
	      $q=mysql_query("SELECT * FROM t_pegawai WHERE idBagian='TU' AND namaPegawai LIKE '%$combo%'");
		$result = mysql_num_rows($q);
		while($row = mysql_fetch_array($q) ){
		?>
			<div class="col-md-3">
            <div class="foto">
              <?php if(!$row[14]){?>
              <img src="../AdminSyahbandar/gambar/no.png" alt="">
              <?php } ?>
              <img src="../AdminSyahbandar/gambar/fotoPegawai/<?php echo $row[14]?>" alt="">
              <div class="detail">
             <h6 style="margin: -10px 10px 5px 10px;"><?php echo $row[1]?></h6>
               <a href="#detailPeg" style="font-size: 12px;margin: -10px 10px 5px 10px;"  data-toggle="modal" data-target=".<?php echo $row[0]?>">Lihat Detail</a>
               </div>
            </div>
          </div>

			<?php
		}						
}

// tampil PPP
if($x==10){
	      $q=mysql_query("SELECT * FROM t_pegawai WHERE idBagian='PPP' AND namaPegawai LIKE '%$combo%'");
		$result = mysql_num_rows($q);
		while($row = mysql_fetch_array($q) ){
		?>
		  <div class="col-md-3">
            <div class="foto">
              <?php if(!$row[14]){?>
              <img src="../AdminSyahbandar/gambar/no.png" alt="">
              <?php } ?>
              <img src="../AdminSyahbandar/gambar/fotoPegawai/<?php echo $row[14]?>" alt="">
              <div class="detail">
              <h6 style="margin: -10px 10px 5px 10px;"><?php echo $row[1]?></h6>
               <a href="#detailPeg" style="font-size: 12px;margin: -10px 10px 5px 10px;"  data-toggle="modal" data-target=".<?php echo $row[0]?>">Lihat Detail</a>
               </div>
            </div>
          </div>

			<?php
		}						
}
// tampil KKB
if($x==11){
	      $q=mysql_query("SELECT * FROM t_pegawai WHERE idBagian='KKB' AND namaPegawai LIKE '%$combo%'");
		$result = mysql_num_rows($q);
		while($row = mysql_fetch_array($q) ){
		?>
			 <div class="col-md-3">
            <div class="foto">
              <?php if(!$row[14]){?>
              <img src="../AdminSyahbandar/gambar/no.png" alt="">
              <?php } ?>
              <img src="../AdminSyahbandar/gambar/fotoPegawai/<?php echo $row[14]?>" alt="">
              <div class="detail">
              <h6 style="margin: -10px 10px 5px 10px;"><?php echo $row[1]?></h6>
               <a href="#detailPeg" style="font-size: 12px;margin: -10px 10px 5px 10px;"  data-toggle="modal" data-target=".<?php echo $row[0]?>">Lihat Detail</a>
               </div>
            </div>
          </div>

			<?php
		}						
}
?>