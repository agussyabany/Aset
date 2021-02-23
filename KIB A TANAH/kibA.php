<!-- <?php 
require_once"../config/config.php";
 




if (isset($_POST['namaAset'])) {//id barang masuk
    $namaAset = $_POST["namaAset"];
    $golongan = $_POST["TANAH"]

    $sql = "select * from master_barang where id_barang=$namaAset and golongan =$golongan";

    $hasil = mysqli_query($con, $sql);
    $no = 0;
    while ($data = mysqli_fetch_array($hasil)) {
        ?><input type="text" value="<?php echo  $data['kode_barang']; ?>">
        
        <?php
    }
} -->