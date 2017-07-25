<?php
@session_start();
$err="";
if(isset($_SESSION["error"]))
{
	$err=$_SESSION["error"];
	$_SESSION["error"]="";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý Shop Mỹ Phẩm | Đăng nhập</title>
<link rel="stylesheet" href="public/layout/resources/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="public/layout/resources/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="public/layout/resources/css/invalid.css" type="text/css" media="screen" />	
<script type="text/javascript" src="public/layout/resources/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="public/layout/resources/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="public/layout/resources/scripts/facebox.js"></script>
<script type="text/javascript" src="public/layout/resources/scripts/jquery.wysiwyg.js"></script>
</head>
<body id="login">
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
                <h1>Quản lý Shop Mỹ Phẩm</h1>
				<!-- Logo (221px width) -->
                <h2 style="color:#F00">CCG <span>Shop4All</span></h2>
				<!--<img id="logo" src="public/layout/resources/images/Alphatek.png" alt="Nhà Hàng Admin logo" />-->
			</div> <!-- End #logn-top -->
			
			<div id="login-content">
				<form action="quantri.php" method="post">
				
					<div class="notification information png_bg">
						<div>
							Đăng nhập hệ thống.(Thông tin tên và mật khẩu phải nhập)  
						</div>
					</div>
					
					<p>
						<label>Tên đăng nhập</label>
						<input class="text-input" type="text"  name="ten_dang_nhap" />
					</p>
					<div class="clear"></div>
					<p>
						<label>Mật khẩu</label>
						<input class="text-input" type="password" name="mat_khau" />
					</p>
					<div class="clear"></div>
					<p id="remember-password">
						<input type="checkbox" />Remember me
					</p>
					<div class="clear"></div>
					<p>
						<input class="button" type="submit" value="Sign In" name="login" />
					</p>
					<div class="clear"></div>
					<div notification error png_bg>
                    <a href="#" class="close"><img src="public/layout/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div><?php echo $err ?></div>
					</div>
				</form>
			</div> <!-- End #login-content -->
		</div> <!-- End #login-wrapper -->
  </body>
</html>
