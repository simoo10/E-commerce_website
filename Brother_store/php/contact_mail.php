<?php
if(isset($_POST["Submit"]))
{
    $Name=$_POST["name"];
    $mailFrom=$_POST["email"];
    $Subject=$_POST["subject"];
    $Message=$_POST["message"];

    require_once 'functionsContact-inc.php';

    if(emptyInputSignup( $Name,$mailFrom,$Subject,$Message) !==false){
        header("location:contact.php?error=emptyinput");
        exit();
    }


    $mailTo="bouissalireda@gmail.com";
    $headers ="From: ". $mailFrom;
    $txt = "You have received an e-mail from a client in brother Stor  ". $Name ." who has the email: ".$mailFrom."\n\n". $Message;
    $TXT="OK we will fix this issue soon as we can ".$Name ;
    $SUBJECTPRIME="Brotherstore see the issue of ".$Subject;

    $header ="From:brotherstore<bouissalireda@gmail.com>\r\n";

    mail($mailTo,$Subject,$txt,$headers);
    mail($mailFrom,$SUBJECTPRIME,$TXT,$header);
    header("location: contact.php?mailsend=successuflly");
}
else {
    header("location: contact.php?maiLsend=THERE ARE AN ERROR");
}
//SEND EMAIL TO THE CLIENT WHO HAS AN PROBLEM TO SAY TO HIM THAT YOU WILL FIX IT



?>