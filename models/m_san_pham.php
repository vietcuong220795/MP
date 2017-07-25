<?php
require_once("database.php");
class M_san_pham extends database
{
	
	public function Doc_san_pham_theo_gia_tri_tim($gtTim,$vt=-1,$limit=-1)
	{
		$sql="select * from san_pham where ten_san_pham like '%$gtTim%'";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Doc_bo_suu_tap($vt=-1,$limit=-1)
	{
		$sql="select * from bo_suu_tap";
		if($vt>=0 && $limit>0)
		{
			$sql.="limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	
	public function Doc_san_pham($vt=-1,$limit=-1)
	{
		$sql="select * from san_pham";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Doc_san_pham_moi($vt=-1,$limit=-1)
	{
		$sql="select * from san_pham where san_pham_moi=1";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	
	// Thêm Sửa Xóa 
	/*
	id_san_pham, ma_san_pham, ten_san_pham, ma_loai, noi_dung_tom_tat, mo_ta_chi_tiet, don_gia, DVT, tinh_trang, hinh, san_pham_moi
	*/
	public function Them_san_pham($ma_san_pham, $ten_san_pham, $ma_loai, $noi_dung_tom_tat, $mo_ta_chi_tiet, $don_gia, $DVT, $tinh_trang, $hinh, $san_pham_moi)
	{
		$sql="insert into san_pham ";
		$sql.=" value(?,?,?,?,?,?,?,?,?,?,?)";
		$param=array(NULL, $ma_san_pham, $ten_san_pham, $ma_loai, $noi_dung_tom_tat, $mo_ta_chi_tiet, $don_gia, $DVT, $tinh_trang, $hinh, $san_pham_moi);
		$this->setQuery($sql);
		return $this->execute($param);	
	}
	public function Sua_san_pham($ma_san_pham, $ten_san_pham, $ma_loai, $noi_dung_tom_tat, $mo_ta_chi_tiet, $don_gia, $DVT, $tinh_trang, $hinh, $san_pham_moi,$id_san_pham)
	{
		$sql="update san_pham ";
		$sql.="set ma_san_pham=?, ten_san_pham=?, ma_loai=?, noi_dung_tom_tat=?, mo_ta_chi_tiet=?, don_gia=?, DVT=?, tinh_trang=?, hinh=?, san_pham_moi=? where id_san_pham=?";
		$param=array($ma_san_pham, $ten_san_pham, $ma_loai, $noi_dung_tom_tat, $mo_ta_chi_tiet, $don_gia, $DVT, $tinh_trang, $hinh, $san_pham_moi,$id_san_pham);		
		
		$this->setQuery($sql);
		return $this->execute($param);	
	} 
	public function Doc_san_pham_theo_ma_loai($ma_loai,$vt=-1,$limit=-1)
	{
		$sql="select * from san_pham where ma_loai=?";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit"; 	
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_loai));
		
	}
	
	public function Doc_ten_loai($ma_loai)
	{
		$sql="select * from loai_san_pham where ma_loai=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_loai));
		
	}
	
	
	public function Xoa_san_pham($id_san_pham)
	{
		$sql="delete * from san_pham where id_san_pham=?";
		$this->setQuery($sql);
		return $this->execute(array($id_san_pham));
	}
	
	public function Chi_tiet_san_pham($id_san_pham)
	{
		$sql="select * from san_pham where id_san_pham=?";
		$this->setQuery($sql);
		return $this->loadRow(array($id_san_pham));
		
	}
	public function Doc_san_pham_trang_diem($vt=-1,$limit=-1)
	{
		$sql="select * from san_pham where noi_dung_tom_tat like 'Trang điểm'||noi_dung_tom_tat like ' trang điểm' ";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
		
	}
	public function Doc_san_pham_duong_da($vt=-1,$limit=-1)
	{
		$sql="select * from san_pham where noi_dung_tom_tat like  'Dưỡng da'";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
		
	}
	public function Doc_san_pham_duong_the($vt=-1,$limit=-1)
	{
		$sql="select * from san_pham where noi_dung_tom_tat like  '% dưỡng thể%'";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
		
	}
		public function Doc_san_pham_kem_chong_nang($vt=-1,$limit=-1)
		{
		$sql="select * from san_pham where noi_dung_tom_tat like  '%Chống nắng%'";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
		
	}
	public function Doc_san_pham_sua_rua_mat($vt=-1,$limit=-1)
		{
		$sql="select * from san_pham where noi_dung_tom_tat like  '% rửa mặt%'";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
		
	}
	public function Doc_san_pham_son($vt=-1,$limit=-1)
		{
		$sql="select * from san_pham where noi_dung_tom_tat like  '%Son %'";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
		
	}
	
	
}

?>