<?php
//functions for create account//
 function emptyInputSignup($Name,$mailFrom,$Subject,$Message){
     $result;
     if(empty($Name) || empty($mailFrom) || empty($Subject) || empty($Message)){
        $result= true ;
     }
     else{
         $result = false;
     }
     return $result;

 }
 ?>