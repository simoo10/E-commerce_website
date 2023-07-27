<?php
include("includes/db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
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
	<title>INSERT PRODUCT</title>
</head>
<body style="background: rgba(0, 0, 0, 0) url(images/bg/13.jpg) no-repeat scroll center center / cover;">
	<header id="header" class="htc-header header--3 bg__white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                            <a href="index.php"  class="pull-left">
                            <div class="logo">
                                    <img src="images/logo-site-menu.png" style="margin-top: 0;width: 150px;margin-left: 50px;" >
                                    <h3 style="margin-left: 1px ;margin-top: 1px;color: red;font-size: 25px;font-family: cursive;">BROTHER Store
                                        <br><p style="color: white;font-family:Bradley Hand, cursive;">we are not the only but we are the best</p></h3>
                            </div>
                            </a> 
                <div class="container" >
                    <div class="row">

                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">

                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                            <nav class="mainmenu__nav hidden-xs hidden-sm">
                                <ul class="main__menu" >
                                    <li class="drop"><a href="index.php" style="font-size: 20px;color:  #ff0000;margin-left: 1px;margin-right : 1px;">| Home</a></li>
                                    <li class="drop"><a href="#" style="font-size: 20px;color:  #ff0000;margin-left: 1px;margin-right: 1px">|ALL PRODUCTS</a>
                                        <ul class="dropdown">
                                        <li><a href="pubpm.php">products men</a></li>
                                        <li><a href="pubpw.php">products women</a></li>
                                        <li><a href="pubpe.php">products electronic</a></li>
                                    </ul>
                                    </li>
                                    <li class="drop"><a href="membre.php" style="font-size: 20px; color:  #ff0000;margin-left: 1px;margin-right: 1px">|ALL MEMBRES</a>
                                   
                                    </ul>
                                </ul>
                            </nav>
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-sm-4 col-xs-3" >  
                            <ul class="menu-extra" style="width: 150px;">
                               
                                <li><a href="login.php" style="margin-right: 5px;"><span class="ti-user"></span></a></li>
                                <li><a href="logout.php" style="font-size: 10px;">logout</a></li>
                 
                            </ul>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>

                </div>

            </div>
            

            <!-- End Mainmenu Area -->
        </header>

<div class="row">
	<div>
		<div>
			<div>
				<h2 style="text-align: center;color: blue;font-family: cursive;">INSERT PRODUCT</h2>
			</div>
			<div style="margin-left: 25px; color: red; " >
				<form method="post">
					<div style="margin-bottom: 15px;">
						<label>
							PRODUCT TITLE
						</label>
						<div>
							<input type="text" name="products_title"  style= "width: 400px;"required >
						</div>

					</div>
					<div style="margin-top: -55px;float:right;margin-right:700px;">
						<label>
							PRODUCT quantity
						</label>
						<div>
							<input type="text" name="amount" style="width: 400px;" required>
						</div>

					</div>
					<div style="margin-bottom: 15px; color: red;">
						<label>
							PRODUCT Category
						</label>
						<div>
							<select name="products_cat" class="form-control" style="width: 400px;" >
								<option>select a category product</option>
								<?php
								$get_p_cats="select * from product_categories_electronic";
								$run_p_cats=mysqli_query($con,$get_p_cats);
								while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
									$pe_cat_id=$row_p_cats['pe_cat_id'];
									$p_cat_title=$row_p_cats['p_cat_title'];
									echo "<option value='$pe_cat_id'>$p_cat_title</option>";
								}

								?>
							</select>
						</div>

					</div>
					<div style="margin-top: -70px;float:right;margin-right:700px;">
						<label>
							Category
						</label>
						<div>
							<select name="cat" class="form-control" style="width: 400px;" >
								<option>select a category </option>
								<?php
								$get_cat="select * from categories";
								$run_cat=mysqli_query($con,$get_cat);
								while ($row_cat=mysqli_fetch_array($run_cat)) {
									$cat_id=$row_cat['cat_id'];
									$cat_title=$row_cat['cat_title'];
									echo "<option value='$cat_id'>$cat_title</option>";
								}

								?>
							</select>
						</div>

					</div>
					<div style="margin-top: -2px;float:right;margin-right:700px;">
						<label>
							 PRODUCT IMAGE 1
						</label>
						<div>
							<input type="file" name="products_img1" required>
						</div>

					</div>
					<div style="margin-top: -5px;float:right;margin-right:700px;">
						<label>
							 PRODUCT IMAGE 2
						</label>
						<div>
							<input type="file" name="products_img2" >
						</div>

					</div>
					<div style="margin-top: -1px;float:right;margin-right:700px;">
						<label>
							 PRODUCT IMAGE 3
						</label>
						<div>
							<input type="file" name="products_img3" >
						</div>

					</div>
					<div style="margin-bottom: 15px;color: red;">
						<label>
							 PRODUCT PRICE
						</label>
						<div>
							<input type="text" name="products_price" style="width: 400px;">
						</div>
					</div>
					<div style="margin-bottom: 15px;color: red;">
						<label>
							 PRODUCT description
						</label>
						<div>
							<textarea name="products_desc" style="width: 400px;background-color:transparent"></textarea>
						</div>

					</div>
					<div style="margin-bottom: 15px; color: red;">
						<label>
							
						</label>
						<div>
							<input type="submit" name="submit" value="insert product" style="width: 400px;"  >
						</div>

					</div>
                  </form>
				</div>
		</div>
		</div>
	</div>


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
</html>

<?php
if (isset($_POST['submit'])) {
	$products_title=htmlspecialchars($_POST['products_title']);
	$amount=htmlspecialchars($_POST['amount']);
	$products_price=htmlspecialchars($_POST['products_price']);
	$products_desc=htmlspecialchars($_POST['products_desc']);
	$products_cat=htmlspecialchars($_POST['products_cat']);
	$cat=htmlspecialchars($_POST['cat']);
	$products_img1=$_POST['products_img1'];
	$products_img2=$_POST['products_img2'];
	$products_img3=$_POST['products_img3'];
	$insert_product="INSERT INTO products_electronic (pe_cat_id,cat_id,date,products_title,products_img1,products_img2,products_img3,products_desc,products_price,amount) VALUES ('$products_cat','$cat',NOW(),'$products_title','$products_img1','$products_img2','$products_img3','$products_desc','$products_price','$amount')";
	$run_product=mysqli_query($con, $insert_product);
	if ($run_product) {
		echo "<script>alert('product has been inserted successfully')</script>";
		echo "<script>window.open('insertproducte.php','_self')</script>";
	}

}
?>