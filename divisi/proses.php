<?php 
require_once"../config/config.php";
require"../assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
//$uuid4 = Uuid::uuid4();
//echo $uuid4->toString();

if(isset($_POST['add'])) {
	$idDep = trim(mysqli_real_escape_string($con, $_POST['departemen']));
	$kodeDiv = trim(mysqli_real_escape_string($con, $_POST['kode']));
	$namaDiv = trim(mysqli_real_escape_string($con, $_POST['divisi']));
	

	mysqli_query($con,"INSERT INTO divisi (id_departemen,kode_div,nama_div) VALUES ('$idDep','$kodeDiv','$namaDiv')") or die(mysqli_error($con));
       echo"<script>window.location='data.php';</script>";
	


	}else if (isset($_POST['edit'])) {
	$idDiv = trim(mysqli_escape_string($con,$_POST['id']));
	$namDep = trim(mysqli_real_escape_string($con,$_POST['departemen']));
	$kodeDiv = trim(mysqli_escape_string($con,$_POST['kode']));
	$namaDiv = trim(mysqli_escape_string($con,$_POST['divisi']));

	mysqli_query($con,"UPDATE divisi SET id_departemen = '$namDep', kode_div = '$kodeDiv', nama_div = '$namaDiv' WHERE id_div = '$idDiv'  ") or die (mysql_error($con));
	echo"<script>window.location='data.php';</script>";

}


?>