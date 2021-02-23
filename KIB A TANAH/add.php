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
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" required>Nama Aset</label>
                    <div class="col-sm-6">
                      <div class="form-group">
                          
            
                <select class="form-control select2bs4 select2" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true" name="namaAset" id="namaAset" onchange="changeValue(this.value)">                  
                      
                    <option selected="selected" data-select2-id="27">Alabama</option>
                    <option data-select2-id="74">Alaska</option>
                    <option disabled="disabled" data-select2-id="75">California (disabled)</option>
                    <option data-select2-id="76">Delaware</option>
                    <option data-select2-id="77">Tennessee</option>
                    <option data-select2-id="78">Texas</option>
                    <option data-select2-id="79">Washington</option>


                </select>
    
          <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="10" style="width: 100%;">
          <span class="selection">
          <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-vvsj-container">
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
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Register" required/>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Letak /  Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Letak/Alamat" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Penggunaan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Penggunaan" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Luas</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="M2" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" required>HAK</label>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>

                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" required>Asal Usul</label>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>

                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-3">
                      <input type="number" class="form-control" id="inputPassword3" placeholder="Tahun Pengadaan" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" required>HAK</label>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" required>Jenis Aset</label>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Harga" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Langitude</label>
                        <input type="text" class="form-control" id="inputPassword3" placeholder="0000000,00" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label type=>Latitude</label>
                        <input type="text" class="form-control" id="inputPassword3" placeholder="-0.000000,000" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
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
                  <button type="submit" class="btn btn-primary float-right">SUBMIT</button>
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

$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  }) 
</script>


<script>   
    <?php echo $jsArray; ?> 
    function changeValue(namaAset){ 
    document.getElementById('kode').value = dtMbr[namaAset].kode_barang; 
     
    };
</script>





<?php include_once('../footer.php'); ?>