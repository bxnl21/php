<?php 
  session_start();
  include_once("../libs/routing.php");
  $routing = new Routing();

  if(!isset($_SESSION['admin'])||$_SESSION['admin'] == false){
    $url = $routing->base_url_backend('login.php');
    header("Location: $url");
    exit();
  }else{
    define("BASEPATH","ltw");
    $path = $routing->get_path();
    ob_start();
    include_once($path);
    $output= ob_get_clean();
  }
  
  
  
 
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quản trị bán hàng</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$routing->base_url_backend;?>assets/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=$routing->base_url_backend;?>assets/css/adminlte.min.css">

  <script type="text/javascript" src="<?php echo $routing->base_url_backend("assets/ckeditor/ckeditor.js")?>"></script>
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
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
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
    <a href="#" class="brand-link">
      <img src="img/AdminLTELogo.png"
           alt="Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>Hệ thống</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <strong style='color:white'><?=$_SESSION['name'];?></strong>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Sản phẩm
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item ml-2">
                        <a href="<?=$routing->site_url_backend('products')?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách sản phẩm</p>
                        </a>
                    </li>
                    <li class="nav-item ml-2">
                        <a href="<?=$routing->site_url_backend('category')?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Loại sản phẩm</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?=$routing->site_url_backend('order')?>" class="nav-link">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p>Đơn hàng</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="customer_index.php" class="nav-link">
                    <i class="far fa-circle nav-icon text-success"></i>
                    <p>Khách hàng</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="contact_index.php" class="nav-link">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Liên hệ</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Giao diện
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item ml-2">
                        <a href="menu_index.php" class="nav-link">
                            <i class="far fa-circle nav-icon text-danger"></i>
                            <p>Menu</p>
                        </a>
                    </li>
                    <li class="nav-item ml-2">
                        <a href="slider_index.php" class="nav-link">
                            <i class="far fa-circle nav-icon text-danger"></i>
                            <p>Slider</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Hệ thống
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item ml-2">
                        <a href="user_index.php" class="nav-link">
                            <i class="far fa-circle nav-icon text-danger"></i>
                            <p>Thành viên</p>
                        </a>
                    </li>
                    <li class="nav-item ml-2">
                        <a href="user_insert.php" class="nav-link">
                            <i class="far fa-circle nav-icon text-danger"></i>
                            <p>Thêm thành viên</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-header">THÔNG TIN</li>
            <li class="nav-item ml-2">
                <a href="<?=$routing->site_url_backend('dang-xuat-back')?>" class="nav-link">
                    <i class="nav-icon far fa-circle text-danger"></i>
                    <p class="text">Đăng xuất</p>
                </a>
            </li>
            <li class="nav-item ml-2">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-warning"></i>
                    <p>Thông tin cá nhân</p>
                </a>
            </li>
        </ul>
    </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
          <?php 
            echo $output
            ?>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.4
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=$routing->base_url_backend;?>assets/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=$routing->base_url_backend;?>assets/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=$routing->base_url_backend;?>assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=$routing->base_url_backend;?>assets/js/demo.js"></script>
</body>
</html>
