
<div class="button_themsp">
<a href="../quanlihanghoa/lietke.php">Liệt kê sản phẩm</a> 
</div>
<form action="../quanlihanghoa/xuly.php" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="600" border="1">
  <tr>
    <td colspan="2" style="text-align:center;font-size:25px;">Thêm  sản phẩm</td>
  </tr>
  <tr>
    <td width="97">Tên sản phẩm</td>
    <td width="87"><input type="text" name="tensp"></td>
  </tr>
  <tr>
    <td>Mã SP</td>
    <td><input type="text" name="masp"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh" /></td>
  </tr>
  <tr>
    <td>Giá</td>
    <td><input type="text" name="gia"></td>
  </tr>
  <tr>
    <td>Mô Tả</td>
    <td><textarea name="mota" cols="40" rows="10"></textarea></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong"></td>
  </tr>
  <tr>
  <?php
  include("../quanliloaihanghoa/config.php");
  $sql_loaisp = "select MaNhom,TenNhom from nhomhanghoa";
  $row_loaisp=mysqli_query($conn,$sql_loaisp);
  ?>
    <td>Loại sản phẩm</td>
    <td><select name="loaisp">
    <?php
	while($dong_loaisp=mysqli_fetch_array($row_loaisp)){
	?>
    	<option value="<?php echo $dong_loaisp['MaNhom'] ?>"><?php echo $dong_loaisp['TenNhom'] ?></option>
        <?php
	}
		?>
    </select></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="them" value="Thêm sản phẩm">
    </div></td>
  </tr>
</table>
</form>


