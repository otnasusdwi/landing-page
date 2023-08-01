<?php
$destination =''; $origin=''; $weight = ''; $price = 0; $total = 0; 
if(isset($_GET['destination'])){
  $destination = $_GET['destination'];
}
if(isset($_GET['origin'])){
  $origin = $_GET['origin'];
}
if(isset($_GET['weight'])){
  $weight = $_GET['weight'];
}
if(isset($_GET['price'])){
  $price = $_GET['price'];
}

$int = (int)$weight;

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.coresyssap.com/master/shipment_cost/publish/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "origin=".$origin."&destination=".$destination."&weight=".$int,
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded",
    "api_key: global"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {   echo "cURL Error #:" . $err;
} else {
  $json = json_decode($response, true);
  if (isset($json['price'])) {
    $total = $json['price']['UDRREG'];
    echo '<input type="hidden" id="ongkir" name="ongkir" value="'.$total.'">';
  } 
}
?>