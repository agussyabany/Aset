<?php include_once('../header.php'); ?>

<div class="content-wrapper" style="margin-top: 100px;">
			<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DATA MASTER DEPARTEMENT</h3>
                 <div class="float-sm-right">
                             <a href="add.php" type="button" class="btn btn-block btn-primary">TAMBAH</a>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  
                    <div class="row">
                      <div class="col-sm-12">

            <form method="post" name="proses"> 
                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed">
                  <thead>

              <tr>
                  	<th>NO</th>
                  	<th>KODE DEPARTEMEN</th>
                  	<th>NAMA DEPARTEMENT</th>
                  	<th>
                        <center>
                          <input type="checkbox"  id="select_all" value="">
                        </center>
                    </th>
                  	
              </tr>
                  </thead>
               
               <tbody>
                
                <?php
                        $no = 1;
                        $sql_departemen = mysqli_query($con,"SELECT * FROM master_departemen ORDER BY nama_departemen ASC") or die (mysqli_error($con));
                        if(mysqli_num_rows($sql_departemen) > 0){ 
                          while ($data = mysqli_fetch_array($sql_departemen))  { ?>

                  <tr>
                    <td><?=$no++?></td>
                    <td><?=$data['kode_departemen']?></td>
                    <td><?=$data['nama_departemen']?></td>
                    <td align="center">
                      <input type="checkbox" name="checked[]"  class="check" value="<?=$data['id_departemen']?>">
                    </td>
                  </tr>
                  <?php

                    }

                  } else {
                        echo "<tr><td colspan= \"4\" align= \"center\">DATA TIDAK DITEMUKAN</td></tr>";
                  }

                  ?>

              </tbody>
                  
          </table>
              </div>

      </form>
            </div>
               
                <div class="float-sm-right">
                    <button onclick="edit()" style="" class="btn btn-block btn-warning" style="margin-right: 5px;"><i class="fas fa-edit"></i></button>
                </div>
               
                
                 <div class="float-sm-right " style="margin-right: 5px;">
                    <button onclick="hapus()" style="margin-right: 5px;" type="button" class="btn btn-block btn-danger"><i class="fas fa-trash"></i></button>
                </div>
              

               
          </div>



              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
							     </div>

<script>
  $(document).ready(function() {
    $('#select_all').on('click', function() {
    if(this.checked) {
      $('.check').each(function() {
      this.checked = true;
    })
  } else {
    $('.check').each(function() {
      this.checked = false;
    })
    }
  });

  $('.check').on('click', function() {
    if($('.check:checked').lenght == $('.check').lenght) {
      $('#select_all').prop('checked', true)
    } else {
      $('#select_all').prop('checked', false)
    }
  })

})

  function edit() {
    document.proses.action = 'edit.php';
    document.proses.submit();
  }

  function hapus() {
    var conf = confirm('ANDA YAKIN MENGHAPUS DATA?');
    if(conf) {
      document.proses.action = 'del.php';
      document.proses.submit();
    }
    
  }
</script>




<?php include_once('../footer.php'); ?>