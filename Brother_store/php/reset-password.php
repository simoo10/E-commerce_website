
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
              <!-- Start Login Register Content -->
              <div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url(images/bg/cc.jpg) no-repeat scroll center center / cover;">
              <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="htc__login__register__wrap">
                            <!-- Start Single Content -->
                            <div id="login" role="tabpanel" class="single__tabs__panel tab-pane fade in active">
                            <!--error login-->


<?php
if(isset($_GET["reset"])){
    if($_GET["reset"] =="success"){
        echo'<p style="font-size:20px; color:red; font-family:Serif;"> Check your e-mail account !</p>';
    }

}
?>
<?php
                                if (isset($_GET["error"])){
                                    if($_GET["error"]=="emptyinput"){
                                        echo'<p style="color:red; font-size:18px; text-align:center;"> Please enter an e-mail addresse !</p>';
                                    }
                                    }
                                    ?>
<h1 style="font-size:25px; color:blue; font-family:Serif;">Reset your password</h1>
<form action="reset-request.php" method="post" class="login">
<input type="text" name="email" placeholder="Enter your e-mail adress....">
<button type="submit" name="rest-request-submit" style="border: 1px solid #d5d5d5;
                                       display: inline-block;
                                           font-size: 20px;
                                               height: 30px;
                                                  line-height: 30px;
                                                    text-align: center;
                                                 text-transform: capitalize;
                                                         transition: all 0.5s ease 0s;
                                                             width: 150px;
                                                            color: #4b4b4b;
                                                             text-transform: uppercase;">Continue</button>







</form>


<p style="font-size:19px; font-family:Serif; color:black"> An e-mail will be send to you with instructions on how to reset your password.</p>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
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

</body>
<?php include("footer.php");?>

</html>
