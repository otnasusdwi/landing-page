<?php
$nama = $_POST['nama'];
$no_customer = $_POST['wa'];
$no_cs = $_POST['no_cs'];
$product = $_POST['product'];

if (substr($no_customer, 0, 1) == '0') {
    $wa = str_replace('0', '62', substr($no_customer, 0, 1)).substr($no_customer, 1);
} else {
    $wa = $no_customer;
}

date_default_timezone_set('Asia/Jakarta');
$created_at = date('Y-m-d H:i:s');

$data = [];
$url = $_SERVER['HTTP_REFERER'];

$curl = curl_init();
curl_setopt_array($curl, array(
    // CURLOPT_URL => "http://localhost/konsultasi_hayyana/api/form1.php",
    CURLOPT_URL => "http://konsultasi.hayyana.asia/api/form1.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 60,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "url=".$url."&nama=".$nama."&wa=".$wa."&no_cs=".$no_cs."&product=".$product."&created_at=".$created_at,
));
$response = curl_exec($curl);
$err = curl_error($curl);
$result = json_decode($response, true);

if($result){
    $data = $result['status'];
    $lp_id = $result['lp_id'];
}

if ($data == 'success') {
    header('location:form_cod.php?nama='.$nama.'&wa='.$wa.'&lp='.$lp_id.'&no_cs='.$no_cs);
}else{
    header('location:/glowing-3-p-form');
}
?>    