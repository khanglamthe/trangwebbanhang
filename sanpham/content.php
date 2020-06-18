 <div class="content">
    	<div class="box_contains">
        	<?php
				if(isset($_GET['quanly'])&&$_GET['ac']){
					$tam=$_GET['quanly'];
					$tam1=$_GET['ac'];
					}else{
						$tam='';
					}if(($tam == 'loaisp')&&($tam1 == 'them')){
						include('../sanpham/quanliloaihanghoa/them.php');
					}elseif(($tam == 'loaisp')&&($tam1 == 'lietke')){
						
						include('../modules/quanlyloaisp/lietke.php');
					}elseif(($tam == 'loaisp')&&($tam1 == 'sua')){
						
						include('../sanpham/quanliloaihanghoa/sua.php');
					}elseif(($tam == 'sanpham')&&($tam1 == 'them')){
						
						include('../sanpham/quanlihanghoa/them.php');
					}elseif(($tam == 'sanpham')&&($tam1 == 'lietke')){
						
						include('../sanpham/quanlihanghoa/lietke.php');
					}elseif(($tam == 'sanpham')&&($tam1 == 'sua')){
						
						include('../sanpham/quanlihanghoa/sua.php');
					}elseif(($tam == 'timkiem')&&($tam1 == 'sp')){
						
						include('../sanpham/timkiem/timkiem.php');
					}elseif(($tam == 'gallery')&&($tam1 == 'them')){
						
						include('../sanpham/gallery/them.php');
					}elseif(($tam == 'gallery')&&($tam1 == 'lietke')){
						
						include('../sanpham/gallery/lietke.php');
					}elseif(($tam == 'gallery')&&($tam1 == 'sua')){
						
						include('../sanpham/gallery/sua.php');
					}else{
						include('../sanpham/quanlihanghoa/lietke.php');
					}
			?>
        
        </div>
    </div>
    <div class="clear"></div>