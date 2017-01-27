<?php
include_once '../db/dbconnect.php';

if (isset($_POST['signin'])) {
	$user = mysql_real_escape_string($_POST['userid']);
	$pass = mysql_real_escape_string($_POST['userpass']);

	$user = trim($user);
	$pass = trim($pass);

	if ($user != "") {
		if ($pass != "") {

			$get_admin 		= mysql_query("SELECT * FROM admin_login WHERE uname = '$user'");
			$get_trainer 	= mysql_query("SELECT * FROM trainers_log WHERE uname = '$user'");
			$get_student 	= mysql_query("SELECT * FROM student_det WHERE uname = '$user'");

			if (mysql_num_rows($get_admin) > 0) { // admin login code
				
				while ($row = mysql_fetch_assoc($get_admin)) {
					$db_pass 	= $row['pass'];
					$db_fname 	= $row['fname'];
					$db_lname 	= $row['lname'];
					$db_uname 	= $row['uname'];
					$db_email 	= $row['email'];
				}

				if ($db_pass === md5($pass)) {

					session_start();
					$_SESSION['admin'] = true;
					$_SESSION['afname'] = $db_fname;
					$_SESSION['alname'] = $db_lname;
					$_SESSION['auname'] = $db_uname;
					$_SESSION['aemail'] = $db_email;

					header('location: http://127.0.0.1/hacktoteach/admin/admin.php');
					exit();

				}else {
					header('location: http://127.0.0.1/hacktoteach/index.php?u=error-pass');
					exit();
				}

			}elseif (mysql_num_rows($get_trainer) > 0) { // trainer login code
				
				while ($row = mysql_fetch_assoc($get_trainer)) {
					$db_pass 	= $row['pass'];
					$db_fname 	= $row['fname'];
					$db_lname 	= $row['lname'];
					$db_uname 	= $row['uname'];
					$db_email 	= $row['email'];
				}

				if ($db_pass === md5($pass)) {

					session_start();
					$_SESSION['teacher'] = true;
					$_SESSION['afname'] = $db_fname;
					$_SESSION['alname'] = $db_lname;
					$_SESSION['auname'] = $db_uname;
					$_SESSION['email'] = $db_email;

					header('location: http://127.0.0.1/hacktoteach/teacher/home.php');
					exit();
				}else {
					header('location: http://127.0.0.1/hacktoteach/index.php?u=error-pass');
					exit();
				}
			}elseif (mysql_num_rows($get_student) > 0) { //student login code

				while ($row = mysql_fetch_assoc($get_student)) {
					$db_pass = $row['password'];
					$db_fname = $row['fname'];
					$db_lname = $row['lname'];
					$db_uname = $row['uname'];
					$db_login = $row['login'];
					$db_natid = $row['id_number'];
				}

				if ($db_pass === $pass) {

					session_start();
					$_SESSION['student'] = true;
					$_SESSION['fname'] = $db_fname;
					$_SESSION['lname'] = $db_lname;
					$_SESSION['uname'] = $db_uname;
					$_SESSION['id_number'] = $db_natid;

					if ($db_login == 0) {
						header('location: http://127.0.0.1/hacktoteach/students/complete-profile.php');
						exit();
					}else{
						header('location: http://127.0.0.1/hacktoteach/students/student.php');
						exit();
					}

				}else {
					header('location: http://127.0.0.1/hacktoteach/index.php?u=error-pass');
					exit();
				}

			}else {
				header('location: http://127.0.0.1/hacktoteach/index.php?u=no-user');
				exit();
			}
				
		}else{
			header('location: http://127.0.0.1/hacktoteach/index.php?u=pass');
			exit();
		}

	}else {
		header('location: http://127.0.0.1/hacktoteach/index.php?u=uname');
		exit();
	}
}

	header('location: http://127.0.0.1/hacktoteach/index.php');
	exit();