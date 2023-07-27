<?php
include("includes/db.php");
?>
<!doctype html>

<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Brother Store women's shoes</title>
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
        <!--start categories-->
        <section class="categories-slider-area bg__white">
            <div class="container">
                <div class="row">
                    <!-- Start Left Feature -->
                    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12 float-left-style">
                        <!-- Start Slider Area -->
                        <!-- Start Slider Area -->
                    </div>
                    <!--categories-->
                    
                </div>
            </div>
        </section>
        
        <!-- Start contenu -->
        
            <div class="ht__bradcaump__wrap"  style=" background: rgba(0, 0, 0, 0) url(brotherstoreadmin/images/bg/9.jpg) no-repeat scroll center right / cover  ; ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Women's Shoes</h2>
                                <nav class="bradcaump-inner">
                                  
                                  <span class="breadcrumb-item active"></span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!--start womensclothing page-->
        <section style="width:70%;margin-top: 20px;"><?php include("categories.php");?></section>
        <section class="htc__product__area shop__page ptb--130 bg__white">
            <div class="container">
                <div class="htc__product__container">
                    <!-- Start Product MEnu -->
                    <div class="row" style="margin-left: 90px;">
                        <div class="col-md-12">
                            <div class="filter__menu__container">
                                <div class="product__menu">
                                    <button data-filter="*"  class="is-checked">All</button>
                                    <button data-filter=".cat--1"><?php
                                     $get_products="select * from product_categories_womens_shoes where pws_cat_id=1"; 
                                    $run_products=mysqli_query($con,$get_products); 
                                    while ($row_products=mysqli_fetch_array($run_products)) {
                                        $pw_cat_id=$row_products['pws_cat_id'];
                                        $pw_cat_title=$row_products['pw_cat_title'];
                                         echo"$pw_cat_title"; } ?> </button>
                                    <button data-filter=".cat--2" id="vj"><?php
                                     $get_products="select * from product_categories_womens_shoes where pws_cat_id=2"; 
                                    $run_products=mysqli_query($con,$get_products); 
                                    while ($row_products=mysqli_fetch_array($run_products)) {
                                        $pw_cat_id=$row_products['pws_cat_id'];
                                        $pw_cat_title=$row_products['pw_cat_title'];
                                        echo "$pw_cat_title"; } ?> </button>
                                    <button data-filter=".cat--3" id="tj"><?php
                                     $get_products="select * from product_categories_womens_shoes where pws_cat_id=3"; 
                                    $run_products=mysqli_query($con,$get_products); 
                                    while ($row_products=mysqli_fetch_array($run_products)) {
                                        $pw_cat_id=$row_products['pws_cat_id'];
                                        $pw_cat_title=$row_products['pw_cat_title'];
                                        echo "$pw_cat_title"; } ?> </button>
                                </div>
                                <div class="filter__box">
                                    <a class="filter__menu" href="#">filter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Filter Menu -->
                    <div class="filter__wrap">
                        <div class="filter__cart">
                            <div class="filter__cart__inner">
                                <div class="filter__menu__close__btn">
                                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                                </div>
                                <div class="filter__content">
                                    <!-- Start Single Content -->
                                    <div class="fiter__content__inner">
                                        
                                        <div class="single__filter">
                                            
                                            <ul >
                                         <form action="" method="post">
        <div class="col-sm-3">
        <div class="form-group">
            <select class="form-control" name="price" style="width:950%;margin-bottom: 50px; ">
                <option value="">Select Price Range</option>
                <option value="range1">10$ - 30$</option>
                <option value="range2">31$ - 50$</option>
                <option value="range3">51$ - 70$</option>
                <option value="range4">71$ - 90$</option>
                <option value="range5">91$ - 110$</option>
                <option value="range6">111$ - 130$</option>
            </select>
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary" style="width: 200%">Apply</button>
</form>

                                            </ul>
                                        </div>
                                        </div>
                                        <!--<div class="single__filter">
                                            <h2>Color</h2>
                                            <ul class="filter__list sidebar__list">
                                                <li class="black"><a href="#"><i class="zmdi zmdi-circle"></i>Black</a></li>
                                                <li class="blue"><a href="#"><i class="zmdi zmdi-circle"></i>Blue</a></li>
                                                <li class="brown"><a href="#"><i class="zmdi zmdi-circle"></i>Brown</a></li>
                                                <li class="red"><a href="#"><i class="zmdi zmdi-circle"></i>Red</a></li>
                                                <li class="orange"><a href="#"><i class="zmdi zmdi-circle"></i>Orange</a></li>
                                            </ul>
                                        </div>-->
                                    </div> 
                                    <!-- End Single Content -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--start product area-->
                    <div class="row">
                        
                        <div class="product__list another-product-style">
                            <?php
        if (isset($_POST['submit'])) {
        
         error_reporting( error_reporting() & ~E_NOTICE );
         if(isset($_POST['price'])) {   if($_POST['price']=='range1'){
            $low = 10; $high = 30;
        }
        if($_POST['price']=='range2'){
            $low = 31; $high = 50;
        }
        if($_POST['price']=='range3'){
            $low = 51; $high = 70;
        }
        if($_POST['price']=='range4'){
            $low = 71; $high = 90;
        }
        if($_POST['price']=='range5'){
            $low = 91; $high = 110;
        }
        if($_POST['price']=='range6'){
            $low = 111; $high = 130;
        }
     }
        //@$price = $_POST['price'];
        if(isset($_POST['price']) ) { $qry = "SELECT * FROM products_women
        WHERE (productsw_price BETWEEN $low AND $high) and pws_cat_id"; }
        if(isset($_POST['price'])){
           $qry = "SELECT * FROM products_women
        WHERE (productsw_price BETWEEN $low AND $high) and pws_cat_id   ";
        }
        if($_POST['price']==NULL){
            $qry = "SELECT * FROM products_women where pws_cat_id ";

               echo "<h4>No Result Found</h4>";}
        
        $result = mysqli_query($con,$qry);
        $num = mysqli_num_rows($result);?>  <?php while($row_products = mysqli_fetch_array($result,MYSQLI_ASSOC)){
         $productsw_id=$row_products['productsw_id'];
        $productsw_title=$row_products['productsw_title'];
        $productsw_price=$row_products['productsw_price'];
        $productsw_img1=$row_products['productsw_img1'];
        ?>
          
<div class='col-md-3 single__pro col-lg-3 * col-sm-4 col-xs-12'  >
<div class='product'>
 <div class='product__inner'>
   <div class='pro__thumb'>
   <a href='#'>  
   <img src='brotherstoreadmin/images/productwomen/<?php echo $productsw_img1 ?> ' style='width: 225px;height: 275px;' alt='product images'>
    </a>
    </div>
    <div class='product__hover__info'>
    <ul class='product__action'>
    
<li><a title='Add TO Cart' href='addto_cart.php'><span class='ti-shopping-cart'></span></a></li>
                                                                <li><a title='Wishlist' href='addwishlist.php'><span class='ti-heart'></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class='product__details'>
                                                        <h2><a href='product-details.php?productsw_id=<?php echo  $productsw_id ?>'> <?php echo  $productsw_title ?> </a></h2>
                                                        <ul class='product_price'>
                                                            <li class='old__price'> <?php echo "$", $productsw_price ?> </li>
                                                           

                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

        
           <?php  };
            }  ?>
                            <!-- Start Single Product -->
                             <?php
                            

                            $per_page=4;
                            if (isset($_GET['page'])) {
                                       $page=$_GET['page'];
                                                }else{
                                                    $page=1;
                                                }
                                                
                                $start_form=($page-1)*$per_page;?>
                                        
                            <!-- Start Single Product -->
                            <?php
                              $get_products="select * from products_women where pws_cat_id=1 order by 1 DESC LIMIT $start_form,$per_page";
                                $run_products=mysqli_query($con,$get_products);
                                while ($row_products=mysqli_fetch_array($run_products)) {
        $productsw_id=$row_products['productsw_id'];
        $productsw_title=$row_products['productsw_title'];
        $productsw_price=$row_products['productsw_price'];
        $productsw_img1=$row_products['productsw_img1'];
        echo "  
<div class='col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12'>
<div class='product'>
 <div class='product__inner'>
   <div class='pro__thumb'>
   <a href='#'>  
   <img src='brotherstoreadmin/images/shoeswomen/$productsw_img1' style='width: 225px;height: 275px;' alt='product images'>
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
                                                        <h2><a href='product-details.php?productsw_id=$productsw_id'>$productsw_title</a></h2>
                                                        <ul class='product_price'>
                                                            <li class='old__price'> $productsw_price </li>
                                                           

                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

        ";
                                }
                                $get_products="select * from products_women where pws_cat_id=2 order by 1 DESC LIMIT $start_form,$per_page";
                                $run_products=mysqli_query($con,$get_products);
                                while ($row_products=mysqli_fetch_array($run_products)) {
        $productsw_id=$row_products['productsw_id'];
        $productsw_title=$row_products['productsw_title'];
        $productsw_price=$row_products['productsw_price'];
        $productsw_img1=$row_products['productsw_img1'];
        echo "  
<div class='col-md-3 single__pro col-lg-3 cat--2 col-sm-4 col-xs-12'>
<div class='product'>
 <div class='product__inner'>
   <div class='pro__thumb'>
   <a href='#'>  
   <img src='brotherstoreadmin/images/shoeswomen/$productsw_img1' style='width: 225px;height: 275px;' alt='product images'>
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
                                                        <h2><a href='product-details.php?productsw_id=$productsw_id'>$productsw_title</a></h2>
                                                        <ul class='product_price'>
                                                            <li class='old__price'> $productsw_price </li>
                                                           

                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

        ";
                                }
                                $get_products="select * from products_women where pws_cat_id=3 order by 1 DESC LIMIT $start_form,$per_page";
                                $run_products=mysqli_query($con,$get_products);
                                while ($row_products=mysqli_fetch_array($run_products)) {
        $productsw_id=$row_products['productsw_id'];
        $productsw_title=$row_products['productsw_title'];
        $productsw_price=$row_products['productsw_price'];
        $productsw_img1=$row_products['productsw_img1'];
        echo "  
<div class='col-md-3 single__pro col-lg-3 cat--3 col-sm-4 col-xs-12'>
<div class='product'>
 <div class='product__inner'>
   <div class='pro__thumb'>
   <a href='#'>  
   <img src='brotherstoreadmin/images/shoeswomen/$productsw_img1' style='width: 225px;height: 275px;' alt='product images'>
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
                                                        <h2><a href='product-details.php?productsw_id=$productsw_id'>$productsw_title</a></h2>
                                                        <ul class='product_price'>
                                                            <li class='old__price'> $productsw_price </li>
                                                           

                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

        ";
                                }


                           

                            ?>
                            
                    </div>
                </div>
                    <!-- Start Load More BTn -->
                      <center>
                        <ul class="pagination">
                            <?php
                            $query="select * from products_women where pws_cat_id=1 ";
                            $result=mysqli_query($con,$query);
                            $total_record=mysqli_num_rows($result);
                            $total_page=ceil($total_record / $per_page);?>
                           <div class="pagination" style="text-align: right;">
            
                <?php if ($page>1){ ?>
                    <li><a href="?page=<?=$page - 1;?>"> Prev</a></li>
                <?php } ?>
                <?php
                for($i=1;$i<=$total_page;$i++){ ?>
                    <li ><a href="?page=<?=$i?>"><?= $i?></a></li>
                <?php } ?>
                <?php if($total_page > $page) { ?>
                    <li><a href="?page=<?=$page + 1;?>">Next</a></li>
                <?php } ?>
                        
                        </ul>
        
                    </center>
        
                    <!-- End Load More BTn -->
                </div>
            </div>
        </section>
        <!-- End Our Product Area -->
        
    </div>
    <!-- Body main wrapper end -->
    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="images/product/big-img/1.jpg">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1>Simple Fabric Bags</h1>
                                <div class="rating__and__review">
                                    <ul class="rating">
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#">4 customer reviews</a>
                                    </div>
                                </div>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">$17.20</span>
                                        <span class="old-price">$45.00</span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
                                </div>
                                <div class="select__color">
                                    <h2>Select color</h2>
                                    <ul class="color__list">
                                        <li class="red"><a title="Red" href="#">Red</a></li>
                                        <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                    </ul>
                                </div>
                                <div class="select__size">
                                    <h2>Select size</h2>
                                    <ul class="color__list">
                                        <li class="l__size"><a title="L" href="#">L</a></li>
                                        <li class="m__size"><a title="M" href="#">M</a></li>
                                        <li class="s__size"><a title="S" href="#">S</a></li>
                                        <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                        <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="rss" href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                            <li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                            <li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->
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