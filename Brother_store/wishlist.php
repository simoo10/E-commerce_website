<?php

include("includes/db.php");





?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Brother Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo-site-menu.png " >
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
     <!-- header-->
    <?php include("header.php"); ?>
    <?php
    

?>
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/2.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Wishlist</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Wishlist</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- wishlist-area start -->
        <div class="wishlist-area ptb--120 bg__white">
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-content">
                            <form action="#">
                                <div class="wishlist-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-remove"><span class="nobr">Remove</span></th>
                                                <th class="product-thumbnail">Image</th>
                                                <th class="product-name"><span class="nobr">Product Name</span></th>
                                                <th class="product-price"><span class="nobr"> Unit Price </span></th>
                                                <th class="product-stock-stauts"><span class="nobr"> Stock Status </span></th>
                                                <th class="product-add-to-cart"><span class="nobr">Add To Cart</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
             $wishsql="SELECT * FROM products_women PW join wishlist W ON PW.productsw_id=W.productsw_id  ";
             $wishres=mysqli_query($con,$wishsql);
             $sl=0;
           while($row_product=mysqli_fetch_assoc($wishres)){
            $productsw_id=$row_product['productsw_id'];
            $productsw_title=$row_product['productsw_title'];
            $productsw_price=$row_product['productsw_price'];
            $productsw_desc=$row_product['productsw_desc'];
            $productsw_img1=$row_product['productsw_img1'];
            $sl++;
            if ($row_product['amount']>0) {
                $quant="In stock"; }else{
                   $quant= "Out of stock";
                }
                                                                                                      
                  
    echo "  <tr>
    
                                                <td class='product-remove'><a href='deletewishlist.php?productsw_id=$productsw_id'>×</a></td>
                                                <td class='product-thumbnail'><a href='#'><img src='brotherstoreadmin/images/product-details/$productsw_img1' style='width: 120px;height: 140px;' alt='small-image' /></a></td>
                                                <td class='product-name'><a href='product-details.php?productsw_id=$productsw_id'> $productsw_title </a></td>
                                                <td class='product-price'><span class='amount'>  $ $productsw_price</span></td>
                                                <td class='product-stock-status' ><span class='wishlist-in-stock'> $quant</span></td>
                                                <td class='product-add-to-cart'><a href='addto_cart.php?productsw_id=$productsw_id'> Add to Cart</a></td>
                                            </tr>
";
   
} 

                   ?>
                   <?php
             $wishsql="SELECT * FROM products PW join wishlist W ON PW.products_id=W.products_id";
             $wishres=mysqli_query($con,$wishsql);
             $sl=0;
           while($row_product=mysqli_fetch_assoc($wishres)){
            $products_id=$row_product['products_id'];
            $products_title=$row_product['products_title'];
            $products_price=$row_product['products_price'];
            $products_desc=$row_product['products_desc'];
            $products_img1=$row_product['products_img1'];
            $sl++;
            if ($row_product['amount']>0) {
                $quant="in stock"; }else{
                   $quant= "out of stock";
                }
                                                                                                      
                  
    echo "  <tr>
    
                                                <td class='product-remove'><a href='deletewishlist.php?products_id=$products_id'>×</a></td>
                                                <td class='product-thumbnail'><a href='#'><img src='brotherstoreadmin/images/product-details-men/$products_img1' style='width: 120px;height: 140px;' alt='small-image' /></a></td>
                                                <td class='product-name'><a href='product-details-men.php?products_id=$products_id'> $products_title </a></td>
                                                <td class='product-price'><span class='amount'>  $ $products_price</span></td>
                                                <td class='product-stock-status' ><span class='wishlist-in-stock'> $quant</span></td>
                                                <td class='product-add-to-cart'><a href='addto_cart.php?products_id=$products_id'> Add to Cart</a></td>
                                            </tr>
";
   
} 

                   ?>
                   <?php
             $wishsql="SELECT * FROM products_electronic PW join wishlist W ON PW.productse_id=W.productse_id";
             $wishres=mysqli_query($con,$wishsql);
             $sl=0;
           while($row_product=mysqli_fetch_assoc($wishres)){
            $productse_id=$row_product['productse_id'];
            $products_title=$row_product['products_title'];
            $products_price=$row_product['products_price'];
            $products_desc=$row_product['products_desc'];
            $products_img1=$row_product['products_img1'];
            $sl++;
            if ($row_product['amount']>0) {
                $quant="in stock"; }else{
                   $quant= "out of stock";
                }
                                                                                                      
                  
    echo "  <tr>
    
                                                <td class='product-remove'><a href='deletewishlist.php?productse_id=$productse_id'>×</a></td>
                                                <td class='product-thumbnail'><a href='#'><img src='brotherstoreadmin/images/product-details-electronic/$products_img1' style='width: 120px;height: 140px;' alt='small-image' /></a></td>
                                                <td class='product-name'><a href='product-details-electronic.php?productse_id=$productse_id'> $products_title </a></td>
                                                <td class='product-price'><span class='amount'>  $ $products_price</span></td>
                                                <td class='product-stock-status' ><span class='wishlist-in-stock'> $quant</span></td>
                                                <td class='product-add-to-cart'><a href='addto_cart.php?productse_id=$productse_id'> Add to Cart</a></td>
                                            </tr>
";
   
} 

                   ?>
                                         
                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="6">
                                                    <div class="wishlist-share">
                                                        <h4 class="wishlist-share-title">Share on:</h4>
                                                        <div class="social-icon">
                                                            <ul>
                                                                <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-tumblr"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wishlist-area end -->
       
    </div>
    <!-- Body main wrapper end -->
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>
 <!-- Start Footer Area -->
                    <?php include("footer.php");?>
        <!-- End Footer Area -->
</html>