	
<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>Về chúng tôi</h3>
					<p>Cam kết luôn mang lại  những sản phẩm chính hãng với giá tốt nhất cho khách hàng.<span>Hoàn trả sản phẩm không vừa ý trong vòng 7 ngày.
						</span></p>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>Thông tin liên lạc</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>325 Trần Phú,Phường 8,Quận 5, <span>TP.Hồ Chí Minh.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:shopccg@gmail.com">shopccg@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>0969143018</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
					<h3><a href="short-codes.php" style="color:#FFF">Hướng dẫn thanh toán</a></h3>
                    
					<!--<div class="footer-grid-left"
						<a href="chi_tiet_san_pham.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="chi_tiet_san_pham.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="chi_tiet_san_pham.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>-->
                    
                    <div class="footer-grid-left">
					<div class="fb-page" data-href="https://www.facebook.com/Batdongsanlongdien/" data-tabs="timeline" data-width="400" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Batdongsanlongdien/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Batdongsanlongdien/">Longdienland</a></blockquote></div>
					</div>
                    
                   
		
					
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
					<h3>Bài viết</h3>
                    <?php 
					include_once "models/m_tin_tuc.php";
					$m_tin_tuc=new M_tin_tuc();
					$tin_tucs=$m_tin_tuc->Doc_tin_tuc();	
					foreach($tin_tucs as $tin)
					{									
					?>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="tin_tuc.php?ma_tin=<?php echo $tin->ma_tin_tuc?>"><img src="images/sanpham/<?php echo $tin->hinh?>" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="tin_tuc.php?ma_tin=<?php echo $tin->ma_tin_tuc?>"><?php echo $tin->tieu_de;?></a></h4>
							<p>Ngày đăng:<?php echo $tin->ngay_dang;?></p>
						</div>
						<div class="clearfix"> </div>
					</div>
                    <?php 
					}
					?>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="index.php">CCG <span>mua sắm bất cứ nơi nào</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				<p>2016 CCG. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
    </body>
</html>