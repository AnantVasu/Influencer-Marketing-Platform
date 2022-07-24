<?php
session_start();

$con= mysqli_connect("localhost","root","", "influence");
if(!$con)
{
	die("Connection Failed: " . mysqli_connect_error());
}
echo "<font size = 5>Connected </font>";
$yname=$_POST['yname'];
$pass=$_POST['pass'];
$insta=$_POST['insta'];
$youtube=$_POST['youtube'];

$_SESSION['yname']=$yname;
$_SESSION['insta']=$insta;
$_SESSION['youtube']=$youtube;

$q = " select * from brandsignup where bname = '$yname' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	header('location:ppbrand.php');
}else{
	echo "Sorry, You've Entered the wrong Credentials!";
	header('location:signin_brand.html');
}

mysqli_close($con);
?>
