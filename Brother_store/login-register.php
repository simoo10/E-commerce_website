
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
                          
        <!-- End Offset Wrapper -->
        <!-- Start Login Register Area -->
        <div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url(images/bg/HI.jpg) no-repeat scroll center center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <ul class="login__register__menu" role="tablist">
                            <li role="presentation" class="login_active"><a href="#login" role="tab" data-toggle="tab">Login</a></li>
                            <li role="presentation" class="register"><a href="#register" role="tab" data-toggle="tab">Create account</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Start Login Register Content -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="htc__login__register__wrap">
                            <!-- Start Single Content -->
                            <div id="login" role="tabpanel" class="single__tabs__panel tab-pane fade in active">
                            <!--error login-->
                            <?php
                                if (isset($_GET["errore"])){
                                    if($_GET["errore"]=="emptyfields"){
                                        echo'<p style="color:red; font-size:18px; text-align:center;"> Fill in all fields!</p>
                                        <script >alert("Soryy, you should fill all fields")</script>';
                                    }
                                    else if($_GET["errore"]=="wrongLogin"){
                                        echo'<p style="color:red; font-size:18px;text-align:center;">Incorrect login information!(verify your user name)</p>
                                        <script >alert("Incorrect login information!")</script>';
                                    }  else if($_GET["errore"]=="Loginwrong"){
                                        echo'<p style="color:red; font-size:18px;text-align:center;">Incorrect login information!(verify your password)</p>
                                        <script >alert("Incorrect login information!")</script>';
                                    }
                                }
                                ?>
                                <!--succes resset password-->
                                  <?php
                                   if(isset($_GET["newpwd"])){
                                        if($_GET["newpwd"] == "passwordupdated"){
                                           echo'<p style="color:red">Your padssword has been reset !<p>
                                           <script >alert("Congratulation, your password hase been reset seccufully")</script>';
                                       }
                                   }
                                  ?>
                                <form action="login_inc.php"  method="POST" class="login">
                                    <input type="text" name="UserName" placeholder=" User Name*...">
                                    <input type="password" name="Userpasswd" placeholder="Password*" id="myInput">
                                    <button type= "submit" name="submit" style="border: 1px solid #d5d5d5;
                                       display: inline-block;
                                           font-size: 20px;
                                               height: 50px;
                                                  line-height: 50px;
                                                    text-align: center;
                                                 text-transform: capitalize;
                                                         transition: all 0.5s ease 0s;
                                                             width: 150px;
                                                            color: #4b4b4b;
                                                             text-transform: uppercase;">Login</button>
                                </form>
                                <input type="checkbox" style="margin-left: 230px;color: blue;" onclick="myFunction()">Show Password
                                    <script>
                               function myFunction() {
                               var x = document.getElementById("myInput");
                               if (x.type === "password") {
                               x.type = "text";
                               } else {
                              x.type = "password";
                              }
                              }
                               </script>
                               <span  class="forget"> <a  style = " color:red; " href="reset-password.php"> You Forgot your pasword click here?</a>


                                
                                <div class="htc__social__connect">
                                    <h2>Or Login With</h2>
                                    <ul class="htc__soaial__list">
                                        <li><a class="bg--twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>

                                        <li><a class="bg--instagram" href="#"><i class="zmdi zmdi-instagram"></i></a></li>

                                        <li><a class="bg--facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>

                               
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Content -->
                        
                            <!-- Start Single Content -->
                            <div id="register" role="tabpanel" class="single__tabs__panel tab-pane fade">
                               <!-- erroor sign-up-->
                            <?php
                               
                               if (isset($_GET["error"])){
                                   if($_GET["error"]=="emptyinput"){
                                       echo'<p style="color:red; font-size:20px; text-align:center;"> Fill in all fields!</p>
                                       <script >alert("Soryy, you should fill all fields")</script>';
                                   }
                                   else if($_GET["error"]== "stmtfailed"){
                                       echo'<p style="color:red; font-size:20px; text-align:center;">Something went wrong , try again!</p>
                                       <script>alert("Somthing went wrong")</script>';
                                   }
                                   
                                   else if($_GET["error"]== "none"){
                                       echo'<p style="color:blue; font-size:18px; text-align:center;">Congratulation  ! You have created account seccefully!</p>
                                       <script>alert("congratulation you have create an acount seccefully!")</script>';
                                   }

                               }
                               ?>
                                <form action="createAccount_inc.php" method="POST"  class="login" >


                                    <input  type="text" name= "UserName" placeholder="User Name*">
                                    <?php
                               
                               if (isset($_GET["error"])){
                                    if($_GET["error"]== "invaliduid"){
                                       echo'<p style="color:red; font-size:18px;text-align:center;">Choose a proper name please!</p>';
                                   }else if($_GET["error"]== "usernametaken"){
                                    echo'<p style="color:red; font-size:18px; text-align:center;">Username already taken!</p>';
                                }else if($_GET["error"]== "useremailtaken"){
                                    echo'<p style="color:red; font-size:18px; text-align:center;">UserEmail already taken!</p>';
                                }
                                }
                                   ?>
                                 


                                    <input type="email" name="UserEmail" placeholder="User Email*">
                                    <?php
                                    if (isset($_GET["error"])){
                                         if($_GET["error"]== "invalidemail"){
                                            echo'<p style="color:red; font-size:18px; text-align:center;">Choose a proper email please!</p>';
                                        }
                                    }
                                    ?>



                                    <input type="password" name= "Userpasswd" placeholder="User Password*">
                                    <input type="password" name= "passwdrepeat" placeholder="Confirm Password*">
                                    <?php
                                    if (isset($_GET["error"])){
                                        if($_GET["error"]== "passworddontmatch"){
                                            echo'<p style="color:red; font-size:18px; text-align:center;">Password doesn t match!</p>';
                                        }

                                    }
                                        ?>



                                    <button type= "submit" name="submit" style="border: 1px solid #d5d5d5;
                                       display: inline-block;
                                           font-size: 20px;
                                               height: 50px;
                                                  line-height: 50px;
                                                    text-align: center;
                                                 text-transform: capitalize;
                                                         transition: all 0.5s ease 0s;
                                                             width: 150px;
                                                            color: #4b4b4b;
                                                             text-transform: uppercase;"><a >Sign Up</a></button>
                                                             
                                                             
                                </form>
                                
                                <div class="tabs__checkbox">
                                    <input type="checkbox">
                                    <span> Remember me</span>
                                </div>
                                
                                <div class="htc__social__connect">
                                    <h2>Or Login With</h2>
                                    <ul class="htc__soaial__list">
                                        <li><a class="bg--twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a class="bg--instagram" href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                        <li><a class="bg--facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
                <!-- End Login Register Content -->
            </div>
        </div>
        <!-- End Login Register Area -->
       


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
<?php include("footer.php");?>
</html>
