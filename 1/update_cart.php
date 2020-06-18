<?php ob_start();?>
<?php
	session_start();
	include('../config.php');
	//
	if(isset($_GET['thoat'])&&$_GET['thoat']==1){
		unset($_SESSION['dangnhap']);
		header("location: ../modules/right/dathang.php");
		exit();
	}
	//tru sp
	if(isset($_GET['tru'])){
		$id=$_GET['tru'];
		foreach($_SESSION['product'] as $cart_item){
			if($id!=$cart_item['id']){
				
				$product[]=array('TenHH'=>$cart_item['TenHH'],'id'=>$cart_item['id'],'SoLuongHangHoa'=>$cart_item['SoLuongHangHoa'],'Gia'=>$cart_item['Gia']);
				$_SESSION['product']=$product;
			}else{
				$giam=$cart_item['SoLuongHangHoa']-1;
				if($cart_item['SoLuongHangHoa']>1){
				$product[]=array('TenHH'=>$cart_item['TenHH'],'id'=>$cart_item['id'],'SoLuongHangHoa'=>$giam,'Gia'=>$cart_item['Gia']);
				
				}else{
					$giam=1;
					$product[]=array('TenHH'=>$cart_item['TenHH'],'id'=>$cart_item['id'],'SoLuongHangHoa'=>$giam,'Gia'=>$cart_item['Gia']);
				}
				$_SESSION['product']=$product;
			}

			header("location: ../modules/right/dathang.php");
			exit();
		}
		
	}
	//cong them sp
	if(isset($_GET['cong'])){
		$id=$_GET['cong'];
		foreach($_SESSION['product'] as $cart_item){
			if($id!=$cart_item['id']){
				
				$product[]=array('TenHH'=>$cart_item['TenHH'],'id'=>$cart_item['id'],'SoLuongHangHoa'=>$cart_item['SoLuongHangHoa'],'Gia'=>$cart_item['Gia']);
				$_SESSION['product']=$product;
			}else{
				$tang=$cart_item['soluong']+1;
				if($cart_item['soluong']<9){
				
				$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$tang,'gia'=>$cart_item['gia']);
				
			}else{
				
				$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']);
			}
			$_SESSION['product']=$product;
			}
			
			header("location: ../modules/right/dathang.php");
			exit();
		}
		
	}
	//xoa san pham
	if(isset($_SESSION['product'])&&isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		foreach($_SESSION['product'] as $cart_item){
			if($cart_item['id']!= $id){
				$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']);
			}
		$_SESSION['product']=$product;
		header("location: ../modules/right/dathang.php");
		exit();
		}
	}
	//xoa toan bo giohang
	if(isset($_GET['xoatoanbo'])&&$_GET['xoatoanbo']==1){
		session_destroy();
		header("location: ../modules/right/dathang.php");
		exit();
	}
?>
<?php ob_end_flush();?>

