<?php
	include("../quanliloaihanghoa/config.php");
	$sql_xoa = "delete from nhomhanghoa where nhomhanghoa.MaNhom ='$_GET[id]'";
	mysqli_query($conn,$sql_xoa);
	header('http://localhost/trangwebbanhang/sanpham/quanliloaihanghoa/lietke.php');
?>