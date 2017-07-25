<?php
include_once "includes/head.php";
include_once "includes/header.php";
?>
<div style="margin:50px;font-weight:bold;">
<h2 style="font-family:Tahoma, Geneva, sans-serif;color:#F00;text-align:center">Chúng tôi xin cám ơn quí khách đã mua hàng tại website <span style="color:#090">ShopCCG </span></h2><br />
<p>Nhân viên chúng tôi sẽ giao hàng tại địa chỉ: <?php echo $khach_hang->dia_chi ?></p><br />
<p>Người nhận hàng Anh/Chị: <?php echo $khach_hang->ten_khach_hang ?></p><br />
<p>Điện thoại liên hệ: <?php echo $khach_hang->dien_thoai ?></p><br />
<p>Hình thức thanh toán: <?php echo $hinh_thuc_thanh_toan ?></p><br />
<p>Tổng tiền thanh toán: <?php echo number_format($tong_tien) ?> đồng</p><br />
<h1>Đơn hàng của quí khách</h1><br />
<table width="100%" border="1" cellspacing="2" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td>Sản phẩm</td>
    <td>&nbsp;</td>
    <td>Số lượng</td>
    <td>Đơn giá</td>
    <td>Thành tiền</td>
  </tr>
  <?php
	foreach($gio_hang as $item)
	{  
		$thanhtien=$item["product_qty"]*$item["product_price"];
  ?>
  <tr>
    <td><?php echo $item["product_name"] ?></td>
    <td><img src="images/sanpham/<?php echo $item["product_image"] ?>" width="100" height="70"  /></td>
    <td><?php echo $item["product_qty"] ?></td>
    <td><?php echo $item["product_price"] ?> đồng</td>
    <td><?php echo number_format($thanhtien) ?> đồng</td>
  </tr>
  <?php
	}
	
  ?>
</table>
<a href=".">Tiếp tục mua hàng...</a>
</div>
<?php
include_once "includes/footer.php";

?>