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
				<li class="active">Thanh toán</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- checkout -->
	<div class="checkout">
		<div class="container">
			<h3 class="animated wow slideInLeft" data-wow-delay=".5s">Giỏ hàng của bạn gồm:<span>1 sản phẩm</span></h3>
			<div class="checkout-right animated wow slideInUp" data-wow-delay=".5s">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>STT</th>	
							<th>Sản phẩm</th>
							<th>Số lượng</th>
							<th>Tên sản phẩm</th>
							<th>Phí dịch vụ</th>
							<th>Giá</th>
							<th>Xóa</th>
						</tr>
					</thead>
					<tr class="rem1">
						<td class="invert">1</td>
						<td class="invert-image"><a href="chi_tiet_san_pham.php"><img src="images/22.jpg" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Black Shoe</td>
						<td class="invert">$5.00</td>
						<td class="invert">$290.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close1"> </div>
							</div>
							<script>$(document).ready(function(c) {
								$('.close1').on('click', function(c){
									$('.rem1').fadeOut('slow', function(c){
										$('.rem1').remove();
									});
									});	  
								});
						   </script>
						</td>
					</tr>
					
								<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->
				</table>
			</div>
			<div class="checkout-left">	
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4>Giỏ hàng</h4>
					<ul>
						<li>Sản phẩm 1 <i>-</i> <span>$250.00 </span></li>
						<li>Tổng phí dịch vụ <i>-</i> <span>$15.00</span></li>
						<li>Tổng tiền <i>-</i> <span>$854.00</span></li>
					</ul>
				</div>
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="chi_tiet_san_pham.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Tiếp tục mua hàng</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //checkout -->
<!-- footer -->
	<?php
	include "includes/footer.php";
	?>
<!-- //footer -->
</body>
</html>