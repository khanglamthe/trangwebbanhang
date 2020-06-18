<?php
	if(isset($_POST['logout'])){
		unset($_SESSION['dangnhap']);
		header('location:../login.php');
	}
?>
<div class="menu">
    	<ul>
        	<li><a href="../sanpham/quanliloaihanghoa/them.php">Quản lý nhóm hàng hóa</a></li>
            <li><a href="../sanpham/quanlihanghoa/them.php">Quản lý sản phẩm</a></li>
            
            <li><a href="index.php?quanly=tintuc&ac=them">Quản lý tin tức</a></li>
            <li><a href="#">Quản lý hóa đơn</a></li>
            <form action="" method="post" enctype="multipart/form-data">
            <input type="submit" name="logout" value="Đăng xuất" style="background:#06F;color:#fff;width:200px;height:30px;" />
            </form>
        </ul>
       
    </div>

 <form action="index.php?quanly=timkiem&ac=sp" method="post" enctype="multipart/form-data">
     <p><input type="text" name="masp" placeholder="Nhập mã sản phẩm..." id="timkiem" required="required" />
        <input type="submit" id="button_timkiem" name="timkiem" value="Tìm sản phẩm" />
        </p>
        </form>