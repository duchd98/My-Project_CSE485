<div class="col-md-3">
            
		<div class="panel panel-default">
            <div class="panel-heading">Tin mới</div>
	            <ul class="list-group">
                <?php $listtin = show_tintuc($con); while($tin = mysqli_fetch_assoc($listtin)){ ?> 
	              <li class="list-group-item"><a  href="tintuc-xem.php?id=<?=$tin['id']?>"><?=$tin['name']?></a></li>
                <?php }?>
	            </ul>
          </div>

          </div>