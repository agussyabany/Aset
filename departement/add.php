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
                <h3 class="card-title">Master Departement</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="proses.php" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                      <input type="text" name="kode" class="form-control" id="kode" placeholder="Kode" autofocus required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Departement</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" id="inputPassword3" placeholder="Departement" required>
                    </div>
                  </div>
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="data.php" type="button" class="btn btn-primary"><i>KEMBALI</i></a>
                  <button type="submit" name="add" class="btn btn-primary float-right">SUBMIT</button>
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
</div>






<?php include_once('../footer.php'); ?>