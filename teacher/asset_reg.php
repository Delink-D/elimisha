<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM trainers_log WHERE email=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

include_once 'dbconnect.php';


if(isset($_POST['submit']))
{

	$asset_id = mysql_real_escape_string($_POST['asset_id']);
	$serial_no = mysql_real_escape_string($_POST['serial_no']);
	$asset_name = mysql_real_escape_string($_POST['asset_name']);
	$category = mysql_real_escape_string($_POST['category']);
	$model = mysql_real_escape_string($_POST['model']);
	$d_o_p = mysql_real_escape_string($_POST['d_o_p']);
	$asset_condition = mysql_real_escape_string($_POST['asset_condition']);
	$owner = mysql_real_escape_string($_POST['owner']);
	$location = mysql_real_escape_string($_POST['location']);






	$asset_id = trim($asset_id);
	$serial_no = trim($serial_no);
	$asset_name = trim($asset_name);
	$category = trim($category);
	$model = trim($model);
	$d_o_p = trim($d_o_p);
	$asset_condition = trim($asset_condition);
	$owner = trim($owner);
	$location= trim($location);


	// email exist or not
	$query = "SELECT ticket_no FROM asset_reg WHERE asset_id='$asset_id'";
	$result = mysql_query($query);

	$count = mysql_num_rows($result); // if email not found then register

	if($count == 0){

		if(mysql_query("INSERT INTO asset_reg(asset_id,serial_no,asset_name,category,model,d_o_p,asset_condition,owner,location) VALUES('$asset_id','$serial_no','$asset_name','$category','$model','$d_o_p','$asset_condition','$owner','$location')"))
		{
			?>
			<script>alert('successfully registered ');</script>
			<?php
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
		}
	}
	else{
			?>
			<script>alert('Sorry tag already exist ...');</script>
			<?php
	}

}
?>
<!--html layou-->
<!DOCTYPE html PUBLIC>
<html>
<head>
<title>USIU CAMPUS ASSET REGISTRATION</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Location Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<!-- Mega Menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- Mega Menu -->
</head>
<body>
<!-- banner -->
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""></a>
			</div>

		<div class="clearfix"></div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container">
			<div class="top-nav">
				<span class="menu"> </span>
					<ul class="navig megamenu skyblue">
						<li><a href="home.php" class="highlight">welcome <?php echo $userRow['uname']; ?></a>
						<li><a href="location.php" class="scroll"><span> </span> LOCATION</a>
							<div class="megapanel">
								<div class="na-left">
									<ul class="grid-img-list">
					<li><a href="home.php" class="highlight">HOME</a></li>
					<li><a href="staff_reg.php" class="highlight">Staff registration</a></li>
				    <li><a href="asset_reg.php" class="active">Asset registration</a></li>
				    <li><a href="about.php"><i class="mail"> </i>USIU CALL CENTER</a></li>
				    <li><a href="logout.php?logout" class="highlight">Logout</a></li>


										<div class="clearfix"> </div>
									</ul>
								</div>

								<div class="clearfix"> </div>
		    				</div>
						</li>
						<li><a href="shop.html" class="scroll"><span class="globe"> </span>MORE LOCATIONS </a></li>
						<div class="clearfix"></div>
					</ul>
					<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(300, function(){
						});
					});
				</script>
			</div>
			<!-- navv -->
			<div class="head-right">
				<ul class="number">
					<li><a href="home.php" class="highlight">HOME</a></li>
					<li><a href="staff_reg.php" class="highlight">Staff registration</a></li>
				    <li><a href="asset_reg.php" class="active">Asset registration</a></li>
				    <li><a href="about.php"><i class="mail"> </i>USIU CALL CENTER</a></li>
						<div class="clearfix"> </div>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- registration -->

	<div class="main-1">
		<div class="container">
			<div class="register">

				 <div class="register-top-grid">
				 	<form class="form-basic" method="post">
				<h3>PERSONAL INFORMATION</h3>

					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<input type="text" name="asset_id" placeholder=" Enter tag/asset id" required />
					 </div>

					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<input type="text" name="serial_no" placeholder="Enter the serial number" required />
					 </div>

					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <input type="text" name="asset_name" placeholder="asset name" required />
					 </div>

					  <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <input type="text" name="category" placeholder="the category"required />
					 </div>

					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <input type="text" name="model" placeholder="model"required />
					 </div>

					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <input type="text" name="d_o_p" placeholder="date of purchase"required/>
					 </div>

					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <input type="text" name="asset_condition" placeholder="condition of asset"required/>
					 </div>

					  <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <input type="text" name="owner" placeholder="owner's name"required/>
					 </div>

					  <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <input type="text" name="location" placeholder="location"required/>
					 </div>

					 <button type="submit" name="submit">Submit</button>
					   <div class="clearfix"> </div>
					 </div>
					 </div>

				</form>
			</div>
		 </div>
	</div>
</div>
<!-- registration -->
	<div class="footer">
		<div class="container">
			<div class="col-md-2 abo-foo1">
				<h5>OVERVIEW</h5>
					<ul>
						<li><a href="about.html">About us</a></li>

					</ul>
			</div>
			<div class="col-md-3 abo-foo">
				<h5>USER INFORMATION</h5>
					<ul>
						<li><a href="login.html">How to login</a></li>
						<li><a href="register.html">Create an account</a></li>
						<li><a href="login.html">Logout</a></li>
						<li><a href="register.html">Join us</a></li>
					</ul>
			</div>
			<div class="col-md-2 abo-foo1">
				<h5>USIU AFRICA</h5>
				<p>Nairobi,Kenya</p>
				<p>	USIU ,off Safari park, Thika RD</p>
				<p>	333333-00100 NBI</p>
				<p>	Tel: 123-456-7890</p>
				<p>	Fax. +123-456-7890</p>
			</div>
			<div class="col-md-2 abo-foo1">
			<h5>Agreements</h5>
			<ul>
				<li><a href="#">Legal agreement</a></li>
				<li><a href="#">Model release (adult)</a></li>
				<li><a href="#">Model release (Minor)</a></li>
				<li><a href="#">Property Release</a></li>
			</ul>
		</div>
			<div class="col-md-3 abo-foo">
				<li a="" href="#">

				</li>
			</div>
				<div class="clearfix"></div>
			<div class="footer-bottom">
				<p>Copyrights © 2016 USIU AFRICA, All rights reserved | VISITOR'S <a href="http://w3layouts.com/">&nbsp; LOGS</a></p>
			</div>
		</div>
	</div>
</body>
</html>
