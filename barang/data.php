<?php 
include_once('../header.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Master</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Master</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Master Barang</h3>
                
                <div class="float-sm-right">
                <a type="button" class="btn btn-block btn-primary" href="add.php">TAMBAH</a>
                </div>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Golongan</th>
                    <th>Nama</th>
                    <th>Kode</th>
                    <th>Action</th>
                    
                    
                  </tr>
                  </thead>
                  
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </section>
        </div>


 
<script src="../assets/libs/DataTables2/datatables.min.js"></script>
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
        $(document).ready(function() {
              $('#example2').DataTable( {
                  "paging": true,
                  "lengthChange": false,
                  "searching": true,
                  "ordering": true,
                  "info": true,
                  "autoWidth": false,
                  "responsive": true,
                  "processing": true,
                  "serverSide": true,
                  "ajax": "masterBarang_data.php",
                  //scrollY : '250px',
                  dom : 'Bfrtip',
                  buttons : [
                    {
                      extend : 'pdf',
                      orientation: 'potrait',
                      pageSize : 'Legal',
                      title : 'Master Barang',
                      donwnload : 'open'

                  },

                   'csv','excel','print','copy'


                  ],
                  columnDefs : [ 
                    {

                      "searchable" : false,
                      "orderable"  : false,
                      "targets" : 3,
                      "render" : function(data, type, row) {
                         var btn ="<center><a href=\"edit.php?id="+data+"\" class=\"btn btn-warning btn-sm\"><i class=\"fas fa-edit\"></i></a><a href=\"del.php?id="+data+"\" onclick=\"return confirm('Yakin Menghapus Data?')\" class=\"btn btn-sm bg-gradient-danger\"><i class=\"fas fa-trash\"></i></a></center>";
                           return btn;




                      }

                  }


                  ]
    } );
} );  

        </script>





<?php include_once('../footer.php'); ?>