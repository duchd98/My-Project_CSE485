<?php require_once('include/header.php'); ?>
<?php require_once('include/menu.php'); ?>
  <div class="container">
    <div class="row">
<?php require_once('include/sidebar-left.php'); ?>
        
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading">Tin Nóng</div>
	            <ul class="list-group">
                <?php $listtin = show_tintuc($con); while($tin = mysqli_fetch_assoc($listtin)){ ?> 
	              <li class="list-group-item"><a  href="tintuc-xem.php?id=<?=$tin['id']?>"><?=$tin['name']?></a></li>
                <?php }?>
	            </ul>
          </div>
        </div>
         
      </div>
  </div>
<?php require_once('include/footer.php'); ?>