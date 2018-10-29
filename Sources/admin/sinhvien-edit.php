	<?php include_once('include/header.php'); ?>
<?php 
	$id = $_SESSION['admin_login'];
	$showid = sinhvien_show_id($con,$id);
	if(isset($_POST['btnsubmit'])){
		$name = $_POST['name'];
		$masv = $_POST['masv'];
		$datebirth = $_POST['datebirth'];
		$sothich = $_POST['sothich'];
		$themanh = $_POST['themanh'];
 		if(!empty($name)){
			sinhvien_update($con,$id,$name,$masv,$datebirth,$sothich,$themanh);
			echo "<script>alert('Sửa Thành Công')</script>";
			echo "<script>window.location.href='sinhvien-edit.php'</script>";
		}
	}
?>

          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Cập Nhật Thông Tin</div>
			  <div class="noidung">
              	<form class="form-horizontal" action="" method="POST">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Tên Sinh Viên:</label>
				    <div class="col-sm-10">
				      <input type="text" name="name" value="<?=$showid['name']?>" class="form-control" id="email" placeholder="Tên Sinh Viên">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Mã Sinh Viên:</label>
				    <div class="col-sm-10">
				      <input type="text" name="masv" value="<?=$showid['masv']?>" class="form-control" id="email" placeholder="Mã Sinh Viên">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Ngày Sinh:</label>
				    <div class="col-sm-10">
				      <input type="text" name="datebirth" value="<?=$showid['datebirth']?>" class="form-control" id="email" placeholder="Ngày sinh">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Sở Thích:</label>
				    <div class="col-sm-10">
				      <input type="text" name="sothich" value="<?=$showid['sothich']?>" class="form-control" id="email" placeholder="Sở Thích">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Thế Mạnh:</label>
				    <div class="col-sm-10">
				      <input type="text" name="themanh" value="<?=$showid['themanh']?>" class="form-control" id="email" placeholder="Thế Mạnh">
				    </div>
				  </div>

				  
				  	
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" name="btnsubmit" class="btn btn-primary">Update</button>
				    </div>
				  </div>
				</form>
			  </div>	
            </div>
          </div>
<?php include_once('include/footer.php'); ?>