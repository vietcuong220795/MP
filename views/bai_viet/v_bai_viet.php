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
				<li class="active">Tin Tức</li>
			</ol>
		</div>
	</div>
<div class="mainbody ">





<div class="container clearfix titlecontainer">

  

    <!-- Page Title

    ================================================== -->

    <div class="pagetitlewrap">

        <h1 class="pagetitle">

              <?php echo $tin_tuc->tieu_de?>
        </h1>

        <div class="mobileclear"></div>

        <span class="description">

          
        </span>

    </div>

    <div class="clear"></div>



    <!-- Page Content

      ================================================== -->

    <div class="maincontent page">

        <h2><?php echo $tin_tuc->tom_tat?></h2>

<?php echo $tin_tuc->chi_tiet?>
        


        
        

        <div class="clear"></div>

    </div>



    <!-- Sidebar

      ================================================== -->      

    <div class="sidebar">

        <div id="text-23" class="widget widget_text">			<div class="textwidget"><p class="freeship">Giao hàng miễn phí cho các đơn đặt hàng trên 700.000 đ<span class="icons-airplane"></span></p></div>
		</div><div class="clear"></div><div id="text-22" class="widget widget_text"><h4 class="widget-title">Hỗ Trợ Trực Tuyến</h4>			<div class="textwidget"><div align="center">
<a href="mail.php"><img src="http://opi.yahoo.com/online?u=mycanh1204&t=14" border="0"></a>
<p><strong>gặp Mrs. Mỹ Chi</strong></p>
</div></div>
		</div><div class="clear"></div><div id="text-21" class="widget widget_text">			<div class="textwidget"></div>
		</div><div class="clear"></div>
    </div>



    <div class="clear"></div>



</div>

</div>



</div>





<!-- Close Mainbody and Sitecontainer and start footer



  ================================================== -->


  

  
<!-- footer -->
	<?php
	include "includes/footer.php";
	?>
