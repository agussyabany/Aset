<?php 
require_once"../config/config.php";

mysqli_query($con,"DELETE FROM master_barang WHERE id_barang = '$_GET[id]'") or die(mysqli_error($con));
echo" <script>window.location='data.php';</script>";

?>