<?php
require_once ('database.php');
class M_tin_tuc extends database
{
    // Quản trị
	public function Doc_tin_tuc($tim="",$vt=-1,$limit=-1)
    {
		$dk="";
		if($tim!="")
		{
			$dk = "where tieu_de like '% $tim%' or tieu_de like '%$tim %'";
		}
		$sql = "Select * from tin_tuc ". $dk ." order by ngay_dang desc";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function Doc_tin_tuc_theo_ma_tin($ma_tin_tuc)
    {
        $sql = "Select * from tin_tuc where ma_tin_tuc =?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_tin_tuc));
    }
	public function them_tin_tuc($ma_tin_tuc, $tieu_de, $tom_tat, $chi_tiet, $hinh, $tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem)
	   {
		  $sql="insert into tin_tuc values(?,?,?,?,?,?,?,?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array("NULL", $tieu_de, $tom_tat, $chi_tiet, $hinh, $tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem));
	   }
	 public function Sua_tin_tuc($tieu_de, $tom_tat, $chi_tiet, $hinh, $tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem,$ma_tin_tuc)
	   {
		  $sql="update tin_tuc set tieu_de=?,tom_tat=?,chi_tiet=?,hinh=?, tac_gia=?,ngay_dang=?,ngay_gui=?,so_luot_xem=?  where ma_tin_tuc=?";
		  $this->setQuery($sql);
		  return $this->execute(array($tieu_de, $tom_tat, $chi_tiet, $hinh, $tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem,$ma_tin_tuc));
	   }
	   public function Xoa_tin_tuc($ma_tin_tuc)
	   {
		   $sql="delete from tin_tuc where ma_tin_tuc=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_tin_tuc));
	   }
}
//`ma_tin_tuc`, `tieu_de`, `tom_tat`, `chi_tiet`, `hinh`, `tac_gia`, `ngay_dang`, `ngay_gui`, `so_luot_xem`
?>
