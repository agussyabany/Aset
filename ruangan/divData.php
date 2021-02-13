<?php include_once('../header.php'); ?>





<?php if (isset($_POST["departemen"])) {
	$departemen = $POST["departemen"];

	$sql = "SELECT * FROM master_departemen WHERE id_departemen='$departemen' ";

	$hasil = mysqli_query($con,$sql) or die (mysqli_error($con));
	while($data = mysqli_fetch_array($hasil)) {
		?>
		<option value="<?php echo $data['id_departemen']?>"><?php echo $data['nama_departemen']; ?></option>
		<?php
	}
}
if (isset($_POST["divisi"])) {
    $div = $_POST["divisi"];

    $sql = "SELECT * FROM divisi
              INNER JOIN master_departemen ON divisi.id_departemen = master_departemen.id_departemen where id_div='$div'";
    $hasil = mysqli_query($con, $sql) or die (mysqli_error($con));
    while ($data = mysqli_fetch_array($hasil)) {
        ?>
        <option value="<?php echo  $data['id_div']; ?>"><?php echo $data['nama_div']; ?></option>
        <?php
    }
}

?>



























<?php include_once('../footer.php'); ?>