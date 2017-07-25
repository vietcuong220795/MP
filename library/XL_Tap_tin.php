<?php
function Mo_tap_tin($file,$mode="r")
{
	
		if (file_exists($file))
		{
			$f=fopen($file,$mode) or die("Lỗi mở tập tin");
			return $f;
		}
		else
		{
			die("Tập tin không tồn tại");
				
		}
		
	
}
function Dong_tap_tin($f)
{
	fclose($f);	
}
function Doc_tap_tin($file,$mode="r")
{
	$f=Mo_tap_tin($file,$mode);
	$Data_str=NULL;
	while(!feof($f))
	{
		$Data_str.= addslashes(fgets($f));
	}
	Dong_tap_tin($f);
	return $Data_str;	
}
function Ghi_tap_tin($file,$noidung,$mode="a")
{
	$f=Mo_tap_tin($file,$mode);
	$result=fwrite($f,$noidung);
	Dong_tap_tin($f);
	return $result;
}
function Duyet_thu_muc($dir)
{
	if(!is_dir($dir)) 
	{
		 echo ("Thư mục không tồn tại");
	}
	$File_list=array();
	// Lấy nội dung trong thư mục đưa vào mảng
	$dh = opendir($dir) or die ("Không thể mở thư mục");
    // Tạo vòng lặp xuất các tập tin ra mảng
    while (($file = readdir($dh)) !== false)  
	{
		if ($file != "." && $file != "..") 
		{
            $File_list[]=$file;
        }
    }
	return $File_list;
		
}
function Id_auto($file)
{
	$id=1;
	$str=Doc_tap_tin($file);
	if ($str==NULL) return $id; // Tập tin không có  nội dung
	
	$arr=Tach_chuoi_thanh_mang("/*",$str);
	$arr=end($arr); // Lấy ra phần tử cuối
	// Tách $row để lấy ID
	$row=Tach_chuoi_thanh_mang("|",$arr);
	$id =(int)$row[0] + 1;
	return $id;	
} 
?>