<?php
$status=0;
$n=$_POST["emailid"];
$c=$_POST["name"];
$b=$_POST["pwd"];
$k=$_POST["cnf"];
$con=mysqli_connect("localhost","root","","travel");
if(!$con)
die("Server could not connected");
if($b==$k){
$sqldata="insert into customer(UserName,Name,Password) values('".$n."','".$c."','".$b."')";
}
else
{
    die("password incorrect");
}
$check=mysqli_query($con,$sqldata);
if($check!=0)
header("location:login.php");
else
echo "unable to save";
?>
