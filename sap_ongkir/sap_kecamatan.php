<?php

$kab_id = $_POST['kab_id'];

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.coresyssap.com/master/district/get?api_key=global",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 60,
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
// print_r($data);

usort($data, function($a, $b) {
	return $a['district_name'] <=> $b['district_name'];
});

$optionkec = '<option value="">Pilih Kecamatan</option>';
foreach($data as $row){
  if($row['city_code']==$kab_id){
    $optionkec .= '<option id="'.$row['district_code'].'" value="'.$row['district_name'].'">'.$row['district_name'].'</option>';
  }
}
echo $optionkec;
?>