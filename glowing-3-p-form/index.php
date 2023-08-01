<?php
$hasil = 0;
$sisa=7;
if ($hasil==0) {
	setcookie("cookie", "7");

}
// after the page reloads, print them out
if (isset($_COOKIE['cookie'])) {

	$hasil = $_COOKIE['cookie']-4;
	$sisa=$hasil;
	setcookie("cookie", $hasil);
	if($sisa<3){
		$hasil = $_COOKIE['cookie']-2;
		$sisa=$hasil;
		setcookie("cookie", $hasil);
	}
	if ($sisa<=1) {
		$sisa=1;
		setcookie("cookie", $sisa);
	}
}

$lp_id = ''; $data = []; $pixel = [];
$f1_header = '';
$f2_header = '';
$f3_header = '';
$f1_body = '';
$f2_body = '';
$f3_body = '';
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
	"https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
$_SERVER['REQUEST_URI']; 

$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_URL => "http://konsultasi.hayyana.asia/api/landing_page.php",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 60,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "url=".$url,
));
$response = curl_exec($curl);
$err = curl_error($curl);
$result = json_decode($response, true);
if($result){
	$data = $result['data'];
	$pixel = $result['pixel'];
}
foreach($pixel as $p){
	$f1_header = $p['f1_header'];
	$f1_body = $p['f1_body'];
	$f2_header = $p['f2_header'];
	$f2_body= $p['f2_body'];
	$f3_header= $p['f3_header'];
	$f3_body = $p['f3_body'];
}

$gid = '';
$gpaket = '';
if (isset($_GET['id'])) {
	$gid = $_GET['id'];
}
$cs = [
	['name' => 'Imelda', 'mobile' => '6281911106479', 'email' => 'cs4.heptaco@gmail.com']
];
$keys = array_keys($cs);
$random = $keys[array_rand($keys,1)];
$name = $cs[$random]['name'];
$mobile = $cs[$random]['mobile'];
$email = $cs[$random]['email'];
?>
<!DOCTYPE html>
<html class="" lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129605464-5"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-129605464-5');
	</script>



	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Customer kami 98% cocok | Ekstrak Kepompong Emas Produk Perawatan Wajah Wanita dan Pria</title>
	<meta name="author" content="Hayyana.co.id">
	<meta name="description" content="Hayyana menjadi satu-satunya produk kecantikan Indonesia yang menggunakan bahan-bahan alami dari kepompong emas (royal golden cocoon). Kandungan nutrisi di dalamnya sangat dibutuhkan karena membuat kuliat wajah halus, sehat, dan bersih bercahaya serta aman dan halal.">
	<meta name="keywords" content="khasiat kepompong emas,&nbsp;ekstrak kepompong emas,&nbsp;royal golden cocoon, produk kecantikan wanita dan pria, produk anti jerawat, produk penuaan dini, anti aging, aman untuk ibu hamil, produk kosmetik halal, brightening, anti aging, pelembab, deep cleanser, penuaan dini, CC Cream, acne cream, pemutih, pencerah, skin care">
	<!-- meta fb og start -->
	<meta property="og:url" content="https://hayyana.aag-id.com/heptaco/pixel/wa.php">
	<meta property="og:type" content="article">
	<meta property="og:title" content="Customer kami 98% cocok - Royal Beauty Secret | Ekstrak Kepompong Emas Produk Perawatan Wajah Wanita dan Pria">
	<meta property="og:site_name" content="hayyana.aag-id.com">
	<meta property="og:image" content="assets/img/lebaran_sebentar_lagi.png">
	<meta property="og:image:secure_url" content="assets/img/lebaran_sebentar_lagi.png">
	<!-- meta fb og end -->
	<!-- Css -->
	<link rel="shortcut icon" href="assets/img/fav/favicon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/amaran.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/footerfix.css">
	<!-- menu mobile -->
	<link href="assets/css/jquery_005.css" rel="stylesheet" type="text/css">
	<link href="assets/css/jquery_002.css" rel="stylesheet" type="text/css">
	<link href="assets/css/jquery_003.css" rel="stylesheet" type="text/css">
	<link href="assets/css/jquery.css" rel="stylesheet" type="text/css">
	<link href="assets/css/chatstyle.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="assets/js/magnific-popup/magnific-popup.css">


	<style>
		/*css form*/
		.section .thumbnail img {
			width: 100% !important;
		}

		a {
			color: #ffff;
		}
		a:hover {
			color: #ffff;
			text-decoration: none;
		}
		a:visited {
			color: #ffff;
			text-decoration: none;
		}
		/* selected link */
		a:active {
			color:#ffff;
			text-decoration: none;
		}

		.text-center{
			padding-left: 0%;
			padding-right: 0%;
		}
		@media only screen and (max-width: 760px){
			.text-center{
				padding-left: 2%;
				padding-right: 2%;
			}
		}
		.harga{
			padding-top: 13px;
			padding-bottom: 1px;
			background-image: url(assets/img/oval.png);
			background-position: center;
			background-size: 270px;
			background-repeat: no-repeat;
			z-index: -1;
		}
		.cod{
			padding-bottom: 20px;
		}

		input[type=text], select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			/* border-radius: 4px; */
			box-sizing: border-box;
		}
		input[type=tel], select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			/* border-radius: 4px; */
			box-sizing: border-box;
		}
		input[type=input], select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			/* border-radius: 4px; */
			box-sizing: border-box;
		}
		textarea {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			/* border-radius: 4px; */
			box-sizing: border-box;
		}
		input[type=submit] {
			width: 100%;
			background-color: #ffaac1;
			color: #275744;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			/* border-radius: 4px; */
			cursor: pointer;
			font-size:20px;
			font-weight: bold; 
		}
		input[type=submit]:hover {
			color: #ffaac1;
			background-color: white;
			/* font-size:10px; */
			font-weight: bold; 
			border: 2px solid #ffaac1;
		}
		.box {
			/* border-radius: 5px; */
			background-color: #bfffaa;
			padding: 40px;
			padding-left: 10%px;
		}
		.effect1{
			-webkit-box-shadow: 0 10px 6px -6px #777;
			-moz-box-shadow: 0 10px 6px -6px #777;
			box-shadow: 0 4px 10px 0px #777;
		}

		.whatsapp {
			color: white;
			padding: 10px 10px 10px 37px;
			border-radius: 8px;
			position: relative;
			display: inline-block;
			font-size: 15px;
			margin: auto;
			letter-spacing: 1px;
			background-color: green;

		}

		.tombol:hover {
			background-color: white; 
			color: #009933; 
			border: 2px solid #009933;
			border-radius: 8px;
		}

		.whatsapp:hover:after {
			background-image: url(assets/img/cod2.png);
			width: 50%;
			height: 50%;
		}

		.whatsapp:after {
			content: "";
			display: inline-block;
			position: absolute;
			right: 211px;
			top: 10px;
			width: 50%;
			height: 50%;
			background-image: url(assets/img/cod1.png) ;
			background-size: 24px;
			background-position: center;
			background-repeat: no-repeat;
			background-size: auto 80%;
		}
		/*end css form*/
		.section .thumbnail img {
			width: 100% !important;
		}

		#xmenu {
			background-color: #EDB200;
			color: #fff !important;
			font-size: 20px;
		}
		.modal-dialog {
			position:absolute;
			top:40% !important;
			transform: translate(0, -50%) !important;
			-ms-transform: translate(0, -50%) !important;
			-webkit-transform: translate(0, -50%) !important;
			margin:auto 28%;
			width:70%;
			height:38%;
			right: 0;
			margin-right: 60px;
		}
		.modal-content {
			min-height:100%;
			position:absolute;
			top:0;
			bottom:0;
			left:0;
			right:0;
			padding-left: 100px; 

		}
		.modal-body {
			position:absolute;
			top:45px; /** height of header **/
			bottom:45px;  /** height of footer **/
			left:0;
			right:0;
			overflow-y:auto;
		}
		.modal-footer {
			position:absolute;
			bottom:0;
			left:0;
			right:0;

		}
		a {
			color: #ffff;
		}
		a:hover {
			color: #ffff;
			text-decoration: none;
		}
		a:visited {
			color: #ffff;
			text-decoration: none;
		}
		/* selected link */
		a:active {
			color:#ffff;
			text-decoration: none;
		}
		.video-container {
			position: relative;
			padding-bottom: 56.25%;
			padding-top: 30px; height: 0; overflow: hidden;

		}

		.video-container iframe,
		.video-container object,
		.video-container embed {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}
		.kalimat{
			padding-top:20px;
			padding-bottom: 40px;
			padding-left: 0px;
			padding-right: 20px;
			margin-top:-37px;
			font-size:17px;
			text-align: center;
		}
		@media only screen and (max-width: 760px){
			.kalimat{
				padding-top: 40px;
				padding-bottom: 40px;
				padding-left: 0px;
				font-size:15px;
				padding-right: 0px;
				text-align: center;
				margin-top:0;
			}

			.checklist{
				color: #275744;
				padding-left: 30%;
				padding-right: 30%;
				font-size: 21px;
			}
			.text-center{
				padding-left: 0%;
				padding-right: 0%;
			}

			@media only screen and (max-width: 760px){
				.checklist{
					color: #275744;
					padding-left: 2%;
					padding-right: 2%;
					font-size: 18px;
				}
				.text-center{
					padding-left: 2%;
					padding-right: 2%;
				}
			}


		}

		.wa_btn {
			background-color: green;
			margin: auto;
			padding: 10px 10px 10px;
			color: white;
			border-radius: 8px;



		}
		.btn-whatsapp{
			position:fixed;
			bottom:0;
			right:15px;
			width:auto;
			height:40px;
			line-height: 40px;
			text-align:center;
			color:#fff!important;
			border-radius:10px 10px 0 0;
			background:linear-gradient(#2ecc71,#1ABF60);
			overflow: hidden;
			padding:0 55px 0 15px;
			font-size: 12px;
			box-shadow: 0px -10px 50px -10px rgba(0,0,0,0.5);
			text-decoration: none!important;
			z-index: 100;
		}
		.btn-whatsapp .fa{
			width: 40px;
			height: 40px;
			line-height: 40px;
			position: absolute;
			top:0;
			right:0;
			background: rgba(0,0,0,0.1);
			display: block;
			font-size: 20px;
		}
		.whatsapp-box{
			position: fixed;
			bottom:50px;
			right:15px;
			z-index: 99;
			background: #fff;
			width: 350px;
			border-radius: 10px;
			overflow: hidden;
			box-shadow: 0px 1px 10px rgba(0,0,0,0.1);
			transform: translateY(100%);
			opacity: 0;
			visibility: hidden;
			transition: .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
		}
		.whatsapp-box.active{
			transform: translateY(0);
			visibility: visible;
			opacity: 1;
		}
		.whatsapp-box .welcome-text svg{
			width: 20px;
			height: auto;
		}
		.whatsapp-box .welcome-text svg{
			height: 18px;
			width: auto;
			fill:#aaa;
			vertical-align: middle;
		}
		.whatsapp-box .welcome-text .time{
			font-size: 12px;
			color:#aaa;
		}
		.whatsapp-box .whatsapp-form svg{
			height: 20px;
			width: auto;
			fill:#aaa;
		}
		.whatsapp-box .heading{
			background:linear-gradient(#2ecc71,#1ABF60);
			padding:30px;
			color:#fff;
			text-align: center;
			position: relative;
		}
		.whatsapp-box .heading .btn-close{
			background: none;
			border:none;
			outline: none;
			box-shadow: none;
			position: absolute;
			top:0;
			left:0;
			color:#fff;
			padding:15px 30px;
			font-size: 20px;
		}
		.whatsapp-box .heading .avatar{
			width: 80px;
			height: 80px;
			background: #fff;
			border-radius: 50%;
			overflow: hidden;
			margin:0 auto 10px;
		}
		.whatsapp-box .heading .avatar img{
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
		.whatsapp-box .chatbox{
			padding:15px;
			background: #eee;
		}
		.whatsapp-box .whatsapp-form{
			display: flex;
			flex-direction: row;
			flex:1;
			padding:10px;
		}
		.whatsapp-box .whatsapp-form .form-control{
			width: 100%;
			border:none;
			box-shadow: none;
			background: none;
		}
		.whatsapp-box .whatsapp-form .btn-send{
			width: auto;
			background: none;
			border:none;
			outline: none;
		}
		.whatsapp-box .welcome-text{
			background: #E4FDC7;
			font-size: 14px;
			position: relative;
			padding:15px;
			box-shadow: 0px 1px 3px rgba(0,0,0,0.1);
			border-radius: 5px;
			font-family: "roboto", sans-serif;
			margin-left:15px;
			line-height: 120%;
			transform: translateY(50px);
			opacity: 0;
			visibility: hidden;
			transition: .3s ease;
			transition-delay: .6s;
		}
		.whatsapp-box.active .welcome-text{
			opacity: 1;
			visibility: visible;
			transform: translateY(0);
		}
		.whatsapp-box .welcome-text:before{
			content: "";
			position: absolute;
			top:0;
			left:-16px;
			border:8px solid transparent;
			border-right: 8px solid #E4FDC7;
			border-top: 8px solid #E4FDC7;
		}
		.whatsapp-box .welcome-text .notice{
			float: right;
			margin:5px 0 0;
		}
		@media (max-width: 767px){
			.welcome-tip{
				display: none;
			}
			.btn-whatsapp{
				width: auto;
				left:0;
				right:0;
				border-radius: 0;
			}
			.whatsapp-box{
				top:0;
				left:0;
				bottom:0;
				right:0;
				z-index: 99999;
				width: auto;
				background: #eee;
				border-radius: 0;
				transition: .5s ease;
			}
			.whatsapp-form{
				position: absolute;
				bottom:0;
				left:0;
				right:0;
				box-shadow: 0px -10px 50px -15px rgba(0,0,0,0.1);
				background: #fff;
			}
		}
		.blink_me {
			animation: blinker 1s linear infinite;
			color: red;
		}

		@keyframes blinker {
			50% {
				opacity: 0;
			}
		}
	</style>
	<link rel="stylesheet" type="text/css" href="assets/css/jquery_004.css">

	<link href="assets/css/feedbackMessages.css" rel="stylesheet">

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
				'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '<?=$f1_header?>');
			fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=<?=$f1_header?>&ev=PageView&noscript=1"
			/></noscript>
			<!-- End Facebook Pixel Code -->
		</head>

		<body>
			<script>
				<?=$f1_body?>
			</script>

			<div id="main-wrapper" class="mm-page mm-slideout">
				<!-- Header -->
				<div class="header float">
					<nav class="navbar navbar-default">
						<div class="container">
							<div class="navbar-header">
								<!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navigation"> -->

									<a class="navbar-brand" href=""><img src="assets/img/img_ENTKUJf.png" alt="hayyana"></a>
								</div>
								<div class="collapse navbar-collapse navigation scroll">
									<ul class="nav navbar-nav navbar-right hidden-xs">
										<li class="searchbox dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
											<ul class="dropdown-menu">
												<li>
													<form class="search-container" action=""
													method="get">
													<div class="input-group">

														<input type="text" class="form-control" name="q" placeholder="Product Search..."
														required="">
														<span class="input-group-btn">
															<button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
														</span>
													</div>
												</form>
											</li>
										</ul>
									</li>
									<li class="cart"><a href="#section-form"><i class="fa fa-shopping-cart"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
				<!-- Content -->
				<div id="pathway">

				</div>
			</div>

			<div class="section" id="section-kulit">
				<div class="heading">
					<h4>Bunda Ingin:</h4>
					<h1><strong>Wajah GLOWING MEMIKAT</strong> dalam <strong>30 Hari?</strong><h1>
						<h3>Tanpa <strong>Ribet</strong> Dan <strong>100% Aman!</strong></h3>

						<h3 class="jarak">Teruskan Membaca Karena Ada <strong>Solusi dari Dokter Luci</strong></h3>

					</div>
					<div class="jenis-kulit-slider">


					</div>
				</div>

				<div class="section">
					<div class="thumbnail"><img src="assets/img/closeup_puteri_keraton.jpg" alt=""></div>
				</div>

				<div class="section section-lg" id="section-blog">
					<div class="container">
						<h3 class="heading text-center"><strong>86% Wanita Usia Diatas 30 Tahun Tidak Pede Dengan Wajahnya</strong></h3><br><br>


						<h4 class="heading text-center"><strong>Apakah Bunda Mengalami Salah Satu dari 7 Masalah Kulit Wajah Wanita Indonesia Ini?</strong></h4><br>

						<p class="checklist" style="font size=16;">
							<img src="assets/img/checkbox-black.png" width="20"> <strong>FLEK atau NODA HITAM</strong></br>
							<img src="assets/img/checkbox-black.png" width="20"> <strong>KULIT KERING</strong></br>
							<img src="assets/img/checkbox-black.png" width="20"> <strong>WAJAH KUSAM</strong></br>
							<img src="assets/img/checkbox-black.png" width="20"> <strong>KERUTAN atau KERIPUT</strong></br>
							<img src="assets/img/checkbox-black.png" width="20"> <strong>BERJERAWAT</strong></br>
							<img src="assets/img/checkbox-black.png" width="20"> <strong>PORI-PORI BESAR</strong></br>
							<img src="assets/img/checkbox-black.png" width="20"> <strong>BOPENG atau BEKAS JERAWAT</strong></br>
						</p>

					</div>
				</div>

				<div class="section" id="footer">
					<div class="container">        

						<h4 class="heading text-center"><strong><font color="red">FAKTA 1:</font></strong><br>Ketika wajah terlihat tua PLUS flek hitam , atau berjerawat atau tidak mulus maka besar kemungkinan <strong>SUAMI TIDAK LAGI TERPIKAT dengan Anda</strong>.<br><br><strong><font color="red">FAKTA 2:</font></strong><br>Ketika Suami tidak lagi terpikat , maka kemungkinan besar dia akan <strong>TERPIKAT</strong> wanita lain !</h4><div class="clearfix"></div>
					</div>
				</div>


				<div class="section section-lg" id="section-blog">
					<div class="container">
						<h3 class="heading text-center">Jangan sampai kejadian :</h3><br>
						<h4 class="heading text-center"><font color="red"><strong>Suatu Hari Ada Wanita mengetuk rumah bunda , 
							Bunda bukakan pintu dan bertanya dia siapa dan mencari siapa<br><br>

						Jawabannya : Dia adalah istri kedua (simpanan) suami bunda yang sedang hamil !</strong></font></h4><br>

						<br>

					</div>
				</div>

				<div class="section">
					<div class="thumbnail"><img src="assets/img/tidak_pede.png" alt=""></div>
				</div>

				<div class="section section-lg" id="section-blog">
					<div class="container">
						<h4 class="heading text-center"><i><strong>Jika bunda tidak ingin kejadian seperti itu menimpa bunda..</strong>.</i></h4><br>
						<h4 class="heading text-center"><font color="green"> <strong>Maka sekarang saatnya menggunakan perawatan wajah dengan produk skincare terpercaya</strong>.</font></h4><br>

					</div>
				</div>

				<div class="section" id="footer">
					<div class="container">        

						<h3 class="heading text-center"><strong>SkinCare yang bukan hanya membuat GLOWING wajah bunda, <br>namun juga memiliki efek PEMIKAT !</strong></h3><br>
						<h4 class="heading text-center"><strong><font color="red">Jangan pertaruhkan keharmonisan rumah tangga bunda dengan membiarkan suami terpikat wanita lain...

						</font></strong></h4><br>

						<div class="clearfix"></div>
					</div>
				</div>

				<div class="section section-lg" id="section-blog">
					<div class="container">
						<h3 class="heading text-center"><strong>Berita baiknya,</strong>  ada BAHAN ALAMI, langka, PREMIUM, terbaik di dunia yang mampu membuat wajah glowing sekaligus membuat inner beauty bunda terpancar</h3><br>
					</div>
					<div class="container">
						<h3 class="heading text-center"><strong>INNER BEAUTY YANG TERPANCAR INILAH YANG AKAN MEMBUAT SUAMI KEMBALI TERPIKAT !

							Bahan Alami tersebut adalah :

						</strong></h3><br>
					</div>
				</div>

				<section class="section">
					<div class="product-info-box">
						<div class="container">
							<div class="thumbnail"><img src="assets/img/kepompong_emas_royal_golden_cocoon.png" alt=""></div>
							<div class="text">
								<h2>KEPOMPONG EMAS</h2>
								<h3>Royal Golden Cocoon</h3>
								<h4 style="text-align: left;"><strong>Kepompong Emas adalah kepompong yang dihasilkan oleh ulat jenis sangat langka yang memiliki kandungan anti oxidant dan whitening yang kuat</strong>.</h4>
								<h4 style="text-align: left;"><strong>mengandung Sericin dan Asam Amino GRADE A (GRADE TERBAIK DIKELASNYA)</strong></h4>              
							</div>
						</div>
					</div>
				</section>

				<div class="section section-lg" id="section-blog">
					<div class="container">
						<h3 class="heading text-center">Dan ternyata kepompong emas ini masih memiliki misteri tak terpecahkan<br><br>Sebuah misteri yang mampu mengeluarkan efek inner beauty bagi siapapun yang memakainya</h3>
					</div>
				</div>

				<section class="section">
					<div class="product-info-box">
						<div class="container">
							<div class="thumbnail"><img src="assets/img/kain_sutera_puteri.jpg" alt=""></div>
							<div class="text">
								<h3 class="heading text-center">Dan Karena Keampuhan Yang Tak Tertandingi Itulah...</h3> 
							</div>
						</div>
					</div>
				</section>

				<div class="section section-lg" id="section-blog">
					<div class="container">
						<h4 style="line-height: 27px;"><strong>Dr. Fredi Setyawan</strong>, Pendiri <strong><i>Natasha Group</i></strong> yang Merupakan Pemilik Jaringan Klinik Kecantikan Terbaik dan Tertua di Indonesia.</h4><br>   
						<p style="text-align: center;"> <img src="assets/img/dr_fredi_setyawan.jpg" class="img-circle" alt="Dr Fredi" width="280px"></p>
						<h3 class="heading text-center"><strong>Dr. Fredi Setyawan</strong><br>Ahli Perawatan Wajah, Pemilik Natasha Group</h3><br>
						<h4 style="line-height: 27px; color: blue;">Memprakarsai Kerjasama <strong>Exclusive</strong> dengan <strong><i>KERATON YOGYAKARTA</i></strong> yang Memiliki Budidaya Kepompong Emas Terbesar Secara Turun Temurun.</h4>                    
					</div>
				</div>

				<div class="section section-lg">
					<div class="container">
						<br>
						<p style="text-align: center;"> <img src="assets/img/gkr_bendara.jpg" class="img-circle" alt="GKR Bendara" width="280px"></p>
						<h3 class="heading text-center"><strong>GKR Bendara</strong><br>Puteri Bungsu Sultan HB X, Presiden Direktur Hayyana Cosmetics</h3><br>
					</div> 
				</div>

				<div class="section section-lg" id="section-blog">
					<div class="container">
						<h3 class="heading text-center"><strong>DAN KERJASAMA INI MENGHASILKAN :</strong></h3><br><p align="center"><img src="assets/img/arrows-transparent-animated-gif-1.gif" width="50"></p>
					</div>
				</div>

				<div class="product-info-box">
					<div class="container">
						<div class="thumbnail"><img src="assets/img/rangkaian_produk_hayyana_cosmetics.jpg" alt=""></div>
						<div class="text">
							<h2>Rangkaian Produk Skincare<br><strong>Hayyana Cosmetics</strong></h2>
							<p>
							</p>
							<p class="MsoNormal"><strong>Hayyana</strong> menjadi <strong>satu-satunya produk kecantikan Indonesia</strong> yang menggunakan bahan-bahan alami dari ekstrak <strong>KEPOMPONG EMAS</strong> (royal golden cocoon).</p> <br>
							<p class="MsoNormal"><font size="6"><strong>KENAPA HAYYANA?</strong></font></p>
							<h4>Produk Kosmetik Premium<br>dengan Harga Ekonomis<br><br>Persembahan Para Putri Keraton Yogyakarta<br>dan Ahli Perawatan Kecantikan Kulit Indonesia</h4>

						</div>
					</div>
				</div>

				<div class="section section-lg" id="section-blog">
					<div class="container">
						<h4 class="heading text-center">Mesin Nanosome dari Jerman <strong>memecah partikel menjadi berjuta lebih kecil</strong> sehingga dapat meresap kedalam pori-pori terdalam.</h4><br>
						<h4 class="heading text-center">Teknologi Encapsulation <strong>membungkus bahan aktif ketika melewati kulit</strong> dan pecah didalam sehingga tidak menyebabkan iritasi dipermukaan.</h4>
					</div>
				</div>

				<div class="section section-lg" id="section-blog">
					<div class="container"><p align="center"><img src="assets/img/arrows-transparent-animated-gif-1.gif" width="50"></p>
					</div>
				</div>

				<div class="section section-lg" id="section-blog">
					<div class="container">
						<h3 class="heading text-center"><strong>Bahan PREMIUM Terbaik!</strong><br>Diolah dengan <strong>Mesin Canggih</strong> dari <strong>Jerman, Jepang</strong> dan <strong>Amerika:</strong></strong></h3><br>


						<p class="checklist" style="font size=16;">
							<img src="assets/img/checkbox-black.png" width="20"> <strong>TIDAK Mengandung Kimia</strong><br />
							<img src="assets/img/checkbox-black.png" width="20"> <strong>100% Bahan ALAMI</strong><br />
							<img src="assets/img/checkbox-black.png" width="20"> <strong>Serat Kepompong Emas <i>(Langka)</i></strong><br />
							<img src="assets/img/checkbox-black.png" width="20"> <strong>Asam Amino Sericin</strong><br />
							<img src="assets/img/checkbox-black.png" width="20"> <strong>Sun Flower Oil - Moisturize NATURAL</strong><br />
							<img src="assets/img/checkbox-black.png" width="20"> <strong>Ekstrak Kakadu & Bunga Daisy</strong><br />
							<img src="assets/img/checkbox-black.png" width="20"> <strong>Anti UV SPF 30 dan PA++++ <i>(Tertinggi)</i></strong><br />
							<img src="assets/img/checkbox-black.png" width="20"> <strong>Formula RAHASIA KERATON & Natasha</strong><br />
							<img src="assets/img/checkbox-black.png" width="20"> <strong>Ijin BPOM dan Halal MUI</strong><br />

						</p>
					</div>
				</div>

				<div class="section section-lg" id="section-blog">
					<div class="container">
						<h3 class="heading text-center"><strong>Kemasan Gelas yang Mewah</strong></h3><p align="center"><strong>Eksklusif Hanya Dijual Online untuk Menjaga Kualitas</strong></p>
					</div>
				</div>

				<div class="product-info-box">
					<div class="container">
						<div class="thumbnail"><img src="assets/img/img_V6HNRGq.png" alt=""></div>
						<div class="text">
							<h3>Royal Golden Cocoon Rejuve Cream</h3>
							<p>
							</p>
							<p style="text-align: left;"><strong>inilah langkah pertama untuk membuat bunda tampil memikat , yaitu HILANGKAN KERUTAN /keriput diwajah<br><br>perpaduan KEPOMPONG EMAS dengan BUNGA CENTELLA, akan mempercepat proses peremajaan kulit dan pengangkatan sel mati<br><br>perpaduan ini membuat wajah bunda terlihat jauh lebih muda dan terlihat segar menawan</strong></p>
							<p style="text-align: left;"><span style="font-weight: bold;">BPOM RI NA 18152000087</span><br></p>

						</div>
					</div>
				</div>

				<div class="product-info-box">
					<div class="container">
						<div class="thumbnail"><img src="assets/img/img_TjuCgCM.png" alt=""></div>
						<div class="text">
							<h3>Royal Golden Cocoon Brightening Cream</h3>
							<p>
							</p>
							<p style="text-align: left;"><strong>Wajah terlihat lebih muda belum cukup bun, langkah selanjutnya adalah membuat wajah KINCLONG MENGGEMASKAN<br><br>inilah krim siang malam yang mengandung perpaduan KEPOMPONG EMAS dangan BUNGA DAISY yang diperkaya dengan SERICIN ASAM AMINO akan membuat wajah bunda jauh lebih berkilau , GLOWING hanya dalam hitungan hari<br><br>setelah wajah kinclong , harap maklum ya bun kalau nanti banyak yang gemas untuk ngelus dan "noel" wajah menawan bunda</strong></p>
							<p style="text-align: left; "><span style="text-align: left;"><span style="font-weight: bold;">BPOM
							RI NA 18151201685</span></span><br></p>
							<p></p>

						</div>
					</div>
				</div>

				<div class="product-info-box">
					<div class="container">
						<div class="thumbnail"><img src="assets/img/img_YU9KFEk.png" alt=""></div>
						<div class="text">
							<h3>Royal Golden Cocoon Cleanser</h3>
							<p>
							</p>
							<p>
								<p style="text-align: left;">Proses peremajaan dan proses pengkinclongan akan bisa tercapai jauh lebih cepat dan maksimal harus diawali dengan pemakaian cleanser<br><br>cleanser ini berfungsi untuk mengangkat kotoran dan zat berbahaya yang membuat wajah bunda memiliki banyak masalah<br><br>selain itu cream ini juga akan membuat wajah bunda terasa lembab dan menambah efek cerah<p>
								</p><p style="text-align: left;"><span style="font-weight: bold;">BPOM RI NA 18151700342</span></p>                </p>
							</div>
						</div>
					</div>

					<div class="section section-lg" id="section-blog">
						<div class="container">
							<h3 class="heading text-center"><strong>Simak Beberapa Testimoni Berikut:</strong></h3>
						</div>
					</div>

					<div class="zoom-gallery text-center">
						<a href="assets/img/testi1.jpg" ><img src="assets/img/testi1.jpg" width="280px" height="auto"></a><br><br>
						<a href="assets/img/testi2.jpg"><img src="assets/img/testi2.jpg" width="280px" height="auto"></a><br><br>
						<a href="assets/img/testi3.jpg"><img src="assets/img/testi3.jpg" width="280px" height="auto"></a>
					</div>

					<div class="section section-lg" id="section-blog">
						<div class="container">
							<h4 class="heading text-center"><strong>Diproduksi dengan teknologi nano dan encapsulation yang canggih, sehingga kosmetik merasuk ke dalam kulit wajah tanpa iritasi.</strong></h4><br>
							<h3 class="heading text-center"><strong>Ingin Wajah Cerah Glowing dalam 30 Hari?</strong></h3><br>
							<h4 class="heading text-center"><strong>Lakukan Perawatan Wajah dengan <font color="#ffb00d">Produk Hayyana Secara Konsisten</font> dengan <font color="#ffb00d">Pantauan Team Medical Serive</font> Kami.<br><br>
							Dapatkan Akses ke Klinik Online Hayyana Melalui Aplikasi Android Untuk Konsultasi dan Melihat History Perawatan Wajah Bunda</strong></h4><br>

							<a href="https://play.google.com/store/apps/details?id=id.hayclinic" target="_blank"><p style="text-align: center;"> <img src="assets/img/googleplay.png" width="170px"></p></a> 
							<p style="text-align: center;"> <img src="assets/img/hp_1.png" width="280px"></p>
							<p style="text-align: center;"> <img src="assets/img/hp_2.png" width="280px"></p>
						</div>
					</div>

					<div class="section section-lg">
						<div class="container">
							<h4 class="heading text-center">Saat pemakaian produk Hayyana, Bunda dipantau oleh <strong>Team CS Online</strong> yang dipimpin oleh ahli perawatan kulit kami.</strong></h4><br />
							<p style="text-align: center;"> <img src="assets/img/dr_luci.jpg" class="img-circle" alt="Dr. Luciana" width="280px"></p>
							<h3 class="heading text-center"><strong>Dr. Luciana Kuswibawati, M.Kes</strong><br>Medical Service Natasha Group</h3>
							<p style="text-align: center;"><h4 class="heading text-center">Bunda Dapat Konsultasi Setiap Saat dengan Team CS Kami.</h4></p><br>
							<h3 class="heading text-center"><strong>ORDER PAKET SKINCARE HAYYANA SEKARANG JUGA:</strong></h3>
							<h3 class="heading text-center"><font color="red"><strong>>> HANYA DIJUAL ONLINE! <<</strong></font></h3>
						</div> 
					</div>

					<div class="product-info-box">
						<div class="container">
							<div class="thumbnail"><img src="assets/img/paket_hayyana_3_produk.png" alt=""></div>
							<div class="text">
								<h3>Paket Berisi 3 Produk Perawatan</h3>
								<p>
								</p>
								<h4><strong>Hayyana Rejuvenation Cream</strong><br><i>(Krim Siang dan Malam - Anti Aging & Pencerah 30gr)</i></h4>      
								<h4><strong>Hayyana Brightening Cream</strong><br><i>(Krim Siang dan Malam - Pencerah 30gr)</i></h4>
								<h4><strong>Hayyana Deep Cleanser</strong><br><i>(Gel Pembersih 100gr)</i></h4>
								
							</div>
						</div>
					</div>

					<div class="section section-lg" id="section-form">
						<div class="container">
							<h3 class="heading text-center"><strong>3 PRODUK HANYA</strong></h3><h3 class="heading text-center"><span style="text-decoration:line-through;color: red">RP.499.000</span></h3>
							<h4 class="heading text-center"><strong>HARGA FLASH SALE KHUSUS HARI INI :</strong></h4><br><br><
							<h2 class="heading text-center"><strong>Rp.377.200</strong></h2>
							<h3 class="heading text-center">Hanya tersisa <span class="blink_me"><?=$sisa?></span> dari <span style="text-decoration:line-through;">50 </span> slot untuk harga flash sale</h3>
							<h3 class="heading text-center"><strong><font color="#ffb00d">Gratis Membership di Aplikasi Klinik Online!</font></strong></h3>

							<h3 align="center">Bisa Bayar Ditempat!<br><strong>Cash on Delivery (COD)</strong></h3>

							<h4 align="center"><strong>MAU ORDER PAKET SKINCARE HAYYANA SEKARANG?</strong></h4>
							<p align="center"><img src="assets/img/red-arrow.gif"></p>
							<p align="center" style="font-size: 15px; font-weight: bold;"><strong>MOHON FORM HANYA DI ISI UNTUK YANG SERIUS SAJA</strong></p>
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<div class="box effect1">
										<form action="submit.php" method="post" id="form" name="form">
											<input type="hidden" name="no_cs" value="<?=$mobile;?>">
											<input type="hidden" name="product" value="Paket GLowing 30 Hari">
											<label for="fname" id="labelnama">Nama Bunda</label>
											<input type="text" id="name" name="nama" placeholder="Nama Penerima Paket" required="">
											<label for="lname" id="labelnohp">Nomor WA</label>
											<input type="tel" minlength="10" maxlength="15" name="wa" placeholder="Nomor WhatsApp" required onkeypress="return validateNumber(this)">
											<div id="footerform">
												<h4 align="center"><b>Klik Tombol Ini Ya Bunda!</b></h4><br>
												<p align="center"><img src="assets/img/arrows-transparent-animated-gif-1.gif" width="50"></p>
												<input type="submit" id="submit" value="KIRIM SEKARANG !">
											</div>
										</form>
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>
							<br>
						</p>

						<!-- star new chat -->
						<div class="whatsapp-box">
							<div class="heading">
								<button class="btn-close" type="button"><i class="fa fa-angle-left"></i></button>
								<div class="avatar"><img src="assets/img/profil_wa.jpg" alt=""></div>
								<div class="name"><?php echo $name;?></div>
							</div>
							<div class="chatbox">
								<div class="welcome-text">
									Selamat <span class="greeting"></span>, saya <?php echo $name; ?> dari Hayyana. Silahkan chat saya untuk konsultasi atau order Paket Skincare Hayyana!
									<div class="notice">
										<span class="time"></span>
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="594.149px" height="594.149px" viewBox="0 0 594.149 594.149" style="enable-background:new 0 0 594.149 594.149;" xml:space="preserve">
											<g>
												<g id="done-all">
													<path d="M448.8,161.925l-35.7-35.7l-160.65,160.65l35.7,35.7L448.8,161.925z M555.899,126.225l-267.75,270.3l-107.1-107.1l-35.7,35.7l142.8,142.8l306-306L555.899,126.225z M0,325.125l142.8,142.8l35.7-35.7l-142.8-142.8L0,325.125z"/>
												</g>
											</g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
										</svg>
									</div>
								</div>
								<br>
								<div class="welcome-text">
									Kami bisa COD, kirim barang terlebih dahulu dan bayar ditempat!
									<div class="notice">
										<span class="time"></span>
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="594.149px" height="594.149px" viewBox="0 0 594.149 594.149" style="enable-background:new 0 0 594.149 594.149;" xml:space="preserve">
											<g>
												<g id="done-all">
													<path d="M448.8,161.925l-35.7-35.7l-160.65,160.65l35.7,35.7L448.8,161.925z M555.899,126.225l-267.75,270.3l-107.1-107.1l-35.7,35.7l142.8,142.8l306-306L555.899,126.225z M0,325.125l142.8,142.8l35.7-35.7l-142.8-142.8L0,325.125z"/>
												</g>
											</g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g> 
											</g>
										</svg>
									</div>
								</div>
							</div>
							<form class="whatsapp-form" action="redirect.php?urls=<?php echo $urls ?>" data-phone="<?php echo $mobile; ?>">
								<input name="wa_message" type="text" class="form-control" placeholder="Reply.." value="Aku mau order Paket GLOWING Hayyana dong!" autocomplete="off">
								<button class="btn btn-send" type="submit">
									<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="535.5px" height="535.5px" viewBox="0 0 535.5 535.5" style="enable-background:new 0 0 535.5 535.5;" xml:space="preserve">
										<g>
											<g id="send">
												<polygon points="0,497.25 535.5,267.75 0,38.25 0,216.75 382.5,267.75 0,318.75"/>
											</g>
										</g>
										<g></g>
										<g></g>
										<g></g>
										<g></g>
										<g></g>
										<g></g>
										<g></g>
										<g></g>
										<g></g>
										<g></g>
										<g></g>
										<g></g>
										<g></g>
										<g></g>
										<g></g>
									</svg>
								</button>
							</form>
						</div>
						<!-- end new chat -->
					</div>
				</div>
			</div>

			<div class="section section-lg">
				<div class="container">
					<h4 class="heading text-center"><strong>Klik Tombol Diatas Untuk Mulai Chat dengan CS Kami</strong><br><br><i>Barang dikirim hari ini juga jika order sebelum pukul 3 sore</i></h4><br>
					<h4 class="heading text-center"><strong>BUNDA TERIMA BARANG DULU</strong></h4>
					<h4 class="heading text-center"><strong>CEK ISI PAKETNYA</strong></h4>
					<h4 class="heading text-center"><strong>LALU BAYAR DITEMPAT !</strong></h4>
					<h4 class="heading text-center"><strong>ATAU</strong></h4>
					<br>
					<div class="text-center">
						<a class="wa_btn btn"><span style="font-size: 10px;"><span style="font-size: 10px;"><i class="fa fa-whatsapp" style="font-size:10px"></i> <span style="font-size: 10px; font-weight: normal;">Order Via WA Sekarang!</span></a>
					</div>
				</div>
			</div>

			<!-- Footer -->
			<div class="product-info-box">
				<div class="container">
					<div class="thumbnail"><img src="assets/img/dion.jpg" alt=""></div>
					<div class="text">
						<h5>( Pabrik Natasha Group di Prambanan Yogyakarta )</h5>
						<h4>Produsen kosmetik peraih penghargaan International Arch of Europe 2017 di Jerman dan 2018 di Spanyol.</h4>

					</div>
				</div>
			</div>

			<div class="section">
				<div class="container">
					<br>
					<p align="center"><strong>PT. Nur Hayu Nindyan</strong> adalah perusahaan dengan produk kosmetik bermerek <strong>hayyana</strong> yang didukung oleh perusahaan farmasi dan kosmetik berpengalaman puluhan tahun yang hanya memproduksi produk berkualitas dan cocok untuk kulit wajah orang Indonesia.</p>
					<br>
				</div>
			</div>

			<div class="section" id="footer">
				<div class="container">
					<div class="pull-left">
						<ul class="nav navbar-nav"></ul>
						<div class="copyright">
							© Copyright 2019 <a href="#">PT. Nur Hayu Nindyan</a>. Powered by NATASHA Group & Keraton Yogyakarta
						</div>
					</div>
					<div class="pull-right">
						<ul class="social">
							<li>
								<a href="#" class="btn btn-xs btn-social-icon btn-facebook"
								title="facebook"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#" class="btn btn-xs btn-social-icon btn-instagram"
								title="instagram"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="#" class="btn btn-xs btn-social-icon btn-twitter"
								title="twitter"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a target="_blank" href="https://www.youtube.com/channel/UCJ7LMKuUhRJ2Btf1Jh7zRLA" class="btn btn-xs btn-social-icon btn-youtube"
								title="youtube"><i class="fa fa-youtube"></i></a>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="section" id="footer">
				<div class="bawah scroll">
					<a href="#section-form" class="wa btn"><span style="font-size: 20px;"><span style="font-size: 20px;"><i class="fa fa-whatsapp" style="font-size:20px"></i> <span style="font-size: 20px; font-weight: normal;">Hubungi CS Kami Segera!</span></a>
				</div>
			</div>




			<!-- end modal footer-->

			<!-- Javascript -->


			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
			<script src="https://code.jquery.com/jquery-2.1.0.min.js" 
			integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
			crossorigin="anonymous"></script>
			<script src="assets/js/toaster.js"></script>        

			<script type="text/javascript" src="assets/js/bootstrap.js"></script>
			<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
			<!-- Magnific Popup core JS file -->
			<script src="assets/js/magnific-popup/jquery.magnific-popup.js"></script>
			<script src="assets/js/magnific-popup/jquery.magnific-popup.min.js"></script>
			<script src="assets/js/jquery.singlePageNav.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('.zoom-gallery').magnificPopup({
						delegate: 'a',
						type: 'image',
						closeOnContentClick: false,
						closeBtnInside: false,
						mainClass: 'mfp-with-zoom mfp-img-mobile',
						image: {
							verticalFit: true,
							titleSrc: function(item) {
								return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
							}
						},
						gallery: {
							enabled: true
						},
						zoom: {
							enabled: true,
							duration: 300, 
							opener: function(element) {
								return element.find('img');
							}
						}

					});
				});
			</script>
			<script type="text/javascript">
				var interval;
				var codetmpl = "<code>%codeobj%</code><br><code>%codestr%</code>";

				$(document).ready(function () {
					randomToast();

					start();
				});

				function start() {
					if (!interval) {
						interval = setInterval(function () {
							randomToast();
						}, 30000);
					}
					this.blur();
				}


				function randomToast() {
					var user = new Array("1 Paket telah diorder dari Pemalang", "4 Paket telah diorder dari Cilacap", "2 Paket telah diorder dari Manado", "3 Paket telah diorder dari Samarinda", "1 Paket telah diorder dari Bogor");
					var beli = new Array("3 menit lalu.", "5 menit lalu.", "10 menit lalu.", "11 menit lalu.", "15 menit lalu.");
					var img = new Array("<img src='assets/img/_id.png'>", "<img src='assets/img/_en.png'>");
					randomimg = img[Math.floor(Math.random() * img.length)];

					random = user[Math.floor(Math.random() * user.length)];
					randombeli = beli[Math.floor(Math.random() * beli.length)];

					var description = [
					"",
					"",
					"",
					];

					var size = description.length
					var x = Math.floor(size * Math.random())


					var priority = 'success';
					var image = description[x];
					var title = random;
					var message = randombeli;

					$.toaster({
						priority: priority,
						image: image,
						title: title,
						message: message
					});
				}


				function maketoast(evt) {
					evt.preventDefault();

					var options = {
						priority: $('#toastPriority').val() || null,
						image: $('#toastImage').val() || null,
						title: $('#toastTitle').val() || null,
						message: $('#toastMessage').val() || 'A message is required'
					};

					if (options.priority === '<use default>') {
						options.priority = null;
					}

					var codeobj = [];
					var codestr = [];

					var labels = ['message', 'image', 'title', 'priority'];
					for (var i = 0, l = labels.length; i < l; i += 1) {
						if (options[labels[i]] !== null) {
							codeobj.push([labels[i], "'" + options[labels[i]] + "'"].join(' : '));
						}

						codestr.push((options[labels[i]] !== null) ? "'" + options[labels[i]] + "'" : 'null');
					}

					if (codestr[2] === 'null') {
						codestr.pop();
						if (codestr[1] === 'null') {
							codestr.pop();
						}
					}

					codeobj = "$.toaster({ " + codeobj.join(", ") + " });"
					codestr = "$.toaster(" + codestr.join(", ") + ");"

					$('#toastCode').html(codetmpl.replace('%codeobj%', codeobj).replace('%codestr%', codestr));
					$.toaster(options);
				}
			</script>

			<script>
				function validateNumber(evt){
					var charCode = (evt.which) ? evt.which : event.keyCode
					if ((charCode < 48 || charCode > 57)&&charCode>=32)
						return false;
					return true;
				}
			</script>
			<script>
				$('.scroll').singlePageNav({
					offset: $('.single-page-nav').outerHeight(),
					threshold: 120,
					speed: 2000,
					currentClass: 'current',
					easing: 'swing',
					filter: ':not(.external)',
					beforeStart: function () {
						console.log('begin scrolling');
					},
					onComplete: function () {
						console.log('done scrolling');
					}
				});
			</script>


			<script type="text/javascript">
				$('.wa_btn').on('click',function(){
					if($('.whatsapp-box').hasClass('active')){
						$('.whatsapp-box').removeClass('active');
					} else {
						$('.whatsapp-box').addClass('active');
						greeting();
					}
				});
				function greeting(){
					var time = new Date();
					var timeText = time.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });
					$('.whatsapp-box .time').text(timeText);
					setTimeout(function() { $('input[name="wa_message"]').focus() }, 1000);

					var curHr = time.getHours()

					if (curHr < 10) {
						var greeting = 'pagi';
					} else if (curHr < 15) {
						var greeting = 'siang';
					} else if (curHr < 18) {
						var greeting = 'sore';
					} else {
						var greeting = 'malam';
					}
					$('.whatsapp-box .greeting').text(greeting);
				}
				$('.whatsapp-box .btn-close').on('click',function(){
					$('.whatsapp-box').removeClass('active');
				});

				$('.whatsapp-form').on('submit',function(){
					var url;
					var phone = $(this).data('phone');
					var message = $('.whatsapp-form input[name=wa_message]').val();
					if($(window).width() > 768){
						url = "https://web.whatsapp.com/send?phone="+phone+"&text="+message+"";
					} else {
						url = "https://wa.me/"+phone+"?text="+message+"";
					}
					window.open("redirect.php?urls="+url+"");
					return false;
				});
				var welcomeTip = localStorage.getItem("welcome-tip");
				if(welcomeTip != 'hidden'){
					$('.welcome-tip').addClass('active');
				} else {
					$('.welcome-tip').removeClass('active');
				}
				$('#welcome-tip-close').on('click',function(){
					localStorage.setItem("welcome-tip", "hidden");
					$('.welcome-tip').removeClass('active');
				});

				$(window).on('scroll',function(){
					if($(window).scrollTop() >  200){
						localStorage.setItem("welcome-tip", "hidden");
						$('.welcome-tip').removeClass('active');
					}
				});
			</script>
		</body>

		</html>
<!-- Visitor Counter -->