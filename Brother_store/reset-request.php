 <?php
 
 if(isset($_POST["rest-request-submit"])){
     $selector = bin2hex(random_bytes(8));
     $token = random_bytes(32);
     $url="localhost/Brother_store/create-new-password.php?selector=".$selector."&validator=".bin2hex ($token);
     $expires = date("U")+ 1800;

     require "dbconnect.php" ;
     
     $userEmail = $_POST["email"]; 
     function emptyInputSignup( $userEmail){
        $result;
        if(empty($userEmail) ){
           $result= true ;
        }
        else{
            $result = false;
        }
        return $result;
   
    }
    if(emptyInputSignup($userEmail) !==false){
        header("location:reset-password.php?error=emptyinput");
        exit();
    }
    $sql="DELETE FROM pwdForget WHERE resetemail=?;";
     $stmt =mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt,$sql)){
         echo "there was an Error!";
         exit();
     }else{
         mysqli_stmt_bind_param($stmt,"s", $userEmail);
         mysqli_stmt_execute($stmt);
     }
     $sql ="INSERT INTO pwdforget (resetemail,resetSelector,resetToken,resetExpires) VALUES(?,?,?,?);";
     $stmt =mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt,$sql)){
         echo "there was an or!";
         exit();
     }else{
         $hashedToken = password_hash($token , PASSWORD_DEFAULT);
         mysqli_stmt_bind_param($stmt,"ssss", $userEmail,$selector, $hashedToken,$expires );
         mysqli_stmt_execute($stmt);
     }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);


    $to= $userEmail;
    $subject ="Reset your password for Brother_store";
    $message='<p>We recieved a password reset request.The link to reset your password is bellow if you did not make this request, you can ignore this email</p>';
    $message .='<p>Here is your password reset link:</br>';
    $message .='<a href="'.$url.'">'.$url.'</a></p>';

    $headers= "From:brotherstore<bouissalireda@gmail.com>\r\n";
    $headers .="Reply-To: BrotherStore<bouissalireda@gmail.com>\r\n";
    $headers .="Content-type:text/html\r\n";

    mail($to,$subject,$message, $headers);
    header("Location: reset-password.php?reset=success");













 }

 else
 {
     header("location:index.php");
 }
 ?>