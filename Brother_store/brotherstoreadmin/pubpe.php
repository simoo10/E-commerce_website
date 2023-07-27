<?php 
session_start();
include('includes/db.php');
if (!$_SESSION['adminname'] and !$_SESSION['password']) {
	header('location: login.php');
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
<body style="background: rgba(0, 0, 0, 0) url(images/bg/ie.jpg) no-repeat scroll center center / cover;">
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
	<table style="border-collapse: collapse; margin-top: 50px;margin-left: 75px;">
                                        <thead>
                                            <tr>
                                                <th style="border: 1px solid black;width: 150px;text-align: center;">Remove</th>
                                                <th style="border: 1px solid black;width: 150px;text-align: center;">Image</th>
                                                <th style="border: 1px solid black;width: 150px;text-align: center;" >Product Name</th>
                                                <th style="border: 1px solid black;width: 150px;text-align: center;"> Unit Price </th>
                                                <th style="border: 1px solid black;width: 150px;text-align: center;">update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
        <?php
                            $per_page=5;
                            if (isset($_GET['page'])) {
                                       $page=$_GET['page'];
                                                }else{
                                                    $page=1;
                                                }
                                                
                                $start_form=($page-1)*$per_page;?>
    <?php
    $recupart="select * from products_electronic order by 1 ASC LIMIT $start_form,$per_page";
    $results=mysqli_query($con,$recupart);
    while ($article=mysqli_fetch_array($results)) {
        ?>
        <tr>
        <td style=" border: 1px solid black;text-align: center;"> <a  href="deletearte.php?id=<?=$article['productse_id']; ?>"> X </a> </td>
        <td style=" border: 1px solid black;text-align: center"><?php $products_img1=$article['products_img1'];
        echo"<img src='images/product-details-electronic/$products_img1' style='width: 140px;height: 140px;' alt='product images'>";?></td>
        <td style=" border: 1px solid black;text-align: center;"><?= $article['products_title']; ?></td>
        <td style=" border: 1px solid black;text-align: center;"><span class='amount'><?= "$", $article['products_price']; ?></span></td>
        <td style=" border: 1px solid black;text-align: center;"><a  href="updatearte.php?id=<?=$article['productse_id']; ?>"> Update </a></td>
     </tr>
        <?php
     } 
    ?>
    </tbody>
</table>

<center >
                        <ul class="pagination" >
                            <?php
                            $query="select * from products_electronic ";
                            $result=mysqli_query($con,$query);
                            $total_record=mysqli_num_rows($result);
                            $total_page=ceil($total_record / $per_page);
                            echo "<li>
                            <a href='pubpe.php?page=1'>".'first page'."</a>
                            </li>";
                            for ($page=1; $page<=$total_page; $page++) { 
                                echo "<li>
                            <a href='pubpe.php?page=".$page."'>".$page."</a>
                            </li>";
                            };
                            echo "<li>
                            <a href='pubpe.php?page=$total_page'>".'last page'."</a>
                            </li>";
                            ?>
                        
                        </ul>
        
                    </center>
</body>
</html>