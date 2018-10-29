<?php require_once('include/header.php'); ?>
<?php require_once('include/menu.php'); ?>
  <div class="container">
    <div class="row">
<?php require_once('include/sidebar-left.php'); ?>
        
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading">Tài nguyên</div>
	            <ul class="list-group">
                <?php $listtainguyen = f_tainguyen_show($con); while($tainguyen = mysqli_fetch_assoc($listtainguyen)){ ?> 
	              <li class="list-group-item"><a target="_blank" href="tainguyen/<?=$tainguyen['link']?>"><?=$tainguyen['name']?></a></li>
                <?php }?>
	            </ul>
          </div>
        </div>
         
      </div>
  </div>
<?php require_once('include/footer.php'); ?>