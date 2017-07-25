<script>
$(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	 var id=null;
	 if (pgurl=="") pgurl="." ;
     $("#main-nav li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
		  {
			var title = $(this).attr("title");
			id=document.getElementById(title);
			$(this).addClass("current");
			$(id).addClass("current");	
		  }
		  
     })
		
	$(id).click();
	
});

</script> 
<ul id="main-nav">
  <!-- Accordion Menu -->
  
  <li> 
  <a href="quantri.php" class="nav-top-item no-submenu"> 
  <!-- Add the class "no-submenu" to menu items with no sub menu  -->
  Danh mục 
  </a> 
  </li>
  
  <li>
  <a href="#" class="nav-top-item" id="tintuc"> Tin tức </a>
    <ul>
      <li><a href="tintuc.php" title="tintuc">Danh sách tin tức</a></li>
      <li><a href="themtintuc.php" title="tintuc">Thêm tin tức</a></li>
    </ul>
  </li>
  <li> 
  <a href="#" class="nav-top-item" id="loaisp"> Loại sản phẩm </a>
    <ul>
      <li><a href="loaisanpham.php" title="loaisp">Danh sách loại sản phẩm</a></li>
      <li><a href="themloaisanpham.php" title="loaisp" >Thêm loại sản phẩm</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="sanpham"> Sản phẩm </a>
    <ul>
      <li><a href="sanpham.php" title="sanpham">Danh sách sản phẩm</a></li>
      <li><a href="themsanpham.php" title="sanpham">Thêm sản phẩm</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="user"> User </a>
    <ul>
      <li><a href="user.php" title="user">Danh sách user</a></li>
      <li><a href="themuser.php" title="user">Thêm User</a></li>
    </ul>
  </li>
</ul>
<!-- End #main-nav -->