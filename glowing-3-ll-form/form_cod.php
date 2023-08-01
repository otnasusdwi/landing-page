<?php
$lp_id = ''; $data = []; $pixel = [];
$f1_header = '';
$f2_header = '';
$f3_header = '';
$f1_body = '';
$f2_body = '';
$f3_body = '';
$base = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
    "https" : "http") . "://" . $_SERVER['HTTP_HOST']; 
$uri_segments = explode('/', $_SERVER['REQUEST_URI']);
$url = $base.'/'.$uri_segments[1].'/';

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
	<title>Chekout COD | Hayyana, Royal Beauty Secret | Ekstrak Kepompong Emas Produk Perawatan Wajah Wanita dan Pria</title>
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
	<link rel="icon" type="image/png" href="assets/img/fav/favicon.png" />
	<link rel="stylesheet" type="text/css" href="assets/css/amaran.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/footerfix.css">
	

	<style>
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
			fbq('init', '<?=$f2_header?>');
			fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=<?=$f2_header?>&ev=PageView&noscript=1"
			/></noscript>
			<!-- End Facebook Pixel Code -->


		</head>

		<body>

			<script>
				<?=$f2_body?>
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


			<br>
			
				<h4 class="heading text-center"><strong>Isikan Data Untuk Pengiriman Ya Bunda:</strong></h4>
				<div class="section section-lg" >
					<div class="container">
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<div class="box effect1">
									<?php
									$gid = '';
									if (isset($_GET['id'])) {
										$gid = $_GET['id'];
									}if (isset($_GET['nama'])) {
										$nama = $_GET['nama'];
									}
									if (isset($_GET['wa'])) {
										$wa = $_GET['wa'];
									}
									if (isset($_GET['lp'])) {
										$lp_id = $_GET['lp'];
									}
									?>
									<form action="submit2.php" method="post" id="form" name="form">
										<input type="hidden" name="id" value="<?php echo $gid ?>">
										<input type="hidden" name="product" value="Paket Glowing">
										<input type="hidden" id="price" name="price" value="357700">
										<input type="hidden" id="qty" name="qty" value="1">
										<input type="hidden" id="amount" name="amount" value="357700">
										<input type="hidden" name="lp_id" value="<?=$lp_id?>">

										<label for="fname" id="labelnama">Nama Bunda</label>
										<input type="text" id="name" name="nama" placeholder="Nama Penerima Paket" required value="<?=$nama;?>">

										<label for="lname" id="labelnohp">Nomor WA</label>
										<input type="text" id="number" minlength="10" maxLength="15" name="wa"  value="<?=$wa;?>" required>

										<label for="country" id="labelprovinsi">Provinsi Tujuan</label>
										<?php

										$curl = curl_init();
										curl_setopt_array($curl, array(
											CURLOPT_URL => "https://api.coresyssap.com/master/provinsi/get?api_key=global",
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

										if ($err) {
											echo "cURL Error #:" . $err;
										} else {
										}

										$dataprov = json_decode($response, true);

										usort($dataprov, function($a, $b) {
											return $a['provinsi_name'] <=> $b['provinsi_name'];
										});
										echo '<select id="provinsi" name="provinsi">';
										echo '<option value="">Pilih Provinsi</option>';
										foreach($dataprov as $row){

											echo '<option id="'.$row['provinsi_code'].'" value="'.$row['provinsi_name'].'">'.$row['provinsi_name'].'</option>';

										}
										echo '</select>';

										?>


										<label for="country" id="labelkabupaten">Kabupaten</label>
										<select id="kabupaten" name="kabupaten" onkeyup="changeInput4()">
											<option value="">Pilih Kabupaten</option>
										</select>
										<label for="kecamatan" id="labelkecamatan">Kecamatan</label>
										<select id="kecamatan" name="kecamatan">
											<option value="">Pilih kecamatan</option>
										</select>
										<label for="fname" id="labelalamat">Alamat Lengkap</label>
										<textarea  id="alamatlengkap" name="alamat_lengkap" placeholder="Alamat Lengkap"  onkeyup="changeInput5()" required></textarea>
										<input type="hidden" name="kurir" id="kurir" value="sap">
										<input type="hidden" name="asal" id="asal" value="YO05">
										<label for="metode">Metode Pembayaran</label><br>
										<input type="radio" name="pembayaran" value="COD" checked="">COD &nbsp;
										<input type="radio" name="pembayaran" value="Transfer">Transfer<br>
										<input type="hidden" id="berat" value="1"><br>
										<input id="servicename" type="hidden" name="servicename" value="Reguler" />
										<input id="ongkir_" type="hidden" name="ongkir"/>

										<p id="total"></p> 
										<div id="footerform">                         
											<h4 align="center"><b>Langkah Terakhir:</b></h4>
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
						<h4><p align="center"><strong>Barang Akan Dikirim Hari Ini Juga<br>Dengan Kurir SAP Express</strong><br><i>(Jika Order Sebelum Jam 3 Sore)</i></p> </h4>
						<h4><p align="center">Setelah Barang Diterima <br> Bunda Lakukan Pembayaran dengan Cash/Tunai<br>ke Petugas Pengantar Barang</p></h4>
						<p align="center"><img src="assets/img/sap.png" style="width:130px;" ></p>
					</div>
				</div>
			</section>
			<!-- Footer -->
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

							<!-- Javascript -->


							<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
							<script src="https://code.jquery.com/jquery-2.1.0.min.js" 
							integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
							crossorigin="anonymous"></script>
							<script src="assets/js/toaster.js"></script>        

							<script type="text/javascript" src="assets/js/bootstrap.js"></script>
							<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
							
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
<script>
	$(document).ready(function () {
		$('[id^=number]').keypress(validateNumber);
	});

	function validateNumber(event) {
		var key = window.event ? event.keyCode : event.which;
		if (event.keyCode === 8 || event.keyCode === 46) {
			return true;
		} else if (key < 48 || key > 57) {
			return false;
		} else {
			return true;
		}
	}
	;
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
<script type="text/javascript">

	$(document).ready(function(){
		$(".friend").each(function(){   
			var childOffset = $(this).offset();
			var parentOffset = $(this).parent().parent().offset();
			var childTop = childOffset.top - parentOffset.top;
			var clone = $(this).find('img').eq(0).clone();

			$(clone).css({'top': top}).addClass("floatingImg").appendTo("#chatbox");                                    

			$("#profile p").addClass("animate");$("#profile").addClass("animate");

			$("#chat-messages").addClass("animate");
			$('.cx, .cy').addClass('s1');
			$('.cx, .cy').addClass('s2');
			$('.cx, .cy').addClass('s3');         


			$('.floatingImg').animate({
				'width': "70px",
				'left':'136px',
				'top':'20px'
			});

			var name = $(this).find("p strong").html();
			var email = $(this).find("p span").html();                                                      
			$("#profile p").html(name);
			$("#profile span").html(email);         

			$(".message").not(".right").find("img").attr("src", $(clone).attr("src"));                                  
			$('#friendslist').fadeOut();
			$('#chatview').fadeIn();



		});
	});         



	const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
	"Juli", "Agustus", "September", "Oktober", "November", "Desember"
	];

	const n =  new Date();
	y = n.getFullYear();
	m = n.getMonth();
	d = n.getDate();
	document.getElementById("date").innerHTML = d+" "+ monthNames[m] + " " + " " + y;

	function validateForm() {
		var divElem = document.getElementById("form");
		var inputs = divElem.querySelectorAll("input, select, textarea, radio");
		var stat = true;
		inputs.forEach(function(element) {
			if (element.value === "" || element.value === "62") {
				element.style.border = "1px solid red";
				stat = false;
			}
		});

		return stat;
	}
</script>



<script type="text/javascript">

	$(document).ready(function(){
		$('#provinsi').change(function(){

			// var prov = $('#provinsi').val();
			var prov = $('option:selected', this).attr('id');

			$.ajax({
				type : 'POST',
				url : '../sap_ongkir/sap_kabupaten.php',
				data :  {'prov_id' : prov},
				success: function (data) {

					$("#kabupaten").html(data);
				}
			});
		});

		$('#kabupaten').change(function(){

			var kab = $('option:selected', this).attr('id');

			$.ajax({
				type : 'POST',
				url : '../sap_ongkir/sap_kecamatan.php',
				data :  {'kab_id' : kab},
				success: function (data) {

					$("#kecamatan").html(data);
				}
			});
		});

		$("#kecamatan").change(function(){
			var asal = $('#asal').val();
			// var kab = $('#kabupaten').val();
			var dis_kec = $('option:selected', this).attr('id');
			var kurir = $('#kurir').val();
			var berat = $('#berat').val();
			var price = $('#price').val();


			$.ajax({
				type : 'POST',
				url : '../sap_ongkir/result.php',
				data :  {'dis_kec' : dis_kec, 'kurir' : kurir, 'asal' : asal, 'berat' : berat},
				success: function (data) {

					$("#ongkir_").html(data);
					var ongkir = $('#ongkir').val();
					var t = parseInt(price)+(parseInt(ongkir)*parseInt(berat));
					var total = t.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
					$("#total").html(
						"<h4 class='text-center'>Ongkos Kirim = Rp. "+ongkir+"</h4><br>"+
						"<br><h2 class='heading text-center'><strong>Total : Rp "+total+"</strong></h2>");
				}
			});
		});

	});
	
</script>


</body>

</html>