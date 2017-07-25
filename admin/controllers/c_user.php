<?php
@session_start();
include_once("models/m_user.php");
include ("Pager.php");
class C_user
{
	function Hien_thi_dang_nhap()
	{
		
		if(isset($_POST["login"]))
		{
			$ten=$_POST["ten_dang_nhap"];
			$mk=$_POST["mat_khau"];
			$this->luu_dang_nhap($ten,$mk);

		}
		if(isset($_SESSION["ho_ten"]))
		{
			$title="Quản lý Shop Mỹ Phẩm";
			include("include/layout.php");	
		}
		else
		{
			$_SESSION["error"]="Thông tin đăng nhập không hợp lệ";
			header("location:login.php");	
		}
	}
	function Hien_thi_nguoi_dung()
	{
		// Models
		$m_user=new M_user();
		$nguoi_dungs=$m_user->Doc_nguoi_dung();
		$gt="";
		if(isset($_POST["tim"]))
		{
			$gt=$_POST["tim"];
			$nguoi_dungs=$m_user->Doc_nguoi_dung($gt);
		}
		// Phân trang
		$p=new pager();
		$limit=6;
		$count=count($nguoi_dungs);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$lst=$p->pageList($curpage,$pages);
		$nguoi_dungs=$m_user->Doc_nguoi_dung($gt,$vt,$limit);
		// View
		$title="Quản lý Shop Mỹ Phẩm";
		$tieude="Danh sách người dùng";
		$view="views/user/v_user.php";
		include("include/layout.php");
	}
	function Them_user()
	{
		// Models
		$m_user=new M_user();
		// $ma_nguoi_dung,  $ho_ten, $ten_dang_nhap, $mat_khau, $email, $ngay_dang_ky
		if(isset($_POST["btnCapnhat"]))
		{
			$ma_loai=$_POST["ma_loai"];
			$ho_ten=$_POST["ho_ten"];
			$ten_dang_nhap=$_POST["ten_dang_nhap"];
			$mat_khau=$_POST["mat_khau"];
			$email=$_POST["email"];
			$ngay_dang_ky=$_POST["ngay_dang_ky"];
			$kq=$m_user->Them_user($ma_loai,$ho_ten,$ten_dang_nhap,$mat_khau,$email,$ngay_dang_ky);
			if($kq)
			{
				echo "<script>alert('Thêm user mới thành công');window.location='user.php' </script>";
			}
			else
			{
				echo "<script>alert('Thêm user mới thất bạn')</script>";	
			}
				
		}
		// View
		$title="Quản lý Shop Mỹ Phẩm";
		$tieude="Thêm người dùng";		
		$view="views/user/v_Themuser.php";
		include("include/layout.php");
	}
	function Sua_user()
	{
		// Models
		if(isset($_GET["ma_nguoi_dung"]))
		{
			$ma_nguoi_dung=$_GET["ma_nguoi_dung"];
			// Models
			$m_user=new M_user();
			$m_user=$m_user->Doc_nguoi_dung($ma_nguoi_dung);
		}
		// Cập nhật
		if(isset($_POST["btnCapnhat"]))
		{
			$ma_loai=$_POST["ma_loai"];
			$ho_ten=$_POST["ho_ten"];
			$ten_dang_nhap=$_POST["ten_dang_nhap"];
			$mat_khau=$_POST["mat_khau"];
			$email=$_POST["email"];
			$ngay_dang_ky=$_POST["ngay_dang_ky"];
			$kq=$m_user->Sua_user($ma_loai,$ho_ten,$ten_dang_nhap,$mat_khau,$email);
			if($kq)
			{
				echo "<script>alert('Cập nhật user thành công');window.location='loaisanpham.php' </script>";
			}
			else
			{
				echo "<script>alert('Cập nhật user thất bại')</script>";	
			}
		}
		// View
		$title="Quản lý Shop Mỹ Phẩm";
		$tieude="Sửa user";
		$view="views/user/v_Suauser.php";
		include("include/layout.php");
	}
	function thoat_dang_nhap()
	{
		session_destroy();
		header("location:login.php");	
	}
	function luu_dang_nhap($ten,$mk)
	{
		$m_user=new M_user();
		$user=$m_user->Doc_user_theo_tenDn_pass($ten,$mk);
		$_SESSION["ho_ten"]=$user->ho_ten;
	}
}
?>