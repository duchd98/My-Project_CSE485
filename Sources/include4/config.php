<?php
	include_once('functions.php');
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	error_reporting(0);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "code";
	$con = mysqli_connect("$host","$user","$pass","$db");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Lỗi kết nối: " . mysqli_connect_error();die();
		  }
	mysqli_query($con,"SET NAMES utf8");
?>