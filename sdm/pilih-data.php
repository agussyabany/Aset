<?php
require_once"../config/config.php";


if (isset($_POST['jabatan'])) {
    $jabatan = $_POST["jabatan"];

    $sql = "select * from jabatan where role = $jabatan";
    $hasil = mysqli_query($con, $sql);
    $no = 0;
    while ($data = mysqli_fetch_array($hasil)) {
        ?>
        <option value="<?php echo  $data['role'];?>"><?php echo $data['divDep'];?></option>
        <?php
    }
}


?>