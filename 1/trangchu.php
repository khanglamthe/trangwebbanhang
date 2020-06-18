<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Website phụ kiện điện thoại</title>

</head>
<body>
	<div class="wrapper">
    	<?php
		$servername = "localhost";
		$database = "quanlybanhang";
		$username = "root";
		$password = "";
// Create connection
		$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
		if (!$conn) {
			exit('Kết nối không thành công!');
}

			//include 'config.php';?>
    
	<div class="header">
        <img src="../hinh/trangchu.png"/>
    </div>
	  <div class="menu">
        	<ul>
            	<li><a href="">Trang chủ</a></li>
                <li><a href="">Sản phẩm</a></li>
                <li><a href="?quanly=dangkymoi">Đăng ký</a></li>
                 <li><a href="?quanly=dangnhap">Đăng nhập</a></li>
                 <li><a href="?quanly=dathang">Giỏ hàng</a></li>
                <li><a href="">Liên hệ</a></li>
            </ul>
        </div>
		<?php
		//include '1/header.php';
		//include '1/menu.php';
		include("../1/content.php");
		//include '1/footer.php';
		?>
	
     <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/tabs.js"></script>

      
        </div>
</body>
</html>