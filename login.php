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
				<li class="active">Trang đăng nhập</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Đăng nhập</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s"> 
				</p>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form>
					<input type="email" placeholder="Email Address" required >
					<input type="password" placeholder="Password" required >
					<div class="forgot">
						<a href="#">Quên mật khẩu?</a>
					</div>
					<input type="submit" value="Login">
				</form>
			</div>
			<h4 class="animated wow slideInUp" data-wow-delay=".5s">Người mới</h4>
			<p class="animated wow slideInUp" data-wow-delay=".5s"><a href="register.php">Đăng ký ở đây</a> (hoặc) quay trở lại <a href="index.php">Trang chủ<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->
<!-- footer -->
	
<?php
include "includes/footer.php";
?>
<!-- //footer -->
</body>
</html>