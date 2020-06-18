<?php
	include('../config.php');
	$tensp=$_POST['tensp'];
	$masp=$_POST['masp'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'../quanlihanghoa/uploads/'.$hinhanh);
	$gia=$_POST['gia'];
	$soluong=$_POST['soluong'];
	$mota=$_POST['mota'];
	$loaisp=$_POST['loaisp'];
	//$trang=$_GET['trang'];
	
	if(isset($_POST['them'])){
		//them
		 $sql_them=("insert into hanghoa (MSHH,TenHH,SoLuongHangHoa,Gia,MaNhom,hinh,MoTaHH) value('$masp','$tensp','$soluong','$gia','$loaisp','$hinhanh','$mota')");
		mysqli_query($conn,$sql_them);
		header('http://localhost/trangwebbanhang/sanpham/quanlihanghoa/lietke.php');
	}elseif(isset($_POST['sua'])){
		//sua
		if($hinhanh!=''){
	  $sql_sua = "update hanghoa set MSHH='$masp',TenHH='$tensp',Gia='$gia',SoLuongHangHoa='$soluong',MaNhom='$loaisp' ,hinh='$hinhanh',MoTaHH='$mota' where MSHH='$_GET[id]'";
	  mysqli_query($conn,$sql_sua);
		}else{
		
			$sql_sua = "update hanghoa set TenHH='$tensp',MSHH='$masp',Gia='$gia',SoLuongHangHoa='$soluong',MoTaHH='$mota',MaNhom='$loaisp' where MSHH='$_GET[id]'";
			mysqli_query($conn,$sql_sua);
		}
		header('http://localhost/trangwebbanhang/sanpham/quanlihanghoa/lietke.php');
	}else{
		$sql_xoa = "delete from sanpham where idsanpham = $_GET[id]";
		mysqli_query($conn,$sql_xoa);
		header('location:../../index.php?quanly=sanpham&ac=lietke');
	}
?>
