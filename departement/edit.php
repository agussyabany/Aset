<?php 
$chk = $_POST['checked'];
if(!isset($chk)) {
	echo "<script>alert('Tidak Ada data yang dipilih'); window.location='data.php';</script>";
}else {


include_once('../header.php'); ?>
<div class="content-wrapper" style="margin-top: 100px;">
	<section class="content">
		<div class="container-fluid">
			<div class="row">
          <div class="col-12">
            <div class="card-header">
                <h3 class="card-title">EDIT MASTER DEPARTEMENT</h3>
                 <div class="float-sm-right">
                    <a href="data.php" type="button" class="btn btn-block btn-primary">KEMBALI</a>
                </div>

              </div>	
		
	
	<div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  
                    <div class="row">
                      <div class="col-sm-12">
		
			<form action="proses.php" method="post">
				<input type="hidden" name="total" value="<?=@$_POST['count-add']?>">	
				<table class="table">
					<tr>
						<th>#</th>
						<th>Nama Departement</th>
						<th>Kode</th>
					</tr>
					<?php
					$no = 1;
					foreach ($chk as $id) {
						$sql_departemen = mysqli_query($con, "SELECT * FROM master_departemen WHERE id_departemen = '$id'") or die(mysqli_error());
						while ($data  =mysqli_fetch_array($sql_departemen)) { ?>
					<tr>
					 	<td><?=$no++?></td>
					 	<td>
					 		<input type="hidden" name="id[]" value="<?=$data['id_departemen']?>">
					 		<input type="text" name="nama[]" value="<?=$data['nama_departemen']?>" class="form-control" required>
					 	</td>
					 	<td>
					 		<input type="text" name="kode[]" value="<?=$data['kode_departemen']?>" class="form-control" required>
					 	</td>

					 </tr>
					 <?php
						}
					}


					?>
				</table>
				<div class="float-sm-right">
					<input type="submit" name="edit" value="Simpan Semua" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>
</div>
			
		</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	</section>
	</div>







<?php 
include_once('../footer.php');
}

 ?>