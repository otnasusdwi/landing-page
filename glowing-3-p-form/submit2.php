<?php
$nama = $_POST['nama'];
$no_customer = $_POST['wa'];
$provinsi = $_POST['provinsi'];
$kabupaten = $_POST['kabupaten'];
$kecamatan = $_POST['kecamatan'];
$alamat_lengkap = $_POST['alamat_lengkap'];
$pembayaran = $_POST['pembayaran'];
$lp_id = $_POST['lp_id'];
$product = $_POST['product'];
$ongkir = $_POST['ongkir'];
$price = $_POST['price'];
$no_cs = $_POST['no_cs'];
$total = $price+$ongkir;

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
    // CURLOPT_URL => "http://localhost/konsultasi_hayyana/api/form2.php",
    CURLOPT_URL => "http://konsultasi.hayyana.asia/api/form2.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 60,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "nama=".$nama."&wa=".$wa."&provinsi=".$provinsi."&kabupaten=".$kabupaten."&kecamatan=".$kecamatan."&alamat_lengkap=".$alamat_lengkap."&pembayaran=".$pembayaran."&lp_id=".$lp_id."&no_cs=".$no_cs."&product=".$product."&created_at=".$created_at."&price=".$price."&ongkir=".$ongkir,
));
$response = curl_exec($curl);
$err = curl_error($curl);
$result = json_decode($response, true);

if($result){
    $data = $result['status'];
}


$emails=array("cs4.heptaco@gmail.com"=>"6281911106479");
$email = array_search($no_cs,$emails);

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
        // 'to' => 'otnasusdwi@gmail.com',
        // 'cc' => 'gpamungkaz@gmail.com',
        // 'bcc' => 'yandrinurdiana@gmail.com',
        'to' => $email,
        'cc' => 'hayyana.heptacoo@gmail.com',
        'bcc' => 'mame.heptaco@gmail.com',
        'subject' => 'Order baru '.$pembayaran.' dari No. HP ' . $phone,
        'html' => 'Order : '.$product.'<br>Nama: ' . $nama . '<br>No. HP: ' . $phone.'<br>Alamat Lengkap: ' . $alamat_lengkap.'<br>Provinsi: '.$provinsi.'<br>Kabupaten: '.$kabupaten.'<br>Kecamatan: '.$kecamatan.'<br>Paket : '.$product.'<br>Ongkir: '.$ongkir.'<br>Total Harga: '.$total. '<br>Tracking ID: ' . $id.'<br>Link WA: <a href="http://api.whatsapp.com/send?l=id&phone='.$phone.'&text=Hallo%20*'.str_replace(' ','%20',$nama).'*%0a%0aTerimakasih%20sudah%20order%20*'.str_replace(' ','%20',$product).'*%0a%0aMetode%20pembayaran:%20*'.$pembayaran.'*%0a%0aAlamat%20lengkap:%20'.str_replace(' ','%20',$alamat_lengkap).'%0aKecamatan:%20'.str_replace(' ','%20',$kecamatan).'%0aKabupaten:%20'.str_replace(' ','%20',$kabupaten).'%0aProvinsi:%20'.str_replace(' ','%20',$provinsi).'%0a%0aApakah%20alamat%20kirim%20sudah%20benar?%0a%0aJika%20sudah,%20kami%20akan%20kirim%20sekarang,%20tks">' . $phone ,
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
    header("location:transaksi_berhasil.php?nama=$nama&product=$product&provinsi=$provinsi&kabupaten=$kabupaten&kecamatan=$kecamatan&alamat_lengkap=$alamat_lengkap&no_cs=$no_cs&pembayaran=$pembayaran");
}else{
    header('location:/glowing-3-p-form');
}
?>    