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
    <label>Nhập tên người dùng: </label> 
    <input type="text" name="tim" class="text-input small-input" />
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <!--<th>Mã tin</th>-->
          <th>Họ tên</th>
          <th>Tên đăng nhập</th>
          <th>Email</th>
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
        foreach ($nguoi_dungs as $ngd)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <!--<td><?php //echo $tin->ma_tin_tuc; ?></td>-->
          <td><a href="suanguoidung.php?ma_nguoi_dung=<?php echo $ngd->ma_nguoi_dung; ?>" title="Edit"><?php echo $ngd->ho_ten ?></a></td>
          <td><?php echo $ngd->ten_dang_nhap ?></td>
          <td><?php echo $ngd->email ?></td>
          <td><!-- Icons --> 
            <a href="suanguoidung.php?ma_nguoi_dung=<?php echo $ngd->ma_nguoi_dung ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $ngd->ma_nguoi_dung ?>,'nguoi_dung','ma_nguoi_dung')"> 
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
