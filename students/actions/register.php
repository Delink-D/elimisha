<?php
session_start();

if (!$_SESSION['student']) {
    header('location: http://127.0.0.1/hacktoteach/index.php');
    exit();
}

$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$natid = $_SESSION['id_number'];

include_once '../db/dbconnect.php';

if(isset($_POST['submit']))
{
	$id_number = mysql_real_escape_string($_POST['id_number']);
	$fname = mysql_real_escape_string($_POST['fname']);
	$lname = mysql_real_escape_string($_POST['lname']);
	$uname = mysql_real_escape_string($_POST['uname']);
	$phone =mysql_real_escape_string($_POST['phone']);
	$education_level =mysql_real_escape_string($_POST['education_level']);
	$dob =mysql_real_escape_string($_POST['dob']);
	$gender =mysql_real_escape_string($_POST['gender']);
	$pass = mysql_real_escape_string($_POST['pass']);
	$pass2 = mysql_real_escape_string($_POST['pass2']);

	$id_number = trim($id_number);
	$fname = trim($fname);
	$lname = trim($lname);
	$uname = trim($uname);
	$phone = trim($phone);
	$education_level = trim($education_level);
	$dob = trim($dob);
	$gender = trim($gender);
	$pass = trim($pass);
	$pass2 = trim($pass2);


	// student already registerd or not
	$query = "DELETE FROM student_det WHERE id_number='$id_number'";
	$result = mysql_query($query);

	if ($result) {

		$save = "INSERT INTO student_det(id_number,fname,lname,uname,phone,ed_level,dob,gender,password,login) 
					VALUES('$id_number','$fname','$lname','$uname','$phone','$education_level','$dob','$gender','$pass','1')";
		$query = mysql_query($save)or die("!");

		if($query);
		{
			header('location: http://127.0.0.1/hacktoteach/students/student.php');
			exit();	
		}
			header('location: http://127.0.0.1/hacktoteach/students/complete-profile.php?m=fail');
			exit();	
	}
}
	header('location: http://127.0.0.1/hacktoteach/students/complete-profile.php');
	exit();	