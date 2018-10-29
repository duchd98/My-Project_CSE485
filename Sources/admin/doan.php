<?php include_once('include/header.php'); ?>

          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Đồ Án</a></div>
			  <div class="noidung">
              	<table class="table table-hover">
				    <thead>
				      <tr>
				        <th>STT</th>
				        <th>Đồ án</th>
				        <th>GVHD</th>
				        <th>Công Cụ</th>
				      </tr>
				    </thead>

				    <tbody>
				<?php 
				$level = $_SESSION['admin_level'];
				if($level=='3'){
					$listdoan = showdoan_level($con,$_SESSION['admin_login']);
				} else {
					$listdoan = showdoan($con);
				}
				$stt=1; while($show = mysqli_fetch_assoc($listdoan)){ 
					$showtendoan = showtendoan($con,$show['gvhd']);
					$gvhd = doan_show_id($con,$show['gvhd']);?>
				      <tr>
				        <td><?=$stt++?></td>
				        <td><?=$showtendoan['ten']?></td>
				        <td><?=$gvhd['user']?></td>
				        <td>
		                <a class="label label-info" href="doan-edit.php?id=<?=$show['id']?>">Sửa</a>
		                <a class="label label-danger" onclick="return confirm('Bạn có muốn xóa id : <?=$show['id']?>')" href="doan-delete.php?id=<?=$show['id']?>">Xóa</a>
		                </td>
				      </tr>
				    </tbody>
				<?php } ?>
				  </table>
			  </div>	
            </div>
          </div>
<?php include_once('include/footer.php'); ?>