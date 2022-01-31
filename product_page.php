<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Blank Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: unset !important;">
            <!-- Left navbar links -->
            <?php include "navbar.php" ?>
        </nav>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="margin-left: unset !important;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Blank Page</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content container">

                <!-- Default box -->
                <div class="card">
                    <?php
                    include ('action_db/connection_db.php');
                    $query = "SELECT * FROM product_db ORDER BY id ASC";
                    $result = mysqli_query($conn, $query);
                    if(mysqli_num_rows($result) > 0)
                    {
                    while($row = mysqli_fetch_array($result))
                    {
                    ?>
                    <div class="products">
                        <form method="post" action="product_action_cart.php">
                            <div class="box">
                                <img src="images/<?php echo $row["product_image"]; ?>" width="500" height="500"
                                    class="img-responsive" /><br />

                               <?php
                                //    echo session_id();
                                   
                               ?>

                                <h4 class="text-info"><?php echo $row["product_name"]; ?></h4>

                                <h4 class="text-danger">₹ <?php echo $row["price"]; ?></h4>
                               

                                <input type="text" name="quantity" value="1" class="form-control" />

                                <input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />
                                <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
                                <!-- <input type="hidden" name="session_id" value="<?php echo session_id() ?>" /> -->
                                
                                <input type="hidden" name="hidden_image" value="<?php echo $row["product_image"]; ?>" />

                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />


                                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary"
                                    value="Add to Cart  ">
                                <?php  ?>
                            </div>
                        </form>
                    </div>
                    <?php
    }
}
?>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer" style="margin-left: unset !important;">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0-rc
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
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
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>