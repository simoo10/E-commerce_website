<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=brotherstore;', 'root', '');
if (isset($_POST['submit'])) {
    if (!empty($_POST['adminname']) and !empty($_POST['password'])) {
        $adminname=htmlspecialchars($_POST['adminname']);
        $password=sha1($_POST['password']);
        $recupuser=$bdd->prepare('SELECT * FROM admin WHERE adminname=? AND password=?');
        $recupuser->execute(array($adminname, $password));
        if ($recupuser->rowCount()>0) {
            $_SESSION['adminname']=$adminname;
            $_SESSION['password']=$password;
            header('location: index.php');
        }else{
            echo "password or adminname false";
        }
    }else{
        echo "please enter all fields";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
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
</head>
<body style="background: rgba(0, 0, 0, 0) url(images/bg/25.jpg) no-repeat scroll center center / cover;">
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
                                
                 
                            </ul>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>

                </div>

            </div>
            

            <!-- End Mainmenu Area -->
        </header>
</body>
</html>
<h1 style="text-align: center; color: red;margin-top: 100px;">Admin Login</h1>
<form action="" method="POST" style="text-align: center;">
    <p style="color: black; margin-bottom: 2px;"> enter adminname</p>
    <input type="text" name="adminname" style="width: 250px;height: 30px;">
    <p style="color: black; margin-bottom: 2px;"> enter password</p>
    <input type="password" name="password" style="width: 250px;height: 30px;"><br><br>
    <input type="submit" name="submit" style="background-color: black; color:red; font-size: 30px;text-align: center;" value="login"><br><br>
    <a href="register.php">you don't have account?</a>
</form>