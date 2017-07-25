<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="." class="act">Trang chủ</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sức Khỏe & Sắc Đẹp<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
                                            <?php 
											foreach($loai_san_phams as $lsp)
											{
											?>
                                                <?php 
												$loaicon=$m_loai_san_pham->Doc_ma_loai($lsp->ma_loai);
												foreach($loaicon as $con)
												{
												?>
                                                
												<li><a href="san_pham_theo_ma_loai.php?ma_loai=<?php echo $con->ma_loai?>"><?php echo $con->ten_loai?></a></li>
                                                
										<?php 
											}
											}
										?>
										</ul>
										</div>
										
										
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
                            
                           