<?php
if(isset($_POST["submit"])){   
    $name=$_POST["UserName"];
    $pwd=$_POST["Userpasswd"];


    require_once 'dbconnect.php';  
    require_once 'functionLOGIN.php';


    if(emptyInputLogin($name,$pwd) !==false){
       header("location:login-register.php?errore=emptyfields");
       exit();
   }
   loginUser($conn , $name , $pwd);
}
else{
    header("location:login-register.php"); 
    exit();
}
?>