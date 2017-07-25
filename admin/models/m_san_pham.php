<?php
require_once ('database.php');
class M_san_pham extends database
{
	public function Doc_san_pham($tim="",$vt=-1,$limit=-1)
	{
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_san_pham like '% $tim%' or ten_san_pham like '%$tim %'";
		}
		$sql = "select * from san_pham ". $dk ."order by ma_san_pham desc";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
	}
	public function Doc_san_pham_theo_ma_san_pham($ma_san_pham)
	{
		$sql="select * from san_pham where ma_san_pham = ?";
		$this->setQuery($sql);
        return $this->loadRow(array($ma_san_pham));
	}
	public function Them_san_pham($ma_san_pham,$ten_san_pham,$ma_loai,$noi_dung_tom_tat,$mo_ta_chi_tiet,$don_gia,$dvt,$hinh)
	{
		$sql="insert into san_pham values(?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		//print_r(array(NULL,$ma_san_pham,$ten_san_pham,$noi_dung_tom_tat,$mo_ta_chi_tiet,$don_gia,$dvt,$hinh));
		//exit;
		return $this->execute(array(NULL,$ma_san_pham,$ten_san_pham,$ma_loai,$noi_dung_tom_tat,$mo_ta_chi_tiet,$don_gia,$dvt,$hinh));
	}
	public function Sua_san_pham($ten_san_pham,$ma_loai,$noi_dung_tom_tat,$mo_ta_chi_tiet,$don_gia,$dvt,$hinh,$ma_san_pham)
	{
		$sql="update san_pham set ten_san_pham=?, ma_loai=?, noi_dung_tom_tat=?, mo_ta_chi_tiet=?, don_gia=?, dvt=?, hinh=?,
				where ma_san_pham=?";
		$this->setQuery($sql);
		return $this->execute(array($ten_san_pham,$ma_loai,$noi_dung_tom_tat,$mo_ta_chi_tiet,$don_gia,$dvt,$hinh,$ma_san_pham));
	}
	public function Xoa_san_pham($ma_san_pham)
	{
	   $sql="delete from san_pham where ma_san_pham=?";
	   $this->setQuery($sql);
	   return $this->execute(array($ma_san_pham));
	}
}
?>