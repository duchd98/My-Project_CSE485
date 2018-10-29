<?php include_once('include/header.php'); ?>
<?php 
	if(isset($_POST['btnsubmit'])){
		$idkhoahoc = json_encode($_POST['khoahoc']);
		$name = $_POST['name'];
		$masv = $_POST['masv'];
		$datebirth = $_POST['datebirth'];
		$location = $_POST['location'];
		$email = $_POST['email'];
		$sdt = $_POST['sdt'];
		if(!empty($name)){
			sinhvien_add($con,$idkhoahoc,$name,$masv,$datebirth,$location,$email,$sdt);
			echo "<script>alert('Thêm Thành Công')</script>";
			echo "<script>window.location.href='sinhvien.php'</script>";
		}
	}
?>

          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Thêm Sinh Viên Mới</div>
			  <div class="noidung">
              	<form class="form-horizontal" action="" method="POST">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Tên Sinh Viên:</label>
				    <div class="col-sm-10">
				      <input type="text" name="name" class="form-control" id="email" placeholder="Tên Sinh Viên">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Mã Sinh Viên:</label>
				    <div class="col-sm-10">
				      <input type="text" name="masv" class="form-control" id="email" placeholder="Mã Sinh Viên">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Ngày Sinh:</label>
				    <div class="col-sm-10">
				      <input type="date" name="datebirth" class="form-control" id="email" placeholder="Ngày Sinh">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Quê Quán:</label>
				    <div class="col-sm-10">
				      <input type="text" name="location" class="form-control" id="email" placeholder="Quê Quán">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Email:</label>
				    <div class="col-sm-10">
				      <input type="email" name="email" class="form-control" id="email" placeholder="Email Sinh Viên">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Mobile:</label>
				    <div class="col-sm-10">
				      <input type="number" max-length="11" name="sdt" class="form-control" id="email" placeholder="Điện Thoại">
				    </div>
				  </div> 
				  
				   	<?php $listkhoahoc = showkhoahoc($con);$stt=1; while($show = mysqli_fetch_assoc($listkhoahoc)){ ?>
					   <div class="checkbox-inline"><label><input name="khoahoc[]" type="checkbox" value="<?=$show['id']?>"><?=$show['name']?></label></div>
					<?php } ?>
					</div>
				  </div>
				  	
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button>
				    </div>
				  </div>
				</form>
			  </div>	
            </div>
          </div>
<?php include_once('include/footer.php'); ?>