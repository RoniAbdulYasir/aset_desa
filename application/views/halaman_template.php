<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aset Desa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url()?>assets/index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
   <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>-->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <img src="assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Roni Abdul Yasir - Administrator
                  <small>Pemerintah Desa Keden - Kecamatan Kalijambe</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="float-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="float-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>assets/index3.html" class="brand-link">
      <img src="<?=base_url()?>assets/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Aset Desa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
          <li class="nav-item" >
            <a href="<?=site_url('dashboard')?>" <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class=" nav-link active"' : 'class="nav-link"'?>>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?=site_url('inventarisasi_aset_desa')?>" <?=$this->uri->segment(1) == 'inventarisasi_aset_desa'  ? 'class=" nav-link active"' : 'class="nav-link"'?>>
            <i class="nav-icon fas fa-pen-square"></i>
              <p>
                Pendataan Aset Desa
              </p>
            </a>
            
              <li class="nav-item">
                <a href="<?=site_url('riwayat_aset_desa')?>" <?=$this->uri->segment(1) == 'riwayat_aset_desa' ? 'class=" nav-link active"' : 'class="nav-link"'?>>
                <i class="nav-icon fas fa-history"></i>
                  <p>Riwayat Aset Desa</p>
                </a>
              </li>

              <li class="nav-item ">
            <a href="<?=site_url('laporan_aset_desa')?>" <?=$this->uri->segment(1) == 'laporan_aset_desa'  ? 'class=" nav-link active"' : 'class="nav-link"'?>>
            <i class="nav-icon far fa-file"></i>
              <p>
                Laporan Aset Desa
               </p>
            </a>
          </li>
            
          </li>
          <li <?=$this->uri->segment(1) == 'kecamatan' || $this->uri->segment(1) == 'desa'  ? 'class="nav-item has-treeview menu-open"' : 'class="nav-item has-treeview"'?>>
            <a href="#" <?=$this->uri->segment(1) == 'kecamatan' || $this->uri->segment(1) == 'desa'  ? 'class="nav-link active"' : 'class="nav-link"'?>>
            <i class="nav-icon fas fa-database"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('kecamatan')?>" <?=$this->uri->segment(1) == 'kecamatan'  ? 'class=" nav-link active"' : 'class="nav-link"'?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kecamatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('desa')?>" <?=$this->uri->segment(1) == 'desa'  ? 'class=" nav-link active"' : 'class="nav-link"'?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Desa</p>
                </a>
              </li>
            </ul>
          </li>
          <!--Master Barang -->
          <li <?=$this->uri->segment(1) == 'golongan' || $this->uri->segment(1) == 'bidang' || $this->uri->segment(1) == 'kelompok' || $this->uri->segment(1) == 'sub_kelompok' ? 'class="nav-item has-treeview menu-open"' : 'class="nav-item has-treeview"'?>>
            <a href="#" <?=$this->uri->segment(1) == 'golongan' || $this->uri->segment(1) == 'bidang' || $this->uri->segment(1) == 'kelompok' || $this->uri->segment(1) == 'sub_kelompok' ? 'class=" nav-link active"' : 'class="nav-link"'?>>
            <i class="nav-icon fas fa-database"></i>
              <p>
                Master Kode Barang
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('golongan')?>"  <?=$this->uri->segment(1) == 'golongan'  ? 'class=" nav-link active"' : 'class="nav-link"'?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Golongan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('bidang')?>" <?=$this->uri->segment(1) == 'bidang'  ? 'class=" nav-link active"' : 'class="nav-link"'?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bidang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('kelompok')?>" <?=$this->uri->segment(1) == 'kelompok'  ? 'class=" nav-link active"' : 'class="nav-link"'?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelompok</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('sub_kelompok')?>" <?=$this->uri->segment(1) == 'sub_kelompok'  ? 'class=" nav-link active"' : 'class="nav-link"'?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub Kelompok</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          
          <li class="nav-header">SETTINGS</li>      
          <li class="nav-item">
            <a href="<?=site_url('user')?>" <?=$this->uri->segment(1) == 'user'  ? 'class=" nav-link active"' : 'class="nav-link"'?>>
            <i class="nav-icon fas fa-user"></i>
              <p>User</p>
            </a>
          </li>        
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php echo $contents ?>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.1
    </div>
    <strong>Copyright &copy; 2020 RAY </a>.</strong>BPKP
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>

<script>
  $(document).ready(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
