<?php
include "../../koneksi.php";
?>
<script>
	  function konfirm(){
      tanya = confirm('Anda yakin ingin menghapus gambar ini ?');
      if (tanya == true) return true;
      else return false;
    }
</script>

<?php
$hapus = mysql_query("DELETE FROM gallery WHERE id_gambar='$_GET[idgambar]'");
if($hapus){
	echo "<script>alert('Data berhasil dihapus !!!')</script>";
	echo "<script>window.location.href='../gallery.php'</script>";
}else{
	echo "<script>alert('Data gagal dihapus !!!')</script>";
	echo "<script>window.location.href='../gallery.php'</script>";
}
?>