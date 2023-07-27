<?php

//functions for create account//
 function emptyInputSignup($country,$first,$last,$company,$Email,$city,$mobile,$Name_on_Card, $Card_Number,$Date,$Security_Code,$add){
     $result;
     if
          (empty($country) || empty($first) || empty($last) || empty($company) || empty($Email) || empty($city) 
             || empty($mobile) || empty($Name_on_Card)|| empty($Card_Number) || empty($Date)  || empty($Security_Code)|| empty($add))
             {
        $result = true ;
             }
     else{
         $result = false;
     }
     return $result;

 }





   
 
 


 
       
function createUser($uid,$first,$last,$Email,$mobile,$Add,$country,$city,$company,$Name_on_Card, $Card_Number,$Date,$Security_Code){ 
    $sql = "INSERT INTO checkout_client 
    (UserName,First_name,last_name,phone,addres,country,city,company_name,name_on_card,card_number,dat,Security_code,mail) 
    VALUES ('$uid','$first','$last','$Email','$mobile','$Add','$country','$city','$company','$Name_on_Card','$Card_Number','$Date','$Security_Code');";
   
    $stmt = mysqli_stmt_init($conn);
 

     


      mysqli_stmt_bind_param($stmt , "sssssssssssss" ,$uid,$first,$last,$Email,$mobile,$Add,$country,$city,$company,$Name_on_Card, $Card_Number,$Date,$Security_Code);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      header("location:checkout.php?er=none");
     


    $mailFrom="brotherstore@gmail.com";
    $headers ="Reply-To: BrotherStore@gmail.com>\r\n";;
    $txt = "Thank you for buying a product  ". $first ." ".$last.".your delivery will be in your adress after 20 days maximum ";
    $Subject="Buying a product in Brother Store";


    

    mail($Email,$Subject,$txt,$headers);
        exit();
        }
 