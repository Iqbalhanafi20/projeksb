
	<style>
	
	/*banner admin*/
	.navAdmin{
		font-size: 15px;
		background-color: #FAB319;
		width: 100%;
		height: 40px;
		border-bottom: 5px solid black;
		/*position: fixed;*/
		padding-bottom: 10px;
	}
	.judul{
		margin-left: 25px;
	}
	#navigasi{
		background-color: #FB9041 !important;
	}
	#logoAdmin img{
		width: 50px !important;
		height: 50px !important;
		border-radius: 5px;
		/*border: 3px solid #F64B29;*/
	}
	#gbrprof{
		width: 25px;
		height: 25px;
		border-radius: 50px;
	}
	.modalProfile{
		padding: 20px;
	}
	#ktk{
		width: 150px;
		height: 150px;
		box-shadow: 3px 3px 4px #9E9B9B;
	}
	.bungkus{
		width: 100%;
	}
	.aksiModal{
		width: 35px !important;
		height: 35px !important;
	}
	.bungkus img{
		width: 100%;
		height: 400px;
		border: 3px solid #FF6363;
	}
	#close{
		margin-bottom: 10px;
	}
	.close{
		width: 60px;
		height: 60px;
	}
	</style>
		<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navigasi">
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav mr-auto">
					      <li class="nav-item dropdown" id="prof">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="prof">
					          <img src="gambar/fotoProfile/<?php echo $_SESSION['foto']; ?>" alt="" id="gbrprof">&nbsp
					          <b><?php 
					           echo @$_SESSION['nama'];
					           // tidak ada sesi login maka kembali ke form login
					           if(!isset($_SESSION['login']) ){
								header('location:index.php');
								exit;
								}
					          ?></b>
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="" data-toggle="modal" data-target=".x">Profile</a>
					          <a class="dropdown-item" href="proses/proseslogout.php">Log Out</a>
					        </div>
					      </li>
						
						<div id="logo" class="float-right">
					      <li class="nav-item" id="logoAdmin">
					        <img src="gambar/DISHUB.png" alt="">
					        <img src="gambar/dharmajala.jpg" alt="">
					      </li>
					    </div>
					    </ul>
					  </div>
					</nav>
				</div>
			</div>

<div class="modal fade x" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modalProfile">
    <div class="modal-header" id="close">
        <img src="gambar/close.png" alt="" aria-label="Close" data-dismiss="modal" class="close">
     </div>
    	<div class="row">

   <div class="col-md-4">
  <!-- TAMPIL FOTO -->
    	<?php
	 	$email = $_SESSION['email'];

	    	if($email){ ?>
		    	<img src="gambar/fotoProfile/<?php echo $_SESSION['foto']; ?>" alt="" id="ktk">		
		<?php } ?>
    </div>


    <div class="col-md-8">

    <div class="bungkus">
		<?php
	$email = $_SESSION['email'];
	$data = mysql_query("SELECT * FROM profileadmin WHERE email ='$email'");
	$row = mysql_num_rows($data);
	$cetak = mysql_fetch_array($data);

	if($row == 1){
	?>
	
    			<div class="row">
    				<div class="col-md-4"></div>
    				<div class="col-md-4">
    					<b><h2>Biodata</h2></b>
    				</div>
    				<div class="col-md-4"></div>
    			</div>
    			<form action="">
    				<table class="table">
    					<tr>
    						<td>Nama Lengkap</td>
    						<td><?php echo $cetak[0]?></td>
    					</tr>
    					<tr class="table-warning">
    						<td>Alamat</td>
    						<td><?php echo $cetak[1]?></td>
    					</tr>
    					<tr>
    						<td>Tempat Lahir</td>
    						<td><?php echo $cetak[2]?></td>
    					</tr>
    					<tr class="table-warning">
    						<td>Tanggal Lahir</td>
    						<td><?php echo $cetak[3]?></td>
    					</tr>
    					<tr>
    						<td>Tentang Saya</td>
    						<td><?php echo $cetak[4]?></td>
    					</tr>
    					<tr class="table-warning">
    						<td>Email</td>
    						<td><?php echo $cetak[5]?></td>
    					</tr>
    				</table>
    			</form>	
    			<a href="proses/proseshapusbiodata.php?email=<?php echo $cetak[5]?>" onclick="return konfirm()"><button type="button" class="btn btn-danger">Hapus</button></a>
		      	<a href="admin.php?emai=<?php echo $cetak[5]?>"><button type="button" class="btn btn-success">Update</button></a>

		
	<?php } else { ?>
		
			<img src="gambar/nodata.jpg" alt="" id="dataKosong" width="100%" height="100%">

	<?php } ?>
	</div>
	
    </div>
    </div>
    
     	
    </div>
  </div>
</div>