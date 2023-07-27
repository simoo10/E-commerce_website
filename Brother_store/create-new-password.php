
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Brother Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo-site.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
<?php include("header.php");?>

<!-- Start reset password Content -->
<div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url(images/bg/cc.jpg) no-repeat scroll center center / cover;">
              <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="htc__login__register__wrap">
                            <!-- Start Single Content -->
                            <div id="login" role="tabpanel" class="single__tabs__panel tab-pane fade in active">
                            




<?php
$selector = $_GET["selector"];
$validator = $_GET["validator"];
if(empty($selector) || empty($validator)){

    echo'<p style="font-size:20px; color:red; font-family:Serif;">"Could not validate your request"</p>';
}else{
    if(ctype_xdigit($selector) !==false && ctype_xdigit($validator) !==false){
        ?>
        <h1 style="font-size:25px; color:#800080; font-family:Serif;">Enter your new password</h1>
        <form action="rest-password-inc.php" method="post" class="login">
        <input type="hidden" name="selector" value="<?php echo $selector ?>">
        <input type="hidden" name="validator" value="<?php echo $validator ?>">
        <input type="password" name="pwd" placeholder="Enter a new password..">
        <input type="password" name="pwd-repeat" placeholder="Repeat new password..">
        <button type="submit" name="reset-password-submit"
        style="border: 1px solid #d5d5d5;
                                       display: inline-block;
                                           font-size: 25px;
                                               height: 40px;
                                                  line-height: 40px;
                                                    text-align: center;
                                                 text-transform: capitalize;
                                                         transition: all 0.5s ease 0s;
                                                             width: 300px;
                                                            color: #4b4b4b;
                                                             text-transform: uppercase;">Reset password</button>
                                                             <br></br>
<br></br>
<br></br>
<br></br>
<br></br>
        </form>
        <?php

    }
}


?>



</div >
 </div >
 </div >
 </div >
 </div >
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
    <?php include("footer.php");?>

</body>

</html>