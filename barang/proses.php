<?php 
require_once"../config/config.php";
//require"../_assets/libs/vendor/autoload.php";

//use Ramsey\Uuid\Uuid;
//use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
//$uuid4 = Uuid::uuid4();
//echo $uuid4->toString();

if(isset($_POST['add'])) {
	//$uuid= uuid::uuid4()->toString();
	$golongan = trim(mysqli_real_escape_string($con, $_POST['golongan']));
	$namabarang = trim(mysqli_real_escape_string($con, $_POST['namabarang']));
	$kodebarang = trim(mysqli_real_escape_string($con, $_POST['kodebarang']));
	mysqli_query($con,"INSERT INTO master_barang (golongan, nama_barang, kode_barang) VALUES ('$golongan','$namabarang','$kodebarang')") or die(mysqli_error($con));
	echo" <script>window.location='data.php';</script>";
} else if(isset($_POST['edit'])){
	$id = $_POST['id'];
	$golongan = trim(mysqli_real_escape_string($con, $_POST['golongan']));
	$namabarang = trim(mysqli_real_escape_string($con, $_POST['namabarang']));
	$kodebarang = trim(mysqli_real_escape_string($con, $_POST['kodebarang']));
	mysqli_query($con,"UPDATE  master_barang SET  golongan = '$golongan', nama_barang = '$namabarang',kode_barang = '$kodebarang' WHERE id_barang = '$id'") or die(mysqli_error($con));
	echo" <script>window.location='data.php';</script>";

}

?>