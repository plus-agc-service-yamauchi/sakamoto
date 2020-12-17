<?php
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryCode != null)
    {
        $country = $ip_data->geoplugin_countryCode;
    }
    
    $ip_data2 = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data2 && $ip_data2->geoplugin_countryName != null)
    {
        $countryname = $ip_data2->geoplugin_countryName;
    }

$_SESSION['AYCOUNT']=$countryname;
$_SESSION['AYCOUNTCODE']=$country;
$_SESSION['country_name']=$countryname; 

if ($country == "FR" || $country == "DZ" || $country == "MA" || $country == "TN" || $country == "CD" || $country == "MG" || $country == "CM" || $country == "CA" || $country == "CI" || $country == "BF" || $country == "NE" || $country == "SN" || $country == "ML" || $country == "RW" || $country == "BE" || $country == "GF" || $country == "TD" || $country == "HT" || $country == "BI" || $country == "BJ" || $country == "CH" || $country == "TG" || $country == "CF" || $country == "CG" || $country == "GA" || $country == "KM" || $country == "GK" || $country == "DJ" || $country == "LU" || $country == "VU" || $country == "SC" || $country == "MC") {
    $_SESSION['ANONISMA-AYOUB']="/fr.php";
} elseif ($country == "MX" || $country == "PH" || $country == "ES" || $country == "CO" || $country == "AR" || $country == "PE" || $country == "VE" || $country == "CL" || $country == "EC" || $country == "GT" || $country == "CU" || $country == "HN" || $country == "PY" || $country == "SV" || $country == "NI" || $country == "CR" || $country == "UY") {
    $_SESSION['ANONISMA-AYOUB']="/es.php";
} elseif ($country == "IT" || $country == "SM") {
   $_SESSION['ANONISMA-AYOUB']="/it.php";
} elseif ($country == "RU" || $country == "BY" || $country == "KZ" || $country == "KG" || $country == "TJ") {
    $_SESSION['ANONISMA-AYOUB']="/ru.php";
} 
elseif ($country == "PT" || $country == "BR" || $country == "AO" || $country == "MZ" || $country == "MO") {
    $_SESSION['ANONISMA-AYOUB']="/pt.php";
} 
elseif ($country == "TR" || $country == "cy") {
    $_SESSION['ANONISMA-AYOUB']="/tr.php";
} 
elseif ($country == "PL") {
    $_SESSION['ANONISMA-AYOUB']="/pl.php";
} 
elseif ($country == "NO") {
    $_SESSION['ANONISMA-AYOUB']="/no.php";
} 
elseif ($country == "NL" || $country == "AW") {
    $_SESSION['ANONISMA-AYOUB']="/nl.php";
} 
elseif ($country == "DE" || $country == "CH") {
    $_SESSION['ANONISMA-AYOUB']="/de.php";
}
else {
   $_SESSION['ANONISMA-AYOUB']="/en.php";
   
}
?>