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
   <!-- link css autocomplte -->
   <link rel="stylesheet" href="../assets/css/jquery-ui.custom.min.css">
   <!--  <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="css/styleadmin.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="css/tampilanpegawai.css">
   <link rel="stylesheet" href="css/style.css">
      <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

    <link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
	
	</head>
	<body>
	<style>
	    .gbr img{
        width: 100%;
        height: 300px;
        opacity: .7 !important;
        border: 5px solid black;
        float: left;
        margin-bottom: 30px;
       }
        .gbr img:hover{
        width: 100%;
        height: 300px;
        opacity: 1 !important;
       }
      .wrap{
      	margin-right: 10px;
      }
      .aksi img{
      	width: 30px;
      	height: 30px;
      	margin-top: -27px;
      }
      .isi{
      	margin-bottom: 20px;
      }
      #tambahdata img{
  		width: 40px;
  		height: 40px;
      }
      #tambahdata{
      	text-decoration: none;
      	margin-left: 60px;
      }
      #pagination{
        padding: 5px;
        border: 2px solid black;
        margin: 3px;
        border-radius: 20px;
      }
       #pagination:hover{
        background-color: #DBD3D3;
        color: black;
      }
      #dataKosong{
      width: 250px;
      height: 500px;
      margin-left: 40px;
      margin-top: 20px;
    }
    #de textarea{
      font-size: 14px !important;
    }
	</style>


			<!-- Menu admin -->
  <?php 
  include "bannerAdmin.php";
  
 
   ?>


<div class="row">

 <?php include "menu.php"; ?>

	<div class="col-md-9">
	<a href="" id="tambahdata" data-toggle="modal" data-target="#exampleModal"><img src="gambar/data-add.png" alt="">&nbsp Tambah Foto</a>
			<div class="wrap">
			  <div class="row">

                <?php
                $q = mysql_query("SELECT * FROM gallery");
                $result = mysql_num_rows($q);
                if($result === 0){ ?>
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                      <img src="gambar/datakosong.png" alt="" id="dataKosong">
                    </div>
                    <div class="col-md-4"></div>
                  </div>
    
        	
                 <?php
                }else{
                    $perhalaman = 6;
                    $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1 ;
                    $mulai = ($halaman > 1) ? ($halaman * $perhalaman) - $perhalaman : 0 ; 

                    $artikel = "SELECT * FROM gallery LIMIT $mulai, $perhalaman";
                    $artikel2 = mysql_query($artikel);

                    $semuanya = "SELECT * FROM gallery";
                    $hasil = mysql_query($semuanya);
                    $total = mysql_num_rows($hasil);


                    $pages = ceil($total/$perhalaman);
                  ?>

                    <?php

                    while($row=mysql_fetch_array($artikel2)) { ?>
                      
                <div class="col-md-4 isi">
                	<div class="gbr">
                    <a href="../img/imgGallery/<?php echo $row[1]?>"><img src="../img/imgGallery/<?php echo $row[1]?>" alt="" class="gbr"></a>
                    </div>    

                    <div class="aksi">
                    	<a href="proses/proseshapusgambar.php?idgambar=<?php echo $row[0]?>" onclick="return konfirm()"><img src="gambar/hapus.png" alt=""></a>
                      <a href="" data-toggle="modal" data-target="#<?php echo $row[0]?>"><img src="gambar/update.png" alt=""></a>
                    </div>
                </div>
                  <?php
                    }
                  ?>

                  <!-- modal edit detail -->
            <?php
              $q = mysql_query("SELECT * FROM gallery");
              while($row = mysql_fetch_array($q) ){
              ?>
  

  <!-- modal ubah detail foto gallery -->
              <div class="modal fade" id="<?php echo $row[0]?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="exampleModalLabel">Ubah Detail</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="row">
                      <div class="col-md-12" id="de">
                        <div class="isidet" style="margin: 20px;">
                          <form action="proses/ubahdetail.php" method="post">
                            <div class="form-group">
                              <label>id</label>
                              <input type="text" class="form-control" name="id" readonly="on" value="<?php echo $row[0]?>">
                            </div>
                            <div class="form-group">
                              <label>Detail Foto</label>
                              <textarea class="form-control" name="detail" style="resize: none;" rows="3"><?php echo $row[2]?></textarea>
                            </div>
                            </div>
                            <div class="modal-footer">
                            <a href=""><button type="submit" class="btn btn-primary" name="Ubah">Update</button></a>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div>
               </div>

              <?php } ?>
  				
   		 </div>
	</div>
     <div class="halaman">
           <?php for($i=1; $i<=$pages; $i++){ ?>
          <a href="?halaman=<?php echo $i?>" id="pagination"><?php echo $i?></a>-
           <?php } }?>
     </div>

		
	</div>

</div>

<!-- Modal INPUT -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="proses/inputgambar.php" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="exampleFormControlFile1">Upload Foto</label>
		    <input type="file" class="form-control-file" id="fileGambar" name="filegambar" required>
      </div>
      <div class="form-group">
        <label>Detail Foto</label>
        <textarea class="form-control" name="detail" style="resize: none;" rows="3"></textarea>
      </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="simpan">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>



    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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
	<script src="js/hapus.js"></script>
	</body>
</html>