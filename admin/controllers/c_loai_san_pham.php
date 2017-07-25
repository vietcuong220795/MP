<?php
@session_start();
include ("models/m_loai_san_pham.php");
include ("Pager.php");
class C_loai_san_pham
{
	function Hien_thi_loai_san_pham()
	{
		// Models
		$m_loai_san_pham=new M_loai_san_pham();
		$loai_san_phams=$m_loai_san_pham->Doc_loai_san_pham();
		$gt="";
		if(isset($_POST["tim"]))
		{
			$gt=$_POST["tim"];
			$loai_san_phams=$m_loai_san_pham->Doc_loai_san_pham($gt);
		}
		// Phân trang
		$p=new pager();
		$limit=6;
		$count=count($loai_san_phams);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$lst=$p->pageList($curpage,$pages);
		// load data product
		$loai_san_phams=$m_loai_san_pham->Doc_loai_san_pham($gt,$vt,$limit);
		// View
		$title="Quản lý Shop Mỹ Phẩm";
		$tieude="Danh sách loại sản phẩm";
		$view="views/loaisanpham/v_loaisanpham.php";
		include("include/layout.php");
	}
	function Them_loai_san_pham()
	{
		// Models
		$m_loai_san_pham=new M_loai_san_pham();
		// `ma_loai`, `ten_loai`, `mo_ta`, `hinh`
		if(isset($_POST["btnCapnhat"]))
		{
			$ten_loai=$_POST["ten_loai"];
			$mo_ta=$_POST["mo_ta"];
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
			$kq=$m_loai_san_pham->Them_loai_san_pham($ten_loai,"",$mo_ta,1,$hinh);
			if($kq)
			{
				if($hinh!="")
				{
					// Di chuyển hình về server
					$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../images/sanpham/$hinh");	
				}
				echo "<script>alert('Thêm loại sản phẩm mới thành công');window.location='loaisanpham.php' </script>";
			}
			else
			{
				echo "<script>alert('Thêm loại sản phẩm mới thất bạn')</script>";	
			}
				
		}
		// View
		$title="Quản lý Shop Mỹ Phẩm";
		$tieude="Thêm Loại sản phẩm";		
		$view="views/loaisanpham/v_Themloaisanpham.php";
		include("include/layout.php");	
	
	}
	function Sua_loai_san_pham()
	{
		// Models
		if(isset($_GET["ma_loai"]))
		{
			$ma_loai=$_GET["ma_loai"];
			// Models
			$m_loai_san_pham=new M_loai_san_pham();
			$loai_san_pham=$m_loai_san_pham->Doc_loai_san_pham_theo_ma_loai($ma_loai);
		}
		// Cập nhật
		if(isset($_POST["btnCapnhat"]))
		{
			$ten_loai=$_POST["ten_loai"];
			$mo_ta=$_POST["mo_ta"];
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$loai_san_pham->hinh;
			$kq=$m_loai_san_pham->Sua_loai_san_pham($ten_loai,$mo_ta,$hinh,$ma_loai);
			if($kq)
			{
				if($_FILES["hinh"]["error"]==0)
				{
					// Di chuyển hình về server
					$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../images/sanpham/$hinh");	
				}
				echo "<script>alert('Cập nhật loại sản phẩm thành công');window.location='loaisanpham.php' </script>";
			}
			else
			{
				echo "<script>alert('Cập nhật loại sản phẩm thất bại')</script>";	
			}
		}
		// View
		$title="Quản lý Shop Mỹ Phẩm";
		$tieude="Sửa loại sản phẩm";
		$view="views/loaisanpham/v_Sualoaisanpham.php";
		include("include/layout.php");
	}
}
?>