<?php

$IMEI = "" ;
$REFID = "" ;
$USERNAME = "" ;
$APIKEY = "WT3-FRZ-FGO-TF7-2MN-X0P-GYY-JUL" ;

$url = 'http://gsx.iclinic.no/api/imeicheck.php';
$data = 'REFID=' . $REFID . '&IMEI=' . $IMEI . '&USER=' . $USERNAME . '&APIKEY=' . $APIKEY;

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );

var_dump($response);

?>