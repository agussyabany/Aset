<?php 
require_once"../config/config.php";

$chk = $_POST['checked'];
if(!isset($chk)) {
	echo "<script>alert('Tidak Ada data yang dipilih'); window.location='data.php';</script>";
}else{
	foreach ($chk as $id ) {
		
	$sql = mysqli_query($con,"DELETE FROM master_departemen WHERE id_departemen = '$id'") or die (mysqli_error($con));
	
  }

  if($sql) {
		echo "<script>alert('".count($chk)." data berhasil dihapus');</script>;<script>window.location='data.php';</script>";
	} else {
		echo "<script>alert('Gagal hapus data, coba lagi'); <script>window.location='data.php';</script>";

	}	


}
?>