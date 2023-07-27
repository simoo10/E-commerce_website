<?php
$db=mysqli_connect("localhost","root","","brotherstore");
function getpro(){
	global $db;
	$get_products="SELECT * FROM products order by 1 ASC LIMIT 0,8";
	$run_product=mysqli_query($db,$get_products);
	while ($row_products=mysqli_fetch_array($run_product)) {
		$products_id=$row_products['products_id'];
		$products_title=$row_products['products_title'];
		$products_price=$row_products['products_price'];
		$products_img1=$row_products['products_img1'];
		echo "  
<div class='col-md-4s single__pro col-lg-4 col-sm-4 col-xs-12'>
<div class='product'>
 <div class='product__inner'>
   <div class='pro__thumb'>
   <a href='product-details-men.php?products_id=$products_id'>
   <img src='brotherstoreadmin/images/men/$products_img1' style='width: 325px;height: 375px;' alt='product images'>
    </a>
    </div>
    <div class='product__hover__info'>
    <ul class='product__action'>
    
<li><a title='Add TO Cart' href='addto_cart.php?products_id=$products_id'><span class='ti-shopping-cart'></span></a></li>
                                                                <li><a title='Wishlist' href='addwishlist.php?products_id=$products_id'><span class='ti-heart'></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class='product__details'>
                                                        <h2><a href='product-details-men.php?products_id=$products_id' style='font-family: Cursive;font-style: oblique;color:#22233b;'>$products_title</a></h2>
                                                        <ul class='product_price'>
                                                            <li class='old__price' style='font-family: Cursive;font-style: oblique;color:#0b14bd;'> $ $products_price </li>
                                                           

                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

		";
    }
}
function getpro1(){
    global $db;
    $get_products="SELECT * FROM products_women order by 1 ASC LIMIT 0,12";
    $run_product=mysqli_query($db,$get_products);
    while ($row_products=mysqli_fetch_array($run_product)) {
        $productsw_id=$row_products['productsw_id'];
        $productsw_title=$row_products['productsw_title'];
        $productsw_price=$row_products['productsw_price'];
        $productsw_img1=$row_products['productsw_img1'];
        echo "  
<div class='col-md-4 single__pro col-lg-4 col-sm-3 col-xs-12' >
<div class='product'>
 <div class='product__inner'>
   <div class='pro__thumb'>
   <a href='product-details.php?productsw_id=$productsw_id'>  
   <img src='brotherstoreadmin/images/productwomen/$productsw_img1' style='width: 325px;height: 375px;' alt='product images'>
    </a>
    </div>
    <div class='product__hover__info'>
    <ul class='product__action'>
    
<li><a title='Add TO Cart' href='addto_cart.php?productsw_id=$productsw_id'><span class='ti-shopping-cart'></span></a></li>
                                                                <li><a title='Wishlist' href='addwishlist.php?productsw_id=$productsw_id'><span class='ti-heart'></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class='product__details'>
                                                        <h2><a href='product-details.php?productsw_id=$productsw_id' style='font-family: Cursive;font-style: oblique;color:#22233b;'>$productsw_title</a></h2>
                                                        <ul class='product_price'>
                                                            <li class='old__price' style='font-family: Cursive;font-style: oblique;color:#0b14bd;'>$ $productsw_price </li>
                                                           

                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

        ";
    }
}
function getpro2(){
    global $db;
    $get_products="SELECT * FROM products_electronic order by 1 DESC LIMIT 0,8";
    $run_product=mysqli_query($db,$get_products);
    while ($row_products=mysqli_fetch_array($run_product)) {
        $productse_id=$row_products['productse_id'];
        $products_title=$row_products['products_title'];
        $products_price=$row_products['products_price'];
        $products_img1=$row_products['products_img1'];
        echo "  
<div class='col-md-3 single__pro col-lg-3  col-sm-4 col-xs-12'>
<div class='product'>
 <div class='product__inner'>
   <div class='pro__thumb'>
   <a href='product-details-electronic.php?productse_id=$productse_id'>
   <img src='brotherstoreadmin/images/mobile/$products_img1' style='width: 225px;height: 275px;' alt='product images'>
    </a>
    </div>
    <div class='product__hover__info'>
    <ul class='product__action'>
<li><a title='Add TO Cart' href='addto_cart.php?productse_id=$productse_id'><span class='ti-shopping-cart'></span></a></li>
                                                                <li><a title='Wishlist' href='addwishlist.php?productse_id=$productse_id'><span class='ti-heart'></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class='product__details'>
                                                        <h2><a href='product-details-electronic.php?productse_id=$productse_id' style='font-family: Cursive;font-style: oblique;color:#22233b;'>$products_title</a></h2>
                                                        <br>
                                                        <ul class='product_price' >
                                                            <li class='old__price' style='font-family: Cursive;font-style: oblique;color:#0b14bd;'> $ $products_price </li>
                                                           

                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            

        ";

    }
}


?>