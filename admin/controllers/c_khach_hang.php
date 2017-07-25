<?php
class C_khach_hang
{
	public function __construct()
	{
		include_once('../controllers/Smarty_nha_hang.php');
		include_once('../models/m_khach_hang.php');
	}
	public function index()
	{
		$smarty=new Smarty_nha_hang();
		$smarty->assign('title','Món ăn');
		$m_khach_hang=new m_khach_hang();
		$smarty->assign('khach_hang_hoa_don',$m_khach_hang->khach_hang_hoa_don());
		$files = array('../../views/khach_hang/v_khach_hang_hoa_don.tpl');
    	$smarty->assign('files',$files);
    	$smarty->display('layout_khach_hang.tpl');
	}
    public function dang_ky()
    {
        $smarty=new Smarty_nha_hang();
        $smarty->assign('title','Nhà hàng Alphatek');
        if(isset($_POST['submit']))
        {
            $ten_khach_hang=$_POST['ten_khach_hang'];
            $email=$_POST['email'];
            $dia_chi=$_POST['dia_chi'];
            $dien_thoai=$_POST['dien_thoai'];
            $ghi_chu=$_POST['ghi_chu'];        
            $m_khach_hang=new M_khach_hang();
            $ma_khach_hang=$m_khach_hang->themKhachHang($ten_khach_hang, $email, $dia_chi, $dien_thoai, $ghi_chu);
            if($ma_khach_hang>0)
            {
                $ngay_dat = date('Y-m-d');
                $tong_tien=0;
                $con_lai=0;
                $tien_dat_coc=$_POST['tien_dat_coc'];
                $httt=$_POST['httt'];
                
                $hoa_don=$m_khach_hang->themHoaDon($ma_khach_hang, $ngay_dat, $tong_tien,$tien_dat_coc,$con_lai,$httt);
                if($hoa_don>0)
                {
                    include_once('../controllers/c_gio_hang.php');
                    $c_gio_hang=new c_gio_hang();
                    $gio_hang=$c_gio_hang->layGioHang();
                    foreach($gio_hang as $key=>$value)
                    {
                        if(substr($key,0,1)=='t')
                            $m_khach_hang->themChiTietHoaDon($hoa_don,substr($key,1,strlen($key)-1),$value,0,0);
                        else
                            $m_khach_hang->themChiTietHoaDon($hoa_don,$key,$value,0,1);
                    }
                    $m_khach_hang->capNhatDonGia_mon($hoa_don);
                    $m_khach_hang->capNhatDonGia_thuc_don($hoa_don);
                    $m_khach_hang->capNhatTongTien($hoa_don);
                    if($tien_dat_coc>0)
                        $m_khach_hang->capNhatTienConLai($hoa_don);
                    $c_gio_hang->xoaGioHang();
                    //In hoa đơn
                    $files = array('../../views/khach_hang/v_in_hoa_don.tpl');
                	$smarty->assign('files',$files);
                	$smarty->display('layout_khach_hang.tpl'); 
                }
            }
        }
        else
        {
    		$files = array('../../views/khach_hang/v_them_khach_hang.tpl');
        	$smarty->assign('files',$files);
        	$smarty->display('layout_khach_hang.tpl');   
        }       
    }
}