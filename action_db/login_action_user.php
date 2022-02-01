<?php
session_start();
include ("connection_db.php");

if(isset($_POST['sub']))
{
$a = $_POST['email'];
$b = $_POST['password'];
$b=md5($b);

$sql = "SELECT * FROM register WHERE email= '$a' and password= '$b' ";
$result = mysqli_query($conn, $sql);
$rowcount=mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
print_r($row);
$user_id = $row['id'];
$_SESSION['user_name']=$row['full_name'];
$_SESSION['user_email']=$row['email'];
$_SESSION['user_phone_no']=$row['mobile'];

if($rowcount > 0)
{
	
	$_SESSION["login"]="1";
	$_SESSION['user_id'] = $user_id;
	unset($_SESSION["login_error"]);
	header("location:../index.php");
}
else	
{	
	$_SESSION["login_error"] = "Please check login";
	header("location:../login.php");
	
}
}






?>