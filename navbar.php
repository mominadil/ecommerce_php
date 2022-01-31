<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>


<a href="index.php" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-dark">AdminLTE 3</span>
</a>
<style>
.brand-link:hover {
    color: black !important;
    text-decoration: none;
}
</style>
<?php
    // session_start();
    
?>

<ul class="navbar-nav">

    <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
    </li>
    <?php if(isset($_SESSION['login'])){ ?>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="product_page.php" class="nav-link">Product</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="cart_page.php" class="nav-link">Cart</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="logout.php" class="nav-link">Logout</a>
    </li>
    <?php }else{ ?>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="login.php" class="nav-link">Login</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="register.php" class="nav-link">Register</a>
    </li>
    <?php } ?>


    <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"></a>
    </li> -->
</ul>

<div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
    </div>
</div>