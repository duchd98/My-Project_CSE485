<?php 
include_once('../include/config.php');
include_once('../include/backend.php');
$id = $_GET['id'];
khoahoc_delete($con,$id);
echo "<script>alert('Xoá Thành Công')</script>";
echo "<script>window.location.href='khoahoc.php'</script>";
?>