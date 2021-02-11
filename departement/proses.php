<?php 
require_once"../config/config.php";
//require"../_assets/libs/vendor/autoload.php";

//use Ramsey\Uuid\Uuid;
//use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
//$uuid4 = Uuid::uuid4();
//echo $uuid4->toString();

if(isset($_POST['add'])) {
	//$uuid= uuid::uuid4()->toString();
	$kode = trim(mysqli_real_escape_string($con, $_POST['kode']));
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	mysqli_query($con,"INSERT INTO master_departemen (kode_departemen,nama_departemen) VALUES ('$kode','$nama')") or die(mysqli_error($con));
	echo" <script>window.location='data.php';</script>";
 } else if(isset($_POST['edit'])){
	for ($i=0; $i<count($_POST['id']) ; $i++) {
	$id = $_POST['id'][$i];
	$nama = $_POST['nama'][$i];
	$kode = $_POST['kode'][$i];
	mysqli_query($con,"UPDATE master_departemen SET nama_departemen = '$nama', kode_departemen = '$kode' WHERE id_departemen= '$id'") or die(mysqli_error($con));
	}
	echo "<script>alert('Data Berhasil Diupadate')</script>;<script>window.location='data.php';</script>";

}



?>