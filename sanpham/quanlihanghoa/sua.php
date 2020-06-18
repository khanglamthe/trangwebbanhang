
<?php
  include('../config.php');
	$sql = "select * from hanghoa where MSHH='$_GET[id]' ";
	$row=mysqli_query($conn,$sql);
	$dong=mysqli_fetch_array($row);
 ?>
<div class="button_themsp">
<a href="../quanlihanghoa/lietke.php">Liệt kê sản phẩm</a> 
</div>
<form action="../quanlihanghoa/xuly.php?id=<?php echo $dong['MSHH'] ?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="600" border="1">
  <tr>
    <td colspan="2" style="text-align:center;font-size:25px;">Sửa sản phẩm</td>
  </tr>
  <tr>
    <td width="97">Tên sản phẫm</td>
    <td width="87"><input type="text" name="tensp" value="<?php echo $dong['TenHH'] ?>"></td>
  </tr>
  <tr>
    <td>Mã SP</td>
    <td><input type="text" name="masp" value="<?php echo $dong['MSHH'] ?>"></td>
  </tr>
   <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh" /><img src="modules/quanlysanpham/uploads/<?php echo $dong['hinhanh'] ?>" width="80" height="80"></td>
  </tr>
  <tr>
    <td>Giá</td>
    <td><input type="text" name="gia" value="<?php echo $dong['Gia'] ?>"></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td><textarea name="mota" cols="40" rows="10"><?php echo $dong['MoTaHH'] ?></textarea></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong" value="<?php echo $dong['SoLuongHangHoa'] ?>"></td>
  </tr>
  <tr>
  <?php
  include('../config.php');
  $sql_loaisp = "select * from nhomhanghoa";
  $row_loaisp=mysqli_query($conn,$sql_loaisp);
  ?>
    <td>Loại sản phẩm</td>
    <td><select name="loaisp">
     <?php
	while($dong_loaisp=mysqli_fetch_array($row_loaisp)){
		if($dong['MaNhom']==$dong_loaisp['MaNhom']){
	?>
    	<option selected="selected" value="<?php echo $dong_loaisp['MaNhom'] ?>"><?php echo $dong_loaisp['TenNhom'] ?></option>
        <?php
	}else{
		?>
       <option value="<?php echo $dong_loaisp['MaNhom'] ?>"><?php echo $dong_loaisp['TenNhom'] ?></option>
        <?php
	}
	}
		?>
    </select></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" value="Sửa sản phẩm">
    </div></td>
  </tr>
</table>
</form>


