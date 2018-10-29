<?php 
session_start();
include_once('../include/config.php');
include_once('../include/backend.php');
if(!isset($_SESSION['admin_login'])){
	header('location:login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CPANEL WEBSITE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>
	<div class="container">
      <div class="row">
    <div class="col-md-12 header text-center">
          <h1>Hệ Thống Quản Lý Đồ Án Tốt Nghiệp</h1>  
          <img src="../images/thuyloi.jpg" alt="logo" width="100%" height="360px" >
            
      </div>  
  </div>
      <div class="row">

          <div class="col-md-3">
            <div class="panel panel-default">
              <div class="panel-heading">Xin Chào: <?=$_SESSION['admin_login'];?> - <a href="code/index.php">Đăng xuất</a></div>
              <ul class="list-group">
                <li class="list-group-item"><a href="doan.php">Đồ Án</a></li>
                <?php if(isset($_SESSION['admin_level']) && $_SESSION['admin_level']!='3'): ?>
    		        <li class="list-group-item"><a href="khoahoc.php">Khoá Học</a></li>
    		        
                <li class="list-group-item"><a href="diemsinhvien.php">Điểm Sinh Viên</a></li>
    		        <li class="list-group-item"><a href="tainguyen.php">Tài Nguyên</a></li>
                <li class="list-group-item"><a href="tintuc.php">Tin Tức</a></li>
              <?php endif;?>
              </ul>
            </div>
          </div>