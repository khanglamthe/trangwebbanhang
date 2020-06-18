<?php
  include("../quanliloaihanghoa/config.php");
	$sql_lietkesp="select * from nhomhanghoa order by MaNhom desc ";
	$row_lietkesp=mysqli_query($conn,$sql_lietkesp);

?>
<div class="button_themsp">
<a href="../quanliloaihanghoa/them.php">Thêm Mới</a> 
</div>

<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Mã loại Hàng hóa</td>
    <td>Tên Loại Hàng hóa</td>
    <td colspan="2">Quản lý</td>

  </tr>
  <?php
  $i=1;
  while($_dong=mysqli_fetch_array($row_lietkesp)){

  ?>
  <tr>
    <td><?php  echo $i;?></td>
    <td><?php echo $_dong['MaNhom'] ?></td>
    <<td><?php echo $_dong['TenNhom'] ?></td>
    ?></td>
    <td><a href="../quanliloaihanghoa/sua.php?id=<?php echo $_dong['MaNhom'] ?>">Sửa</a></td>
   <td><a href="../quanliloaihanghoa/xuly1.php?id=<?php echo $_dong['MaNhom'] ?>">xóa</a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
