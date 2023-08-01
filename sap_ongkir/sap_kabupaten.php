<?php

$prov_id = $_POST['prov_id'];

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



$option = '<option value="">Pilih Kabupaten</option>';

$kab = '';
$kabb=array();

foreach($data as $row){


 if($row['provinsi_code']==$prov_id){ 
  if($row['city_name']!="DEVELOPMENT" && $row['city_name']!="PROTOKOL"){
  if($kab!=$row['city_name']){
   $kab=$row['city_name'];

   $kabb[]=['city_code'=>$row['city_code'],'city_name'=>$row['city_name']];


}
}
}

}

usort($kabb, function($a, $b) {
  return $a['city_name'] <=> $b['city_name'];
});

foreach ($kabb as  $value) {
 $option .= '<option id="'.$value['city_code'].'" value="'.$value['city_name'].'">'.$value['city_name'].'</option>';  

}
echo $option;


?>