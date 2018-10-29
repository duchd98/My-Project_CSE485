<?php include_once('include/header.php'); ?>
<?php 
	if(isset($_POST['btnsubmit'])){
		$khoahoc = htmlentities($_POST['name']);
		$noidung = $_POST['noidung'];
		if(!empty($khoahoc)){
			khoahoc_add($con,$khoahoc,$noidung);
			echo "<script>alert('Thêm Thành Công')</script>";
			//sleep(5);
			echo "<script>window.location.href='khoahoc.php'</script>";
		}
	}
?>

          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Thêm Khoá Học</div>
			  <div class="noidung">
              	<form class="form-horizontal" action="" method="POST">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Tên Khoá Học:</label>
				    <div class="col-sm-10">
				      <input type="text" name="name" class="form-control" id="email" placeholder="Khoá Học">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Nội Dung:</label>
				    <div class="col-sm-10">
				      <textarea type="text" rows="10" style="resize:none" name="noidung" class="form-control" placeholder="Nội Dung khoá Học"></textarea>
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
<!-- của giáo viên-->