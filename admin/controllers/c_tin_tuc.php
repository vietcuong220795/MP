<?php
@session_start();
include ("models/m_tin_tuc.php");
include ("Pager.php");
class C_tin_tuc
{
	function Hien_thi_tin_tuc()
	{
		// Models
		$m_tin_tuc=new M_tin_tuc();
		$tin_tucs=$m_tin_tuc->Doc_tin_tuc();
		$gt="";
		if(isset($_POST["tim"]))
		{
			$gt=$_POST["tim"];
			$tin_tucs=$m_tin_tuc->Doc_tin_tuc($gt);
		}
		// Phân trang
		$p=new pager();
		$limit=6;
		$count=count($tin_tucs);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$lst=$p->pageList($curpage,$pages);
		$tin_tucs=$m_tin_tuc->Doc_tin_tuc($gt,$vt,$limit);
		// View
		$title="Quản lý Shop Mỹ Phẩm";
		$tieude="Danh sách tin tức";
		$view="views/tintuc/v_tintuc.php";
		include("include/layout.php");
	}
	function Them_tin_tuc()
	{
		// Models
		$m_tin_tuc=new M_tin_tuc();
		
		if(isset($_POST["btnCapnhat"]))
		{
			$tieu_de=$_POST["tieu_de"];
			$tom_tat=$_POST["tom_tat"];
			$chi_tiet=$_POST["chi_tiet"];
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
			$tac_gia=$_POST["tac_gia"];
			$ngay_dang=$_POST["ngay_dang"];
			$ngay_gui=$_POST["ngay_gui"];
			$kq=$m_tin_tuc->Them_tin_tuc($tieu_de,$tom_tat,$chi_tiet,$hinh,$tac_gia,$ngay_dang,$ngay_gui);
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
		$tieude="Thêm tin tức";
		$view="views/tintuc/v_Themtintuc.php";
		include("include/layout.php");
	}
	function Sua_tin_tuc()
	{
		// Models
		if(isset($_GET["ma_tin_tuc"]))
		{
			$ma_tin_tuc=$_GET["ma_tin_tuc"];
			//Model
			$m_tin_tuc=new M_tin_tuc();
			$tin_tuc=$m_tin_tuc->Doc_tin_tuc_theo_ma_tin($ma_tin_tuc);	
		}
		// Cập nhật
		if(isset($_POST["btnCapnhat"]))
		{
			//$ma_tin_tuc, $tieu_de, $tom_tat, $chi_tiet, $hinh, $tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem
			$tieu_de=$_POST["tieu_de"];
			$tom_tat=$_POST["tom_tat"];
			$chi_tiet=$_POST["chi_tiet"];
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$san_pham->hinh;
			$tac_gia=$_POST["tac_gia"];
			$ngay_dang=$_POST["ngay_dang"];
			$ngay_gui=$_POST["ngay_gui"];
			$kq=$m_san_pham->Sua_san_pham($ten_san_pham,$tom_tat,$chi_tiet,$hinh,$tac_gia,$ngay_dang,$ngay_gui);
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
		$tieude="Sửa tin tức";
		$view="views/tintuc/v_Suatintuc.php";
		include("include/layout.php");
	}
}
?>