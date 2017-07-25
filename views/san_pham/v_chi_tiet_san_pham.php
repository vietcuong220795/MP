<?php
include "includes/head.php";
?>
<!-- header -->
	<?php
	include "includes/header.php";
	include "includes/loctheogia.php";

	?>
<div class="col-md-8 single-right">
				<div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
					<div class="flexslider"  >
						<ul class="slides">
							<li data-thumb="images/sanpham/<?php echo $san_pham->hinh?>">
								<div class="thumb-image"> <img src="images/sanpham/<?php echo $san_pham->hinh?>" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="images/sanpham/<?php echo $san_pham->hinh?>">
								 <div class="thumb-image"> <img src="images/sanpham/<?php echo $san_pham->hinh?>" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="images/sanpham/<?php echo $san_pham->hinh?>">
							   <div class="thumb-image"> <img src="images/sanpham/<?php echo $san_pham->hinh?>" data-imagezoom="true" class="img-responsive"> </div>
							</li> 
						</ul>
					</div>
					<!-- flixslider -->
						<script defer src="js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					<!-- flixslider -->
				</div>
				<div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
					<h3><?php echo $san_pham->ten_san_pham?></h3>
					<h4><span class="item_price"><?php echo number_format($san_pham->don_gia,0,",",".")?> đ</span> </h4>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="description">
						<h5><i>Miêu tả</i></h5>
						<p><?php echo $san_pham->mo_ta_chi_tiet?></p>
					</div>
					<div class="color-quality">
						<div class="color-quality-left">
							<h5>Màu : </h5>
							<ul>
								<li><a href="#"><span></span>Đỏ</a></li>
								<li><a href="#" class="brown"><span></span>Vàng</a></li>
								<li><a href="#" class="purple"><span></span>Tim</a></li>
								<li><a href="#" class="gray"><span></span>Hồng</a></li>
							</ul>
						</div>
                      <form class="form-item">
						<div class="color-quality-right">
							<h5>Số lượng :</h5>
					
                            <input type="number" name="product_qty" min="1" value="1" style="width:40px" />
                            <input name="product_code" type="hidden" value="<?php echo $san_pham->id_san_pham ?>">
                            <button type="submit">Mua hàng</button>
                        </form>    
						</div>
						<div class="clearfix"> </div>
					</div>
					
                    <div class="occasional">
						<h5> </h5>
						
						<div class="clearfix"> </div>
					</div>
					<div class="occasion-cart">
                    		
						<!--<a class="item_add" href="#">Thêm vào </a>-->
					</div>
                    
					<div class="social">
						<div class="social-left">
							<p>Chia sẻ :</p>
						</div>
						<div class="social-right">
							<ul class="social-icons">
								<li><a href="#" class="facebook"></a></li>
								<li><a href="#" class="twitter"></a></li>
								<li><a href="#" class="g"></a></li>
								<li><a href="#" class="instagram"></a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
				
			
			<div class="clearfix"></div>
		</div>
	<div class="clearfix"></div>

	<?php
	include "includes/product.php";
	?>
<?php
	include "includes/footer.php";
	?>