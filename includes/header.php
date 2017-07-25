	<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'ab12c342-f455-43fd-b66c-c485e135ff75', f: true }); done = true; } }; })();</script>
<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                        <a href="mailto:shopccg@gmail.com">shopccg@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>0969143018</li>
                        <?php
                        if(!isset($_SESSION["ma_khach_hang"]))
						{
						?>
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="dat_hang.php">Đăng nhập</a></li>
						<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="dat_hang.php">Đăng kí</a></li>
                        <?php
                        }
						else
						{
						?>
<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i>Chào, <?php echo $_SESSION["ten_khach_hang"]; ?> </li>
<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="thoatdangnhap.php">Thoát </a></li>                        
                        <?php	
						}
						?>
					</ul>
				</div>
				<div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<ul class="social-icons">
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="g"></a></li>
						<li><a href="#" class="instagram"></a></li>
                        
                       
					</ul>
                     <?php include_once "includes/facebook.php"; ?>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
					<h1><a href=".">CCG <span>Shop4All</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">CCG</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					<?php include "includes/menu.php"?>
							
							
							<li><a href="short-codes.php">Chính sách giao hàng</a></li>
							<li><a href="mail.php">Liên hệ</a></li>
						</ul>
					</div>
					</nav>
				</div>
				<div class="logo-nav-right">
					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form method="post" action="tim_kiem.php">
								<input class="sb-search-input" placeholder="Nhập giá trị tìm..." type="search" id="search" name="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
					</div>
						<!-- search-scripts -->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts -->
				</div>
				<!--<div class="header-right">
					<div class="cart box_1">
						<a href="checkout.php">
							<h3> <div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								<img src="images/bag.png" alt="" />
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Giỏ hàng đang trống</a></p>
						<div class="clearfix"> </div>
					</div>	
				</div>-->
                <!-- Cart item-->
<div style="width:200px;float:right;position:relative;top:10px">
    <a href="#" class="cart-box" id="cart-info" title="View Cart">
    <?php 
            if(isset($_SESSION["products"])){
                echo count($_SESSION["products"]); 
            }else{
                echo 0; 
            }
            ?>
    </a>
    <div class="shopping-cart-box" >
            <a href="#" class="close-shopping-cart-box" >Close</a>
            <h3>Giỏ hàng của bạn</h3> 
            <div id="shopping-cart-results"></div>
    </div>
</div>
<div style="clear:both"></div>
<!-- End Cart item-->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>