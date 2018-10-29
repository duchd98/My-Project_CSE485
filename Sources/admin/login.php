<?php 
session_start();
include_once('../include/config.php');
include_once('../include/backend.php');
if(isset($_POST['submit'])){
	$username = htmlentities($_POST['user']);
	$pass = md5($_POST['pass']);
	$level = $_POST['level'];
	if($level!="3"){
		$login = adminlogin($con,$username,$pass,$level);
		$row = mysqli_num_rows($login);
		if($row!=0){
			$loginshow = mysqli_fetch_assoc($login);
			$_SESSION['admin_login'] = $loginshow['user'];
			$_SESSION['admin_level'] = $loginshow['level'];
			header('location:doan.php');
		}
	}
	
	if($level=="3"){
		$login = userlogin($con,$username,$pass);
		$row = mysqli_num_rows($login);
		if($row!=0){
			$loginshow = mysqli_fetch_assoc($login);
			$_SESSION['admin_login'] = $loginshow['masv'];
			$_SESSION['admin_level'] = $_POST['level'];
			header('location:sinhvien.php');

		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOGIN CPANEL WEBSITE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">

  </head>
  <body style="background:#ddd; optical:0.3">
	<div class="container">
	<div class="row">
		<div class="col-md-12 header text-center">
    	    <h1>-:Hệ Thống Quản Lý Đồ Án Tốt Nghiệp:-</h1>  
        	<th>..............................................................................................................................................................................................................................................................................................</th>
    	</div>	
	</div>
</div>
	<div class="container" style="margin-top:15%">
		<div class="row col-md-4 col-md-push-4">
			
			<form action="" method="post">
			  <fieldset>
			  <legend>Đăng Nhập Quản Trị:</legend>
				  <div class="form-group">
				    <label for="email">User:</label>
				    <input type="user" value="<?=$username?>" name="user" class="form-control" id="email">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" name="pass" class="form-control" id="pwd">
				  </div>
				  <button type="submit" name="submit" class="btn btn-default">Login</button>
			</fieldset>
		</form>
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>