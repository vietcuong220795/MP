<?php
function Tach_chuoi_thanh_mang($dinhdang,$str)
{
	if ($str!="")
	{
		$arr=explode($dinhdang,$str);
		return $arr;	
	}
	else
	{
		die("Lỗi: Không có nội dung");	
	}
}

?>