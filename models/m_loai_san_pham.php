<?php
require_once("database.php");
class M_loai_san_pham extends database
{
	/*public function Doc_san_pham($vt=-1,$limit=-1)
	{
		$sql="select ten_loai from loai_san_pham";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Tieu_de_menu($ma_loai_cha)
	{
		$sql="select ten_loai from loai_san_pham where ma_loai_cha=1";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_loai_cha));
		
	}	*/
	public function Doc_ma_loai($ma_loai_cha=0)
	{
		$sql="select ma_loai,ten_loai from loai_san_pham where ma_loai_cha=?";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_loai_cha));	
	}
	
	
	
		
}

?>