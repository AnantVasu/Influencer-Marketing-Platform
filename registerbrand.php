<?php
$con= mysqli_connect("localhost","root","", "influence");
if(!$con)
{
	die("Connection Failed: " . mysqli_connect_error());
}

$yname=$_POST['yname'];
$bname=$_POST['bname'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$dpd=$_POST['dpd'];
$about=$_POST['about'];

$q = " select * from brandsignup where yourname = '$yname' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo " <br>duplicate data ";
echo "<br>Continue to ";
echo "<a href='signin_brand.html'>Log In</a>";
}else{

	$qy= " insert  into brandsignup(yourname,bname,phone,budget,about,password) values ('$yname' ,'$bname','$phone','$dpd','$about','$pass') ";
	mysqli_query($con, $qy);
echo "<font size = 5>You have successfully Registered!<br> </font>";
echo "<br>Continue to ";
echo "<a href='signin_brand.html'>Log In</a>";
}

mysqli_close($con);
?>