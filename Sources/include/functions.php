<?php 
function f_showkhoahoc($con){
	$sql = "SELECT * FROM khoahoc";
	return @mysqli_query($con,$sql);
}

function f_showkhoahoc_id($con,$id)	{
	$sql = "SELECT * FROM khoahoc WHERE id ='$id'";
	return @mysqli_fetch_assoc(mysqli_query($con,$sql));
}

function get_diem($con,$idkhoahoc,$masv){
	$sql = "SELECT * FROM diem WHERE masv = '$masv' AND idkhoahoc = '$idkhoahoc'";
	return @mysqli_query($con,$sql);
}

function get_diem_idkhoa($con,$idkhoahoc){
	$sql = "SELECT * FROM diem WHERE idkhoahoc = '$idkhoahoc'";
	return @mysqli_query($con,$sql);
}

function showname_getdiem($con,$masv){
	$sql = "SELECT * FROM sinhvien WHERE masv = '$masv'";
	return @mysqli_fetch_assoc(mysqli_query($con,$sql));	
}

function get_khoa($con,$idkhoahoc){
	$sql = "SELECT * FROM khoahoc WHERE id = '$idkhoahoc'";
	return @mysqli_fetch_assoc(mysqli_query($con,$sql));
}

function get_masv($con,$masv){
	$sql = "SELECT * FROM sinhvien WHERE masv = '$masv'";
	return @mysqli_fetch_assoc(mysqli_query($con,$sql));
}

function f_tainguyen_show($con){
	$sql = "SELECT * FROM tainguyen";
	return @mysqli_query($con,$sql);
}

function show_tintuc($con){
	$sql = "SELECT * FROM tintuc WHERE active = '1'";
	return @mysqli_query($con,$sql);
}

function show_tintuc_id($con,$id){
	$sql = "SELECT * FROM tintuc WHERE id='$id' AND active = '1'";
	return @mysqli_fetch_assoc(mysqli_query($con,$sql));
}

?>