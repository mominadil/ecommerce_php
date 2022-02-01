<?php
session_start();
include "action_db/connection_db.php";
$product_id=$_POST['hidden_id'];
$quantity=$_POST['quantity'];
$user_id=$_SESSION['user_id'];

$slquery1 = "SELECT 1 FROM cart_db WHERE product_id = '$product_id'";

$selectresult1 = mysqli_query($conn,$slquery1);

if (mysqli_num_rows($selectresult1)>0) {
    echo "<script>alert('Product is already exsist in cart');</script>";

    header("location:cart_page.php");
}
else {
    
    echo $sql = "INSERT INTO cart_db(product_id,quantity,session_id	)VALUES('$product_id','$quantity', '$user_id')";
          $result=mysqli_query($conn,$sql);
          echo "<script>alert('Product is added in cart');</script>";
          header("location:product_page.php");
}
// $sql = "INSERT INTO cart_db(product_id,quantity	)VALUES('$product_id','$quantity')";
//           $result=mysqli_query($conn,$sql);
//            echo "<script>alert('Product is added in cart');</script>";
//           header("location:product_page.php");
    
    // echo $product_id;
    // echo $quantity;
?>