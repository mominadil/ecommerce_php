<?php
$id=$_GET['id'];
    include "action_db/connection_db.php";
    $query = "DELETE FROM cart_db WHERE product_id='$id'";
    mysqli_query($conn, $query);
    header("location:cart_page.php");
?>