<?php
$nama = $_POST['nama'];
$wa = $_POST['wa'];
$provinsi = $_POST['provinsi'];
$kabupaten = $_POST['kabupaten'];
$kecamatan = $_POST['kecamatan'];
$alamat_lengkap = $_POST['alamat_lengkap'];
$pembayaran = $_POST['pembayaran'];
$lp_id = $_POST['lp_id'];
$product = $_POST['product'];
$ongkir = $_POST['ongkir'];
$price = $_POST['price'];
$total = $price+$ongkir;

$data = [];
$url = $_SERVER['HTTP_REFERER'];

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://konsultasi.hayyana.asia/api/form2.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 60,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "nama=".$nama."&wa=".$wa."&provinsi=".$provinsi."&kabupaten=".$kabupaten."&kecamatan=".$kecamatan."&alamat_lengkap=".$alamat_lengkap."&pembayaran=".$pembayaran."&lp_id=".$lp_id,
));
$response = curl_exec($curl);
$err = curl_error($curl);
$result = json_decode($response, true);

if($result){
    $data = $result['status'];
}

$emails = [
    "cs4.heptaco@gmail.com"
];
$email = $emails[array_rand($emails)];

$url = 'https://api.sendgrid.com/';
$user = 'landingpage';
$pass = 'Ars3n3Wenger!';

if (substr($wa, 0, 1) == '0') {
    $phone = str_replace('0', '62', substr($wa, 0, 1));
} else {
    $phone = $wa;
}

if (strlen($phone) < 10 || strlen($phone) > 15) {
    echo "<script>alert('Cek Kembali Nomor Anda. Pastikan Nomor Whatsapp Sudah Benar');window.history.go(-1);</script>";
} else {
    $params = array(
        'api_user' => $user,
        'api_key' => $pass,
        'to' => $email,
        // 'to' => 'otnasusdwi@gmail.com',
        // 'cc' => array('hayyana.heptacoo@gmail.com','mame.heptaco@gmail.com'),
        'cc' => 'hayyana.heptacoo@gmail.com',
        'bcc' => 'mame.heptaco@gmail.com',
        'subject' => 'Order baru '.$pembayaran.' dari No. HP ' . $phone,
        'html' => 'Order : '.$product.'<br>Nama: ' . $nama . '<br>No. HP: ' . $phone.'<br>Alamat Lengkap: ' . $alamat_lengkap.'<br>Provinsi: '.$provinsi.'<br>Kabupaten: '.$kabupaten.'<br>Kecamatan: '.$kecamatan.'<br>Paket : '.$product.'<br>Ongkir: '.$ongkir.'<br>Total Harga: '.$total. '<br>Tracking ID: ' . $id.'<br>Link WA: <a href="https://api.whatsapp.com/send?l=id&phone=' . $phone . '">' . $phone ,
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
    $res = curl_exec($session);
    curl_close($session);
}

if ($data == 'success') {
    header("location:transaksi_berhasil.php?nama=$nama&product=$product&provinsi=$provinsi&kabupaten=$kabupaten&kecamatan=$kecamatan&alamat_lengkap=$alamat_lengkap");
}else{
    header('location:/glowing-3-ll-form');
}
?>    