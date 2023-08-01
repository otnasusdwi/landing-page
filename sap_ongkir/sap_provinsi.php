<?php

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.coresyssap.com/master/provinsi/get?api_key=global",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  // CURLOPT_HTTPHEADER => array(
  //   "key: 1c48cc98a0676ac2f3499d51641f3d54"
  // ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
}

$data = json_decode($response, true);
$option = '<option value="">Pilih Provinsi</option>';
foreach($data as $row){
  $option .= '<option value="'.$row['city_code'].'">'.$row['provinsi_name'].'</option>';
}
echo $option;
?>