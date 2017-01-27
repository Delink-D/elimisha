<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$admin_id = mysql_real_escape_string($_POST['admin_id']);
	$uname = mysql_real_escape_string($_POST['uname']);
	$email = mysql_real_escape_string($_POST['email']);
	$pass = md5(mysql_real_escape_string($_POST['pass']));

	$admin_id = trim($admin_id);
	$uname = trim($uname);
	$email = trim($email);
	$pass = trim($pass);

	// email exist or not
	$query = "SELECT email FROM admin_login WHERE admin_id='$admin_id'";
	$result = mysql_query($query);

	$count = mysql_num_rows($result); // if email not found then register

	if($count == 0){

		if(mysql_query("INSERT INTO admin_login(admin_id,uname,email,pass) VALUES('$admin_id','$uname','$email','$pass')"))
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
			<script>alert('Sorry id already exist ...');</script>
			<?php
	}

}

?>
<!DOCTYPE html PUBLIC>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>trainers register</title>
<link rel="stylesheet" href="style1.css" type="text/css" />

</head>
<body bgcolor="#336600">
<center>
<br /><br />
<br /><br />
<body bgcolor="gray">
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="admin_id" placeholder="your ID" required /></td>
</tr>
<tr>
<td><input type="text" name="uname" placeholder="User Name" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="index.php"><b><font size="+1">Sign In Here</font></b></a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
