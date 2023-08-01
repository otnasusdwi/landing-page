<?php
$term = 'null';
if(isset($_GET['term'])){
	$term = $_GET['term'];
}
$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_URL => "http://hptc.xyz/sapongkir/search.php?term=".$term,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);

$err = curl_error($curl);

curl_close($curl);
$data = [];
if ($err) {
	echo "<p id='0'>No matches found</p>";
} else {
	$data = json_decode($response, true);
	foreach ($data['data'] as $row) {
		echo "<p id='".$row['district_code']."'>" . $row["district_name"] . ", ".$row["city_name"].", ".$row["provinsi_name"]."</p>";
	}
}

?>