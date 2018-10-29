<?php include_once('include/header.php'); ?>
<?php 
	if(isset($_POST['btnsubmit'])){
		$tieude = htmlentities($_POST['name']);
		$active = $_POST['active'];
		$noidung = $_POST['noidung'];
		if(!empty($tieude)){
			tintuc_add($con,$tieude,$noidung);
			echo "<script>alert('Thêm Thành Công')</script>";
			echo "<script>window.location.href='khoahoc.php'</script>";
		}
	}
?>

          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Thêm Tin</div>
			  <div class="noidung">
              	<form class="form-horizontal" action="" method="POST">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Tieu Đề:</label>
				    <div class="col-sm-10">
				      <input type="text" name="name" class="form-control" id="email" placeholder="Tiêu Đề">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Nội Dung:</label>
				    <div class="col-sm-10">
				      <textarea type="text" rows="10"  name="noidung" class="form-control" placeholder="Nội Dung"></textarea>
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