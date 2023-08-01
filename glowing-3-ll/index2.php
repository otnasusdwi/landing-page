<?php
$ref = $_SERVER['HTTP_REFERER'];
$ip = $_SERVER['REMOTE_ADDR'];
$token = "7f3dc2e9d07d46";

$curl = curl_init();	
curl_setopt_array($curl, array(
	CURLOPT_URL => "https://ipinfo.io/".$ip."?token=".$token,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 60,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
// print_r($response);

$data = json_decode($response, true);
// echo $data['ip'].'<br>';
$country = $data['country'];
$domains = substr($data['org'],0,7);

$isp=0;

if (($domains == 'AS32934') or ($domains == 'AS63293') or ($domains == 'AS16509') or ($domains == 'AS14061') or ($domains == 'AS13414') or ($domains == 'AS20940') or ($domains == 'AS16276')  or ($domains == 'AS45566'))
	{ $isp=1; } else { $isp=0; }

//echo 'Referrer: '.$ref.'<br>';
//echo 'Country: '.$country.'<br>';
//echo 'Domain: '.$domains.' - '.$isp.'<br>';

$useragent = $_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
	$ua = 'Mobile';
}else{
	$ua = 'Desktop';
}

//echo 'User Agent: '.$ua.'<br>';
//echo '-------------------------------<br>';

if($ref == 'https://www.facebook.com/'){
	$refer = 1;
}else if($ref == 'http://m.facebook.com/'){
	$refer = 1;
}else{
	$refer = 0;
}

if($refer == 1 && $country == 'ID' && $ua == 'Mobile' && $isp == 0 ){

?>


<!DOCTYPE html>
<html class="" lang="en">
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129605464-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-129605464-2');
	</script>


	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CurhatBunda - Hayyana, Royal Beauty Secret | Ekstrak Kepompong Emas Produk Perawatan Wajah Wanita dan Pria</title>
	<meta name="author" content="Hayyana.co.id">
	<meta name="description" content="Rahasia Suami Lengket Seperti Pengantin Baru!.">
	<meta name="keywords" content="khasiat kepompong emas,&nbsp;ekstrak kepompong emas,&nbsp;royal golden cocoon, produk kecantikan wanita dan pria, produk anti jerawat, produk penuaan dini, anti aging, aman untuk ibu hamil, produk kosmetik halal, brightening, anti aging, pelembab, deep cleanser, penuaan dini, CC Cream, acne cream, pemutih, pencerah, skin care">
	<!-- meta fb og start -->
	<meta property="og:url" content="http://hayyana.co.id/product">
	<meta property="og:type" content="article">
	<meta property="og:title" content="CurhatBunda | Hayyana - Royal Beauty Secret">
	<meta property="og:site_name" content="hayyana.co.id">
	<!-- meta fb og end -->
	<!-- Css -->
	<link rel="icon" type="image/png" href="assets/img/fav/favicon.png" />
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



<style type="text/css">

.section .thumbnail img {
    width: 100% !important;
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
</style>

<link rel="stylesheet" type="text/css" href="assets/css/jquery_004.css">



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
  fbq('init', '746180039111030');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=746180039111030&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


</head>

<body>

<script>
  fbq('track', 'ViewContent');
</script>

	<div id="main-wrapper" class="mm-page mm-slideout">
		<!-- Header -->
		<div class="header brill">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navigation"> -->

							<a class="navbar-brand" href=""><img src="assets/img/logo-curhat-bunda.png" alt="CurhatBunda"></a>
						</div>

				</div>
			</nav>
		</div>
		<!-- Content -->
	</div>

	<div class="section" id="section-kulit">
		<div class="heading">
			<h1><b>Rahasia Suami Lengket</b><br>SEPERTI PENGANTIN BARU!</h1>
		</div>
		<div class="jenis-kulit-slider">

		</div>
	</div>

	<div class="section">
		<div class="thumbnail"><img src="assets/img/suami-lengket.jpg" alt=""></div>
	</div>

	<div class="section section-lg" id="section-blog">
		<div class="container">
			<h3 class="heading text-center"><strong>Memang Kelihatannya Sepele, Bun!</strong><br><br>Namun, suami biasanya ogah mendekat gara-gara masalah ini:</h3><br>


			<p class="checklist">
				<img src="assets/img/checkbox-black.png" width="20"> <strong>WAJAH KUSAM, FLEK, GAK MENARIK </strong><br />
				<img src="assets/img/checkbox-black.png" width="20"> <strong>KULIT LENGKET dan BERMINYAK</strong><br />
				<img src="assets/img/checkbox-black.png" width="20"> <strong>KERUTAN atau KERIPUT</strong><br />
				<img src="assets/img/checkbox-black.png" width="20"> <strong>JERAWAT TUMBUH serta MENYEBAR</strong><br />

			</p>
		</div>
	</div>



	<div class="section" id="footer">
		<div class="container">        

			<h4 class="heading text-center">Percaya deh Bun, aku tahu karena PERNAH MENGALAMI hal yang sama!<br><br><strong>Boro-boro mencium, suami MALAS MENDEKAT...!</strong></h4>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="section section-lg" id="section-blog">
		<div class="container">
			<h3 class="heading text-center">Dan itu betulan terjadi karena waktu itu <strong>wajahku seperti ini:</strong></h3>
		</div>
	</div>

	<section class="section">
		<div class="product-info-box">
			<div class="container">
				<div class="thumbnail"><img src="assets/img/01-wajahku-awal.jpg" alt=""></div>
				<div class="text">
					<h2>KUSAM, FLEK, dan BERJERAWAT</h2>
					<h3>Kelihatan Gak Segar!</h3>
					<p>
					</p>
					<h4><strong>Dan, bisa ditebak deh Bun.</strong>.</h4>
					<h4>Suami mulai sering pulang telat, males menyapa dan hal-hal nyebelin lainnya.</h4>
					<h4>Giliran waktunya <strong>"berhubungan"</strong>, dia seperti menghindari memberikan ciuman ke wajah dan bibir.</h4> 
					<h3>Ihhhh..., KESEL banget kan Bun!?</h3>                       
				</div>
			</div>
		</div>
	</section>

	<div class="section section-lg" id="section-blog">
		<div class="container">
			<h3 class="heading text-center">Akhirnya Aku <strong>Pakai Pemutih</strong> Deh Bun!<br><br>TAPI <strong>HASILNYA</strong> ?</h3>
		</div>
	</div>

	<div class="section section-lg" id="section-blog">
		<div class="container"><p align="center"><img src="assets/img/arrows-transparent-animated-gif-1.gif" width="50"></p>
		</div>
	</div>

	<section class="section">
		<div class="product-info-box">
			<div class="container">
				<div class="thumbnail"><img src="assets/img/02-worse.jpg" alt=""></div>
				<div class="text">
					<h2>😭😭😭</h2>
					<h3>Wajahku Jadi Makin Hancur Bun!!!</h3>
					<p>
					</p>
					<h4>Jerawat makin banyak dan kulit wajah seperti bersisik dan mengelupas.</h4>
				</div>
			</div>
		</div>

		<div class="section section-lg" id="section-blog">
			<div class="container">
				<h3 class="heading text-center">Yang lebih bikin sakit hati dan pedih adalah apa yang suamiku lakukan Bun...</h3><br><br>
				<h2 class="heading text-center">😭</h2><br>
		<p align="center"><img src="assets/img/red-arrow.gif"></p><br>

		<p align="center">
			<a href="glowing.html"> <button type="button" class="wa btn" data-target=""><span style="font-size: 20px;"><strong>Ini Yang Suamiku Lakukan...</strong></span></button></a>


		</p>
		<br /><br />
	</section>
	<!-- Footer -->


	<div class="section" id="footer">
		<div class="container">
			<div class="pull-left">
				<ul class="nav navbar-nav">


				</ul>
				<div class="copyright">
					© Copyright 2019 <a href="#">CurhatBunda</a>.
				</div>
			</div>

							<div class="clearfix"></div>
						</div>
					</div>



</body>

</html>


<?php

}else{

?>

<!DOCTYPE html>
<html class="" lang="en">
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129605464-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-129605464-2');
	</script>


	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Produk | Hayyana, Royal Beauty Secret | Ekstrak Kepompong Emas Produk Perawatan Wajah Wanita dan Pria</title>
	<meta name="author" content="Hayyana.co.id">
	<meta name="description" content="Hayyana menjadi satu-satunya produk kecantikan Indonesia yang menggunakan bahan-bahan alami dari kepompong emas (royal golden cocoon). Kandungan nutrisi di dalamnya sangat dibutuhkan karena membuat kuliat wajah halus, sehat, dan bersih bercahaya serta aman dan halal.">
	<meta name="keywords" content="khasiat kepompong emas,&nbsp;ekstrak kepompong emas,&nbsp;royal golden cocoon, produk kecantikan wanita dan pria, produk anti jerawat, produk penuaan dini, anti aging, aman untuk ibu hamil, produk kosmetik halal, brightening, anti aging, pelembab, deep cleanser, penuaan dini, CC Cream, acne cream, pemutih, pencerah, skin care">
	<!-- meta fb og start -->
	<meta property="og:url" content="http://hayyana.co.id/product">
	<meta property="og:type" content="article">
	<meta property="og:title" content="Hayyana - Royal Beauty Secret">
	<meta property="og:site_name" content="hayyana.co.id">
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


	<style>
	.section .thumbnail img {
		width: 100% !important;
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
	width: 50%;
	background-color: #f50008;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	/* border-radius: 4px; */
	cursor: pointer;
	font-size:20px;
	font-weight: bold; 
}
input[type=submit]:hover {
	color: #f50008;
	background-color: white;
	/* font-size:10px; */
	font-weight: bold; 
	border: 2px solid #f50008;
}
.box {
	/* border-radius: 5px; */
	background-color: #bfffaa;
	padding: 40px;
	padding-left: 10%px;
}

.grid-container {
	display: grid;
	grid-template-columns: auto auto;
	padding-left: 40%;
	padding-right: 40%;

}
.grid-item {
	background-color: rgba(255, 255, 255, 0.8);
	/* border: 1px solid rgba(0, 0, 0, 0.8); */
	padding: 5px;
	font-size: 30px;
	text-align: center;
}
@media only screen and (max-width: 760px){
	.grid-container {
		display: grid;
		grid-template-columns: auto auto;
		padding-left: 5%;
		padding-right: 5%;

	}
	.grid-item {
		background-color: rgba(255, 255, 255, 0.8);
		/* border: 1px solid rgba(0, 0, 0, 0.8); */
		padding: 5px;
		font-size: 30px;
		text-align: center;
	}
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
.buttonHolder{ text-align: center; }
</style>


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
  fbq('init', '746180039111030');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=746180039111030&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


</head>

<body>

<script>
  fbq('track', 'ViewContent');
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
	</div>

	<div class="section" id="section-kulit">
		<div class="heading">
			<h1><b>Kepompong Emas!</b></h1>

		<div class="thumbnail"><img src="assets/img/kepompong_emas.png" alt=""></div>
	</div>
		<div class="jenis-kulit-slider">

		</div>
	</div>

	<div class="section" id="footer">
		<div class="container">        

			<h3 class="heading text-center"><strong>RAHASIA "PEMIKAT" PUTERI KERATON</strong></h3><div class="clearfix"></div>
		</div>
	</div>
	<div class="section section-lg" id="section-blog"><br>
		<div class="container"><p align="center"><img src="assets/img/arrows-transparent-animated-gif-1.gif" width="50"></p>
		</div>
	</div>


	<div class="section section-lg" id="section-blog">
		<div class="container">
			<h3 class="heading text-center">Ternyata Selama Ini<br><strong>KEPOMPONG EMAS</strong><br><br>Digunakan oleh Para Puteri Keraton<br>untuk Membuat Kulit Mereka <strong>Putih, Halus, Lembut Menawan</strong></h3><br>
			<h4 class="heading text-center">Gak Heran Jika Banyak yang Terpikat dan Terpukau, Karena Memang <strong>“KEMEWAHAN”</strong> Kulit Mereka Nyaris Tanpa Tanding</h4><br>

			<h4 class="heading text-center"><font color="red"><strong>Bahkan Konon Jika Kain Sutera Disematkan ke Tubuh Mereka, Suteranya Bisa Tergelincir Karena Saking Halus Kulitnya</strong></font></h4>
		</div>
	</div>


	<section class="section">
		<div class="product-info-box">
			<div class="container">
				<div class="thumbnail"><img src="assets/img/kain_sutera_puteri.jpg" alt=""></div>
				<div class="text">
					<h3>Dan Karena Keampuhan Yang Tak Tertandingi Itulah...</h3>
					<h4><strong>Dr. Fredi Setyawan</strong>, Pendiri <strong><i>Natasha Group</i></strong> yang Merupakan Pemilik Jaringan Klinik Kecantikan Terbaik dan Tertua di Indonesia</h4>     
					<h4>Memprakarsai Kerjasama <strong>Exclusive</strong> dengan <strong><i>KERATON YOGYAKARTA</i></strong> yang Memiliki Budidaya Kepompong Emas Terbesar Secara Turun Temurun</h4>                    
				</div>
			</div>
		</div>


		<div class="section section-lg">
			<div class="container">
				<p style="text-align: center;"> <img src="assets/img/dr_fredi_setyawan.jpg" class="img-circle" alt="Dr Fredi" width="280px"></p>
				<h3 class="heading text-center"><strong>Dr. Fredi Setyawan</strong><br>Ahli Kecantikan Wajah, Pemilik Natasha Group</h3><br>
				<p style="text-align: center;"> <img src="assets/img/gkr_bendara.jpg" class="img-circle" alt="GKR Bendara" width="280px"></p>
				<h3 class="heading text-center"><strong>GKR Bendara</strong><br>Puteri Bungsu Sultan HB X, Presiden Direktur Hayyana Cosmetics</h3><br>
			</div> 
		</div>

		<div class="section section-lg" id="section-blog">
			<div class="container">
				<h3 class="heading text-center"><strong>KERJASAMA INIPUN MELAHIRKAN:</strong></h3><br><p align="center"><img src="assets/img/arrows-transparent-animated-gif-1.gif" width="50"></p>
			</div>
		</div>

		<div class="product-info-box">
			<div class="container">
				<div class="thumbnail"><img src="assets/img/paket_hayyana_3_produk.jpg" alt=""></div>
				<div class="text">
					<h3>Rangkaian Produk Skincare</h3><h2><strong>Hayyana Cosmetics</strong></h2><br><br>

					<p class="MsoNormal"><font size="6"><strong>PUTIH CANTIK MEMIKAT</strong></font></p><br>
					<h4>Dengan Bahan Aktif Kepompong Emas dan Formula Racikan RAHASIA Keraton Yogyakarta</h4><br>
					<h4>Kulit Anda Akan Kembali Terlihat Cerah Putih Bercahaya</h4><br>
					<h4>Berbalut Kelembutan Kulit Halus yang Membuat Siapapun Ingin Terus Mengelusnya</h4><br>
				</div>
			</div>
		</div>


		<div class="section section-lg" id="section-blog">
			<div class="container">
				<h4 class="heading text-center">Mesin Nanosome dari Jerman <strong>memecah partikel menjadi berjuta lebih kecil</strong> sehingga dapat meresap kedalam pori-pori terdalam.</h4><br>
				<h4 class="heading text-center">Teknologi Encapsulation <strong>membungkus bahan aktif ketika melewati kulit</strong> dan pecah didalam sehingga tidak menyebabkan iritasi dipermukaan.</h4><br><br>
			</div>
		</div>



		<div class="product-info-box">
			<div class="container">
				<div class="thumbnail"><img src="assets/img/closeup_puteri_keraton.jpg" alt=""></div>
				<div class="text">
					<h2>Aman untuk Semua Jenis Kulit</h2><br>
					<h4>Selain itu NATASHA Group Sudah <strong>Berpengalaman Puluhan Tahun</strong> dan Sangat Ahli dengan Anatomi Kulit Wanita Indonesia.</h4><br>
					<h4>Produk HAYYANA didesain Khusus oleh Team Ahli Kulit Kami <strong>Sehingga Mudah Beradaptasi</strong> dengan Berbagai Jenis Kulit

</h4><br>
					<h4>Proses Produksi pun Menggunakan Tekhnologi Sangat Canggih yang Jarang Dimiliki Pabrik Lain, Sehingga Kilau Halus Lembut <strong>Dihasilkan Sejak Pemakaian Awal</strong></h4><br>

				</div>
			</div>
		</div>

		<div class="section section-lg">
			<div class="container">

				<h4 class="heading text-center">Saat pemakaian produk Hayyana, Bunda dipantau oleh <strong>Team CS Online</strong> yang dipimpin oleh ahli perawatan kulit kami.</strong></h4><br />
				<p style="text-align: center;"> <img src="assets/img/dr_luci.jpg" class="img-circle" alt="Dr. Luciana" width="280px"></p>
				<h3 class="heading text-center"><strong>Dr. Luciana Kuswibawati, M.Kes</strong><br>Medical Service Natasha Group</h3>
				<p style="text-align: center;"><h4 class="heading text-center">Bunda Dapat Konsultasi Setiap Saat dengan Team CS Kami.</h4></p><br>
				<h3 class="heading text-center"><strong>ORDER PAKET SKINCARE HAYYANA SEKARANG JUGA !</strong></h3>

			</div> 
		</div>

		<div class="section section-lg" id="section-blog">
			<div class="container">
				<h3 class="heading text-center"><strong>Bisa Bayar Ditempat!</strong><br>Cash on Delivery</h3>
				<h2 class="heading text-center"><strong>C.O.D.</strong></h2>

				<h4 class="heading text-center"><strong>Bunda Hanya Cukup Mengisi Form Pemesanan</strong></h4>
				<h4 class="heading text-center">CS Kami Akan Menghubungi Bunda untuk Konfirmasi Pengiriman</h4>
				<h4 class="heading text-center"><strong>Paket Akan Dikirimkan Hari ini Juga ke Alamat Bunda</strong><br><br>
				Pembayaran Dilakukan Kepada Petugas Kurir Ketika Barang Diterima</h4>
								<h3 class="heading text-center">😍</h3>
			</div>
		</div>

		<br>
		<div class="row justify-content-md-center">
			<div class="grid-container">
				<div class="grid-item"><div class="text-center"><img src="assets/img/bpom.png" alt="" width="100px" ></div></div>
				<div class="grid-item"><div class="text-center"><img src="assets/img/mui.png" alt="" width="80px"></div></div>
			</div>
		</div>
		<h3 class="heading text-center" id="buttonHolder"><strong>MAU ORDER PAKET SKINCARE HAYYANA SEKARANG ?</strong></h3><br>
		<p align="center"><img src="assets/img/red-arrow.gif"></p><br>

		<h4 class="heading text-center" id="section-form"><strong>BUNDA TERIMA BARANG DULU</strong></h4>
		<h4 class="heading text-center"><strong>BARU BAYAR DITEMPAT !</strong></h4>
		<br>
                <div class="buttonHolder">
		<a href="form_cod.php"><input type="submit" id="submit" value="KIRIM SEKARANG !"></a>
                </div>
		<br /><br />
		<h3 class="heading text-center" id="buttonHolder"><strong>YANG TERSAYANG AKAN MESRA KEMBALI</strong></h3><br><br>

	</section>
	<!-- Footer -->
	<div class="product-info-box">
		<div class="container">
			<div class="thumbnail"><img src="assets/img/dion.jpg" alt=""></div>
			<div class="text">
				<h4>Produsen kosmetik premium dengan bahan Kepompong Emas yang diolah di pabrik peraih penghargaan International Arch of Europe 2017 di Jerman.</h4>
				<h5>( Lokasi pabrik Natasha Group di Prambanan Yogyakarta )</h5>
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
				<ul class="nav navbar-nav">


				</ul>
				<div class="copyright">
					© Copyright 2019 <a href="#">PT. Nur Hayu Nindyan</a>. Powered by NATASHA Group & Keraton Yogyakarta
				</div>
			</div>
			<div class="pull-right">
				<ul class="social">
					<li><a href="#" class="btn btn-xs btn-social-icon btn-facebook"
						title="facebook"><i class="fa fa-facebook"></i></a></li>

						<li><a href="#" class="btn btn-xs btn-social-icon btn-instagram"
							title="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="btn btn-xs btn-social-icon btn-twitter"
								title="twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a target="_blank" href="https://www.youtube.com/channel/UCJ7LMKuUhRJ2Btf1Jh7zRLA" class="btn btn-xs btn-social-icon btn-youtube"
									title="youtube"><i class="fa fa-youtube"></i></a></li>
								</ul>

							</div>
							<div class="clearfix"></div>
						</div>
					</div>

					<div class="section" id="footer">
						<div class="bawah scroll">
							<a href="#buttonHolder"><div class="whatsapp tombol">Kirim Sekarang, Bayar Ditempat!</div></a>
						</div>
					</div>

					<!-- Javascript -->


					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
				
					<script src="assets/js/toaster.js"></script> 
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
						var links = ["api.whatsapp.com/send?l=id&phone=6285883302131&text=Sist,%20saya%20mau%20order%20Paket%20Skincare%20HAYYANA%20dong!",
						"api.whatsapp.com/send?l=id&phone=6281230247454&text=Sist,%20saya%20mau%20order%20Paket%20Skincare%20HAYYANA%20dong!"]

						openSite = function () {
		// get a random number between 0 and the number of links
		var randIdx = Math.random() * links.length;
		// round it, so it can be used as array index
		randIdx = parseInt(randIdx, 10);
		// construct the link to be opened
		var link = 'https://' + links[randIdx];

		window.open(link);
	};

</script>

<script src="assets/js/jquery.singlePageNav.min.js"></script>
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



</body>

</html>
<?php

}

?>

