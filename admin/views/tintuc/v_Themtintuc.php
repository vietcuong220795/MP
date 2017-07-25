<div class="content-box-header">
  <h3><?php echo $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--`ma_tin_tuc`, `tieu_de`, `tom_tat`, `chi_tiet`, `hinh`, `tac_gia`, `ngay_dang`, `ngay_gui`, `so_luot_xem`-->
    <form method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>
            <label>Tiêu đề</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tiêu đề tin tức" type="text" id="tieu_de" name="tieu_de" />
          </p>
          <p>
            <label>Nội dung tóm tắt</label>
            <textarea name="tom_tat" cols="50" rows="3" class="text-input textarea wysiwyg " id="medium-input"></textarea>
          <p>
            <label>Nội dung chi tiết</label>
            <textarea name="chi_tiet" cols="50" rows="5" class="text-input large-input ckeditor" id="large-input"></textarea>
          </p>
          <p>
            <label>Chọn hình tin tức</label>
            <input type="file" name="hinh" id="hinh" />
            <div class="image-holder" id="image-holder"></div>
          <p>
            <label>Tác giả</label>
            <input class="text-input small-input kiemtra" data_error="Nhập họ tên tác giả " type="text" id="tac_gia" name="tac_gia" />
		  </p>
          <p>
            <label>Ngày đăng bài</label>
            <input class="text-input small-input datepicker" type="text" id="ngay_dang" name="ngay_dang" />
          </p>
          <p>
            <label>Ngày đăng gởi</label>
            <input class="text-input small-input datepicker" type="text" id="ngay_gui" name="ngay_gui" />
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='tintuc.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
