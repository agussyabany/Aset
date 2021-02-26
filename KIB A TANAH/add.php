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
                <h3 class="card-title">KIB A TANAH</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="proses.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Aset</label>
                      <div class="col-sm-6">
                        <div class="form-group">
                          
            
                <select class="form-group" name="namaAset" id="namaAset" onchange="changeValue(this.value)">                  
                    <?php
                          $result = mysqli_query($con,"select * from master_barang where golongan = 'TANAH'");   
                          $jsArray = "var dtMbr = new Array();\n";       
                          while ($row = mysqli_fetch_array($result)) {   
                          echo '<option value="' . $row['id_barang'] . '">' . $row['nama_barang'] . '</option>'; 
                          $jsArray .= "dtMbr['" . $row['id_barang'] . "'] = {kode_barang:'" . addslashes($row['kode_barang']) . "'};\n";   
                        }?>


                </select>
                      <!-- select -->
                     



                
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kode Aset</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode Aset"  required value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Register</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="reg" id="inputPassword3" placeholder="Register" required/>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Letak /  Alamat</label>
                    <div class="col-sm-6">
                <select class="form-group" name="letak" id="letak" onchange="changeValue(this.value)">                  
                      
                    <?php
                          $result = mysqli_query($con,"select * from lokasi");   
                          while ($row = mysqli_fetch_array($result)) {   
                          echo '<option value="' . $row['id_lokasi'] . '">' . $row['alamat'] . '</option>'; 
                           
                        }?>


                </select>

                


                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Penggunaan</label>
                    <div class="col-sm-10">
                      <input type="text" name="guna" class="form-control" id="inputPassword3" placeholder="Penggunaan" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Luas</label>
                    <div class="col-sm-10">
                      <input type="text" name="luas" class="form-control" id="inputPassword3" placeholder="M2" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" required>HAK</label>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <select name="hak" class="form-control">
                          <option>Hak Pakai</option>
                          <option>Hak Pengelolaan</option>
                          
                        </select>
                      </div>
                    </div>
                  </div>


                  <!-- Generate textbox Sertifikat -->
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">SERTIFIKAT</label>
                      <div class="input-group control-group after-add-more col-sm-10">
                        <input type="text" name="addmore[]" class="form-control" placeholder="No Sertifikat">
                        <div class="input-group-btn"> 
                          <a type="button" class="btn btn-success add-more"><i class="fas fa-plus"></i></a>
                        </div>
                     </div>
                   </div>
                  <!-- Generate textbox Sertifikat -->
                 

                <div class="copy hide form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                      <div class=" form-group col-sm-10">
                       <div class="control-group input-group" style="margin-top:10px">
                         <input type="text" name="addmore[]" class="form-control" placeholder="No Sertifkat">
                        <div class="input-group-btn"> 
                      <a class="btn btn-danger remove" type="button"><i class="fas fa-trash-alt"></i></a>
                    </div>
                  </div>
                </div>
              </div>
                  




                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-3">
                      <input type="number" name="tahun" class="form-control" id="inputPassword3" placeholder="Tahun Pengadaan" required>
                    </div>
                  </div>
                  


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" required>Asal Usul</label>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <select name="asal" class="form-control">
                          <option>Pengadaan</option>
                          <option>Bantuan</option>
                          <option>Hibah</option>
                          <option>Penyertaan Modal</option>
                          <option>Serah Kelola</option>
                        </select>
                      </div>
                    </div>

                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" required>Jenis Aset</label>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <select class="form-control" name="jenis">
                          <option>Aset Bergerak</option>
                          <option>Aset Tak Bergerak</option>
                        </select>
                      </div>

                    </div>

                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-6">
                      <input type="text" name="harga" class="form-control" id="inputPassword3" placeholder="Harga" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" name="ket" rows="3" placeholder="Keterangan"></textarea>
                      </div>


                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
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
  $(document).ready(function(){
            
      $("#letak").select2();

           
        });
</script>
 
<script>
  $(document).ready(function () {
  bsCustomFileInput.init();
});
</script>

<script>
        $(document).ready(function(){
            
          $("#namaAset").select2();

           
        });
</script>
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
<script>   
    <?php echo $jsArray; ?> 
    function changeValue(namaAset){ 
    document.getElementById('kode').value = dtMbr[namaAset].kode_barang; 
     
    };
</script>






<?php include_once('../footer.php'); ?>