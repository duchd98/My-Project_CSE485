<?php 
function adminlogin($con,$username,$pass,$level){
	echo $sql = "SELECT * FROM admin WHERE `user`= '$username' AND `pass` ='$pass' AND level='$level' AND active = '1'";
	return mysqli_query($con,$sql);
}
function userlogin($con,$username,$pass){
	echo $sql = "SELECT * FROM sinhvien WHERE `masv`= '$username' AND `password` ='$pass'";
	return mysqli_query($con,$sql);
}
function showdoan($con){
	$sql = "SELECT * FROM doan";
	return @mysqli_query($con,$sql);
}

function showdoan_level($con,$masv){
	$sql = "SELECT * FROM sinhvien WHERE `masv` = '$masv'";
	return @mysqli_query($con,$sql);
}

function showtendoan($con,$gvhd){
	$sql = "SELECT * FROM doan WHERE gvhd = '$gvhd'";
	return @mysqli_fetch_assoc(mysqli_query($con,$sql));
}


function showsv($con,$id){
	$sql = "SELECT * FROM sinhvien WHERE idkhoahoc LIKE '%$id%'";
	return @mysqli_query($con,$sql);
}



function doan_add($con,$khoahoc,$noidung,$active){
	$sql = "INSERT INTO khoahoc VALUES ('NULL','$khoahoc','$noidung','$active')";
	return @mysqli_query($con,$sql);
}

function doan_show_id($con,$id){
	$sql = "SELECT * FROM doan WHERE id = '$id'";
	return @mysqli_fetch_assoc(mysqli_query($con,$sql));
}

function doan_show_nhanxet($con,$id){
	$sql = "SELECT * FROM nhanxet WHERE iddoan = '$id'";
	return @mysqli_query($con,$sql);
}
function doan_update($con,$id,$khoahoc,$noidung,$active){
	$sql = "UPDATE khoahoc SET `name`='$khoahoc',`noidung`='$noidung',`active`='$active' WHERE id = '$id'";
	return @mysqli_query($con,$sql);
}

function khoahoc_delete($con,$id){
	$sql = "DELETE FROM khoahoc WHERE id = '$id'";
	return @mysqli_query($con,$sql);
}

function sinhvien_add($con,$idkhoahoc,$name,$masv,$datebirth,$location,$email,$sdt){
	$sql = "INSERT INTO sinhvien VALUES ('NULL','$idkhoahoc','$name','$masv','$datebirth','$location','$email','$sdt','1')";
	return @mysqli_query($con,$sql);
}

function sinhvien_show_id($con,$id){
	$sql = "SELECT * FROM sinhvien WHERE masv = '$id'";
	return @mysqli_fetch_assoc(mysqli_query($con,$sql));
}

function sinhvien_update($con,$id,$name,$masv,$datebirth,$sothich,$themanh){
	$sql = "UPDATE sinhvien SET `name`='$name',`datebirth`='$datebirth',`sothich`='$sothich',`themanh`='$themanh' WHERE masv = '$masv'";
	return @mysqli_query($con,$sql);
}

function sinhvien_delete($con,$id){
	$sql = "DELETE FROM sinhvien WHERE id = '$id'";
	return @mysqli_query($con,$sql);
}

function nhapdiemsv($con,$masv){
	$sql = "SELECT * FROM sinhvien WHERE masv = '$masv'";
	return @mysqli_fetch_assoc(mysqli_query($con,$sql));
}

function diemsinhvien_add($con,$idkhoahoc,$masv,$dqt){
	$sql = "INSERT INTO diem VALUES ('NULL','$idkhoahoc','$masv','$dqt')";
	return @mysqli_query($con,$sql);
}

function diemsinhvien_delete($con,$id,$idkhoa){
	$sql = "DELETE FROM diem WHERE masv = '$id' AND idkhoahoc ='$idkhoa'";
	return @mysqli_query($con,$sql);
}


function tainguyen_showid($con,$masv,$idkhoahoc){
	$sql ="SELECT * FROM diem WHERE masv = '$masv' AND idkhoahoc = '$idkhoahoc'";
	return @mysqli_fetch_assoc(mysqli_query($con,$sql));
}

function tainguyen_update_khoa($con,$masv,$idkhoahoc,$dqt){
	$sql = "UPDATE diem SET `dqt`='$dqt' WHERE masv = '$masv' AND idkhoahoc = '$idkhoahoc'";
	return @mysqli_query($con,$sql);
}

function xemdiemsv($con,$masv){
	$sql = "SELECT * FROM diem WHERE masv = '$masv'";
	return @mysqli_query($con,$sql);
}

function show_name_khoahoc($con,$id){
	$sql = "SELECT * FROM khoahoc WHERE id = '$id'";
	return @mysqli_fetch_assoc(mysqli_query($con,$sql));
}

function tainguyen_show($con){
	$sql = "SELECT * FROM tainguyen";
	return @mysqli_query($con,$sql);
}

function tainguyen_add($con,$name,$link){
	$sql = "INSERT INTO tainguyen VALUES('NULL','$name','$link','1')";
	return @mysqli_query($con,$sql);
}

function tainguyen_show_id($con,$id){
	$sql = "SELECT * FROM tainguyen WHERE id = '$id'";
	return @mysqli_fetch_assoc(mysqli_query($con,$sql));
}

function tainguyen_update($con,$name,$link,$active,$id){
	$sql = "UPDATE tainguyen SET `name`='$name',`link`='$link',`active`='$active' WHERE id = '$id'";
	return @mysqli_query($con,$sql);
}
function tainguyen_delete($con,$id){
	$sql = "DELETE FROM tainguyen WHERE id = '$id'";
	return @mysqli_query($con,$sql);
}

function tintuc_show($con){
	$sql = "SELECT * FROM tintuc";
	return @mysqli_query($con,$sql);
}

function tintuc_add($con,$tieude,$noidung){
	$sql = "INSERT INTO tintuc VALUES ('NULL','$tieude','$noidung',NOW(),'1')";
	return @mysqli_query($con,$sql);
}

function tintuc_show_id($con,$id){
	$sql = "SELECT * FROM tintuc WHERE id = '$id'";
	return @mysqli_fetch_assoc(mysqli_query($con,$sql));
}

function tintuc_update($con,$id,$tieude,$noidung,$active){
	$sql = "UPDATE tintuc SET `name`='$tieude',`noidung`='$noidung',`date`='NOW()', `active` = '$active' WHERE id = '$id'";
	return @mysqli_query($con,$sql);
}

function tintuc_delete($con,$id){
	$sql = "DELETE FROM tintuc WHERE id = '$id'";
	return @mysqli_query($con,$sql);
}

?>