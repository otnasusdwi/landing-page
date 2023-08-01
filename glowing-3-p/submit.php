<?php

$emails = [
    "cs.heptaco@gmail.com",
    "cs2.heptaco@gmail.com"
];
$email = $emails[array_rand($emails)];

$url = 'https://api.sendgrid.com/';
$user = 'landingpage';
$pass = 'Ars3n3Wenger!';

$pphone = $_POST['phone'];
// $mobile = substr($pmobile,0,1);
if (substr($pphone, 0, 1) == '0') {
    $phone = str_replace('0', '62', substr($pphone, 0, 1));
} else {
    $phone = $pphone;
}

$url_hit = 'http://hayyana.aff.id/aff_c?offer_id=17&aff_id=1';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url_hit);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$jml =  strlen($result);
// print_r($result);
if($jml>310){
    //getting url_hit result
    if (preg_match('~Location: (.*)~i', $result, $match)) {
        $location = trim($match[1]);
        //getting parameter id
        $parts = parse_url($location);
        parse_str($parts['query'], $query);
        $id = $query['id'];
        // echo $id;
    }
}else{
    //getting tracking id
    $pecah = explode(": ", $result);
    $id = substr($pecah[6],0,-13);
}

    // $id = $_POST['id'];
    //$email = $_POST['email'];
$product = $_POST['product'];
$price = $_POST['price'];
$ongkir = $_POST['ongkir'];
$name = $_POST['name'];
$address = $_POST['address'];
$propinsi = $_POST['provinsi'];
$kabupaten = $_POST['kabupaten'];
$kecamatan = $_POST['kecamatan'];

$total =$price+$ongkir;


    //$kecamatan = $_POST['kecamatan'];
if (strlen($phone) < 10 || strlen($phone) > 15) {
    echo "<script>alert('Cek Kembali Nomor Anda. Pastikan Nomor Whatsapp Sudah Benar');window.history.go(-1);</script>";
} else {
    $params = array(
        'api_user' => $user,
        'api_key' => $pass,
        'to' => $email,
        'cc' => 'hayyana.heptacoo@gmail.com',
        // 'to' => 'gpamungkaz@gmail.com',
        // 'cc' => 'inicumantesy@gmail.com',
        'subject' => 'Order baru COD dari No. HP ' . $phone,
        'html' => 'Order COD: '.$product.'<br>Nama: ' . $name . '<br>No. HP: ' . $phone.'<br>Alamat Lengkap: ' . $address.'<br>Provinsi: '.$propinsi.'<br>Kabupaten: '.$kabupaten.'<br>Kecamatan: '.$kecamatan.'<br>Paket : '.$product.' '.$price.'<br>Ongkir: '.$ongkir.'<br>Total Harga: '.$total. '<br>Tracking ID: ' . $id.'<br>Link WA: <a href="https://api.whatsapp.com/send?l=id&phone=' . $phone . '">' . $phone ,
        'from' => 'cs@hepta.co.id',

    );

        // cs@hepta.co.id
    $request = $url . 'api/mail.send.json';

        // Generate curl request
    $session = curl_init($request);
        // Tell curl to use HTTP POST
    curl_setopt($session, CURLOPT_POST, true);
        // Tell curl that this is the body of the POST
    curl_setopt($session, CURLOPT_POSTFIELDS, $params);
        // Tell curl not to return headers, but do return the response
    curl_setopt($session, CURLOPT_HEADER, false);
        // Tell PHP not to use SSLv3 (instead opting for TLS)
    curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

        // obtain response
    $response = curl_exec($session);
    curl_close($session);
        // echo "<script>alert('CS Kami Akan Segera Menghubungi Anda Melalui Whatsapp.');window.history.go(-1);</script>";
    $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header("Location: " . str_replace("submit.php", "transaksi_berhasil.html", $url));
    
}
?>    