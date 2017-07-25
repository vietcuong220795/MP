<?php
class C_loai_san_pham
{
	/*public function Hien_thi_loai_san_pham()
	{
		// Model
		include("models/m_loai_san_pham.php");
		$m_loai_san_pham=new M_loai_san_pham();
		$loai_san_phams=$m_loai_san_pham->Doc_san_pham();
	}*/
	
	/*public function Hien_thi_thanh_menu()
	{
		// Model
		
		include("models/m_loai_san_pham.php");
		$ma_loai_cha=$_GET["ma_loai_cha"];
		$m_loai_san_pham=new M_loai_san_pham();
		$loai_san_pham=$m_loai_san_pham->Tieu_de_menu($ma_loai_cha);
		// View
		include("views/san_pham/v_loai_san_pham.php");	
	}*/
	public function Hien_thi_menu()
	{
		
		// Model
		include_once("models/m_loai_san_pham.php");
		$m_loai_san_pham=new M_loai_san_pham();
		$loai_san_phams=$m_loai_san_pham->Doc_ma_loai(0);
		//View
		include_once("views/loai_san_pham/v_menu.php");
	}
	
	
}
?>