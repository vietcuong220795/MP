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
            <input class="text-input small-input kiemtra" data_error="Nhập tên loại sản phẩm" type="text" id="ten_loai" name="ten_loai" />
          </p>
          <p>
            <label>Nội dung chi tiết</label>
            <textarea name="mo_ta" cols="50" rows="5" class="text-input large-input ckeditor" id="large-input"></textarea>
          </p>
          <p>
            <label>Chọn hình loại sản phẩm</label>
            <input type="file" name="hinh" id="hinh" class="kiemtra" data_error="Xin vui lòng chọn hình..." />
            <div class="image-holder" id="image-holder"></div>
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
