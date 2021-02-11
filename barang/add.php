<?php include_once('../header.php'); ?>

<div class="wrapper">
  <div class="content-wrapper" style="min-height: 1235.01px;">
    
<section class="content-header">
      <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                 <h1>General Form</h1>
                  </div>
                 <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
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
                <h3 class="card-title">Master Barang</h3>
                  </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method= "post" action="proses.php" class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="golongan"  class="col-sm-2 col-form-label" required>Golongan</label>
                     <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <select name="golongan" id="golongan" class="form-control">
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
                      <input type="text" name="namabarang" class="form-control" id="namabarang" placeholder="Nama Barang" autofocus required>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="kodebarang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                      <input name="kodebarang" type="text" class="form-control" id="inputPassword3" placeholder="Kode Barang" required>
                    </div>
                  </div>
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="data.php"  class="btn btn-primary">KEMBALI</a>
                  <button type="submit" class="btn btn-primary float-right" name="add">SUBMIT</button>
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