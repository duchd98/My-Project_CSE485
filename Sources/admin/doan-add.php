<?php include_once('include/header.php'); ?>
<?php 
	$id = $_GET['id'];
	$showid = doan_show_id($con,$id);
	$showid1 = doan_show_nhanxet($con,$id);
	if(isset($_POST['btnsubmit'])){
		$doan = htmlentities($_POST['name']);
		$noidung = $_POST['noidung'];
		$active = $_POST['active'];
		if(!empty($khoahoc)){
			khoahoc_update($con,$id,$khoahoc,$noidung,$active);
			echo "<script>alert('Cập Nhật Thành Công')</script>";
			//sleep(5);
			echo "<script>window.location.href='khoahoc.php'</script>";
		}
	}
?>

          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading"><b>Đồ án</b></div>
			  <div class="noidung">
              	<form class="form-horizontal" action="" method="POST">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Tên Đồ Án:</label>
				    <div class="col-sm-10">
				      <input type="text" value="<?=$showid['ten']?>" name="name" class="form-control" id="email" placeholder="Tên">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Nội dung:</label>
				    <div class="col-sm-10">
				    	<input type="text" value="<?=$showid['ten']?>" name="name" class="form-control" id="email" placeholder="Nội dung">
				      <?php 
				      	while($nhanxet = mysqli_fetch_assoc($showid1)):
				      ?>
				      <p><?=$nhanxet['noidung']?></p>
				  <?php endwhile; ?>
				    </div>
				  </div>


				  
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" name="btnsubmit" class="btn btn-primary">cập nhật</button>
				    </div>
				  </div>
				</form>
			  </div>	
            </div>
          </div>
<?php include_once('include/footer.php'); ?>