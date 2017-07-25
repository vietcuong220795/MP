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
	include "includes/header.php"
	?>
<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="active">Đăng ký</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Đăng ký</h3>
			
			<div class="login-form-grids">
				<h5 class="animated wow slideInUp" data-wow-delay=".5s">Thông tin cá nhân</h5>
				<form class="animated wow slideInUp" data-wow-delay=".5s">
					<input type="text" placeholder="Họ..." required >
					<input type="text" placeholder="Tên..." required >
				</form>
				<div class="register-check-box animated wow slideInUp" data-wow-delay=".5s">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Đăng ký</label>
					</div>
				</div>
				<h6 class="animated wow slideInUp" data-wow-delay=".5s">Đăng nhập thông tin</h6>
				<form class="animated wow slideInUp" data-wow-delay=".5s">
					<input type="email" placeholder="Email " required >
					<input type="password" placeholder="Mật khẩu" required >
					<input type="password" placeholder="Nhập lại mật khẩu" required >
					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Tôi chấp nhận các điều khoản</label>
						</div>
					</div>
					<input type="submit" value="Đăng ký">
				</form>
			</div>
			<div class="register-home animated wow slideInUp" data-wow-delay=".5s">
				<a href="index.php">Trang chủ</a>
			</div>
		</div>
	</div>
<!-- //register -->
<!-- footer -->
	<?php
	include "includes/footer.php"
	?>
<!-- //footer -->
</body>
</html>