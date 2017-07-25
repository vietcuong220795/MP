<?php
require_once("database.php");
class M_user extends database
{
	public function Doc_nguoi_dung($tim="",$vt=-1,$limit=-1)
    {
		$dk="";
		if($tim!="")
		{
			$dk = "where ho_ten like '% $tim%' or ho_ten like '%$tim %'";
		}
		$sql = "Select * from nguoi_dung ". $dk ." order by ma_nguoi_dung desc";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	function Doc_user_theo_tenDn_pass($ten,$mk)
	{
		$sql="select * from nguoi_dung where ten_dang_nhap=? and mat_khau=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ten,md5($mk)));
	}
	public function Them_user($ma_nguoi_dung, $ma_loai, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $ngay_dang_ky)
   {
	  $sql="insert into nguoi_dung values(?,?,?,?,?,?,?)";
	  $this->setQuery($sql);
	  return $this->execute(array("NULL", $ma_loai, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $ngay_dang_ky));
   }
	public function Sua_user($ma_loai, $ho_ten, $ten_dang_nhap, $mat_khau, $email)
	{
	  $sql="update nguoi_dung set ma_loai_nguoi_dung=?,ho_ten=?,ten_dang_nhap=?,mat_khau=?,email=? Where ma_nguoi_dung=?";
	  $this->setQuery($sql);
	  return $this->execute(array($ma_loai, $ho_ten, $ten_dang_nhap, $mat_khau, $email));
	}
	public function Xoa_user($ma_nguoi_dung)
	{
	   $sql="delete from nguoi_dung where ma_nguoi_dung=?";
	   $this->setQuery($sql);
	   return $this->execute(array($ma_nguoi_dung));
	}
}
?>