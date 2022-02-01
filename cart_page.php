<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    $user_id=$_SESSION['user_id'];
    // print_r($_SESSION);
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
                            <h1>Cart Page</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Cart Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->

            <section class="content container">

                <div class="card">
                    <table>
                        <tr>
                            <th width="40%">Item Name</th>
                            <!-- <th width="40%">Item Image</th> -->
                            <th width="10%">Quantity</th>
                            <th width="20%">Price</th>
                            <th width="15%">Total</th>
                            <th width="5%">Action</th>
                        </tr>
                        <?php
                   include "action_db/connection_db.php";
                    $verify_user="SELECT * FROM cart_db WHERE session_id =  '$user_id'";
                    $verify_result=mysqli_query($conn,$verify_user);
                    //  print_r($verify_result);
                   if (mysqli_num_rows($verify_result)>0) {

                       $query = "SELECT * FROM product_db INNER JOIN cart_db ON product_db.id = cart_db.product_id WHERE cart_db.session_id =  '$user_id' ";
                       $result = mysqli_query($conn, $query);
                           if(mysqli_num_rows($result) > 0)
                           {
                           while($row = mysqli_fetch_array($result))
                           {?>
                        <tr class="container">


                            <td><?php echo $row['product_name']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><a href="delete_cart.php?id=<?php echo $row['product_id']; ?>"
                                    onclick='return checkdelete()'>Delete</a></td>

                            <?php
                                   }
                               }
                               $count = mysqli_query($conn, "SELECT * FROM product_db INNER JOIN cart_db ON product_db.id = cart_db.product_id  ");
                               $total = 0;
                               while($row = mysqli_fetch_assoc($count)) {
                                   $total = $total + ($row["quantity"] * $row["price"]);
                                    }?>
                            <h4>Total:<?php echo $total ?></h4>
                            <form action="pay.php" method="POST">
                                <input type="hidden" name="amount" value="<?php echo $total; ?>">
                                <!-- <input type="hidden" name="currency" value="INR"> -->
                                <input type="submit" name="buynow" style="margin-top:5px;" class="btn btn-warning" value="buynow">
                            </form>
                <?php
                    }
                   else {
                       echo "<h4>Please add product in cart";
                       }
                     
                
                    ?>



                </div>
            </section>








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