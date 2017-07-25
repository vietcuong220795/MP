<div class="new-collections">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s"><?php echo isset($title_loai)?$title_loai:"Sản Phẩm Mới "?></h3>
			 <?php
				foreach($san_phams as $sp)
				{
					?>
			<div class="new-collections-grids" >
				<div class="col-md-3 new-collections-grid">

                    
                    <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="chi_tiet_san_pham.php?id=<?php echo $sp->id_san_pham?>" class="product-image"><img src="images/sanpham/<?php echo $sp->hinh?>" alt=" " class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos">
								<a href="chi_tiet_san_pham.php?id=<?php echo $sp->id_san_pham?>">Xem chi tiết</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="chi_tiet_san_pham.php?id=<?php echo $sp->id_san_pham?>"><?php echo $sp->ten_san_pham?></a></h4>
						<!--
                        <p><?php //echo $sp->noi_dung_tom_tat?></p>
                        -->
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p> <span class="item_price" style="text-transform:none"><?php echo number_format($sp->don_gia,0,",",".")?> đ</span>
                            
                            <!--
                            <a class="item_add" href="#">Thêm vào </a>
                            -->
                            
<form class="form-item">
<input type="hidden" name="product_qty" value="1" />
<input name="product_code" type="hidden" value="<?php echo $sp->id_san_pham ?>">
<button type="submit">Mua hàng</button>
</form>
                            
                            </p>
						</div>
					</div>
				</div>
			
                    <?php
				}
				?>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
   
   