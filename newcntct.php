<?php

$name=$_POST["nm"];
$tele=$_POST["tl"];
$eml=$_POST["eml"];
$qq=$_POST["ques"];


$conn=new mysqli('localhost','root','','travel');

if($conn->connect_error)
{
	die("Connection Failed ".$conn->connect_error);
}
else{
echo"Connection Succeed";
}

$sql="Insert into contacts values('$name','$tele','$eml','$qq')";
$r=mysqli_query($conn,$sql);
if($r)
{
	echo"Successfully add";
}
else
{
	echo"Failed";
}
?>