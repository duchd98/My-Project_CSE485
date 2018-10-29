<?php 
include_once('../include/config.php');
include_once('../include/backend.php');
$id = $_GET['masv'];
$idkhoa = $_GET['khoahoc'];
diemsinhvien_delete($con,$id,$idkhoa);
echo "<script>alert('Xoá Thành Công')</script>";
echo "<script>window.history.go(-2)</script>";
?>