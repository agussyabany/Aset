<?php 
require_once"../config/config.php";
if(isset($_POST['add'])) {
	//$uuid= uuid::uuid4()->toString();
	$lokasi = trim(mysqli_real_escape_string($con, $_POST['lokasi']));
	$alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
	$longitude = trim(mysqli_real_escape_string($con, $_POST['longitude']));
	$latitude = trim(mysqli_real_escape_string($con, $_POST['latitude']));

	mysqli_query($con,"INSERT INTO lokasi (lokasi,alamat,latitude,longitude) VALUES ('$lokasi','$alamat','$latitude','$longitude')") or die(mysqli_error($con));
	echo" <script>window.location='data.php';</script>";
 

 } else if(isset($_POST['edit'])){
 	$id = trim(mysqli_real_escape_string($con, $_POST['id']));
 	$lokasi = trim(mysqli_real_escape_string($con, $_POST['lokasi']));
	$alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
	$longitude = trim(mysqli_real_escape_string($con, $_POST['longitude']));
	$latitude = trim(mysqli_real_escape_string($con, $_POST['latitude']));
	mysqli_query($con,"UPDATE lokasi SET lokasi = '$lokasi', alamat = '$alamat',longitude = '$longitude',latitude = '$latitude' WHERE id_lokasi = '$id'") or die(mysqli_error($con));
	
	echo "<script>alert('Data Berhasil Diupadate')</script>;<script>window.location='data.php';</script>";

}