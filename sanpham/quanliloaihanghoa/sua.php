<?php
  include("../quanliloaihanghoa/config.php");
  $_manhom=$_GET['id'];
  $sql = "select * from nhomhanghoa where MaNhom = '$_manhom'";
  $row=mysqli_query($conn,$sql);
  $dong=mysqli_fetch_array($row);
?>
<div class="button_themsp">
<a href="../quanliloaihanghoa/lietke.php">Liệt kê loại sản phẩm</a> 
</div>
<form action="../quanliloaihanghoa/xuly.php?id=<?php echo $dong['MaNhom'] ?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
  <tr>
    <td colspan="2" style="text-align:center; font-size:25px">sửa loại hàng hóa</td>
    <td width="87"><input type="text" name="maloaisp"></td>
  </tr>
  </tr>
  <tr>
    <td width="97">Tên loại hàng hóa</td>
    <td width="87"><input type="text" name="tenloaisp"></td>
  </tr>
  </tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" value="Sửa">
    </div></td>
  </tr>
</table>
</form>


