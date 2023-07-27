<?php
session_start();
if (isset($_POST['submit']))
{  
$adminname = htmlspecialchars(trim($_POST['adminname']));
$email = htmlspecialchars(trim($_POST['email']));
$password = htmlspecialchars(trim($_POST['password']));
$repeatpassword = htmlspecialchars(trim($_POST['repeatpassword']));
   
if ($adminname&&$email&&$password&&$repeatpassword)
        {
        if (strlen($password)>=6)
            {
                if ($password==$repeatpassword)
                {
            // On crypte le mot de passe
                $password=sha1($_POST['password']);
 
 // on se connecte à MySQL et on sélectionne la base
    $c = new mysqli ("localhost","root","","brotherstore","");
  
 //On créé la requête
$sql = "INSERT INTO admin VALUES ('','$adminname','$email','$password')";
  
    // On envoie la requête
$res = $c->query($sql);
       // on ferme la connexion
mysqli_close($c);
header('location: login.php');
  
}else echo "Passwords are not the same";
}else echo "Password is too short!";
}else echo "Please enter all fields !";
   
}
?>
<h1 style="text-align: center;">INSCRIPTION</h1>
<form action="" method="POST" style="text-align: center;">
    <p style="color: black;margin-bottom: 2px;">enter admin name</p>
    <input type="text" name="adminname" style="width: 250px;height: 30px;" >
    <p style="color: black; margin-bottom: 2px;"> enter email</p>
    <input type="email" name="email" style="width: 250px;height: 30px;">
    <p style="color: black; margin-bottom: 2px;"> enter password</p>
    <input type="password" name="password" style="width: 250px;height: 30px;">
    <p style="color: black; margin-bottom: 2px;">confirm password</p>
    <input type="password" name="repeatpassword" style="width: 250px;height: 30px;"><br><br>
    <input type="submit" name="submit" style="background-color: black; color:red; font-size: 30px;text-align: center;" value="SIGN-UP">
</form>