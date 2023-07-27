<?php
if(isset($_POST["reset-password-submit"])){
    $selector =$_POST["selector"];
    $validator =$_POST["validator"];
    $password = $_POST["pwd"];
    $passwordRepeat= $_POST["pwd-repeat"];

    if(empty($password) || empty($passwordRepeat)){
        header("location:create-new-password.php?newpwd=empty");
        exit();

    }elseif($password != $passwordRepeat){
        header("location:create-new-password.php?nepwd=pwdnotsame");
        exit();

    }
    $currentDate = date("U");
    require "dbconnect.php";
    $sql="SELECT * FROM pwdforget WHERE resetSelector=? AND resetExpires >= ? ;";
    $stmt =mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt,$sql)){
         echo "there was an error!";
         exit();
     }else{
         mysqli_stmt_bind_param($stmt,"ss",  $selector,$currentDate);
         mysqli_stmt_execute($stmt);

         $result = mysqli_stmt_get_result($stmt);
         if(!$row =mysqli_fetch_assoc($result)){
             echo "You need to re-submit your reset request.";
             exit();
         }else{
             $tokenBin = hex2bin($validator);
             $tokenCheck =password_verify($tokenBin,$row["resetToken"]);
             
             if($tokenCheck === false){
                 echo "You need to re-submit your reset request. ";
                 exit();
             }elseif($tokenCheck === true){

                 $tokenEmail=$row['resetemail'];

                 $sql = "SELECT * FROM client WHERE UserEmail =?;";
                 $stmt =mysqli_stmt_init($conn);
             if(!mysqli_stmt_prepare($stmt,$sql)){
               echo "there was an error";
                exit();
             }else{

                 mysqli_stmt_bind_param($stmt,"s",  $tokenEmail);
                 mysqli_stmt_execute($stmt);

                
                 $result = mysqli_stmt_get_result($stmt);
                 if(!$row = mysqli_fetch_assoc($result)){
                     echo "You need to re_submit your reset request.";
                     exit();
                 }else{
                     $sql="UPDATE client SET Userpasswd=? WHERE  UserEmail=? ;";
                     $stmt =mysqli_stmt_init($conn);
                     if(!mysqli_stmt_prepare($stmt,$sql)){
                        echo "there was an error!";
                         exit();
                      }else{

                          $newPwdHash = password_hash($password,PASSWORD_DEFAULT);
                          mysqli_stmt_bind_param($stmt,"ss", $newPwdHash ,$tokenEmail);
                          mysqli_stmt_execute($stmt);

                          $sql = "DELETE FROM pwdforget WHERE resetemail =?;";
                          $stmt =mysqli_stmt_init($conn);
                      if(!mysqli_stmt_prepare($stmt,$sql)){
                        echo "there was an error!";
                         exit();
                      }else{
                          mysqli_stmt_bind_param($stmt,"s",  $tokenEmail);
                          mysqli_stmt_execute($stmt);
                          header("location:login-register.php?newpwd=passwordupdated");
                        }
                    }    


                 }
             }
         } }
     }

}
else{
    header("location:index.php");
}

?>