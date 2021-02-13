<?php 
require_once"../config/config.php";
if(isset($_POST['add'])) {
	//$uuid= uuid::uuid4()->toString();
	$dep = trim(mysqli_real_escape_string($con, $_POST['departemen']));
	$div = trim(mysqli_real_escape_string($con, $_POST['divisi']));
	$ruang = trim(mysqli_real_escape_string($con, $_POST['ruangan']));

	mysqli_query($con,"INSERT INTO ruangan (id_departemen,id_div,ruang) VALUES ('$dep','$div','$ruang')") or die(mysqli_error($con));
	echo" <script>window.location='data.php';</script>";
 

 } 


 else if(isset($_POST['edit'])){
 	$id = trim(mysqli_real_escape_string($con, $_POST['id']));
 	$dep = trim(mysqli_real_escape_string($con, $_POST['departemen']));
	$div = trim(mysqli_real_escape_string($con, $_POST['divisi']));
	$ruang = trim(mysqli_real_escape_string($con, $_POST['ruangan']));
	mysqli_query($con,"UPDATE ruangan SET id_departemen = '$dep', id_div = '$div',ruang = '$ruang' WHERE id_ruang= '$id'") or die(mysqli_error($con));
	
	echo "<script>alert('Data Berhasil Diupadate')</script>;<script>window.location='data.php';</script>";

}



?>