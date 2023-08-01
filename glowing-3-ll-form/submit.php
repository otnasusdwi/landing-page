<?php
$nama = $_POST['nama'];
$wa = $_POST['wa'];

$data = [];
$url = $_SERVER['HTTP_REFERER'];

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://konsultasi.hayyana.asia/api/form1.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 60,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "url=".$url."&nama=".$nama."&wa=".$wa,
));
$response = curl_exec($curl);
$err = curl_error($curl);
$result = json_decode($response, true);

if($result){
    $data = $result['status'];
    $lp_id = $result['lp_id'];
}

if ($data == 'success') {
    header('location:form_cod.php?nama='.$nama.'&wa='.$wa.'&lp='.$lp_id);
}else{
    header('location:/glowing-3-ll-form');
}
?>    