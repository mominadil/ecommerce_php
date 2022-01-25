<a href="index.php" class="brand-link">
    <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
        <a href="logout.php" class="nav-link">Logout</a>
    </li>
    <?php }else{ ?>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="login.php" class="nav-link">Login</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Register</a>
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