<?php 
require_once"../config/config.php";

mysqli_query($con,"DELETE FROM ruangan WHERE id_ruang = '$_GET[id]'") or die(mysqli_error($con));
echo" <script>window.location='data.php';</script>";

?>