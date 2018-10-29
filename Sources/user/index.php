<?php 
session_start();
include_once('../include/config.php');
include_once('../include/backend.php');
$error="";
if(isset($_POST['submit'])){
	$username = htmlentities($_POST['user']);
	$pass = md5($_POST['pass']);
	$level = $_POST['level'];
	if($username!="" && $pass!=""){
		$login = userlogin($con,$username,$pass);
		$row = mysqli_num_rows($login);
		if($row!=0){
			$loginshow = mysqli_fetch_assoc($login);
			$_SESSION['user_login'] = $loginshow['user'];
			header('location:../admin/sinhvien.php');
		}else {
			$error = "Sai tên đăng nhập, mật khẩu.";
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
    <!-- Bootstrap -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background:#ddd; optical:0.3">
	<div class="container" style="margin-top:15%">
		<div class="row col-md-4 col-md-push-4">
			
			<form action="" method="post">
			  <fieldset>
			  <legend>Đăng Nhập User:</legend>
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
		<?=$error?>
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>