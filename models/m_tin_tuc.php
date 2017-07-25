<?php
require_once("database.php");
class M_tin_tuc extends database
{
	public function Doc_tin_tuc()
	{
		$sql="select * from tin_tuc";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}	
	public function Doc_tin_tuc_theo_ma($ma_tin_tuc)
	{
		$sql="select * from tin_tuc where ma_tin_tuc=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_tin_tuc));
	}	
}
?>