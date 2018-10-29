<?php include_once('include/header.php'); ?>
<?php 
	$masv = $_GET['masv'];
	$idkhoahoc = $_GET['khoahoc'];
	$showdiem = tainguyen_showid($con,$masv,$idkhoahoc);
	if(isset($_POST['btnsubmit'])){
		$idkhoahoc1 = $_POST['khoahoc'];
		$dqt = $_POST['dqt'];
		if(!empty($dqt) && !empty($idkhoahoc)){
			tainguyen_update_khoa($con,$masv,$idkhoahoc1,$dqt);
			echo "<script>alert('Sửa Điểm Thành Công')</script>";
			echo "<script>window.history.go(-2)</script>";
		}
	}
?>

          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Nhập Điểm Sinh Viên</div>
			  <div class="noidung">
              	<form class="form-horizontal" action="" method="POST">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Điểm Quá Trình:</label>
				    <div class="col-sm-10">
				      <input type="text" name="dqt" value=<?=$showdiem['dqt']?> class="form-control" id="email" placeholder="Điểm Quá Trình">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Khoá Học:</label>
				   <div class="col-sm-10">
					<select class="form-control" name="khoahoc" id="exampleFormControlSelect2">
				   	<option>--Chọn Khoá Học--</option>
				   	<?php $listkhoahoc = showkhoahoc($con);$stt=1; while($show = mysqli_fetch_assoc($listkhoahoc)){ ?>
					      <option <?php if($show['id']==$showdiem['idkhoahoc']){echo "selected";} ?> value="<?=$show['id'];?>"><?=$show['name'];?></option>
					<?php } ?>
					</select>
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