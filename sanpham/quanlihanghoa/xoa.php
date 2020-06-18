<?php
	include('../config.php');
	$sql_xoa = "delete from hanghoa where MSHH = '$_GET[id]'";
	$sql_xoahinh = "delete from hinhanh where MSHH = '$_GET[id]'";

	mysqli_query($conn,$sql_xoa);
	mysqli_query($conn,$sql_xoahinh);
	header('http://localhost/trangwebbanhang/sanpham/quanlihanghoa/lietke.php');
?>