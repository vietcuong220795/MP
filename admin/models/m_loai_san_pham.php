<?php
require_once ('database.php');
class M_loai_san_pham extends database
{
	// Quản trị
	public function Doc_loai_san_pham($tim="",$vt=-1,$limit=-1)
    {
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_loai like '% $tim%' or ten_loai like '%$tim %'";
		}
		$sql = "Select * from loai_san_pham ". $dk ." order by ma_loai desc";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	public function Doc_loai_san_pham_theo_ma_loai($ma_loai)
    {
        $sql = "Select * from loai_san_pham where ma_loai =?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_loai));
    }
	
	//`ma_loai`, `ten_loai`, `url_ten_loai`, `mo_ta`, `ma_loai_cha`, `hinh`
	public function Them_loai_san_pham($ten_loai,$url_ten_loai,$mo_ta,$ma_loai_cha,$hinh)
	{
	  $sql="insert into loai_san_pham values(?,?,?,?,?,?)";
	  $this->setQuery($sql);
	  
	 
	  return $this->execute(array(NULL,$ten_loai,$url_ten_loai,$mo_ta,$ma_loai_cha,$hinh));
	}
	 
	public function Sua_loai_san_pham($ten_loai,$mo_ta,$hinh,$ma_loai)
	{
	  $sql="update loai_san_pham set ten_loai=?,mo_ta=?,hinh=? Where ma_loai=?";
	  $this->setQuery($sql);
	  return $this->execute(array($ten_loai,$mo_ta,$hinh,$ma_loai));
	}
	public function Xoa_loai_san_pham($ma_loai)
	{
	   $sql="delete from loai_san_pham where ma_loai=?";
	   $this->setQuery($sql);
	   return $this->execute(array($ma_loai));
	}
}
?>