<?php
$db=mysqli_connect("localhost","root","","brotherstore");
function getpro1(){
	global $db;
	$get_products="SELECT * FROM product order by 1 DESC LIMIT 0,4";
	$run_product=mysqli_query($db,$get_products);
	while ($row_products=mysqli_fetch_array($run_product)) {
		$product_id=$row_products['product_id'];
		$product_title=$row_products['product_title'];
		$product_price=$row_products['product_price'];
		$product_image=$row_products['product_image'];
		echo "  
<div class='col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12'>
<div class='product'>
 <div class='product__inner'>
   <div class='pro__thumb'>
   <a href='#'>
   <img src='brotherstoreadmin/images/productwomen/$product_image' alt='product images'>
    </a>
    </div>
    <div class='product__hover__info'>
    <ul class='product__action'>
    <li><a data-toggle='modal' data-target='#' title='Quick View' class='quick-view modal-view detail-link' href='#'><span class='ti-plus'></span></a></li>
<li><a title='Add TO Cart' href='cart.php?product_id=$product_id'><span class='ti-shopping-cart'></span></a></li>
                                                                <li><a title='Wishlist' href='wishlist.php?product_id=$product_id'><span class='ti-heart'></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class='product__details'>
                                                        <h2><a href='product-details.php?product_id=$product_id'>$product_title</a></h2>
                                                        <ul class='product_price'>
                                                            <li class='old__price'> $product_price </li>
                                                           

                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

		";
	}
}
?>