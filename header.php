<?php
require_once"config/config.php";
require"assets/libs/vendor/autoload.php"; 
if(!isset($_SESSION['user'])) {
  echo "<script>window.location='".base_url('auth/login.php')."';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>siASET | PERUMDAMTK</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" >
  <link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
  
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <script src="../assets/js/jquery-3.4.1.min.js"></script>
   <script src="../assets/js/3463b090afc66f573d74febe0935c1f6.js"></script>
   
   

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-primary navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
     
    </ul>

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../assets/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">siASET</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/amel.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$_SESSION['user'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('dashboard')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Infografis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Geografis</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               MASTER DATA
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('barang')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('departement')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Departemen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('divisi')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Divisi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('ruangan')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Ruangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('sdm')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master SDM Pendukung</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('laveransir')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Lokasi</p>
                </a>
              </li>
              
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                DATA ASET
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <!--<i class="nav-icon fas fa-angle-left"></i>-->
                  <p>Entri Data Aset
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?=base_url('KIB A TANAH')?>" class="nav-link">
                          <i class="far fa-angle-left"></i>
                          <p>KIB A TANAH</p>
                    </a>
               </li>
               <li class="nav-item">
                    <a href="<?=base_url('KIB B PERALATAN DAN MESIN')?>" class="nav-link">
                          <i class="far fa-angle-left"></i>
                          <p>KIB B PERALATAN MESIN</p>
                    </a>
               </li>
               <li class="nav-item">
                    <a href="<?=base_url('KIB C GEDUNG DAN BANGUNAN')?>" class="nav-link">
                          <i class="far fa-angle-left"></i>
                          <p>KIB C Gedung Dan Bangunan</p>
                    </a>
               </li>
               <li class="nav-item">
                    <a href="<?=base_url('KIB D IRIGASI DAN JARINGAN')?>" class="nav-link">
                          <i class="far fa-angle-left"></i>
                          <p>KIB D Jalan Irigasi Jaringan</p>
                    </a>
               </li>
               <li class="nav-item">
                    <a href="<?=base_url('KIB E ASET TETAP LAINYA')?>" class="nav-link">
                          <i class="far fa-angle-left"></i>
                          <p>KIB E Aset Tetap Lainya</p>
                        </a>
               </li>
               <li class="nav-item">
                    <a href="<?=base_url('KIB F KONSTRUKSI DALAM PENGERJAAN')?>" class="nav-link">
                          <i class="far fa-angle-left"></i>
                          <p>KIB F Konstruksi Dalam Pengerjaan</p>
                        </a>
               </li>
               
               <li class="nav-item">
                    <a href="<?=base_url('KIR')?>" class="nav-link">
                          <i class="far fa-angle-left"></i>
                          <p>KIR</p>
                        </a>
               </li>

                </ul>
              </li>




              <li class="nav-item">
                <a href="#" class="nav-link">
                  <!--<i class="nav-icon fas fa-angle-left"></i>-->
                  <p>View Data Aset
                  <i class="right fas fa-angle-left"></i></p>
                </a>


                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                          <i class="far fa-angle-left"></i>
                          <p>KIB</p>
                        </a>
               </li>

               <li class="nav-item">
                    <a href="#" class="nav-link">
                          <i class="far fa-angle-left"></i>
                          <p>KIR</p>
                        </a>
               </li>
                </ul>



              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penghapusan Aset</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penyusutan Aset</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mutasi Aset</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table "></i>
              <p>
               PENGADAAN BARANG
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entri Data PENGADAAN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Data Pengadaan</p>
                </a>
              </li>
              
              
              
              
              
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                LAPORAN
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Penyusutan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>laporan Penghapusan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Pengadaan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                UTILITAS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-star  nav-icon"></i>
                  <p>Stiker Barang</p>
                </a>
              </li>
              
              
            </ul>
          </li>
         

          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-edit"></i>
              <p>
                PENGATURAN
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengguna</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengguna Tercatat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('auth/logout.php')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>LOGOUT</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                
              </li>
              <li class="nav-item">
                
              </li>
             
              
              
              
              
              
              
              
              
            </ul>
          </li>
          
          
          
          
          <li class="nav-item has-treeview">
            
            <ul class="nav nav-treeview">
              
              <li class="nav-item has-treeview">
                
                <ul class="nav nav-treeview">
                  
                  
                 
                </ul>
              </li>
              
            </ul>
          </li>
          
         
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
