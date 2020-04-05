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
	if($status==0)
echo "<font  size='3' color='red'>Invalid User Name Or Password</font>";
?>
</div>
</form>
</div>
</div>
<?php
include("footer.php");
?>
</body></html>
<div class="center" style= text-align:center; >
<form method="post" action="<?php $_PHP_SELF ?>">
<h5  style="margin:5px;">Login Form</h5>
<img src="img_avatar2.png" height=150px width=150px  style="margin:5px;">
<div><input style="margin:5px;" placeholder="Enter Email" type="email" name="UserName"></div>
<div><input placeholder="Enter Password" type="password" name="Password"></div>
<div><input class="sub" type="submit" value="Sign In" name="SignInButton"></div>
<div>
<?php
	
<div class="container">
<?php
include("header.php");
?>
