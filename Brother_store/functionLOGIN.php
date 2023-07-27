<?php
//functions for login//


//emptyInputLogin($name,$pwd)

 function emptyInputLogin($name,$pwd){
    $result;
    if(empty($name) ||  empty($pwd) ){
       $result= true ;
    }
    else{
        $result = false;
    }
    return $result;

}


//function to go inside the data  to see if client is in our data base or not


function uidExists($conn , $name ){ 
    $result;
    $sql = "SELECT * FROM client WHERE UserName = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:login-register.php?error=stmtfailed");
        exit();
      }

      mysqli_stmt_bind_param($stmt , "s" , $name );
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
    
    function loginUser($conn , $name , $pwd){
        $UidExist = UidExists($conn , $name );
    
    if($UidExist === false){
        header("location:login-register.php?errore=wrongLogin");
        exit();
    
    }


    
$pwdHashed = $UidExist["Userpasswd"];
$checkPwd = password_verify($pwd, $pwdHashed);  
if($checkPwd === false){
    header("location:login-register.php?errore=Loginwrong");
    exit();
 
}
else if($checkPwd === true){
    session_start();
    $_SESSION["useruid"]=$UidExist["userID"];
    $_SESSION["usernam"]=$UidExist["UserName"];
    header("location:index.php");
}
    }