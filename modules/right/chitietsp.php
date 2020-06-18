<?php
  include('../right/config.php');
	$sql="select * from hanghoa where MSHH='$_GET[id]'";
	$num=mysqli_query($conn,$sql);
	$dong=mysqli_fetch_array($num);
?>
	<div class="tieude">Chi tiết sản phẩm</div>
   
                	<div class="box_chitietsp">
                    	<div class="box_hinhanh">
                        	<img src="../sanpham/gallery/uploads/<?php echo $dong['hinh'] ?>" data-zoom-image="imgs/op-lung-sony-z3-pelosi-50.jpg"  width="200" height="200" />
                            <?php
                            $sql_gallery=mysqli_query($conn,'select * from hinhanh where MSHH="$_GET[id]" limit 3');							
							$row_gallery=mysqli_num_rows($sql_gallery);
							
							?>
                            <ul class="hinhanhphongto">
                           	<?php
							if($row_gallery>0){
								while($dong_gallery=mysqli_fetch_array($sql_gallery)){
							?>
                            	<li><img src="../sanpham/gallery/uploads/<?php echo $dong_gallery['hinh'] ?>" id="zoom_01" width="70" height="70" /></li>
                              <?php
								}
							}else{
								echo '<li><img src="../sanpham/gallery/uploads/'.$dong['hinh'].'" id="zoom_01"  width="70" height="70" /></li>';
							
							}
							  ?>
                            </ul>
                        </div>
                        <div class="box_info">
                         <form action="1/update_cart.php?id=<?php echo $dong['MSHH'] ?>" method="post" enctype="multipart/form-data">
                        	<p>
                            	<strong>Tên sản phẫm: </strong><em style="color:red"><?php echo $dong['TenHH'] ?></em></p>

                                           <p><strong>Mã sản phẩm:</strong>  <?php echo $dong['MSHH'] ?> </p> 
                                           <p><strong>Giá bán:</strong><span style="color:red;"> <?php echo number_format($dong['Gia']).' '.'VNĐ'?></span></p> 
                                           <p style="text-decoration:underline;color:blue;"><strong> Tình trạng:</strong> Còn hàng </p> 
                                          
                                           <p><strong>Số lượng:</strong><input type="text" name="soluong" size="3" value="1" /></p>
                                           	 <input type="submit" name="add_to_cart" value="Mua hàng" style="margin:10px;width:100px;height:40px;background:#9F6;color:#000;font-size:18px;border-radius:8px;" />
                                             
                           </form>              
                                       
                           
                        </div><!-- Ket thuc box box_info -->
                    
                    </div><!-- Ket thuc box chitiet sp -->
     			
              		<div class="tabs_panel">
                    	<ul class="tabs">
                        	<li rel="panel1" class="active">Thông tin sản phẩm</li>
                            <li rel="panel2">Hình ảnh sản phẫm</li>
                            <li rel="panel3">Khách hàng đánh giá</li>
                        </ul>
                        <?php
					$sql_thongtinsp=mysqli_query($conn,"select * from hanghoa where MSHH='$_GET[id]'");
					$count_thongtinsp=mysqli_num_rows($sql_thongtinsp);
					if($count_thongtinsp>0){
					$dong_thongtinsp=mysqli_fetch_array($sql_thongtinsp);
					
				?>
                        <div id="panel1" class="panel active">
                        	<p><?php echo $dong_thongtinsp['MoTaHH'] ?></p>
                        
                        </div>
                   <?php
					}else{
						echo '<p style="padding:30px;">Hiện chưa có thông tin chính thức</p>';
					}
				   ?>
                          <div id="panel2" class="panel">
                             <?php
					$sql_hinhanhsp=mysqli_query($conn,"select * from hinhanh where MSHH='$_GET[id]'");
					$count=mysqli_num_rows($sql_hinhanhsp);
					if($count>0){
					while($dong_hinhanhsp=mysqli_fetch_array($sql_hinhanhsp)){
						
				?>
                        	<p style="text-align:center;"><img src="../gallery/uploads/<?php echo $dong_hinhanhsp['hinh'] ?>" width="600" height="600" /></p>
                        <?php
					}
					}else{
						echo '<p>Chưa có hình ảnh</p>';
					}
						?>
                        </div>
                        
                          <div id="panel3" class="panel">
                        	<p>Hàng chính hãng tốt đẹp</p>
                        
                        </div>
                    
                    </div>
                  