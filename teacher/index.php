<?php
	// session_start();
	// include_once 'dbconnect.php';

	// if(isset($_SESSION['user'])!="")
	// {
	// 	header("Location: index.php");
	// }

	// if(isset($_POST['btn-login']))
	// {
	// 	$trainers_id = mysql_real_escape_string($_POST['trainers_id']);
	// 	$pass = mysql_real_escape_string($_POST['pass']);

	// 	$trainers_id = trim($trainers_id);
	// 	$pass = trim($pass);

	// 	$res=mysql_query("SELECT email, pass FROM trainers_log WHERE trainers_id='$trainers_id'");
	// 	$row=mysql_fetch_array($res);

	// 	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row

	// 	if($count == 1 && $row['pass']==md5($pass))
	// 	{
	// 		$_SESSION['user'] = $row['email'];
	// 		header("Location: home.php");
	// 	}
	// 	else
	// 	{
	// 		?>
	<!-- //         <script>alert('Username or Password is Wrong !');</script> -->
	//         <?php
	// 	}

	// }
?>
<!--html layout-->
<!DOCTYPE html PUBLIC>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>trainers log in</title>
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
<td><input type="text" name="trainers_id" placeholder="your ID" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">log in</button></td>
</tr>
<tr>
<td><a href="register.php"><b><font size="+1">Sign up Here</font></b></a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
