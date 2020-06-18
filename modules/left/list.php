<?php
    include("../config.php");
	$sql_loai="select * from nhomhanghoa order by MaNhom desc ";
	$row_loai=mysqli_query($conn,$sql_loai);
?>
<div class="box_list">
            <div class="tieude">
            	<h3>Loại phụ kiện</h3>
            </div>
            	<ul class="list">
                <?php
				while($dong_loai= mysqli_fetch_array($row_loai)){
				?>
                	<li><a href="../modules/right/loaisp.php?id=<?php echo $dong_loai['MaNhom'] ?>"><?php echo $dong_loai['TenNhom'] ?></a></li>
                  <?php
				}
				  ?>
                </ul>
                </div><!--Ket thuc div box loai phu kien -->
                   <div class="tieude">
            	<h3>Hàng bán chạy</h3>
            		</div>
                    <?php
					$sql_banchay=mysqli_query($conn,"select * from hanghoa order by MSHH desc limit 8");
					
					?>
            	<ul class="hangbanchay">	
                <?php
				while($dong_banchay=mysqli_fetch_array($sql_banchay)){
				?>
                	<li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong_banchay['loaisp'] ?>&id=<?php echo $dong_banchay['MSHH'] ?>">
                    	<img src="../sanpham/quanlihanghoa/uploads/<?php echo $dong_banchay['hinh'] ?>" width="150" height="150" />
                    	<p><?php echo $dong_banchay['TenHH'] ?></p>
                        <p style="color:red;"><?php echo number_format($dong_banchay['Gia']).' '.'VNĐ' ?></p>
                    </a></li>
                    <?php
				}
					?>
                </ul>
                </div><!--Ket thuc div box hang ban chay -->