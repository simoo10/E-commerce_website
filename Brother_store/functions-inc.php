<?php
//functions for create account//
 function emptyInputSignup($Username,$Useremail,$Userpwd,$Userpwdrepeat){
     $result;
     if(empty($Username) || empty($Useremail) || empty($Userpwd) || empty($Userpwdrepeat)){
        $result= true ;
     }
     else{
         $result = false;
     }
     return $result;

 }
 function invalidUid($Username){ 
    $result;
    if(!preg_match("/^[a -zA-Z0-9]*$/",$Username)){
       $result= true ;
    }
    else{
        $result = false;
    }
    return $result;

}
function invalidEmail($Useremail){ 
    $result;
    if(!filter_var($Useremail,FILTER_VALIDATE_EMAIL)){
        $result = true ;
     }
    else{
        $result = false;
    }
    return $result;
}
function pwdMatch($Userpwd,$Userpwdrepeat ){ 
    $result;
    if($Userpwd !== $Userpwdrepeat){
       $result = true ;
    }
    else{
        $result = false;
    }
    return $result;
   
}
function uidExists($conn , $Username ){ 
    $result;
    $sql = "SELECT * FROM client WHERE UserName = ?  ;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:login-register.php?error=stmtfailed");
        exit();
      }

      mysqli_stmt_bind_param($stmt , "s" , $Username );
      mysqli_stmt_execute($stmt);
 
 
      $resultData = mysqli_stmt_get_result($stmt);
 
      if($row = mysqli_fetch_assoc($resultData))
      {
          return $row;
      }
      else{
      $result = false;
      return $result;
      }
      mysqli_stmt_close($stmt);
    }

    function emailExists($conn  ,$Useremail){ 
        $result;
        $sql = "SELECT * FROM client WHERE  UserEmail = ? ;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location:login-register.php?error=stmtfailed");
            exit();
          }
    
          mysqli_stmt_bind_param($stmt , "s"  ,$Useremail);
          mysqli_stmt_execute($stmt);
     
     
          $resultData = mysqli_stmt_get_result($stmt);
     
          if($row = mysqli_fetch_assoc($resultData))
          {
              return $row;
          }
          else{
          $result = false;
          return $result;
          }
          mysqli_stmt_close($stmt);
        }


function createUser($conn, $Username ,$Useremail,$Userpwd){ 
    $sql = "INSERT INTO  client (UserName,UserEmail,Userpasswd) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:login-register.php?error=stmtfailed");
        exit();
      }

      $hashedPwd = password_hash($Userpwd, PASSWORD_DEFAULT );


      mysqli_stmt_bind_param($stmt , "sss" , $Username ,$Useremail,$hashedPwd);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      header("location:login-register.php?error=none");
     


    $mailFrom="bouissalireda@gmail.com";
    $headers ="Reply-To: BrotherStore<bouissalireda@gmail.com>\r\n";;
    $txt = "Thank you for choosing Brother Store  ". $Name .".We promise you that you will find the best here  ";
    $Subject="Congratulation you are  know part of Brother Store";


    

    mail($Useremail,$Subject,$txt,$headers);
        exit();
 }

 

