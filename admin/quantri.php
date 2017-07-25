<?php
ini_set("display_errors",1);
include("controllers/c_user.php");
$c_user=new C_user();
if(isset($_GET["func"]))
{
	$c_user->thoat_dang_nhap();	
}
$c_user->Hien_thi_dang_nhap();
?>