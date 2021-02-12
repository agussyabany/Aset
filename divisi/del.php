<?php 
require_once"../config/config.php";

mysqli_query($con,"DELETE FROM divisi WHERE id_div = '$_GET[id]'") or die(mysqli_error($con));
echo" <script>window.location='data.php';</script>";

?>