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
    <label>Nhập tiêu đề: </label> 
    <input type="text" name="tim" class="text-input small-input" />
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <!--<th>Mã tin</th>-->
          <th>Tiêu đề</th>
          <th>Tác giả</th>
          <th>Ngày đăng</th>
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
        foreach ($tin_tucs as $tin)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <!--<td><?php //echo $tin->ma_tin_tuc; ?></td>-->
          <td><a href="suatintuc.php?ma_tin_tuc=<?php echo $tin->ma_tin_tuc; ?>" title="Edit"><?php echo $tin->tieu_de ?></a></td>
          <td><?php echo $tin->tac_gia ?></td>
          <td><?php echo $tin->ngay_dang ?></td>
          <td><!-- Icons --> 
            <a href="suatintuc.php?ma_tin_tuc=<?php echo $tin->ma_tin_tuc ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $tin->ma_tin_tuc ?>,'tin_tuc','ma_tin_tuc')"> 
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
