<?php require_once('include/header.php'); ?>
<?php require_once('include/menu.php'); ?>
<?php 
$idkhoahoc = $_POST['idkhoahoc'];
$masv = $_POST['masv'];
  if($masv!=NULL && $idkhoahoc!=NULL){
  $getdiem = get_diem($con,$idkhoahoc,$masv);
  $getname1 = get_masv($con,$masv);
  $getname =  "Mã Sinh Viên: ".$getname1['masv'];
} else if(isset($idkhoahoc)){
  $getdiem = get_diem_idkhoa($con,$idkhoahoc);
  $getname1 = get_khoa($con,$idkhoahoc);
  $getname =  "Khoá Học: ".$getname1['name'];
}

?>
  <div class="container">
    <div class="row">

 <?php require_once('include/sidebar-left.php'); ?>

        <div class="col-md-9">

          <div class="panel panel-default">
            <div class="panel-heading">Tìm giảng viên</div>
            <div class="noidung">
              <div class="row">
                <div class="col-lg-6">
                  <div class="input-group">
                    <form action="" method="POST">
                      <input style="margin-bottom:5px;" type="text" name="masv" class="form-control" aria-label="..." placeholder="Mã giảng Viên">
                      <select style="margin-bottom:5px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="idkhoahoc" class="form-control" id="sel1">
                        <option>-Chọn đề tài-</option>
                        <?php $listkhoahoc = f_showkhoahoc($con);$stt=1; while($show = mysqli_fetch_assoc($listkhoahoc)){ ?>
                        <option value="<?=$show['id']?>"><?=$show['name']?></option>
                        <?php }?>
                      </select>
                      <button type="submit" class="btn btn-primary" name="btnsubmit" value="ok">Tìm Kiếm</button>
                    </form>
                  </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
            </div>
          </div>
          
          <div class="panel panel-default">
            <div class="panel-heading"><?=$getname?></div>
            <table class="table">
              <thead>
                <tr>
                  <th>TT</th>
                  <th>Mã GV</th>
                  <th>Họ Tên</th>
                  <th scope="col">Chuyên môn</th>
                </tr>
              </thead>
              <tbody>
                <?php $stt=1;while($showdiem = mysqli_fetch_assoc($getdiem)): 
                  $get_name = showname_getdiem($con,$showdiem['masv']);
                ?>
                <tr>
                  <td><?=$stt++?></td>
                  <td><?=$get_name['masv']?></td>
                  <td><?=$get_name['name']?></td>
                  <td><?=$showdiem['dqt']?></td>
                <?php endwhile;?>
                </tr>
              </tbody>
            </table>
          </div>  
          
        </div>
    </div>         
    </div>
         
<?php require_once('include/footer.php'); ?>
<!--đổi dữ liệu từ sinh viên sang giảng viên-->