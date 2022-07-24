<?php
$con= mysqli_connect("localhost","root","", "influence");
if(!$con)
{
	die("Connection Failed: " . mysqli_connect_error());
}
echo "<font size = 5>You have successfully Registered!<br> </font>";
echo "<br>Continue to ";
echo "<a href='signin_influencer.html'>Log In</a>";

$yname=$_POST['yname'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$phone=$_POST['tel'];
$gender=$_POST['gender'];
$about=$_POST['dpd'];

$q = " select * from influencersignup where yname = '$yname' && pass = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo " duplicate data ";
echo "<br>Continue to ";
echo "<a href='signin_influencer.html'>Log In</a>";
}else{

	$qy= " insert  into influencersignup(yname,pass,email,phone,gender,about) values ('$yname' ,'$pass','$email','$phone','$gender','$about') ";
	mysqli_query($con, $qy);
echo "<br><font size = 7>Successfully Registered!</font>";

echo "<font size = 5>You have successfully Registered!<br> </font>";
echo "<br>Continue to ";
echo "<a href='signin_influencer.html'>Log In</a>";
}
mysqli_close($con);
?>