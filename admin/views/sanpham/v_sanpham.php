<div class="content-box-header">
  <h3><?php echo $tieude ?><label id="kqXoa"></label></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
    <caption>
    <form method="post">
    <p>
    <label>Nhập tên sản phẩm cần tìm:</label> 
    <input type="text" name="tim" class="text-input small-input" />
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Mô tả</th>
          <th>Đơn giá</th>
          <th>Đơn vị tính</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> <?php echo $lst; ?> </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        <?php
        foreach ($san_phams as $sp)
		{
			$arr=explode(" ",$sp->mo_ta_chi_tiet);
			$arr=array_slice($arr,0,20);
			$mota=implode(" ",$arr);
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $sp->ma_san_pham; ?></td>
          <td><a href="suasanpham.php?ma_san_pham=<?php echo $sp->ma_san_pham; ?>" title="Edit">
		  <?php echo $sp->ten_san_pham ?></a></td>
          <td><?php echo $mota ?>...</td>
          <td><?php echo number_format($sp->don_gia,0,",",".")?>đ</td>
          <td><?php echo $sp->dvt; ?></td>
          <td><!-- Icons --> 
            <a href="suasanpham.php?ma_san_pham=<?php echo $sp->ma_san_pham; ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $sp->ma_san_pham ?>,'san_pham','ma_san_pham')"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
            </td>
        </tr>
        <?php 
		}
		?>
      </tbody>
    </table>
  </div>
</div>
