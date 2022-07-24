<?php
$con= mysqli_connect("localhost","root","", "influence");
if(!$con)
{
	die("Connection Failed: " . mysqli_connect_error());
}
echo "<font size = 5>Connected </font>";
$bname=$_POST['bname'];
$ctitle=$_POST['ctitle'];
$overview=$_POST['overview'];
$brief=$_POST['brief'];
$ptf=$_POST['ptf'];
$aod=$_POST['aod'];

$cbudget=$_POST['cbudget'];
$gender=$_POST['gender'];
$cstart=$_POST['cstart'];
$cend=$_POST['cend'];

$q = " select * from campaigns where bname = '$bname' && ctitle = '$ctitle' && cstart = '$cstart' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "duplicate data ";
}else{

	$qy= " insert  into campaigns(bname,ctitle,overview,brief,ptf,aod,cbudget,gender,cstart,cend) values ('$bname','$ctitle','$overview','$brief','$ptf','$aod','$cbudget','$gender','$cstart','$cend') ";
	mysqli_query($con, $qy);
}

mysqli_close($con);
?>