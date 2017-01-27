<?php

	include_once '../db/dbconnect.php';

	$id = $_SESSION['id_number'];
	$get = mysql_query("SELECT * FROM student_det WHERE id_number='$id'");

	if (mysql_num_rows($get) != 1) {
		header('location: http://127.0.0.1/hacktoteach/students/logout/logout.php');
		exit();
	}

	while ($row = mysql_fetch_assoc($get)) {
		$stu_id = $row['student_id'];
		$phone = $row['phone'];
		$fname = $row['fname'];
		$lname = $row['lname'];
		$uname = $row['uname'];
		$name = $row['fname'] . " " . $row['lname'];
		$gender = $row['gender'];
		$dob = $row['dob'];
		$edulevel = $row['ed_level'];
	}