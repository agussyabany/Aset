<?php include_once('../header.php'); ?>

<div class="wrapper">
  <div class="content-wrapper" style="min-height: 1235.01px;">
    
<section class="content-header">
      <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                 <h1>Master Barang</h1>
                  </div>
                 <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Master Barang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

    <section class="content">
      <div class="container-fluid" style="margin-left: 350px; margin-top: 100px;" >
        <div class="row">
          <div class="col-md-6">
              <div class="card card-primary">
               <div class="card-header">
                <h3 class="card-title">Edit Data Divisi</h3>
                  </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
                  $id= @$_GET['id'];
                  $sql_divisi= mysqli_query($con,"SELECT * FROM divisi
                                                    INNER JOIN master_departemen ON divisi.id_departemen = master_departemen.id_departemen WHERE id_div='$id' ") or die(mysqli_error($con));
                  $data=mysqli_fetch_array($sql_divisi);


              ?>
              <form method= "post" action="proses.php" class="form-horizontal">
                <input type="hidden" name="id" value="<?=$data['id_div']?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="departemen"  class="col-sm-2 col-form-label" required>Departemen</label>
                     <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">

                        <select name="departemen" id="departemen" class="form-control">
                          <option value="<?=$data['id_departemen']?>" ><?=$data['nama_departemen']?></option>
                          <?php
                                $sql_departemen =mysqli_query($con, "SELECT * FROM master_departemen") or die (mysqli_error($con));
                                while ($data_departemen = mysqli_fetch_array($sql_departemen)) {
                                  echo '<option value="'.$data_departemen['id_departemen'].'">'.$data_departemen['nama_departemen'].'</option>';
            
                          }?>
                        </select>


                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="namabarang" class="col-sm-2 col-form-label">Kode Divisi</label>
                    <div class="col-sm-10">
    <input type="text" name="kode" class="form-control" id="namabarang" placeholder="Nama Barang" autofocus required value="<?=$data['kode_div']?>">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="kodebarang" class="col-sm-2 col-form-label">Nama Divisi</label>
                    <div class="col-sm-10">
                      <input name="divisi" type="text" class="form-control" id="inputPassword3"  required value="<?=$data['nama_div']?>">
                    </div>
                  </div>
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="data.php"  class="btn btn-primary">KEMBALI</a>
                  <button type="submit" class="btn btn-primary float-right" name="edit">SUBMIT</button>
                </div>
                <!-- /.card-footer -->
              </form>
                  </div>
                </div>
              </div>
            </div>
        </section>
    </div>
</div>






<?php include_once('../footer.php'); ?>