<?php include_once('include/header.php'); ?>
<?php 
  $masv = $_POST['masv'];
  $shows = nhapdiemsv($con,$masv);
  $id=json_encode($_GET['id']);
  $listsv = showsv($con,$id);
?>
    <div class="container">
    <div class="row">

       <div class="col-md-9">

          <div class="panel panel-default">
            <div class="panel-heading">Chọn Khoá Học</div>
            <div class="noidung">
              <SELECT class='form-control' onchange="window.location.href='?id='+this.options[this.selectedIndex].value">
                <option>--Chọn Khoá Học--</option>
                <?php $khoahoc = showkhoahoc($con);while ($row = mysqli_fetch_assoc($khoahoc)){?>     
                  <option <?php if($row['id']==$_GET['id']){echo "selected";} ?> value="<?=$row['id']?>"><?=$row['name']?></option>
                <?php } ?>
              </select> 
            </div>
          </div>
            
            <div class="panel panel-default">
              <div class="panel-heading">Danh Sách Sinh Viên</div>
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
              <?php $stt=1; while($show = mysqli_fetch_assoc($listsv)){ ?>
              <tr>
                <td><?=$stt++?></td>
                <td><?=$show['name']?></td>
                <td><?=$show['masv']?></td>
                <td>
                    <a class="label label-info" href="diemsinhvien-add.php?masv=<?=$show['masv']?>">Nhập Điểm</a>
                    <a class="label label-danger" href="diemsinhvien-view.php?masv=<?=$show['masv']?>">Xem Điểm</a>
                    </td>
              </tr>
            </tbody>
        <?php } ?>
          </table>
        </div>  
            </div>
          </div>
        </div>
    </div>         
    </div>
<?php include_once('include/footer.php'); ?>