<?php
$dis_kec = $_POST['dis_kec'];
$asal = $_POST['asal'];
$berat = $_POST['berat'];


$int = (int)$berat;

$curl = curl_init();
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://api.coresyssap.com/master/shipment_cost/publish/",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "origin=".$asal."&destination=".$dis_kec."&weight=".$int,
	  CURLOPT_HTTPHEADER => array(
	    "content-type: application/x-www-form-urlencoded",
	    "api_key: global"
	  ),
	));
 
	$response = curl_exec($curl);
	$err = curl_error($curl);
 
	curl_close($curl);
 
	if ($err) {	  echo "cURL Error #:" . $err;
	} else {

	
$json = json_decode($response, true);
if (isset($json['price'])) {
    $price = $json['price']['UDRREG'];
   
} 
} 

//$data = json_decode($response, true);

//print_r($data);

// $total = $price * $berat;

	

print_r('<input type="text" name="ongkir" id="ongkir" value="'.$price.'">');


?>