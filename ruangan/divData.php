<?php 
require_once"../config/config.php";
 




if (isset($_POST['departemen'])) {
    $departemen = $_POST["departemen"];

    $sql = "select * from divisi where id_departemen=$departemen";

    $hasil = mysqli_query($con, $sql);
    $no = 0;
    while ($data = mysqli_fetch_array($hasil)) {
        ?>
        <option value="<?php echo  $data['id_div']; ?>"><?php echo $data['nama_div']; ?></option>
        <?php
    }
}



