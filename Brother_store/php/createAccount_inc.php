<?php

if(isset($_POST["submit"])){
    $Username=$_POST["UserName"];
    $Useremail=$_POST["UserEmail"];
    $Userpwd=$_POST["Userpasswd"];
    $Userpwdrepeat=$_POST["passwdrepeat"];


    require_once 'dbconnect.php';  
    require_once 'functions-inc.php';


    if(emptyInputSignup($Username,$Useremail,$Userpwd,$Userpwdrepeat) !==false){
       header("location:login-register.php?error=emptyinput");
       exit();
   }
   

   if(invalidUid($Username) !== false){
   header("location:login-register.php?error=invaliduid");
   exit();
   }



   if(invalidEmail($Useremail) !== false){
   header("location:login-register.php?error=invalidemail");
   exit();
   }



   if(pwdMatch($Userpwd,$Userpwdrepeat) !== false){
       header("location:login-register.php?error=passworddontmatch");
       exit();
   }


   
   if(uidExists($conn , $Username ,$Useremail) !== false){
    header("location:login-register.php?error=usernametaken");
    exit();
    }
    if(uidExists($conn , $Username ) !== false){
        header("location:login-register.php?error=usernametaken");
        exit();
        }
        if(emailExists($conn ,$Useremail) !== false){
            header("location:login-register.php?error=useremailtaken");
            exit();
            }

   
  


   
   createUser($conn, $Username ,$Useremail,$Userpwd);
   }
   else {
   header("location:login-register.php");
   exit();
   

}
   
  ?>