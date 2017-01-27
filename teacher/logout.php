<?php
session_start();

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['teacher']);
	header("Location: http://127.0.0.1/hacktoteach/index.php");
}

if(!isset($_SESSION['teacher']))
{
	header("Location: http://127.0.0.1/hacktoteach/index.php");
}
else if(isset($_SESSION['teacher'])!="")
{
	header("Location: home.php");
}