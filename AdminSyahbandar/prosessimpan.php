<?php
include "../koneksi.php";
$x = @$_GET['x'];
$id = @$_GET['id'];
$ids = @$_GET['ids'];
$user = @$_GET['a'];
$pass1 = @$_GET['b'];
$pass2 = @$_GET['c'];


// muncul combo layanan publik
if($x==1){
	echo "<option value='0'>--Pilih Data--</option>";
	$cetq=mysql_query("SELECT * FROM t_layananpublik");
	while($cet=mysql_fetch_array($cetq)){
		?>
		<option value="<?php echo $cet[0]?>"><?php echo $cet[1]?></option>
		<?php
	}
}

if($x==5){
	echo "<option value='0'>--Pilih Data--</option>";
	$cetq=mysql_query("SELECT * FROM t_layananpublik");
	while($cet=mysql_fetch_array($cetq)){
		?>
		<option value="<?php echo $cet[0]?>"><?php echo $cet[1]?></option>
		<?php
	}
}

// muncul combo seksi
if($x==2){
	echo "<option value='0'>--Pilih Data--</option>";
	$cetq=mysql_query("SELECT * FROM t_seksi WHERE id_layananPublik='$id'");
	while($cet=mysql_fetch_array($cetq)){
		?>
		<option value="<?php echo $cet[0]?>"><?php echo $cet[1]?></option>
		<?php
	}
}

if($x==6){
	echo "<option value='0'>--Pilih Data--</option>";
	$cetq=mysql_query("SELECT * FROM t_seksi WHERE id_layananPublik='$id'");
	while($cet=mysql_fetch_array($cetq)){
		?>
		<option value="<?php echo $cet[0]?>"><?php echo $cet[1]?></option>
		<?php
	}
}

// fungsi hapus
if($x==10){
	$hapus = mysql_query("DELETE FROM t_seksidanfile WHERE id='$ids'");
}


// Muncul Id Seksi
if($x==7){
	echo "<option value='0'>--Pilih Data--</option>";
	$cetq=mysql_query("SELECT * FROM t_seksidanfile WHERE id_seksi='$id'");
	while($cet=mysql_fetch_array($cetq)){
		?>
		<option value="<?php echo $cet[0]?>"><?php echo $cet[0]?></option>
		<?php
	}
}

// muncul input id
if($x==8){
	$cetq=mysql_query("SELECT * FROM t_seksidanfile WHERE id='$ids'");
	while($cet=mysql_fetch_array($cetq)){
		echo "$cet[0],$cet[1],$cet[2],$cet[3]";
		?>
		<?php
	}
}



// tatausaha
if($x==3){

	// Seksi sertifikasi keselamatan
	if($id=='S001'){
		echo "<table class='table table-responsive'>";
		echo "<thead class='thead-dark'>";
		echo "<tr><th scoope='col'>NO</th>";
		echo "<th scoope='col'>ID</th>";
		echo "<th scoope='col'>NAMA</th>";
		echo "<th scoope='col'>ID SEKSI</th>";
		echo "<th scoope='col'>FILE</th></tr>";
		echo "</thead>";
		$no = 1;
		$cetq=mysql_query("SELECT * FROM t_seksidanfile WHERE id_seksi='$id'");
		while($cet=mysql_fetch_array($cetq)){
		?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $cet[0]?></td>
				<td><?php echo $cet[1]?></td>
				<td><?php echo $cet[2]?></td>
				<td><?php echo $cet[3]?></td>
			</tr>
		<?php
	}
		echo "</table>";
	}

	// Seksi Pencegahan pencemaran
	if($id=='S002'){
		echo "<table class='table table-responsive'>";
		echo "<thead class='thead-dark'>";
		echo "<tr><th scoope='col'>NO</th>";
		echo "<th scoope='col'>ID</th>";
		echo "<th scoope='col'>NAMA</th>";
		echo "<th scoope='col'>ID SEKSI</th>";
		echo "<th scoope='col'>FILE</th></tr>";
		echo "</thead>";
		$no = 1;
		$cetq=mysql_query("SELECT * FROM t_seksidanfile WHERE id_seksi='$id'");
		while($cet=mysql_fetch_array($cetq)){
		?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $cet[0]?></td>
				<td><?php echo $cet[1]?></td>
				<td><?php echo $cet[2]?></td>
				<td><?php echo $cet[3]?></td>
			</tr>
		<?php
	}
		echo "</table>";
	}

	// Seksi status hukum kapal
	if($id=='S003'){
		echo "<table class='table table-responsive'>";
		echo "<thead class='thead-dark'>";
		echo "<tr><th scoope='col'>NO</th>";
		echo "<th scoope='col'>ID</th>";
		echo "<th scoope='col'>NAMA</th>";
		echo "<th scoope='col'>ID SEKSI</th>";
		echo "<th scoope='col'>FILE</th></tr>";
		echo "</thead>";
		$no = 1;
		$cetq=mysql_query("SELECT * FROM t_seksidanfile WHERE id_seksi='$id'");
		while($cet=mysql_fetch_array($cetq)){
		?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $cet[0]?></td>
				<td><?php echo $cet[1]?></td>
				<td><?php echo $cet[2]?></td>
				<td><?php echo $cet[3]?></td>
			</tr>
		<?php
	}
		echo "</table>";
	}


	// Seksi Kepelautan
	if($id=='S004'){
		echo "<table class='table table-responsive'>";
		echo "<thead class='thead-dark'>";
		echo "<tr><th scoope='col'>NO</th>";
		echo "<th scoope='col'>ID</th>";
		echo "<th scoope='col'>NAMA</th>";
		echo "<th scoope='col'>ID SEKSI</th>";
		echo "<th scoope='col'>FILE</th></tr>";
		echo "</thead>";
		$no = 1;
		$cetq=mysql_query("SELECT * FROM t_seksidanfile WHERE id_seksi='$id'");
		while($cet=mysql_fetch_array($cetq)){
		?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $cet[0]?></td>
				<td><?php echo $cet[1]?></td>
				<td><?php echo $cet[2]?></td>
				<td><?php echo $cet[3]?></td>
			</tr>
		<?php
	}
		echo "</table>";
	}

	// Seksi tertib berlayar
	if($id=='S005'){
		echo "<table class='table table-responsive'>";
		echo "<thead class='thead-dark'>";
		echo "<tr><th scoope='col'>NO</th>";
		echo "<th scoope='col'>ID</th>";
		echo "<th scoope='col'>NAMA</th>";
		echo "<th scoope='col'>ID SEKSI</th>";
		echo "<th scoope='col'>FILE</th></tr>";
		echo "</thead>";
		$no = 1;
		$cetq=mysql_query("SELECT * FROM t_seksidanfile WHERE id_seksi='$id'");
		while($cet=mysql_fetch_array($cetq)){
		?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $cet[0]?></td>
				<td><?php echo $cet[1]?></td>
				<td><?php echo $cet[2]?></td>
				<td><?php echo $cet[3]?></td>
			</tr>
		<?php
	}
		echo "</table>";
	}

	// Seksi tertib bandar
	if($id=='S006'){
		echo "<table class='table table-responsive'>";
		echo "<thead class='thead-dark'>";
		echo "<tr><th scoope='col'>NO</th>";
		echo "<th scoope='col'>ID</th>";
		echo "<th scoope='col'>NAMA</th>";
		echo "<th scoope='col'>ID SEKSI</th>";
		echo "<th scoope='col'>FILE</th></tr>";
		echo "</thead>";
		$no = 1;
		$cetq=mysql_query("SELECT * FROM t_seksidanfile WHERE id_seksi='$id'");
		while($cet=mysql_fetch_array($cetq)){
		?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $cet[0]?></td>
				<td><?php echo $cet[1]?></td>
				<td><?php echo $cet[2]?></td>
				<td><?php echo $cet[3]?></td>
			</tr>
		<?php
	}
		echo "</table>";
	}

	// Seksi patroli
	if($id=='S007'){
		echo "<table class='table table-responsive'>";
		echo "<thead class='thead-dark'>";
		echo "<tr><th scoope='col'>NO</th>";
		echo "<th scoope='col'>ID</th>";
		echo "<th scoope='col'>NAMA</th>";
		echo "<th scoope='col'>ID SEKSI</th>";
		echo "<th scoope='col'>FILE</th></tr>";
		echo "</thead>";
		$no = 1;
		$cetq=mysql_query("SELECT * FROM t_seksidanfile WHERE id_seksi='$id'");
		while($cet=mysql_fetch_array($cetq)){
		?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $cet[0]?></td>
				<td><?php echo $cet[1]?></td>
				<td><?php echo $cet[2]?></td>
				<td><?php echo $cet[3]?></td>
			</tr>
		<?php
	}
		echo "</table>";
	}

	// Seksi spenunjang keselamatan
	if($id=='S008'){
		echo "<table class='table table-responsive'>";
		echo "<thead class='thead-dark'>";
		echo "<tr><th scoope='col'>NO</th>";
		echo "<th scoope='col'>ID</th>";
		echo "<th scoope='col'>NAMA</th>";
		echo "<th scoope='col'>ID SEKSI</th>";
		echo "<th scoope='col'>FILE</th></tr>";
		echo "</thead>";
		$no = 1;
		$cetq=mysql_query("SELECT * FROM t_seksidanfile WHERE id_seksi='$id'");
		while($cet=mysql_fetch_array($cetq)){
		?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $cet[0]?></td>
				<td><?php echo $cet[1]?></td>
				<td><?php echo $cet[2]?></td>
				<td><?php echo $cet[3]?></td>
			</tr>
		<?php
	}
		echo "</table>";
	}

	// Seksi penjagaan
	if($id=='S009'){
		echo "<table class='table table-responsive'>";
		echo "<thead class='thead-dark'>";
		echo "<tr><th scoope='col'>NO</th>";
		echo "<th scoope='col'>ID</th>";
		echo "<th scoope='col'>NAMA</th>";
		echo "<th scoope='col'>ID SEKSI</th>";
		echo "<th scoope='col'>FILE</th></tr>";
		echo "</thead>";
		$no = 1;
		$cetq=mysql_query("SELECT * FROM t_seksidanfile WHERE id_seksi='$id'");
		while($cet=mysql_fetch_array($cetq)){
		?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $cet[0]?></td>
				<td><?php echo $cet[1]?></td>
				<td><?php echo $cet[2]?></td>
				<td><?php echo $cet[3]?></td>
			</tr>
		<?php
	}
		echo "</table>";
	}

	// Seksi Tata usaha
	if($id=='S010'){
		echo "<table class='table table-responsive'>";
		echo "<thead class='thead-dark'>";
		echo "<tr><th scoope='col'>NO</th>";
		echo "<th scoope='col'>ID</th>";
		echo "<th scoope='col'>NAMA</th>";
		echo "<th scoope='col'>ID SEKSI</th>";
		echo "<th scoope='col'>FILE</th></tr>";
		echo "</thead>";
		$no = 1;
		$cetq=mysql_query("SELECT * FROM t_seksidanfile WHERE id_seksi='$id'");
		while($cet=mysql_fetch_array($cetq)){
		?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $cet[0]?></td>
				<td><?php echo $cet[1]?></td>
				<td><?php echo $cet[2]?></td>
				<td><?php echo $cet[3]?></td>
			</tr>
		<?php
	}
		echo "</table>";
	}
}

?>




<?php
// Edit Visi misi pada kelola Profile
if($x==15){
	$cetq=mysql_query("SELECT * FROM t_profile");
	while($cet=mysql_fetch_array($cetq)){
		echo "$cet[1],$cet[2],$cet[3],";
		?>
		<?php
	}
}
?>


<?php
// Tampil Form Edit Alamat di kelola Beranda 
if($x==16){
	$cetq=mysql_query("SELECT * FROM kantorsyahbandar WHERE idKantor='$id'");
	while($cet=mysql_fetch_array($cetq)){
		echo "$cet[0]+$cet[1]+$cet[2]+$cet[3]+";
		?>
		<?php
	}
}

?>







