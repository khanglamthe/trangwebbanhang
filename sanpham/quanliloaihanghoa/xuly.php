<?php
	include("../quanliloaihanghoa/config.php");
	$_maloaisp=$_POST['maloaisp'];
	$_tenloaisp=$_POST['tenloaisp'];
	
	if(isset($_POST['them'])){
		//them
		$sql_them=("insert into nhomhanghoa value('$_maloaisp','$_tenloaisp')");
		mysqli_query($conn,$sql_them);
		header('http://localhost/trangwebbanhang/sanpham/quanliloaihanghoa/lietke.php');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "update nhomhanghoa set MaNhom='$_maloaisp',TenNhom='$_tenloaisp' where nhomhanghoa.MaNhom='$_GET[id]'";
		mysqli_query($conn,$sql_sua);
		header('http://localhost/trangwebbanhang/sanpham/quanliloaihanghoa/lietke.php');
	}
?>
