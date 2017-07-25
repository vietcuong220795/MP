// JavaScript Document
$(document).ready(function(){	
		
		$(".form-item").submit(function(e){
			var form_data = $(this).serialize();
			var button_content = $(this).find('button[type=submit]');
			button_content.html('Đang thêm...'); //Loading button text 
	
			$.ajax({ //make ajax request to cart_process.php
				url: "cart_process.php",
				type: "POST",
				dataType:"json", //expect json value from server
				data: form_data
			}).done(function(data){ //on Ajax success
				$("#cart-info").html(data.items); //total items in cart-info element
				button_content.html('Mua hàng'); //reset button text to original text
				alert("Thêm sản phẩm vào giỏ hàng thành công !"); //alert user
				if($(".shopping-cart-box").css("display") == "block"){ //if cart box is still visible
					$(".cart-box").trigger( "click" ); //trigger click to update the cart box.
				}
			})
				
			e.preventDefault();
		});//end submit in Cart

	
	//Show Items in Cart
	$( ".cart-box").click(function(e) { //when user clicks on cart box
		e.preventDefault(); 
		$(".shopping-cart-box").fadeIn(1000); //display cart box
		$("#shopping-cart-results").html('<img src="images/ajax-loader.gif">'); //show loading image
		$("#shopping-cart-results" ).load( "cart_process.php", {"load_cart":"1"}); //Make ajax request using jQuery Load() & update results
	}); //end Show Items in Cart
	
	//Close Cart
	$( ".close-shopping-cart-box").click(function(e){ //user click on cart box close link
		e.preventDefault(); 
		$(".shopping-cart-box").fadeOut(1000); //close cart-box
	}); //end Close Cart
	
	//Remove items from list cart
	$("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
		e.preventDefault(); 
		var pcode = $(this).attr("data-code"); //get product code
		$(this).parent().fadeOut(); //remove item element from box
		$.getJSON( "cart_process.php", {"remove_code":pcode} , function(data){ //get Item count from Server
			$("#cart-info").html(data.items); //update Item count in cart-info
			$(".cart-box").trigger( "click" ); //trigger click on cart-box to update the items list
		});
	}); //end Remove items from list cart
	
	//Remove items from view cart
	$(".shopping-cart").on('click', 'a.remove-item', function() {
		
		var pcode = $(this).attr("data-code"); //get product code
		$.getJSON( "cart_process.php", {"remove_code":pcode} , function(data){ 
			window.location="gio_hang.php"; //location url
		});
	}); // end Remove items from view cart
	
	// Change product_qty from view cart
	$(".product_qty").on('change',function(){
		
		
		var pval = $(this).val(); //get product value
		if(Number(pval)<=0)
		{
			alert("Số lượng sản phẩm > 0");
			window.location="gio_hang.php"; //location url
			return false;
				
		}
		var pcode = $(this).attr('data_code'); //get product id
		
		$.getJSON( "cart_process.php", {"update_code":pcode,"value":pval} , function(data){ 
		
			window.location="gio_hang.php"; //location url
			
		});
		
		
	}); // end Change product_qty from view cart

});// end ready