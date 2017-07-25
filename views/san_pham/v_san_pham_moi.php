<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include "includes/head.php";
?>
<!-- header -->
	<?php
	include "includes/header.php";
	?>
<!-- //header -->
<!-- breadcrumbs -->
<!-- //breadcrumbs -->
<!-- single -->
	<div class="single">
		<div class="container">
			<?php //include "includes/loctheogia.php"?>
			
	</div>
    </div>
<!-- //single -->
<!-- single-related-products -->
	<div class="single-related-products">
		<div class="container">
			<h3 class="animated wow slideInUp" data-wow-delay=".5s">Các Sản Phẩm</h3>
			
			<div class="new-collections-grids">
            <?php
				foreach($san_phams as $sp)
				{
			?>
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="chi_tiet_san_pham.php?id=<?php echo $sp->id_san_pham?>" class="product-image"><img src="images/sanpham/<?php echo $sp->hinh?>" alt=" " class="img-responsive"></a>
							<div class="new-collections-grid1-image-pos">
								<a href="chi_tiet_san_pham.php?id=<?php echo $sp->id_san_pham?>">Xem chi tiết</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="chi_tiet_san_pham.php?id=<?php echo $sp->id_san_pham?>"><?php echo $sp->ten_san_pham?></a></h4>
						<p><?php echo $sp->noi_dung_tom_tat?></p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><span class="item_price"><?php echo number_format($sp->don_gia,0,",",".")?> đ</span><a class="item_add" href="#">Thêm vào </a></p>
						</div>
					</div>
				</div>
                <?php
				}
				?>
				
			</div>
       
		</div>
       
	</div>
     
    --<nav class="numbering animated wow slideInRight" data-wow-delay=".5s">
				  <ul class="pagination paging">
					
					
					<li><a href="#"><?php echo $lst;?></a></li>
					
					</li>
				  </ul>
				</nav>
<!-- //single-related-products -->
<!-- footer -->
	<?php
	include "includes/footer.php";
	?>
<!-- //footer -->
<!-- zooming-effect -->
	<script src="js/imagezoom.js"></script>
<!-- //zooming-effect -->
