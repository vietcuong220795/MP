<div class="content-box-header">
  <h3><?php echo $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    
    <form method="post" enctype="multipart/form-data">
        <fieldset>
          <p>
            <label>Mã loại người dùng</label>
            <input class="text-input small-input kiemtra" type="text" id="ma_loai" name="ma_loai" />
          <p>
          <p>
            <label>Họ tên</label>
            <input class="text-input small-input kiemtra" data_error="Nhập họ tên người dùng" type="text" id="ho_ten" name="ho_ten" />
          </p>
          <p>
            <label>Tên đăng nhập</label>
            <input class="text-input small-input kiemtra" type="text" id="ten_dang_nhap" name="ten_dang_nhap" />
          <p>
            <label>Mật khẩu</label>
            <input class="text-input small-input kiemtra" type="text" id="mat_khau" name="mat_khau" />
          </p>
          <p>
            <label>Ngày đăng ký</label>
            <input class="text-input small-input datepicker" type="text" id="ngay_dang_ky" name="ngay_dang_ky" />
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
