<?php
include "../koneksi.php"; 
session_start();
?>
<html>
	<head>
		<title>Panel Admin</title>

			  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="../x-icon" href="../1509094699.ico">
   <!--  <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="css/styleadmin.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../assets/css/jquery-ui.min.css" />
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
	<link rel="stylesheet" href="css/tampilanadmins.css">
	<style>
		#gbr img{
			margin-top: 50px;
	}
	.daftaradmin input{
		width: 100% !important;
	}
	</style>
	</head>
	<body>
	<style>
	
	</style>
			<!-- Menu admin -->
  <?php
   include "bannerAdmin.php";

 
		 ?>


<div class="row">
            
	<?php include "menu.php"; ?>
			
		<div class="col-md-9">
			<div class="kontenkelola">
				<div class="container">	
					<div class="isi">
						<div class="tab-content" id="v-pills-tabContent">
							<div class="tab-pane active" id="v-pills-admin" role="tabpanel" >
							<center><h1>KELOLA ADMIN</h1></center>
							<br>

							<?php
							if(@$_SESSION['level'] == 1){ ?>

<div class="row">
						<div class="col-md-6">
							<!-- FORM ADMIN -->
							<div class="daftaradmin">
									<h3>DAFTAR ADMIN BARU</h3>
									<form action="proses/prosessimpanadmin.php" method="post" enctype="multipart/form-data">
										<div class="form-group">
										    <label class="col-form-label" for="formGroupExampleInput">Username</label>
										    <input type="text" class="form-control" name="user" id="user" required>
										</div> 
										<div class="form-group">
										    <label>Pilih Level</label>
										    <select name="level" class="form-control" id="level">
										    	<?php
										    		for($i=1; $i<=2; $i++){ ?>
										    		<option value="<?php echo $i ?>"><?php echo $i ?></option>
												<?php
										    		}
										    	?>
										    </select>
									    </div>
										<div class="form-group">
										    <label>Foto Profile</label>
										    <input type="file" name="fileupload" required>
									    </div>
									    <div class="form-group">
										    <label for="exampleFormControlInput1">Email address</label>
										    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
										 </div>
										<div class="form-group">
										    <label class="col-form-label" for="formGroupExampleInput">Password</label>
										    <input type="password" class="form-control" name="password1" id="password1" required>
										</div>
										<div class="form-group">
										    <label class="col-form-label" for="formGroupExampleInput">Ulangi Password</label>
										    <input type="password" class="form-control" name="password2" id="password2" required>
										</div>

										 <button type="submit" class="btn btn-primary" id="tambah" name="tambah">TAMBAH</button>
									 </form>
							</div>
						</div>
							
						<div class="col-md-6">
						<div class="editbiodataadmin">
								<h3>EDIT BIODATA</h3>
						<?php
						$email = @$_GET[emai];
						$cetakdata = mysql_query("SELECT * FROM profileadmin WHERE email='$email'");
						$row =mysql_fetch_array($cetakdata);
						?>
									<form action="proses/proseseditbiodata.php" method="post">
										<div class="form-group">
										    <label class="col-form-label" for="formGroupExampleInput">Nama Lengkap</label>
										    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row[0]?>" required>
										</div> 
										<div class="form-group">
										    <label class="col-form-label" for="formGroupExampleInput">Alamat</label>
										    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $row[1]?>" required>
										</div>
										<div class="form-group">
										    <label class="col-form-label" for="formGroupExampleInput">Tempat Lahir</label>
										    <input type="text" class="form-control" name="tptlahir" id="tptlahir" value="<?php echo $row[2]?>" required>
										</div>
										<div class="form-group">
										 <label class="col-form-label" for="formGroupExampleInput">Tanggal Lahir</label>
							                <input class="form-control"  type="text" name="tgl_lahir" id="datepicker" value="<?php echo $row[3]?>" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" required>
							                <span class="glyphicon glyphicon-calendar"></span>
		                				</div>
										 <div class="form-group">
											    <label for="exampleFormControlTextarea1">Tentang Saya</label>
											    <textarea class="form-control"  rows="6" name="tentangsaya"  required><?php echo $row[4]?></textarea>
										</div>
										<div class="form-group">
										    <label for="exampleFormControlInput1">Email address</label>
										    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $row[5]?>" readonly="on">
										 </div>
										 <button type="submit" class="btn btn-primary" id="tambah" name="ubahdata">UPDATE</button>
									 </form>
							</div>
						</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="ListAdmin">
		<h3><b>List Admin Syahbandar Tg Priok</b></h3>
		<table class="table table-responsive">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Level</th>
		      <th scope="col">Username</th>
		      <th scope="col">Gambar</th>
		      <th scope="col">Email</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php
		  $email = $_SESSION['email'];
		  $q = mysql_query("SELECT * FROM t_admin");
		  while ($cetak = mysql_fetch_array($q) ) { ?>
		    <tr>
		      <th scope="row"><?php echo $cetak[4]?></th>
		      <td><?php echo $cetak[0]?></td>
		      <td><img src="gambar/fotoProfile/<?php echo $cetak[2]?>" alt="" id="imgInfo"></td>
		      <td><?php echo $cetak[3]?></td>
		      <td>
		      	<a href="proses/proseshapusadmin.php?email=<?php echo $cetak[3]?>"><img src="gambar/delete.png" alt="" id="hapus" onclick="return konfirm()"></a>
		      	<a href="admin.php?email=<?php echo $cetak[3]?>"><img src="gambar/update.png" alt="" id="update"></a>
		      </td>
		    </tr>
		      <?php
		  }
		
		  ?>
		   </tbody>
		 </table>
		</div>
	</div>
</div>
							<?php
							}
							?>


				
					<?php
				if(@$_SESSION['level'] == 2){ ?>
					<h3>Daftar Admin</h3>
						<table class="table table-responsive">
						  <thead class="thead-dark">
						    <tr>
						      <th scope="col">Level</th>
						      <th scope="col">Username</th>
						      <th scope="col">Gambar</th>
						      <th scope="col">Email</th>
						      <th scope="col">Action</th>
						    </tr>
						  </thead>
						  <tbody>
						  <?php
						  $email = $_SESSION['email'];
						  $q = mysql_query("SELECT * FROM t_admin WHERE email = '$email'");
						  while ($cetak = mysql_fetch_array($q) ) { ?>
						   <tr>
						      <th scope="row"><?php echo $cetak[4]?></th>
						      <td><?php echo $cetak[0]?></td>
						      <td><img src="gambar/fotoProfile/<?php echo $cetak[2]?>" alt="" id="imgInfo"></td>
						      <td><?php echo $cetak[3]?></td>
						      <td>
						      	<a href="admin.php?email=<?php echo $cetak[3]?>"><img src="gambar/update.png" alt="" id="update"></a>
						      </td>
						    </tr>
						  <?php
						  }
						
						  ?>
						  </tbody>
						</table>
					
					<?php } ?>
					
					
							
					<div class="row">
						<div class="col-md-6">
							<div class="biodataadmin">
								<h3>FORM BIODATA ADMIN</h3>
									<form action="proses/prosessimpanbiodata.php" method="post">
										<div class="form-group">
										    <label class="col-form-label" for="formGroupExampleInput">Nama Lengkap</label>
										    <input type="text" class="form-control" name="nama" id="nama" required>
										</div> 
										<div class="form-group">
										    <label class="col-form-label" for="formGroupExampleInput">Alamat</label>
										    <input type="text" class="form-control" name="alamat" id="alamat" required>
										</div>
										<div class="form-group">
										    <label class="col-form-label" for="formGroupExampleInput">Tempat Lahir</label>
										    <input type="text" class="form-control" name="tptlahir" id="tptlahir" required>
										</div>
										<div class="form-group">
										 <label class="col-form-label" for="formGroupExampleInput">Tanggal Lahir</label>
							                <input class="form-control"  type="date" name="tgl_lahir" id="datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" required>
							                <span class="glyphicon glyphicon-calendar"></span>
		                				</div>
										 <div class="form-group">
											    <label for="exampleFormControlTextarea1">Tentang Saya</label>
											    <textarea class="form-control"  rows="6" name="tentangsaya" required></textarea>
											  </div>
										<div class="form-group">
										    <label for="exampleFormControlInput1">Email address</label>
										    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $_SESSION['email'] ?>" readonly="on">
										 </div>
										 <button type="submit" class="btn btn-primary" id="tambah" name="insert">TAMBAH</button>
									 </form>
							</div>
						</div>


						<div class="col-md-6">
						<!-- Form Edit -->
						<div id="formEditAdmin" class="formEditAdmin">
							<h3>FORM EDIT DATA ADMIN</h3>
							 <?php
						      $email = @$_GET['email'];
						      $qcet = mysql_query("SELECT * FROM t_admin WHERE email = '$email'");
						      $cet = mysql_fetch_array($qcet);
						      ?>
									<form action="proses/proseseditadmin.php" method="post" enctype="multipart/form-data">
										<div class="form-group">
										    <label class="col-form-label" for="formGroupExampleInput">Username</label>
										    <input type="text" class="form-control" name="user" id="user" value="<?php echo $cet[0]?>" required>
										</div> 
										<div class="form-group">
										    <label>Pilih Level</label>
										    <select name="level" class="form-control" id="level" value="<?php echo $cet[4]?>">
										    	<?php
										    		if($cet[4] == 2){ ?>
										    		<option value="1">1</option>
										    		<option value="2" <?php echo "selected"; ?> >2</option>
												<?php
										    		}else{
										    	?>
										    		<option value="1" <?php echo "selected"; ?>>1</option>
										    		<option value="2">2</option>
										    	<?php } ?>
										    </select>
									    </div>
										<div class="form-group">
										    <label>Foto Profile</label>
										    <input type="file" name="fileupload" required>
									    </div>
									    <div class="form-group">
										 <div id="gbr">
										    	<td>
										    	<?php if(!$cet[2]){?>
										    		<img src="gambar/no.png" alt="" id="imgEdit">
										    	<?php }else{?>
										    		<img src="gambar/fotoProfile/<?php echo $cet[2]?>" alt="" id="imgEdit">
										    	<?php } ?>
										    	</td>
										    </div>
									    </div>
									    <div class="form-group">
										    <label class="col-form-label" for="formGroupExampleInput">Nama Gambar</label>
										    <input type="text" class="form-control" name="namaImg" id="namaImg" value="<?php echo $cet[2]?>" required disabled>
										</div>
									    <div class="form-group">
										    <label for="exampleFormControlInput1">Email address</label>
										    <input type="email" name="emails" value="<?php echo $cet[3]?>" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required readonly="on">
										 </div>
										<div class="form-group">
										    <label class="col-form-label" for="formGroupExampleInput">Password Baru</label>
										    <input type="password" class="form-control" name="password1" id="password1" required>
										</div>
										<div class="form-group">
										    <label class="col-form-label" for="formGroupExampleInput">Ulangi Password</label>
										    <input type="password" class="form-control" name="password2" id="password2" required>
										</div>

										 <button type="submit" class="btn btn-primary" id="tambah" name="ubahdata">UPDATE</button>
									 </form>
						</div>



					
							</div>
						</div>
				   </div>
				</div>
			</div>
		</div>
</div>
		</div>



  


    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   	<script src="../js/bootstrap.min.js"></script>
   	<script src="../js/jquery.js"></script>
   	<script type="text/javascript" src="js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
   	<script>
 //   		tinyMCE.init({
 //        	// General options
 //        	mode : "textareas",
 //        	theme : "advanced",
	// });
   	</script>
	<script src="jsAdmin/ajax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="js/hapus.js"></script>
	</body>
</html>