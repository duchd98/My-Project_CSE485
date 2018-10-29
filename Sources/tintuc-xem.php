<?php require_once('include/header.php'); ?>
<?php require_once('include/menu.php'); ?>
<?php 
$id = $_GET['id'];
$showtin = show_tintuc_id($con,$id);
?>
  <div class="container">
    <div class="row">
<?php require_once('include/sidebar-left.php'); ?>
        
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading">Tin mới</div>
	            <div class="noidung">
	            	<?=$showtin['noidung']?>
	            </div>
          </div>
        </div>
         
      </div>
  </div>
<?php require_once('include/footer.php'); ?>