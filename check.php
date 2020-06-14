<?php
$status=1;
$conn = new mysqli('localhost','root','','happynosh');
if($conn->connect_error)
{
	die('Connection Failed : '.$conn->connect_error);
}
if(isset($_POST["login"]))
{
$uname=$_POST["username"];
$upassword=$_POST["password"];
$s="select * from registration where User_Name='".$uname."'";
$resultset=mysqli_query($conn,$s);
$data=mysqli_fetch_assoc($resultset);
session_start();
if($data["Password"]==$upassword)
	{
    $_SESSION["UserName"]=$data["User_Name"];
	header("location:basic.php");
	}
	else
	//header("location:Error.php");
	$status=0;
}
?>