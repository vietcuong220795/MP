<?php
require_once('database.php');
class M_khach_hang extends database
{
	function Dang_nhap($email,$mat_khau)
	{
		$sql="select * from khach_hang where email=? and matkhau=?";
		$this->setQuery($sql);
		return $this->loadRow(array($email,$mat_khau));	
	}
	
	function Kiem_tra_email($email)
	{
		$sql="select * from khach_hang where email=?";
		$this->setQuery($sql);
		return $this->loadRow(array($email));	
	}
	
	function Doc_khach_hang_theo_ma_khach_hang($ma_khach_hang)
	{
		$sql="select * from khach_hang where ma_khach_hang=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_khach_hang));	
	}
	
	//`ma_khach_hang`, `ten_khach_hang`, `phai`, `ngay_sinh`, `dia_chi`, `dien_thoai`, `email`, `matkhau`
	function Dang_ky($ten_khach_hang,$phai,$dia_chi,$dien_thoai,$email,$mat_khau,$ghi_chu)
	{
		$sql="insert into khach_hang values(?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		$param=array(NULL,$ten_khach_hang,$phai,$dia_chi,$dien_thoai,$email,md5($mat_khau),$ghi_chu);
		return $this->execute($param);
	}
}