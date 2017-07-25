
<div class="container">
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
                    <li><a href="">Bán chạy nhất</a></li> 
						<li><a href="products.php">Tất cả sản phẩm</a></li>                     
						<li><a href="san_pham_trang_diem.php">Sản phẩm trang điểm</a> </li>
						<li><a href="san_pham_duong_da.php">Dưỡng da</a> </li>
						<li><a href="san_pham_duong_the.php">Sửa dưỡng thể</a></li>
						<li><a href="san_pham_kem_chong_nang.php">Kem chống nắng</a></li>
						<li><a href="san_pham_sua_rua_mat.php">Sửa rửa mặt</a></li>
						<li><a href="san_pham_son.php">Các loại son</a></li>
					</ul>
				</div>
			
			</div>
					
				