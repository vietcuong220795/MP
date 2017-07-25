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
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="active">Bộ sưu tập</li>
			</ol>
		</div>
	</div>
	<div class="products">
    <?php include "includes/loctheogia.php"?>
    <?php include "includes/hinhproduct.php"?>
		<?php /*?><div class="container">
			<div class="col-md-4 products-left">
				<div class="filter-price animated wow slideInUp" data-wow-delay=".5s">
					<h3>Phân loại</h3>
					
						<script type='text/javascript'>//<![CDATA[ 
						$(window).load(function(){
						 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 100000,
								values: [ 20000, 80000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );


						});//]]>
						</script>
						<script type="text/javascript" src="js/jquery-ui.min.js"></script>
					 <!---->
				</div>
				<div class="categories animated wow slideInUp" data-wow-delay=".5s">
					<h3>Loại</h3>
					<ul class="cate">
						<li><a href="products.php">Bán chạy nhất</a> <span>(15)</span></li>
						<li><a href="products.php">Trang điểm</a> <span>(16)</span></li>
							<ul>
								<li><a href="products.php">Trang điểm môi</a> <span>(2)</span></li>
								<li><a href="products.php">Trang điểm mắt</a> <span>(5)</span></li>
								<li><a href="products.php">Trang điểm mặt</a> <span>(1)</span></li>
							</ul>
					
						<li><a href="products.php">Dưỡng da</a> <span>(15)</span></li>
							<ul>
								<li><a href="products.php">Sửa dưỡng thể</a> <span>(2)</span></li>
								<li><a href="products.php">Kem chống nắng</a> <span>(0)</span></li>
								<li><a href="products.php">Sửa rửa mặt	</a> <span>(1)</span></li>
								<li><a href="products.php">Tẩy trang</a> <span>(0)</span></li>
							
							</ul>
					</ul>
				</div>
			
			</div>
					<div><br /><br /><br /><br /><br /></div>
					<div class="products-right-grids-position animated wow slideInRight" data-wow-delay=".5s">
						<img src="images/18.jpg" alt=" " class="img-responsive" />
						<div class="products-right-grids-position1">
							<h4>Bộ sưu tập 2016</h4>
							
						</div>
					</div>
				</div><?php */?>
		<div class="single-related-products">
        <div class="container">
			<h3 class="animated wow slideInUp" data-wow-delay=".5s"><?php echo isset($title)?$title:"Bộ sưu tập mỹ phẩm" ?></h3>
			
			<div class="new-collections-grids">
            <?php
				foreach($san_phams as $sp)
				{
			?>
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<img src="images/bst/<?php echo $sp->hinh?>" alt=" " class="img-responsive">
							
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
						
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							
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
					
					
					<li><?php echo isset($lst)?$lst:"";?></li>
					
					</li>
				  </ul>
				</nav>
<!-- //breadcrumbs -->
<!-- footer -->
	<?php
	include "includes/footer.php";
	?>
<!-- //footer -->
