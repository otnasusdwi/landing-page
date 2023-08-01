<?php
include('config.php');
$email = $_POST['email'];
$price = $_POST['price'];
$ongkir = $_POST['ongkir'];
$name = $_POST['name'];
$address = $_POST['address'];
$paket = $_POST['paket'];
$pphone = str_replace(".", "", $_POST['phone']);
$kecamatan = $_POST['kecamatan'];
$note = $_POST['note'];
$destination = $_POST['destination'];
$pembayaran = $_POST['pembayaran'];

$url = 'https://api.sendgrid.com/';
$user = 'landingpage';
$pass = 'Ars3n3Wenger!';

if (substr($pphone, 0, 1) == '0') {
	$phone = '62'.substr($pphone, 1);
} else {
	$phone = $pphone;
}

$total = $price + $ongkir;

if (strlen($phone) < 10 || strlen($phone) > 15) {
	echo "<script>alert('Cek Kembali Nomor Anda. Pastikan Nomor Whatsapp Sudah Benar');window.history.go(-1);</script>";
}else if($destination==null){
	echo "<script>alert('Cek Kembali Kecamatan Anda. Pastikan Memilih Kecamatan dengan Benar');window.history.go(-1);</script>";
}else{
	$params = array(
		'api_user' => $user,
		'api_key' => $pass,
		'to' => $email,
		'cc' => $email_aff,
        // 'to' => 'gpamungkaz@gmail.com',
        // 'cc' => 'inicumantesy@gmail.com',
		'subject' => 'Order baru COD dari No. HP ' . $phone,
		'html' => 'Order COD: '.$paket.'<br>Nama: ' . $name . '<br>No. HP: ' . $phone.'<br>Kecamatan: '.$kecamatan.'<br>Alamat Lengkap: ' . $address.'<br>Catatan: '. $note .'<br>Paket : '.$paket.' '.number_format($price, 0, '',',').'<br>Ongkir: '.number_format($ongkir, 0, '', ',').'<br>Total Harga: '.number_format($total, 0, '',','). '<br>Pembayaran: '.$pembayaran.'<br>Link WA: <a href="https://api.whatsapp.com/send?l=id&phone=' . $phone . '&text='.$message.'">' . $phone .'</a>',
		'from' => 'cs@hepta.co.id',

	);

	$request = $url . 'api/mail.send.json';
	$session = curl_init($request);
	curl_setopt($session, CURLOPT_POST, true);
	curl_setopt($session, CURLOPT_POSTFIELDS, $params);
	curl_setopt($session, CURLOPT_HEADER, false);
	curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
	curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($session);
	curl_close($session);

	header("Location: transaksi_berhasil.php");

}
?>    