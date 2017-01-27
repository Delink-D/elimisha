<!DOCTYPE html>
<html>
	<head>
		<title>LogIn Page</title>
		<!-- styles -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
		<link rel="stylesheet" type="text/css" href="css/styles.css">

		<!-- scripts -->
		<script type="text/javascript" src='js/jquery.min.js'></script>
		<script type="text/javascript" src='js/bootstrap.min.js'></script>
		<script type="text/javascript" src='js/main.js'></script>
	</head>
	<body>
		<div class="cntainer">
			<div class="login">
				<form class="form login-form" action="login/login.php" method="post">
					<div class="form-group">
						<label for="loginid">User Id</label>
						<input type="text" name="userid" placeholder="User LogId" id="loginid" class="form-control">
					</div>
					<div class="form-group">
						<label for="userpass">User Password</label>
						<input type="password" name="userpass" placeholder="User Password" id="userpass" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="signin" value="Sign In" id='login-btn' class="btn btn-primary pull-right">
					</div>
				</form>
			</div>
		</div>
	</body>
</html>