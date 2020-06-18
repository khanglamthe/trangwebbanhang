<?php
	include('../config.php');
	$sql_moinhat="select * from hanghoa order by MSHH desc limit 0,6";
	$row_moinhat=mysqli_query($conn,$sql_moinhat);
	
?>
	<div class="tieude"> <h3>Sản phẩm mới nhất</h3>
</div>
                	<ul class="product">
                    <?php
					while($dong_moinhat=mysqli_fetch_array($row_moinhat)){
					?>
                    	<li><a href="../modules/right/chitietsp.php?idloaisp=<?php echo $dong_moinhat['MaNhom'] ?>&id=<?php echo $dong_moinhat['MSHH'] ?>">
                        	<img src="../sanpham/quanlihanghoa/uploads/<?php echo $dong_moinhat['hinh'] ?>" width="150" height="150" />
                            <p style="color:black"><?php echo $dong_moinhat['TenHH'] ?></p>
                            <p style="color:red;font-weight:bold;  width:140px;
                            height:25px; line-height:30px;margin-left:35px;margin-bottom:5px;"><?php echo number_format($dong_moinhat['Gia']).' '.'VNĐ'?></p>
                            
                        	
                        </a></li>
                      <?php
					}
					  ?>
                    </ul>
                 <div class="clear"></div>
                 
 <?php
 	$sql_loai=mysqli_query($conn,"select * from nhomhanghoa ");
	
	while($dong_loai=mysqli_fetch_array($sql_loai)){
		
	echo '<div class="tieude"><h3>'.$dong_loai['TenNhom'].'</h3></div>';
 	$sql_loaisp="select * from nhomhanghoa inner join hanghoa on hanghoa.MaNhom=nhomhanghoa.MaNhom where hanghoa.MaNhom='".$dong_loai['MaNhom']."'";
	$row=mysqli_query($conn,$sql_loaisp);
	$count=mysqli_num_rows($row);
	if($count>0){
	?>
   
                 
         
                	<ul class="product">
                     <?php
			
			while($dong=mysqli_fetch_array($row)){
					
 				?>
                    	<li><a href="../modules/right/chitietsp.php?idloaisp=<?php echo $dong['MaNhom'] ?>&id=<?php echo $dong['MSHH'] ?>">
                        	<img src="../sanpham/quanlihanghoa/uploads/<?php echo $dong['hinh'] ?>" width="150" height="150" />
                            <p style="color:black"><?php echo $dong['TenHH']?></p>
                            <p style="color:red;font-weight:bold;  width:140px;
                            height:25px; line-height:30px;margin-left:35px;margin-bottom:5px;"><?php echo number_format($dong['Gia']).' '.'VNĐ' ?></p>
                            
                        	
                        </a></li>
                        <?php
			}
	}else{
		echo '<h3 style="margin:5px;font-style:italic;color:#000">Hiện chưa có sản phẩm...</h3>';
	}
			
			
						?>
                    </ul>
                     <div class="clear"></div>
                <?php
	
	
	}
	
	
				?>
          
            