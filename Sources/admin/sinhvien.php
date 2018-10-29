<?php include_once('include/header.php'); ?>

          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading"></div>
			  <div class="noidung">
              	<table class="table table-hover">
				    <thead>
				      <tr>
				        <th>STT</th>
				        <th>Họ Tên</th>
				        <th>Mã SV</th>
				        <th>Công cụ</th>
				      </tr>
				    </thead>

				    <tbody>
				<?php $listsv = showsv($con);$stt=1; while($show = mysqli_fetch_assoc($listsv)){ ?>
				      <tr>
				        <td><?=$stt++?></td>
				        <td><?=$show['name']?></td>
				        <td><?=$show['masv']?></td>
				        <td>Công cụ
		           		<a class="label label-info" href="sinhvien-edit.php?id=<?=$show['id']?>">Sửa</a>
		                <a class="label label-danger" onclick="return confirm('Bạn có muốn xóa id : <?=$show['id']?>')" href="sinhvien-delete.php?id=<?=$show['id']?>">Xóa</a>
		                </td>
				      </tr>
				    </tbody>
				<?php } ?>
				  </table>
			  </div>	
            </div>
          </div>
<?php include_once('include/footer.php'); ?>