<?php require_once('include4/header.php'); ?>
<?php require_once('include4/menu.php'); ?>
<?php 

if(empty($_GET['idkhoa'])){
	$khoahoc = f_showkhoahoc($con);
}
if(!empty($_GET['idkhoa'])){
	$id = $_GET['idkhoa'];
	$khoahoc = f_showkhoahoc_id($con,$id);
	$namekhoahoc = $khoahoc['name'];
}
?>
  <div class="container">
    <div class="row">

        <?php require_once('include/sidebar-left.php'); ?>

        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading">Giới thiệu đề tài:  <?=$namekhoahoc?></div>
            
            <?php if($_GET['idkhoa']==NULL) {?>  
			<ul class="list-group">
                <?php  while($kh = mysqli_fetch_assoc($khoahoc)){ ?> 
	              <li class="list-group-item"><a  href="khoahoc.php?idkhoa=<?=$kh['id']?>"><?=$kh['name']?></a></li>
                <?php }?>
	            </ul>
			<?php } else { echo '<div class="noidung">'.$khoahoc['noidung'];}?>
            </div>
          </div>
        </div>
         
    </div>
  </div>
<?php require_once('include/footer.php'); ?>
