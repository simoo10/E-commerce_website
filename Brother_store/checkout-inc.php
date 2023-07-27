<?php


if(isset($_POST["confirm"])){
    $country=$_POST["Country"];
    $first=$_POST["FirstName"];
    $last=$_POST["LastName"];
    $company=$_POST["CompanyName"];
    $Email=$_POST["Email"];
    $add=$_POST["address"];
    $city=$_POST["City"];
    $mobile=$_POST["Phone"];
    $Name_on_Card=$_POST["NameonCard"];
    $Card_Number=$_POST["CardNumber"];
    $Date=$_POST["Date"];
    $Security_Code=$_POST["SecurityCode"];


    session_start();
    $uid=$_SESSION['usernam'];


    require_once 'dbconnect.php';  
    require_once 'functionsPay-inc.php';
    if(emptyInputSignup($country,$first,$last,$company,$Email,$city,$mobile,$Name_on_Card, $Card_Number,$Date,$Security_Code,$add) !==false){
        header("location:checkout.php?error=emptyinput");
        exit();
    }


   
   createUser($uid,$first,$last,$Email,$mobile,$Add,$country,$city,$company,$Name_on_Card, $Card_Number,$Date,$Security_Code);
   }
   else {
   header("location:checkout.php");
   exit();
   

}


   
  ?>