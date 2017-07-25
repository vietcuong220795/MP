<?php
class C_san_pham
{
	public function Hien_thi_san_pham_tim()
	{
		// Model
		$gtTim=$_POST["search"];
		include_once("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
		$san_phams=$m_san_pham->Doc_san_pham_theo_gia_tri_tim($gtTim);
		$title="Kết quả tìm kiếm";
		/*include("Pager.php");
		$p=new pager();
		$limit=8;
		$count=count($san_phams);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$lst=$p->pageList($curpage,$pages);
		// load data product
		$san_phams=$m_san_pham->Doc_san_pham($vt,$limit);*/
		
		// View
		include_once("views/san_pham/v_san_pham.php");	
	}
	public function Hien_thi_bo_suu_tap()
	{
		// Model
		include_once("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
		$san_phams=$m_san_pham->Doc_bo_suu_tap();
		
		// View
		include_once("views/san_pham/v_BST.php");	
	}
	
	public function Hien_thi_san_pham()
	{
		// Model
		include_once("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
		$san_phams=$m_san_pham->Doc_san_pham();
		include("Pager.php");
		$p=new pager();
		$limit=8;
		$count=count($san_phams);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$lst=$p->pageList($curpage,$pages);
		// load data product
		$san_phams=$m_san_pham->Doc_san_pham($vt,$limit);
		
		// View
		include_once("views/san_pham/v_san_pham.php");	
	}
	public function Hien_thi_chi_tiet_san_pham()
	{
		// Model
		include_once("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
		$id_san_pham=$_GET["id"];
		$san_pham=$m_san_pham->Chi_tiet_san_pham($id_san_pham);				
		$ma_loai=$san_pham->ma_loai;
		$san_phams=$m_san_pham->Doc_san_pham_theo_ma_loai($ma_loai);
		$loai_san_pham=$m_san_pham->Doc_ten_loai($ma_loai);
		// View
		//$title_loai=$san_phams->ten_loai;
		include_once("views/san_pham/v_chi_tiet_san_pham.php");	
	}
	
	public function Hien_thi_san_pham_moi()
	{
		
		// Model
		include_once("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
		$limit=8;
		$san_phams=$m_san_pham->Doc_san_pham_moi(3,$limit);	
		include_once("views/san_pham/v_product.php");	
	}
	public function Hien_thi_san_pham_theo_ma_loai()
	{
		
		// Model
		
		include_once("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
		if(isset($_GET["ma_loai"]))
		{
			$_SESSION["ma_loai"]=$_GET["ma_loai"];	
		}
		$ma_loai=$_SESSION["ma_loai"];
		//echo $ma_loai;
		$san_phams=$m_san_pham->Doc_san_pham_theo_ma_loai($ma_loai);	
		include("Pager.php");
		$p=new pager();
		$limit=8;
		$count=count($san_phams);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$param="&ma_loai=$ma_loai";
		$lst=$p->pageList($curpage,$pages,$param);
		// load data product
		$san_phams=$m_san_pham->Doc_san_pham_theo_ma_loai($ma_loai,$vt,$limit);
		include_once("views/san_pham/v_san_pham.php");	
	}
	public function Hien_thi_san_pham_trang_diem()
	{	
		// Model
		include_once("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
		
		//echo $ma_loai;
		$san_phams=$m_san_pham->Doc_san_pham_trang_diem();	
		include("Pager.php");
		$p=new pager();
		$limit=8;
		$count=count($san_phams);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		//$param="&ma_loai=$ma_loai";
		$param="";
		$lst=$p->pageList($curpage,$pages,$param);
		// load data product
		$san_phams=$m_san_pham->Doc_san_pham_trang_diem($vt,$limit);
		include_once("views/san_pham/v_san_pham.php");			
	}
		public function Hien_thi_san_pham_duong_da()
		{	
		// Model
		include_once("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
		
		//echo $ma_loai;
		$san_phams=$m_san_pham->Doc_san_pham_duong_da();	
		include("Pager.php");
		$p=new pager();
		$limit=8;
		$count=count($san_phams);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		//$param="&ma_loai=$ma_loai";
		$param="";
		$lst=$p->pageList($curpage,$pages,$param);
		// load data product
		$san_phams=$m_san_pham->Doc_san_pham_duong_da($vt,$limit);
		include_once("views/san_pham/v_san_pham.php");			
	}
	public function Hien_thi_san_pham_duong_the()
		{	
		// Model
		include_once("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
		
		//echo $ma_loai;
		$san_phams=$m_san_pham->Doc_san_pham_duong_the();	
		include("Pager.php");
		$p=new pager();
		$limit=8;
		$count=count($san_phams);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		//$param="&ma_loai=$ma_loai";
		$param="";
		$lst=$p->pageList($curpage,$pages,$param);
		// load data product
		$san_phams=$m_san_pham->Doc_san_pham_duong_the($vt,$limit);
		include_once("views/san_pham/v_san_pham.php");			
	}
	public function Hien_thi_san_pham_kem_chong_nang()
		{	
		// Model
		include_once("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
		
		//echo $ma_loai;
		$san_phams=$m_san_pham->Doc_san_pham_kem_chong_nang();	
		include("Pager.php");
		$p=new pager();
		$limit=8;
		$count=count($san_phams);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		//$param="&ma_loai=$ma_loai";
		$param="";
		$lst=$p->pageList($curpage,$pages,$param);
		// load data product
		$san_phams=$m_san_pham->Doc_san_pham_kem_chong_nang($vt,$limit);
		include_once("views/san_pham/v_san_pham.php");			
	}
	public function Hien_thi_san_pham_sua_rua_mat()
		{	
		// Model
		include_once("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
		
		//echo $ma_loai;
		$san_phams=$m_san_pham->Doc_san_pham_sua_rua_mat();	
		include("Pager.php");
		$p=new pager();
		$limit=8;
		$count=count($san_phams);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		//$param="&ma_loai=$ma_loai";
		$param="";
		$lst=$p->pageList($curpage,$pages,$param);
		// load data product
		$san_phams=$m_san_pham->Doc_san_pham_sua_rua_mat($vt,$limit);
		include_once("views/san_pham/v_san_pham.php");			
	}
	public function Hien_thi_san_pham_son()
		{	
		// Model
		include_once("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
		
		//echo $ma_loai;
		$san_phams=$m_san_pham->Doc_san_pham_son();	
		include("Pager.php");
		$p=new pager();
		$limit=8;
		$count=count($san_phams);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		//$param="&ma_loai=$ma_loai";
		$param="";
		$lst=$p->pageList($curpage,$pages,$param);
		// load data product
		$san_phams=$m_san_pham->Doc_san_pham_son($vt,$limit);
		include_once("views/san_pham/v_san_pham.php");			
	}
	
	
	
}
?>