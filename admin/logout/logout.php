<?php
session_start();

if(!isset($_SESSION['admin']))
{
	header("location: http://127.0.0.1/hacktoteach/index.php");
}
else if(isset($_SESSION['admin'])!="")
{
	header("Location: ../home.php");
}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['user']);
	header("Location: http://127.0.0.1/hacktoteach/index.php");
}
