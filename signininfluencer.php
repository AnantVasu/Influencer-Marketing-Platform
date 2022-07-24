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

$q = " select * from influencersignup where yname = '$yname' && pass = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	header('location:ppinfluencer.php');
}else{
	echo '<script language="javascript">';
	echo 'alert("Sorry, You have Entered the wrong Credentials!")';
	echo '</script>';
	header('location:signin_influencer.html');
}

mysqli_close($con);
?>
