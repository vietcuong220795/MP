<div class="content-box-header">
  <h3><?php $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form method="post" enctype="multipart/form-data" >
        <fieldset>
          
          <p>
            <label>Tiêu đề</label>
            <input class="text-input small-input" type="text" id="tieu_de" name="tieu_de" value="<?php echo $tin_tuc->tieu_de ?>"/>
          </p>
          <p>
            <label>Nội dung tóm tắt</label>
            <textarea name="tom_tat" cols="50" rows="3" class="text-input textarea wysiwyg " id="medium-input" value="<?php echo $tin_tuc->tom_tat ?>" ></textarea>
          <p>
            <label>Nội dung chi tiết</label>
            <textarea name="chi_tiet" cols="50" rows="5" class="text-input large-input ckeditor" id="large-input" value="<?php echo $tin_tuc->chi_tiet ?>"></textarea>
          </p>
          <p>
            <label>Hình tin</label>
            <input type="file" name="f_hinh" value="<?php echo $tin_tuc->hinh ?>"/>
          <p>
            <label>Tác giả</label>
            <input class="text-input small-input" type="text" id="tac_gia" name="tac_gia" value="<?php echo $tin_tuc->tac_gia ?>"/>
		  </p>
          <p>
            <label>Ngày đăng bài</label>
            <input class="text-input small-input datepicker" type="text" id="ngay_dang" name="ngay_dang" value="<?php echo $tin_tuc->ngay_dang ?>"/>
          </p>
          <p>
            <label>Ngày đăng gởi</label>
            <input class="text-input small-input datepicker" type="text" id="ngay_gui" name="ngay_gui" value="<?php echo $tin_tuc->ngay_gui ?>"/>
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='tintuc.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
