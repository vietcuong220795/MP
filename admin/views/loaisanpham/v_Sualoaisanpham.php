<div class="content-box-header">
  <h3><?php echo $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--`ma_loai`, `ten_loai`, `mo_ta`, `hinh`-->
    <form method="post" enctype="multipart/form-data">
        <fieldset>
          <p>
            <label>Tên loại</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tên loại sản phẩm" type="text" id="ten_loai" name="ten_loai" value="<?php echo $loai_san_pham->ten_loai ?>" />
          </p>
          <p>
            <label>Nội dung chi tiết</label>
            <textarea name="mo_ta" cols="50" rows="5" class="text-input large-input ckeditor" id="large-input">
            <?php echo $loai_san_pham->mo_ta ?>
            </textarea>
          </p>
          <p>
            <label>Chọn hình loại sản phẩm</label>
            <input type="file" name="hinh" id="hinh" />
            <div class="image-holder" id="image-holder"></div>
            <?php
            if($loai_san_pham->hinh!="")
			{
			?>
            <img src="../images/sanpham/<?php echo $loai_san_pham->hinh?>"  width="180px" height="150px" />
            <?php
			}
			?>
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loaisanpham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
