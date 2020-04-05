<?php
$status=1;
include("ConnectDb.php");
if(isset($_POST["SignInButton"]))
{
$uname=$_POST["UserName"];
$upassword=$_POST["Password"];
$s="select * from customer where UserName='".$uname."'";
$resultset=mysqli_query($con,$s);
$data=mysqli_fetch_assoc($resultset);
session_start();
if($data["Password"]==$upassword)
	{
    $_SESSION["UserName"]=$data["UserName"];
	header("location:customerdashboard.php");
	}
	else
	//header("location:Error.php");
	$status=0;
}
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="bootstrap3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<?php
include("header.php");
?>
