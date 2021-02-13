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

                

                <h3 class="card-title">Master Divisi</h3>
                
                
                <div class="float-sm-right">
                      <a type="button" class="btn btn-block btn-primary" href="add.php">TAMBAH</a>
                </div>

                <form  action="" method="post" class="form-inline ml-3">
                    <div class="input-group input-group-sm float-right" style="margin-left: 5px;">
                      <input  name="pencarian" class="form-control form-control-navbar" type="text" placeholder="Search" aria-label="Search">
                      <div class="input-group-append">
                        <button class="btn btn-default" type="submit">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>No</th>
                    <th>Kode Divisi</th>
                    <th>Nama Divisi</th>
                    <th>Nama departemen</th>
                    <th><i class ="glyphicon glyphicon-cog"></i></th>
                    
                    
                    
                  </tr>
                  </thead>
                  <tbody>
        <?php
        $batas = 10;
        $hal = @$_GET['hal'];
        if(empty($hal)){
          $posisi = 0;
          $hal =1;
        } else {
          $posisi = ($hal - 1) * $batas;
        }
        $no=1;
        if($_SERVER['REQUEST_METHOD'] == "POST") {
          $pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
          if($pencarian !='') {
            $sql = "SELECT * FROM divisi
              INNER JOIN master_departemen ON divisi.id_departemen = master_departemen.id_departemen";
            $query = $sql;
            $queryJml = $sql;
          } else {
            $query = "SELECT * FROM divisi
              INNER JOIN master_departemen ON divisi.id_departemen = master_departemen.id_departemen LIMIT $posisi,$batas";
            $queryJml ="SELECT * FROM divisi
              INNER JOIN master_departemen ON divisi.id_departemen = master_departemen.id_departemen";
            $no = $posisi + 1;
          }
        } else {
          $query = "SELECT * FROM divisi
              INNER JOIN master_departemen ON divisi.id_departemen = master_departemen.id_departemen LIMIT $posisi,$batas";
          $queryJml ="SELECT * FROM divisi
              INNER JOIN master_departemen ON divisi.id_departemen = master_departemen.id_departemen";
          $no = $posisi + 1;

        }
        
        $sql_divisi=mysqli_query($con, $query)or die (mysqli_error($con));
        if(mysqli_num_rows($sql_divisi)> 0) {
          while($data = mysqli_fetch_array($sql_divisi)){?>
            <tr>
              <td><?=$no++?></td>
              <td><?=$data['kode_div']?></td>
              <td><?=$data['nama_div']?></td>
               <td><?=$data['nama_departemen']?></td>
              <td class="text-center">
                <a href="edit.php?id=<?=$data['id_div']?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                <a href="del.php?id=<?=$data['id_div']?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-sm bg-gradient-danger"><i class="fas fa-trash"></i></a>
                
              </td>

              
            </tr>
            <?php
          }

        }else {
          echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
        }



        ?>

      </tbody>

                  
                </table>
                <?php 
  if (@$_POST['pencarian']  =='') { ?>
    <div style="float:left;">
      <?php
    $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
    echo "JUMLAH DATA : <b>$jml</b>";
    ?>
    </div>
  
    
      <div class="pagination"  style="float:right;">
      <ul class="pagination" style="margin:0">
        <?php
        $jml_hal = ceil($jml / $batas);
        for ($i=1; $i <= $jml_hal; $i++) { 
          if($i !=$hal) {
            echo "<li><a href=\"?hal=$i\">$i</a></li>";
          } else {
            echo "<li class =\"active\"><a>$i</a></li>";
          }
        }
        ?>
        
      </ul>

      
    </div>
    <?php
  }else{
    echo "<div style=\"float:left;\">";
    $jml=mysqli_num_rows(mysqli_query($con,$queryJml));
    echo"DATA HASIL PENCARIAN : <b>$jml</b>";
    echo "</div>";
  }
  ?>
              </div>
              
            </div>
          </section>
        </div>


 





<?php include_once('../footer.php'); ?>