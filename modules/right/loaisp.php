<?php
  	include('../right/config.php');
	$sql_loaisp="select * from hanghoa where hanghoa.MaNhom='$_GET[id]'";
	$num_loaisp=mysqli_query($conn,$sql_loaisp);
	$count=mysqli_num_rows($num_loaisp);
	
?>
<?php
	$sql_tenloaisp="select TenNhom from nhomhanghoa where MaNhom='$_GET[id]' ";
	$row=mysqli_query($conn,$sql_tenloaisp);
	$dong=mysqli_fetch_array($row);
?>
	<div class="tieude"><?php echo $dong['TenNhom'] ?></div>
                	<ul class="product">
                     <?php
					 if($count>0){
						while($dong_loaisp=mysqli_fetch_array($num_loaisp)){
						?>
                    	<li><a href="../modules/right/chitietsp?idloaisp=<?php echo $dong_loaisp['MaNhom'] ?>&id=<?php echo $dong_loaisp['MSHH'] ?>">
                       
                        	<img src="../sanpham/quanlihanghoa/uploads/<?php echo $dong_loaisp['hinh'] ?>" width="150" height="150" />
                            <p><?php echo $dong_loaisp['TenHH'] ?></p>
                            <p><?php echo $dong_loaisp['Gia'] ?></p>
                            
                        	<p>Chi tiết</p>
                        </a></li>
                       <?php
						}
	}else{
		echo 'Hiện chưa có sản phẩm...';
	}
					   ?>
                    </ul>
                
            
            </div>