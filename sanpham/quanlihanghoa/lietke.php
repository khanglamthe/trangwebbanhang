
<?php
  include('../config.php');
	if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
	}else{
		$trang='';
	}
	if($trang =='' || $trang =='1'){
		$trang1=0;
	}else{
		$trang1=($trang*5)-5;
	}
	$sql_lietkesp="select * from hanghoa,nhomhanghoa where hanghoa.MaNhom=nhomhanghoa.MaNhom order by hanghoa.MSHH desc limit $trang1,5 ";
	$row_lietkesp=mysqli_query($conn,$sql_lietkesp);

?>
<div class="button_themsp">
<a href="../quanlihanghoa/them.php">Thêm Mới</a> 
</div>

<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Tên sản phẩm</td>
    <td>Mã sp</td>
    <td>Hình ảnh</td>
    <td>Giá </td>
    <td>Số lượng</td>
    <td>Loại hàng</td>
    <td colspan="3">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($row_lietkesp)){

  ?>
  <tr>
  	
    <td><?php  echo $i;?></td>
    <td><?php echo $dong['TenHH'] ?></td>
    <td><?php echo $dong['MSHH'] ?></td>
    <td><img src="../sanpham/quanlihanghoa/uploads/<?php echo $dong['hinh'] ?>" width="80" height="80" />
    <a href="../gallery/lietke.php?id=<?php echo $dong['MSHH'] ?>" style="text-align:center;text-decoration:none; font-size:18px;color:#06F;">Gallery</a>
    </td>
    <td><?php echo number_format($dong['Gia']) ?></td>
    <td><?php echo $dong['SoLuongHangHoa'] ?></td>
    <td><?php echo $dong['TenNhom'] ?></td>
    ?></td>
    <td><a href="../quanlihanghoa/sua.php?id=<?php echo $dong['MSHH'] ?>" >Thêm hình ảnh</a></td>

    <td><a href="../quanlihanghoa/sua.php?id=<?php echo $dong['MSHH'] ?>" >Sửa</a></td>
    <td><a href="../quanlihanghoa/xoa.php?id=<?php echo $dong['MSHH']?>" class="delete_link">Xóa</a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
<div class="trang">
	Trang :
    <?php
    include("../config.php");
	$sql_trang=mysqli_query($conn,"select * from hanghoa");
	$count_trang=mysqli_num_rows($sql_trang);
	$a=ceil($count_trang/5);
	for($b=1;$b<=$a;$b++){
		
		if($trang==$b){
		
		echo '<a href="../quanlihanghoa/lietke.php?trang='.$b.'" style="text-decoration:underline;color:red;">'.$b.' ' .'</a>';
        
	}else{
		echo '<a href="../quanlihanghoa/lietke.php?trang='.$b.'" style="text-decoration:none;color:#000;">'.$b.' ' .'</a>';
	}
	}
	?>
</div>
