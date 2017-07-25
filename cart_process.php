<?php
@session_start(); //start session
require_once("models/m_san_pham.php");
if(isset($_POST["product_code"]))
{
	foreach($_POST as $key => $value){
		$new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING); //create a new product array 
	}
	//we need to get product name and price from database.
	$m_san_pham=new M_san_pham();
	$row=$m_san_pham->Chi_tiet_san_pham($new_product['product_code']);
	
	$new_product["product_name"] = $row->ten_san_pham; //fetch product name from database
	$new_product["product_price"] = $row->don_gia;  //fetch product price from database
	$new_product["product_image"] = $row->hinh;	//fetch product image from database
	
	if(isset($_SESSION["products"])){  //if session var already exist
		if(isset($_SESSION["products"][$new_product['product_code']])) //check item exist in products array
		{
			unset($_SESSION["products"][$new_product['product_code']]); //unset old item
		}			
	}
	$_SESSION["products"][$new_product['product_code']] = $new_product;	//update products with new item array
 	$total_items = count($_SESSION["products"]); //count total items
	die(json_encode(array('items'=>$total_items))); //output json 
	
}

################## list products in cart ###################
if(isset($_POST["load_cart"]) && $_POST["load_cart"]==1)
{

	if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){ //if we have session variable
		$cart_box = '<ul class="cart-products-loaded">';
		$total = 0;
		foreach($_SESSION["products"] as $product){ //loop though items and prepare html content
			
			//set variables to use them in HTML content below
			$product_name = $product["product_name"]; 
			$product_price = $product["product_price"];
			$product_code = $product["product_code"];
			$product_qty = $product["product_qty"];
			
			
			$cart_box .=  "<li> $product_name &mdash; ($product_qty * ".number_format($product_price,0,",","."). " $currency = ".number_format(($product_price * $product_qty),0,",","."). $currency . " ) <a href=\"#\" class=\"remove-item\" data-code=\"$product_code\">&times;</a></li>";
			$subtotal = ($product_price * $product_qty);
			$total = ($total + $subtotal);
		}
		$cart_box .= "</ul>";
		$cart_box .= '<div class="cart-products-total">Tổng cộng : '.number_format($total,0,",",".").$currency.' <u><a href="dat_hang.php" title="Xem giỏ hàng">Đặt hàng</a></u></div>';
		die($cart_box); //exit and output content
	}else{
		die("Bạn chưa mua hàng... "); //we have empty cart
	}
}

################# remove item from shopping cart ################
if(isset($_GET["remove_code"]) && isset($_SESSION["products"]))
{
	$product_code   = filter_var($_GET["remove_code"], FILTER_SANITIZE_STRING); //get the product code to remove

	if(isset($_SESSION["products"][$product_code]))
	{
		unset($_SESSION["products"][$product_code]);
	}
	
 	$total_items = count($_SESSION["products"]);
	die(json_encode(array('items'=>$total_items)));
}
################# update value item from shopping cart ################
if(isset($_GET["update_code"]) && isset($_SESSION["products"]))
{
	$product_code   = filter_var($_GET["update_code"], FILTER_SANITIZE_STRING); //get the product code to update
	$product_value   = filter_var($_GET["value"], FILTER_SANITIZE_STRING); //get the product val to update

	if(isset($_SESSION["products"][$product_code]))
	{
		$_SESSION["products"][$product_code]["product_qty"]=$product_value;
	}
	
 	$total_items = count($_SESSION["products"]);
	die(json_encode(array('items'=>$total_items)));
}

?>