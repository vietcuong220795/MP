<?php
require_once('database.php');
class M_dat_hang extends database
{
	//ma_hoa_don, ma_khach_hang, ngay_dat, tong_tien, tien_dat_coc, con_lai, hinh_thuc_thanh_toan, ghi_chu, tinh_trang
	function Them_hoa_don($ma_khach_hang,$ngay_dat,$tong_tien,$tien_dat_coc,$con_lai,$hinh_thuc_thanh_toan,$ghi_chu,$tinh_trang)
	{
		$sql="insert into hoa_don values(?,?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		$param=array(NULL,$ma_khach_hang,$ngay_dat,$tong_tien,$tien_dat_coc,$con_lai,$hinh_thuc_thanh_toan,$ghi_chu,$tinh_trang);
		$this->execute($param);
		return  $this->getLastId();
	}
	// ma_hoa_don, ma_mon, so_luong, don_gia, mon_thuc_don
	function Them_chi_tiet_hoa_don($ma_hoa_don,$ma_mon,$so_luong,$don_gia)
	{
		$sql="insert into chi_tiet_hoa_don values(?,?,?,?)";
		$this->setQuery($sql);
		$param=array($ma_hoa_don,$ma_mon,$so_luong,$don_gia);
		return $this->execute($param);
	}

}