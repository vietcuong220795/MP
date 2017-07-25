<?php
@session_start();
include ("models/m_san_pham.php");
include ("Pager.php");
class C_san_pham
{
	public function Hien_thi_san_pham()
	{
		// Model
		$m_san_pham=new M_san_pham();
		$san_phams=$m_san_pham->Doc_san_pham();
		$gt="";
		if(isset($_POST["tim"]))
		{
			$gt=$_POST["tim"];
			$san_phams=$m_san_pham->Doc_san_pham($gt);
		}
		//Phân trang
		$p=new pager();
		$limit=8;
		$count=count($san_phams);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$lst=$p->pageList($curpage,$pages);
		// load data product
		$san_phams=$m_san_pham->Doc_san_pham($gt,$vt,$limit);
		// View
		$title="Quản lý Shop Mỹ Phẩm";
		$tieude="Danh sách sản phẩm";
		$view="views/sanpham/v_sanpham.php";
		include("include/layout.php");	
	}
	function Them_san_pham()
	{
		// Models
		$m_san_pham=new M_san_pham();
		// `ten_san_pham`, `ma_loai`, `noi_dung_tom_tat`, `mo_ta_chi_tiet`, `don_gia`, `dvt`, `hinh`, `san_pham_moi`
		if(isset($_POST["btnCapnhat"]))
		{
			$ma_san_pham=$_POST["ma_san_pham"];
			$ten_san_pham=$_POST["ten_san_pham"];
			$ma_loai=$_POST["ma_loai"];
			$noi_dung_tom_tat=$_POST["noi_dung_tom_tat"];
			$mo_ta_chi_tiet=$_POST["mo_ta_chi_tiet"];
			$don_gia=$_POST["don_gia"];
			$dvt=$_POST["dvt"];
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
			$kq=$m_san_pham->Them_san_pham($ma_san_pham,$ten_san_pham,$noi_dung_tom_tat,$mo_ta_chi_tiet,$don_gia,$dvt,$hinh);
			if($kq)
			{
				if($hinh!="")
				{
					// Di chuyển hình về server
					$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../images/sanpham/$hinh");	
				}
				echo "<script>alert('Thêm sản phẩm mới thành công');window.location='sanpham.php' </script>";
			}
			else
			{
				echo "<script>alert('Thêm sản phẩm mới thất bạn')</script>";	
			}
				
		}
		// View
		$title="Quản lý Shop Mỹ Phẩm";
		$tieude="Thêm sản phẩm";		
		$view="views/sanpham/v_Themsanpham.php";
		include("include/layout.php");	
	
	}
	function Sua_san_pham()
	{
		// Models
		if(isset($_GET["ma_san_pham"]))
		{
			$ma_san_pham=$_GET["ma_san_pham"];
			// Models
			$m_san_pham=new M_san_pham();
			$san_pham=$m_san_pham->Doc_san_pham_theo_ma_san_pham($ma_san_pham);
		}
		// Cập nhật
		if(isset($_POST["btnCapnhat"]))
		{
			
			$ten_san_pham=$_POST["ten_san_pham"];
			$ma_loai=$_POST["ma_loai"];
			$noi_dung_tom_tat=$_POST["noi_dung_tom_tat"];
			$mo_ta_chi_tiet=$_POST["mo_ta_chi_tiet"];
			$don_gia=$_POST["don_gia"];
			$dvt=$_POST["dvt"];
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$san_pham->hinh;
			$kq=$m_san_pham->Sua_san_pham($ten_san_pham,$noi_dung_tom_tat,$mo_ta_chi_tiet,$don_gia,$dvt,$hinh,$ma_san_pham);
			if($kq)
			{
				if($_FILES["hinh"]["error"]==0)
				{
					// Di chuyển hình về server
					$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../images/sanpham/$hinh");	
				}
				echo "<script>alert('Cập nhật sản phẩm thành công');window.location='sanpham.php' </script>";
			}
			else
			{
				echo "<script>alert('Cập nhật sản phẩm thất bại')</script>";	
			}
		}
		// View
		$title="Quản lý Shop Mỹ Phẩm";
		$tieude="Sửa sản phẩm";
		$view="views/sanpham/v_Suasanpham.php";
		include("include/layout.php");
	}
}
?>