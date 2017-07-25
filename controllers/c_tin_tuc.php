<?php
class C_tin_tuc
{
	public function Hien_thi_tin_tuc_theo_ma()
	{
		// Model
		$ma_tin_tuc=$_GET["ma_tin"];
		include_once("models/m_tin_tuc.php");
		$m_tin_tuc=new M_tin_tuc();
		$tin_tuc=$m_tin_tuc->Doc_tin_tuc_theo_ma($ma_tin_tuc);
		
		include_once("views/bai_viet/v_bai_viet.php");	
	}
	
}
?>