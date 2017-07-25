<div class="content-box-header">
  <h3><?php echo $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
        <fieldset>
          <strong>
          <font color="#993300">
          <p>
            <label>Số hóa đơn: <?php echo $hoa_don->ma_hoa_don ?></label> 
            <label><span style="margin-left:50px">Ngày lập hóa đơn: <?php echo date("d/m/Y",strtotime($hoa_don->ngay_dat)) ?></span></label>
          </p>
          <p> 
            <label>Trị giá: <?php echo number_format($hoa_don->tong_tien) ?> đồng</label>
          </p>
          <p>
            <label>Họ tên khách hàng: <?php echo $hoa_don->ten_khach_hang ?></label>
          </p>  
          <p>
            <label>Địa chỉ: <?php echo $hoa_don->dia_chi ?></label> 
            <label><span style="margin-left:20px">Điện thoại: <?php echo $hoa_don->dien_thoai ?></span></label>
            <label><span style="margin-left:20px">Email: <?php echo $hoa_don->email ?></span></label>
          </p>
          </font>
          <strong>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        <table>
    <caption>
    <p>
    <hr />
    <label><strong>Chi tiết hóa đơn</strong></label>
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th>Sản phẩm</th>
          <th>Hình</th>
          <th>Số lượng</th>
          <th>Đơn giá</th>
          <th>Thành tiền</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="3">
            <p><input class="button print" type="button" value="In đơn hàng" name="btnIn" onclick="window.print()" /></p>
            <div class="clear"></div>
            </td>
            <td colspan="3">
            <div class="pagination"><h4>Tổng thành tiền: <?php echo number_format($hoa_don->tong_tien) ?> đồng</h4> </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        <?php
        foreach ($chi_tiets as $ct)
		{
			$thanhtien=$ct->so_luong*$ct->don_gia;
		?>	
        <tr>
          <td style="vertical-align:middle"><?php echo $ct->ten_mon; ?></td>
          <td style="vertical-align:middle"><img src="../public/images/hinh_mon_an/<?php echo $ct->hinh; ?>" width="90px" height="70px" /></td>
          <td style="vertical-align:middle"><?php echo $ct->so_luong ?></td>
          <td style="vertical-align:middle"><?php echo number_format($ct->don_gia) ?> đồng</td>
          <td style="vertical-align:middle"><?php echo number_format($thanhtien)  ?> đồng</td>
        </tr>
        <?php 
		}
		?>
      </tbody>
    </table>
  </div>
  
</div>
