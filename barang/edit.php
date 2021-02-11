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
                <h3 class="card-title">Edit Master Barang</h3>
                  </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
                  $id= @$_GET['id'];
                  $sql_pasien= mysqli_query($con,"SELECT * FROM master_barang WHERE id_barang='$id' ") or die(mysqli_error($con));
                  $data=mysqli_fetch_array($sql_pasien);


              ?>
              <form method= "post" action="proses.php" class="form-horizontal">
                <input type="hidden" name="id" value="<?=$data['id_barang']?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="golongan"  class="col-sm-2 col-form-label" required>Golongan</label>
                     <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <select name="golongan" id="golongan" class="form-control">
                          <option><?=$data['golongan']?></option>
                          <option>TANAH</option>
                          <option>PERALATAN DAN MESIN</option>
                          <option>GEDUNG DAN BANGUNAN</option>
                          <option>JALAN,IRIGASI DAN JARINGAN</option>
                          <option>ASET TETAP LAINYA</option>
                          <option>KONSTRUKSI DALAM PENGERJAAN</option>
                          <option>ALAT KANTOR</option>
                          <option>RUMAH TANGGA</option>
                          <option>GUDANG(aksesoris,pipa)</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="namabarang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
    <input type="text" name="namabarang" class="form-control" id="namabarang" placeholder="Nama Barang" autofocus required value="<?=$data['nama_barang']?>">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="kodebarang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                      <input name="kodebarang" type="text" class="form-control" id="inputPassword3" placeholder="Kode Barang" required value="<?=$data['kode_barang']?>">
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