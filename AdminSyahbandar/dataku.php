<?php
include '../koneksi.php';
$x = @$_GET['x'];
$combo = @$_GET['cmb'];


if($x==7){
	    $qcetak=mysql_query("SELECT * FROM t_pegawai");
		while($cetak=mysql_fetch_array($qcetak)){
			echo "$cetak[1],";
		}
}

// tampil SHK
if($x==8){
	    $q=mysql_query("SELECT * FROM t_pegawai WHERE idBagian='SHK' AND nip LIKE '%$combo%'");
		$result = mysql_num_rows($q);
		while($row = mysql_fetch_array($q) ){
		?>
			<div class="fotoProfile">
				     	    	<a href="proses/hapusbiodatapegawai.php?nip=<?php echo $row[0]?>"><img src="gambar/remove.png" alt="" id="remove" onclick="return konfirm()"></a>
								<?php if(!$row[14]){ ?>
				     	    		<img src="gambar/no.png">
				     	    	<?php } else {?>
									<img src='gambar/fotopegawai/<?php echo $row[14]?>'>
								<?php } ?>

								<h6 style="margin-left: 25px;"><?php echo $row[1]?></h6>

									<a href="" data-toggle="modal" data-target="#<?php echo $row[0]?>" >
										<h5 style="margin-left: 25px;">Detail Pegawai</h5>
									</a>
							</div>

			<?php
		}						
}

// tampil TU
if($x==9){
	      $q=mysql_query("SELECT * FROM t_pegawai WHERE idBagian='TU' AND nip LIKE '%$combo%'");
		$result = mysql_num_rows($q);
		while($row = mysql_fetch_array($q) ){
		?>
			<div class="fotoProfile">
				     	    	<a href="proses/hapusbiodatapegawai.php?nip=<?php echo $row[0]?>"><img src="gambar/remove.png" alt="" id="remove" onclick="return konfirm()"></a>
								<?php if(!$row[14]){ ?>
				     	    		<img src="gambar/no.png">
				     	    	<?php } else {?>
									<img src='gambar/fotopegawai/<?php echo $row[14]?>'>
								<?php } ?>

							<h6 style="margin-left: 25px;"><?php echo $row[1]?></h6>

									<a href="" data-toggle="modal" data-target="#<?php echo $row[0]?>" >
										<h5 style="margin-left: 25px;">Detail Pegawai</h5>
									</a>
							</div>

			<?php
		}						
}

// tampil PPP
if($x==10){
	    $q=mysql_query("SELECT * FROM t_pegawai WHERE idBagian='PPP' AND nip LIKE '%$combo%'");
		$result = mysql_num_rows($q);
		while($row = mysql_fetch_array($q) ){
		?>
			<div class="fotoProfile">
				     	    	<a href="proses/hapusbiodatapegawai.php?nip=<?php echo $row[0]?>"><img src="gambar/remove.png" alt="" id="remove" onclick="return konfirm()"></a>
								<?php if(!$row[14]){ ?>
				     	    		<img src="gambar/no.png">
				     	    	<?php } else {?>
									<img src='gambar/fotopegawai/<?php echo $row[14]?>'>
								<?php } ?>

								<h6 style="margin-left: 25px;"><?php echo $row[1]?></h6>

									<a href="" data-toggle="modal" data-target="#<?php echo $row[0]?>" >
										<h5 style="margin-left: 25px;">Detail Pegawai</h5>
									</a>
							</div>

			<?php
		}						
}

// tampil KKB
if($x==11){
	       $q=mysql_query("SELECT * FROM t_pegawai WHERE idBagian='KKB' AND nip LIKE '%$combo%'");
		$result = mysql_num_rows($q);
		while($row = mysql_fetch_array($q) ){
		?>
			<div class="fotoProfile">
				     	    	<a href="proses/hapusbiodatapegawai.php?nip=<?php echo $row[0]?>"><img src="gambar/remove.png" alt="" id="remove" onclick="return konfirm()"></a>
								<?php if(!$row[14]){ ?>
				     	    		<img src="gambar/no.png">
				     	    	<?php } else {?>
									<img src='gambar/fotopegawai/<?php echo $row[14]?>'>
								<?php } ?>

								<h6 style="margin-left: 25px;"><?php echo $row[1]?></h6>

									<a href="" data-toggle="modal" data-target="#<?php echo $row[0]?>" >
										<h5 style="margin-left: 25px;">Detail Pegawai</h5>
									</a>
							</div>

			<?php
		}						
}
?>