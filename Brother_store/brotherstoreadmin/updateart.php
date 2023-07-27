<?php
include('db.php');
if (isset($_GET['id']) and !empty($_GET['id'])) {
	$getid=$_GET['id'];
	$recupart=$bdd->prepare('SELECT * FROM products_women WHERE productsw_id=?');
	$recupart->execute(array($getid));
	if ($recupart->rowCount()>0) {
		$artinfo=$recupart->fetch();
		$productsw_title=$artinfo['productsw_title'];
		$productsw_desc=str_replace('<br />', '', $artinfo['productsw_desc']);
		$productsw_price=$artinfo['productsw_price'];
		if (isset($_POST['submit'])) {
			
			$new_price=$_POST['productsw_price'] ;
			
			$updateart=$bdd->prepare('UPDATE products_women SET productsw_price=? WHERE productsw_id=?');
			$updateart->execute(array($new_price, $getid));
			header('location:pubpw.php');
		}
	}else{
		echo "no item found";
	}
}else{
	echo "no id found";
}
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
                                
                            </nav>
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-sm-4 col-xs-3" >  
                            <ul class="menu-extra" style="width: 150px;">
                               
                                <li><a href="login.php" style="margin-right: 5px;"><span class="ti-user"></span></a></li>
                                <li><a href="logout.php" style="font-size: 10px;">logout</a></li>
                 
                            </ul>
                     
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
				<h3><i></i>INSERT PRODUCT</h3>
			</div>
			<div style="text-align: center; color: red; " >
				<form method="post" action="">
					
					<div style="margin-bottom: 15px;color: red;">
						<label>
							 PRODUCT PRICE
						</label>
						<div>
							<input type="text" name="productsw_price" style="width: 400px;">
						</div>
					</div>
					<div style="margin-bottom: 15px; color: red;">
						<label>
							
						</label>
						<div>
							<input type="submit" name="submit" value="UPDATE" >
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
