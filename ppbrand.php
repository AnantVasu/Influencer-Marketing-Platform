<?php
session_start();
$y= $_SESSION['yname'];
$x= $_SESSION['insta'];
$z= $_SESSION['youtube'];

$_SESSION['bnam']=$y;
?>

<html>
<head>
	<style>
	body {
		margin: 0;
		font-family: "SF Pro Display","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
	}

	.b{
		text-align:center;

	}


	.myButton {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #000000), color-stop(1, #333338));
	background:-moz-linear-gradient(top, #000000 5%, #333338 100%);
	background:-webkit-linear-gradient(top, #000000 5%, #333338 100%);
	background:-o-linear-gradient(top, #000000 5%, #333338 100%);
	background:-ms-linear-gradient(top, #000000 5%, #333338 100%);
	background:linear-gradient(to bottom, #000000 5%, #333338 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#333338',GradientType=0);
	background-color:#000000;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border:2px solid #292c2e;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family: "SF Pro Display","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
	font-size:27px;
	padding:6px 29px;
	text-decoration:none;
  width: 160px;
  height: 35px;
  text-align: center;
  /*margin: 290px 100px 290px 100px;*/
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #333338), color-stop(1, #000000));
	background:-moz-linear-gradient(top, #333338 5%, #000000 100%);
	background:-webkit-linear-gradient(top, #333338 5%, #000000 100%);
	background:-o-linear-gradient(top, #333338 5%, #000000 100%);
	background:-ms-linear-gradient(top, #333338 5%, #000000 100%);
	background:linear-gradient(to bottom, #333338 5%, #000000 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#333338', endColorstr='#000000',GradientType=0);
	background-color:#333338;
}
.myButton:active {
	position:relative;
	top:1px;
}

.button{
  display: flex;
  align-items: center;
  justify-content: center;

 }

div.button{
background: #fafafa;
text-align: center;
}

.nav {
    position: sticky;
		  top:-1px;
    left: 0px;
    height: 40px;
    background-color:rgba(0,0,0,0.8);
    width: 100%;
    display: flex;
    justify-content: center;
    list-style-type: none;
     margin: 0;
     padding: 0;
}

li a{
  color: white;
  text-decoration: none;
   display: block;
   text-align: center;
   margin: 10px 30px 10px 30px;
  }

  li a:hover, .dropdown:hover .dropbtn {
      color: #C0C0C0;
  }

	.dropdown {
			float: left;
			overflow: hidden;
	}

	.dropdown .dropbtn {
		font-size: 16px;
		border: none;
		outline: none;
		color: white;
		padding: 10px 14px 12px 14px;
		background-color: inherit;
		font-family: inherit;
		margin: 0;
	}

	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}

	.dropdown-content a {
		float: none;
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
		text-align: left;
	}

	.dropdown-content a:hover {
		background-color: #ddd;
	}

	.dropdown:hover .dropdown-content {
		display: block;
	}

  .active {
      color: silver;
  }
	.subheadline{
		text-align: center;
	  font-size: 30px;
	  line-height: 1.38105;
	  font-weight: 400;
	  letter-spacing: .011em;
	  font-family: "SF Pro Display","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
	}
.headline {
		text-align: center;
    font-size: 50px;
    line-height: 1.10227;
    font-weight: 500;
    letter-spacing: -.025em;
    font-family: "SF Pro Display","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
		margin: 80px 50px 80px 50px;
}
 .pp{
	 margin: 70px 0px 10px 0px;
	text-align: center;
	position:absolute;
	left: 20px;
	top: 0px;
	border-right: solid 2px #000;
	padding-right: 10px;

}
.frame{
	margin: 140px 0px 50px 0px;
		text-align: center;
}
.follow{
	text-align: center;
}

.abs{
	position: absolute;
	left: 400px;
	top: 250px;
}

</style>
</head>
<body>
	<ul class="nav">
    <li><a class="active" href="index.html">Home</a></li>
    <li><a class="active" href="#"><?php echo $y; ?></a></li>
		<li><a href="index.html">Signout</a></li>
</ul>
<aside>
<div class="pp">
	<!--<img src="nik.png" alt="Logo" width="250" height="250">
	<h5>
		Upload / Change profile picture
	</h5> -->
	<h1>#<?php echo $y; ?> <img src="badge.jpg" alt="Logo" width="20" height="20">
</h1>
<br> <br>
<div class="follow">
	<h2>Followers</h2>
<h3 >Instagram : <?php echo $x; ?></h3>
<h3>Youtube&nbsp : <?php echo $z; ?></h3>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</div>
<br>
</aside>

<div class="abs">
<div >
	<h2 class="subheadline">Start a campaign</h2><br>
	<center><a href="campaign_brand.html" class="myButton">Begin</a></center>
</div>

<div class="frame">
<h2>Your Ongoing campaigns</h2>
<p>These are the list of all the ongoing campaigns:</p>

<iframe src="demo_iframe1.php" height="400" width="1300"></iframe>
</div>
</div>
	<!--<div class="headline">
		Sign In
	</div>
	<div class="b">
		<input type="text" value="username" placeholder="Username"><br>
		<input type="password" value="password" placeholder="Password"><br>
		<input type="button" class="myButton" value="Login"><br>
		<span class="join">Or Join in as an </span><a href="index.html" class="reg">Influencer</a>
		<span class="join">or as a</span> <a href="index.html" class="reg"> Brand </a><br><br>
		<a href="index.html" class="for">Forgot Password? Click Here</a>

	</div>
-->
</body>
</html>
