<?php 
require_once"../config/config.php";
require"../assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
	$uuid= uuid::uuid4()->toString();
	$namaAset = trim(mysqli_real_escape_string($con, $_POST['namaAset']));
	$kodAset = trim(mysqli_real_escape_string($con, $_POST['kode']));
	$reg = trim(mysqli_real_escape_string($con, $_POST['reg']));
	$letak = trim(mysqli_real_escape_string($con, $_POST['letak']));
	$guna = trim(mysqli_real_escape_string($con, $_POST['guna']));
	$luas = trim(mysqli_real_escape_string($con, $_POST['luas']));
	$hak = trim(mysqli_real_escape_string($con, $_POST['hak']));
	
	//$sertifikat = trim(mysqli_real_escape_string($con, $_POST['kode']));
	$tahun = trim(mysqli_real_escape_string($con, $_POST['tahun']));
	$asal = trim(mysqli_real_escape_string($con, $_POST['asal']));
	$jenis = trim(mysqli_real_escape_string($con, $_POST['jenis']));
	$harga = trim(mysqli_real_escape_string($con, $_POST['harga']));
	$ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
	//$file = trim(mysqli_real_escape_string($con, $_POST['file']));

			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../img/'.$nama);
					$query = mysqli_query($con,"INSERT INTO kiba (id_kibA,id_barang,kode_aset,reg,id_lokasi,guna,luas,hak,tahun,asal,jenis,harga,ket,file) VALUES ('$uuid','$namaAset','$kodAset','$reg','$letak','$guna','$luas','$hak','$tahun','$asal','$jenis','$harga','$ket','$nama')") or die(mysqli_error($con));
					if($query){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}

	

	$input = $_POST['addmore'];
	foreach ($input as $output) {
    mysqli_query($con,"INSERT into sertifikat (id_kibA,no_sertifikat) Values('$uuid','$output')");
}
	echo" <script>window.location='data.php';</script>";
 

 } 

//  else if(isset($_POST['edit'])){
// 	for ($i=0; $i<count($_POST['id']) ; $i++) {
// 	$id = $_POST['id'][$i];
// 	$nama = $_POST['nama'][$i];
// 	$kode = $_POST['kode'][$i];
// 	mysqli_query($con,"UPDATE master_departemen SET nama_departemen = '$nama', kode_departemen = '$kode' WHERE id_departemen= '$id'") or die(mysqli_error($con));
// 	}
// 	echo "<script>alert('Data Berhasil Diupadate')</script>;<script>window.location='data.php';</script>";

// }



?>