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
                <h3 class="card-title">Master SDM</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="proses.php" class="form-horizontal">
                <div class="card-body">

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input name="nama" type="text" class="form-control" id="inputPassword3" placeholder="Nama SDM Pendukung" required>
                    </div>
                  </div>
                  
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label" required>Jabatan</label>
                    <div class="col-sm-6">
                      <!-- select -->

                      <div class="form-group">
                        <select name="jabatan" id="jabatan" class="form-control js-example-basic-single">
                          <option value="1">Menejer</option>
                          <option value="2">Asisten Menejer</option>
                          <option value="2">Staff</option>
                        </select>
                      </div>

                      
                      <div class="form-group">
                        <select name="divdep" id="divdep"  class="form-control js-example-basic-single">

                        </select>
                      </div>

                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" id="status" value="aktiv">
                          <label class="form-check-label">Aktif</label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" id="status" checked="" value="tidak aktiv">
                          <label class="form-check-label">Tidak Aktif</label>
                        </div>

                      </div>
                    </div>
                  </div>
                  
                 
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">KEMBALI</button>
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


<script>

  $("#jabatan").change(function(){
            // variabel dari nilai combo box kendaraan
            var Jabatan = $("#jabatan").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "pilih-data.php",
                data: "jabatan="+Jabatan,
                success: function(data){
                   $("#divdep").html(data);
                }
            });
        });

        // $("#divdep").change(function(){
        //     // variabel dari nilai combo box merk
        //     var DivDep = $("#divdep").val();

        //     // Menggunakan ajax untuk mengirim dan dan menerima data dari server
        //     $.ajax({
        //         type: "POST",
        //         dataType: "html",
        //         url: "pilih-data.php",
        //         data: "divdep="+DivDep,
        //     //     success: function(data){
        //     //         $("#tipe").html(data);
        //     //     }
        //     });
        // });


</script>



<?php include_once('../footer.php'); ?>