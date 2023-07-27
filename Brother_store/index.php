<?php
include('brotherstoreadmin/includes/db.php');
include('functions/functions.php');

?>



<!DOCTYPE html>
<html class="no-js" lang="en" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to Brother Store Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo-site-menu.png" >
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

<body >
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- header-->
    <?php include("header.php"); ?>
        <!-- End Offset Wrapper -->
         <!--when the client login the message will show in the home page//-->
   
        <!-- Start Feature Product -->
        <section class="categories-slider-area bg__white">
          
                <div class="row">
                    <!-- Start Left Feature -->
                    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12 float-left-style"style="margin: 0;">
                        <!-- Start Slider Area -->
                        <div class="slider__full--screen" style=" display: flex; height: 100vh;align-items: center;" >
                            <div class="slider__activation__wrap owl-carousel owl-theme">
                                
                                <!-- Start Single Slide -->
                                <?php 
                                $GET_slides = "SELECT * FROM slider LIMIT 0,1 ";
                                $run_slider=mysqli_query($con, $GET_slides);
                                while ($row_slides=mysqli_fetch_array($run_slider)) {
                                    $slide_name=$row_slides['slide_name'];
                                    $slide_image=$row_slides['slide_image'];
                                    
                                    
                                    echo "
                                    <div class='slider__full--screen slider-text-left' style='background: rgba(0, 0, 0, 0) url(brotherstoreadmin/images/slider/bg/$slide_image) no-repeat scroll center center / cover ;''>
                                    
                                    <div class='col-md-8 col-lg-8 col-sm-12 col-xs-12'>
                                        <div class='slider__inner'>
                                            <h1 style='color: white; font-size:50px;font-family: cursive;font-style: italic; margin-top:1px;'>New Product <br><span class='text--theme'>Collection</span></h1>
                                            <div class='slider__btn'>
                                            <a  style='color:blue;' class='htc__btn' href='login-register.php'>Be part of us </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              ";
                              
                            
                              
                              
                                }
                                $GET_slides = "SELECT * FROM slider LIMIT 1,3 ";
                                $run_slider=mysqli_query($con, $GET_slides);
                                while ($row_slides=mysqli_fetch_array($run_slider)) {
                                    $slide_name=$row_slides['slide_name'];
                                    $slide_image=$row_slides['slide_image'];
                                    echo "
                                    <div class='slider__full--screen slider-text-left' style='background: rgba(0, 0, 0, 0) url(brotherstoreadmin/images/slider/bg/$slide_image) no-repeat scroll center center / cover ;''>
                                    
                                    <div class='col-md-8 col-lg-8 col-sm-12 col-xs-12'>
                                        <div class='slider__inner'>
                                        <h1 style='color: white; font-size:50px;font-family: cursive;font-style: italic;'>New Product <br><span class='text--theme'>Collection</span></h1>
                                            <div class='slider__btn'>
                                                <a  style='color:blue;' class='htc__btn' href='login-register.php'>Be part of us </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              ";
                                }
                                 
                                ?>

                                <!-- End Single Slide -->
                            </div>
                        </div>
                        <!-- Start Slider Area -->
                    </div>
                    <!--categories-->
                    <?php include("categories.php");?>
                    <br></br>
                    
                   
                    <?php
                    if (isset($_SESSION["usernam"])){  
                            
                            echo"
                            <p style='font-size:80px;text-align:center;font-family: cursive;color:#362827;font-style: italic;'>". $_SESSION["usernam"] ."</p>
                            <br></br>
                            <p style ='font-style: italic; cursive;color:#B6B3B3;font-size:20px;'>WELCOME TO BROTHER STORE 
                            WE HOPE YOU FIND WHAT ARE YOU SEARCH FOR.</P>
                            <br></br>
                            <p style ='font-style: italic; cursive;color:#B6B3B3;font-size:20px;'>       Scroll down if you want ,
                            to see our latest products.
                            
                            Or check the categories there are, 
                            alot of product you will like 
                           </p>
                           
                            
                            
                            ";

                            
                        }
                        ?>
                  
                    
                   
        </section>
        <!-- End Feature Product -->
        <!-- Start Our Product Area -->
        <br>
        <br>
        <br>
        <section class="htc__product__area bg__white"  >
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="product-style-tab">
                            
                            <br><br>
                            <div class="tab-content another-product-style jump">
                                <div class="tab-pane active" id="home1">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">
                                        <?php
                                        getpro();
                                        ?>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>

                </div>

            </div>

        </section>
        <!-- End Our Product Area -->
       
        <!-- Start Our Product Area -->
        <section class="htc__product__area pb--100 bg__white" >
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="product-style-tab">
                            
                            <br><br>
                            <div class="tab-content another-product-style jump">
                                <div class="tab-pane active" id="home5">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">
                                            <?php
                                        getpro1();
                                        ?>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </section>
        <section class="htc__product__area bg__white"  >
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-12">
                        <div class="product-style-tab">
                            
                            <br><br>
                            <div class="tab-content another-product-style jump">
                                <div class="tab-pane active" id="home1">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">
                                        <?php
                                        getpro2();
                                        ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </section>
        <!-- End Our Product Area -->
        <!-- Start Our Product Area -->
        <!-- End Our Product Area -->
        <!-- Start Blog Area -->
        <!--<section class="htc__blog__area bg__white pb--130">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title section__title--2 text-center">
                            <h2 class="title__line">Latest News</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod temp incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog__wrap clearfix mt--60 xmt-30">-->
                        <!-- Start Single Blog -->
                        <!--<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-details.html">
                                            <img src="images/blog/blog-img/1.jpg" alt="blog images">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Admin</a></li>
                                                <li>Product</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="blog-details.html">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <!--<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-details.html">
                                            <img src="images/blog/blog-img/2.jpg" alt="blog images">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Admin</a></li>
                                                <li>Product</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="blog-details.html">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <!--<div class="col-md-4 col-lg-4 hidden-sm col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-details.html">
                                            <img src="images/blog/blog-img/3.jpg" alt="blog images">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Admin</a></li>
                                                <li>Product</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="blog-details.html">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <!-- End Single Blog -->
        <!-- End Blog Area -->
        
        <!-- End Footer Area -->
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
    <br></br>
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
<?php include("footer.php");?>

</html>