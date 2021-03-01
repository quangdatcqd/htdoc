<?php
set_time_limit(0);
date_default_timezone_set('Asia/Ho_Chi_Minh');
$format = "%d/%m/%Y %H:%M:%S";
$time = time();

if(isset($_GET['apptoken']) && isset($_GET['userid']) && isset($_GET['datein'])){

  $datein = $_GET['datein'];
  $apptoken = $_GET['apptoken'];
  $userid = $_GET['userid'];
  echo getshake($apptoken, $userid, $datein);
}

function getshake($apptoken, $userid, $datein){
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://ckapp.circlek.com.vn:8081/RedSeasonAPI/api/General/GetHomeInfo',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
    "Lan" : "Vn",
    "AppKey" : "2002197028112010",
    "MobTokenInfo" : {
      "DateIn" : "'.$datein.'",
      "AppToken" : "'.$apptoken.'",
      "MemID" : "'.$userid.'"
    }
  }',
    CURLOPT_HTTPHEADER => array(
      'Content-Type:  application/json',
      'Connection:  keep-alive',
      'Accept-Language:  vi-VN;q=1.0',
      'Accept-Encoding:  gzip;q=1.0, compress;q=0.5'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  return $response;
}