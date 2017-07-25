<div class="content-box-header">
  <h3><?php echo $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--`ten_san_pham`, `noi_dung_tom_tat`, `mo_ta_chi_tiet`, `don_gia`, `DVT`, `tinh_trang`, `hinh`, `san_pham_moi`-->
    <form method="post" enctype="multipart/form-data">
        <fieldset>
          <p>
            <label>Tên sản phẩm</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tên sản phẩm" type="text" id="ten_san_pham" name="ten_san_pham" value="<?php echo $san_pham->ten_san_pham ?>" />
          </p>
          <p>
            <label>Nội dung tóm tắt</label>
            <input class="text-input medium-input" name="noi_dung_tom_tat" type="text" id="medium-input" name="medium-input" value=" <?php echo $san_pham->noi_dung_tom_tat?>"/>
          <p>
          <p>
            <label>Nội dung chi tiết</label>
            <textarea name="mo_ta_chi_tiet" cols="50" rows="5" class="text-input large-input ckeditor" id="large-input">
            <?php echo $san_pham->mo_ta_chi_tiet ?>
            </textarea>
          </p>
          <p>
            <label>Đơn giá</label>
            <input class="text-input small-input" type="text" id="don_gia" name="don_gia" value="<?php echo $san_pham->don_gia ?>" />
          </p>
          <p>
            <label>Đơn vị tính</label>
            <input class="text-input small-input" type="text" id="dvt" name="dvt" value="<?php echo $san_pham->dvt ?>"/>
          </p>
          <p>
            <label>Chọn hình sản phẩm</label>
            <input type="file" name="hinh" id="hinh" />
            <div class="image-holder" id="image-holder"></div>
            <?php
            if($san_pham->hinh!="")
			{
			?>
            	<img src="../images/sanpham/<?php echo $san_pham->hinh ?>"  width="180px" height="150px" />
            <?php
			}
			?>
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='sanpham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>