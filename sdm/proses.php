<?php 
require_once"../config/config.php";
require"../assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
//$uuid4 = Uuid::uuid4();
//echo $uuid4->toString();

if(isset($_POST['add'])) {
	//$uuid= uuid::uuid4()->toString();
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$jabatan = trim(mysqli_real_escape_string($con, $_POST['jabatan']));
	$bagian = trim(mysqli_real_escape_string($con, $_POST['divdep']));
	$status = trim(mysqli_real_escape_string($con, $_POST['status']));
	mysqli_query($con,"INSERT INTO sdm (nama, id_jabatan,bagian,status) VALUES ('$nama','$jabatan','$bagian','$status')") or die(mysqli_error($con));
	echo"<script>window.location='data.php';</script>";
} else if(isset($_POST['edit'])){
 	$id = trim(mysqli_real_escape_string($con, $_POST['id']));
 	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
 	$jabatan = trim(mysqli_real_escape_string($con, $_POST['jabatan']));
	$bagian = trim(mysqli_real_escape_string($con, $_POST['divdep']));
	$status = trim(mysqli_real_escape_string($con, $_POST['status']));
	mysqli_query($con,"UPDATE sdm SET nama = '$nama', id_jabatan = '$jabatan',bagian = '$bagian',status = '$status' WHERE id_sdm= '$id'") or die(mysqli_error($con));
	
	echo "<script>alert('Data Berhasil Diupadate')</script>;<script>window.location='data.php';</script>";
}