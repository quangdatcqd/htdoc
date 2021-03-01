<?php
set_time_limit(0);
if(isset($_GET['apptoken']) && isset($_GET['userid']) && isset($_GET['datein'])){

  $seri = rand(1000000000000000, 9999999999999999);
  $datein = $_GET['datein'];
  $apptoken = $_GET['apptoken'];
  $userid = $_GET['userid'];
  echo check($apptoken, $userid, $datein, $seri);
}

function check($apptoken, $userid, $datein, $seri){
	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => 'http://ckapp.circlek.com.vn:8081/RedSeasonAPI/api/Game/ScanBill2020',
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => '',
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => 'POST',
	  CURLOPT_POSTFIELDS => '{"AppKey":"2002197028112010","MobTokenInfo":{"DateIn":"'.$datein.'","MemID":"'.$userid.'","AppToken":"'.$apptoken.'"},"Lan" : "Vn","SerialNo":"'.$seri.'"}',
	  CURLOPT_HTTPHEADER => array(
	    'Content-Type:  application/json',
	    'Connection:  keep-alive',
	    'Accept:  /',
	    'User-Agent:  CircleKApp/1.9 (ms.apptech.com.circlekappvietnam; build:20; iOS 14.0.1) Alamofire/4.8.2',
	    'Accept-Language:  vi-VN;q=1.0',
	    'Accept-Encoding:  gzip;q=1.0, compress;q=0.5'
	  ),
	));

	$response = curl_exec($curl);

	curl_close($curl);
	return $response;
}