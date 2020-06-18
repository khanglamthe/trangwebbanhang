<?php
  include('../config.php');
  $id=$_GET['id'];
  $sql=mysqli_query($conn,"select * from hanghoa where MSHH='$id'");
	$dong=mysqli_fetch_array($sql);
?>
<div class="button_themsp">
<a href="../gallery/them.php?id=<?php echo $id?>">Thêm bộ sưu tập</a> 
</div>
<div class="button_themsp">
<a href="../quanlihanghoa/them.php">Quay lại</a> 
</div>
<table width="100%" border="1">
  <tr>
    <td>Tên sản phẩm</td>
    <td>Hình ảnh</td>
    <td>bộ sưu tập</td>
    <td>Quản lý</td>
  </tr>
  <tr>
    <td><?php echo $dong['TenHH'] ?></td>
    <td><img src="../quanlihanghoa/uploads/<?php echo $dong['hinh'] ?>" width="150" height="150"></td>
    <td>
    <?php
	$sql_gal=mysqli_query($conn,"select hinh from hinhanh where MSHH='$id'");
	$count=mysqli_num_rows($sql_gal);
	if($count>0){
	while($dong_gal=mysqli_fetch_array($sql_gal)){
	?>
    <p style="margin-bottom:10px;"><img src="../gallery/uploads/<?php echo $dong_gal['hinh'] ?>" width="50" height="50"></p>
    <?php
	}

	}else{
		echo 'Chưa có hình ảnh sản phẫm. vui lòng Thêm bộ sưu tập';
	}
	?>
    </td>
    <td><a class="delete_link" href="../gallery/xuly.php?quanly=xoa&id=<?php echo $id ?>" style="text-decoration:none;color:#000;font-size:20px;">Xóa tất cả hình ảnh</a></td>
  </tr>
</table>
