<style>
.statistik{
	margin: 20px 20px 20px 30px;
	font-size: 13px;
}
.statistik h3{
	font-weight: bold;
}
.menu a{
	margin-left: 30px;
}
.statistik img{
  background-color: black;
  padding: 2px;
  border: 1px solid white;
  color: white;
}
</style>
	<div class="col-md-3">
					<div class="menu">
						<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						  <a class="nav-link" href="publik.php">Kelola Layanan Publik</a>
						  <a class="nav-link" href="admin.php">Kelola Admin</a>
						  <a class="nav-link" href="beranda.php">Kelola Beranda</a>
						  <a class="nav-link" href="profile.php">Kelola Profile</a>
						  <a class="nav-link" href="komentar.php">Kotak Komentar</a>
						  <a class="nav-link" href="gallery.php">Kelola Gallery</a>
						  <?php
						  if($_SESSION['level'] == 1){ ?>
						  	 <a class="nav-link" href="pegawai.php">Kelola Data Pegawai</a>
						  <?php
						  }
						  ?>
						</div>
					</div>

					<div class="statistik">
						<?php include "../statistik.php"; ?>
					</div>
				</div>