<?php include_once('include/header.php'); ?>
<?php 
  $masv = $_GET['masv'];
  
?>
    <div class="container">
    <div class="row">

       <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Điểm Môn</div>
        <div class="noidung">
                <table class="table table-hover">
            <thead>
              <tr>
                <th>Khoá</th>
                <th>Điểm Quá Trình</th>
                <th>Công cụ</th>
              </tr>
            </thead>

            <tbody>
              <?php $listshows = xemdiemsv($con,$masv); while($shows = mysqli_fetch_assoc($listshows)){
                $name_khoahoc = show_name_khoahoc($con,$shows['idkhoahoc']);
               ?>
             <tr>
              <td><?=$name_khoahoc['name']?></td>
                <td><?=$shows['dqt']?></td>
                <td>
                    <a class="label label-info" href="diemsinhvien-edit.php?masv=<?=$masv?>&khoahoc=<?=$shows['idkhoahoc']?>">Sửa</a>
                    <a class="label label-danger" href="diemsinhvien-delete.php?masv=<?=$masv?>&khoahoc=<?=$shows['idkhoahoc']?>">Xoá</a>
                    </td>
              </tr>
              <?php }?>
            </tbody>
          </table>
        </div>  
            </div>
          </div>
          
        </div>
    </div>         
    </div>
<?php include_once('include/footer.php'); ?>