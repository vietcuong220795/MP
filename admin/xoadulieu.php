<?php
require("models/database.php");
$id_xoa=$_POST["id_xoa"];
$tbl_xoa=$_POST["tbl_xoa"];
$field_xoa=$_POST["field_xoa"];
$sql="delete from $tbl_xoa where $field_xoa=$id_xoa";
$db=new database();
$db->setQuery($sql);
$kq=$db->execute();
if($kq)
{
	echo "Xóa dữ liệu thành công";
}
else
{
	echo "Xóa dữ liệu bị lỗi...";	
}
?>
