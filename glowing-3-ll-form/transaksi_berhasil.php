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

$nama ='' ;
$product='';
$provinsi = '';
$kabupaten = '';
$kecamatan = '';
$alamat_lengkap = '';


if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];
}
if (isset($_GET['product'])) {
    $product = $_GET['product'];
}
if (isset($_GET['provinsi'])) {
    $provinsi = $_GET['provinsi'];
}
if (isset($_GET['kabupaten'])) {
    $kabupaten = $_GET['kabupaten'];
}
if (isset($_GET['kecamatan'])) {
    $kecamatan = $_GET['kecamatan'];
}
if (isset($_GET['alamat_lengkap'])) {
    $alamat_lengkap = $_GET['alamat_lengkap'];
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
        <meta http-equiv="refresh" content="5;URL='http://api.whatsapp.com/send?l=id&phone=6281911106479&text=Nama%20Saya%20*<?=$nama?>*%0DSaya%20sudah%20order%20*<?=$product?>*%0DTolong%20kirim%20ke%20alamat%0DProvinsi:%20<?=$provinsi?>%0DKabupaten:%20<?=$kabupaten?>%0DKecamatan:%20<?=$kecamatan?>%0DAlamat%20lengkap:%20<?=$alamat_lengkap?>%0DTolong%20dikirim%20hari%20ini%20ya!" /> 
        <!--  Meta Tag -->
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
        <link rel="shortcut icon" href="http://hayyana.co.id/upload/images/favicon/fav_RyQkRYf.png">
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
        <link href="assets/css/chat.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

        <style>
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

            .grid { 
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                grid-gap: 120px;
                align-items: center;
            }

            .grid > article {
                border: 1px solid #ccc;
                box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
            }
            .grid > article img {
                max-width: 100%;
            }
            @media screen and (min-width: 400px) {
                .grid2 { 
                    padding-top: 100px; 
                    padding-left:420px;
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                    grid-gap: 120px;
                    align-items: center;
                }
            }
            .grid2 > article {
                border: 1px solid #ccc;
                box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
            }
            .grid2 > article img {
                max-width: 100%;
            }


            .text {
                padding: 0 20px 20px;

            }
            .text > button {
                background: #edb200;
                border: 0;
                color: white;
                padding: 10px;
                width: 100%;
                font-size: 20px;
                font-weight: 500;
            }
            .harganya{
                font-size: 20px;
                font-weight: 700;
            }
            .judulnya{
                font-size: 20px;
                font-weight: 800;
            }

            @media only screen and (max-width: 360px){
                .grid2 { 
                    padding-top: 100px;
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                    grid-gap: 120px;
                    align-items: center;
                }

            }
            .order {
                background: #edb200;
                border: 0;
                color: #fff;
                padding: 10px;
                width: 100%;
                font-size: 20px;
                font-weight: 500;
            }
            .button {
  background-color: #edb200;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
        </style>
        <link rel="stylesheet" type="text/css" href="assets/css/jquery_004.css">

        <link href="assets/css/feedbackMessages.css" rel="stylesheet">


        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s)
            {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '<?=$f3_header?>');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=<?=$f3_header?>&ev=PageView&noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->


</head>

<body>
    <script><?=$f3_body?></script>
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
            <h1><strong>Pesanan Sudah Kami Terima</strong></h1>
            
        </div>
        <div class="jenis-kulit-slider">


        </div>
    </div>

    <div class="section section-lg" id="section-blog">
        <div class="container" id="ordernow">
            <h3 class="heading text-center"><strong>CS kami akan segera menghubungi anda sekarang melalui Whatsapp</strong></h3><br><br>
             <h3 class="heading text-center"><strong><a href="#" onclick="window.history.go(-1);" class="button" style="color: #fff;">Kembali Ke Website</a></strong></h3><br><br>
            

        </div>
    </div>

    <div class="section section-lg" id="section-blog">
    <div class="container">

                        <p align="center"><strong>PT. Nur Hayu Nindyan</strong> adalah perusahaan dengan produk kosmetik bermerek <strong>hayyana</strong> yang didukung oleh perusahaan farmasi dan kosmetik berpengalaman puluhan tahun yang hanya memproduksi produk berkualitas dan cocok untuk kulit wajah orang Indonesia.</p>  
    </div>
</div>

        </section>
    <!-- Footer -->
    <div class="section" id="section-contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="media">
                        <div class="media-left media-middle">
                            <div class="icon"><i class="fa fa-shopping-cart"></i></div>
                        </div>
                        <div class="media-body">
                            <h4>Order Now</h4>

                            <p><a href="#ordernow" style="color: #353c45;">Klik Di Sini Untuk Order</a></p>
                        </div>                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media">
                        <div class="media-left media-middle">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                        </div>
                        <div class="media-body">

                            <h4>EMAIL ADDRESS</h4>
                            <p>
                                partner@aff-hayyana.com </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media">
                        <div class="media-left media-middle">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                        </div>
                        <div class="media-body">
                            <h4>OFFICE</h4>
                            <p>
                                Jl Kaliurang Km. 7,5 No 42 Yogyakarta </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     

    <div class="section" id="footer">
        <div class="container">
            <div class="pull-left">
                <ul class="nav navbar-nav">


                </ul>
                <div class="copyright">
                    © Copyright 2018 <a href="#">PT. Nur Hayu Nindyan</a>. Powered by PT. HEPTACO Digital Media
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

      


</div>




<!-- end modal footer-->

<!-- Javascript -->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://code.jquery.com/jquery-2.1.0.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
crossorigin="anonymous"></script>
<script src="assets/js/toaster.js"></script>        

<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

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

    var item1 = ["api.whatsapp.com/send?l=id&phone=6285883302131&text=Sist,%20saya%20mau%20order%20Royal%20Golden%20Cocoon%20Moist%20Acne%20Cream",
        "api.whatsapp.com/send?l=id&phone=6281230247454&text=Sist,%20saya%20mau%20order%20Royal%20Golden%20Cocoon%20Moist%20Acne%20Cream"]

    openItem1 = function () {
        // get a random number between 0 and the number of links
        var randIdx = Math.random() * item1.length;
        // round it, so it can be used as array index
        randIdx = parseInt(randIdx, 10);
        // construct the link to be opened
        var link = 'https://' + item1[randIdx];

        window.open(link);
    };

    var item1 = ["api.whatsapp.com/send?l=id&phone=6285883302131&text=Sist,%20saya%20mau%20order%20Royal%20Golden%20Cocoon%20Moist%20Acne%20Cream",
        "api.whatsapp.com/send?l=id&phone=6281230247454&text=Sist,%20saya%20mau%20order%20Royal%20Golden%20Cocoon%20Moist%20Acne%20Cream"]

    openItem1 = function () {
        // get a random number between 0 and the number of links
        var randIdx = Math.random() * item1.length;
        // round it, so it can be used as array index
        randIdx = parseInt(randIdx, 10);
        // construct the link to be opened
        var link = 'https://' + item1[randIdx];

        window.open(link);
    };

    var item2 = ["api.whatsapp.com/send?l=id&phone=6285883302131&text=Sist,%20saya%20mau%20order%20Royal%20Golden%20Cocoon%20UV%20Protection%20Cream",
        "api.whatsapp.com/send?l=id&phone=6281230247454&text=Sist,%20saya%20mau%20order%20Royal%20Golden%20Cocoon%20UV%20Protection%20Cream"]

    openItem2 = function () {
        // get a random number between 0 and the number of links
        var randIdx = Math.random() * item2.length;
        // round it, so it can be used as array index
        randIdx = parseInt(randIdx, 10);
        // construct the link to be opened
        var link = 'https://' + item2[randIdx];

        window.open(link);
    };

    var item3 = ["api.whatsapp.com/send?l=id&phone=6285883302131&text=Sist,%20saya%20mau%20order%20Royal%20Golden%20Cocoon%20Hydroprotection%20Cream",
        "api.whatsapp.com/send?l=id&phone=6281230247454&text=Sist,%20saya%20mau%20order%20Royal%20Golden%20Cocoon%20Hydroprotection%20Cream"]

    openItem3 = function () {
        // get a random number between 0 and the number of links
        var randIdx = Math.random() * item3.length;
        // round it, so it can be used as array index
        randIdx = parseInt(randIdx, 10);
        // construct the link to be opened
        var link = 'https://' + item3[randIdx];

        window.open(link);
    };

    var item4 = ["api.whatsapp.com/send?l=id&phone=6285883302131&text=Sist,%20saya%20mau%20order%20Royal%20Golden%20Cocoon%20CC%20Cream",
        "api.whatsapp.com/send?l=id&phone=6281230247454&text=Sist,%20saya%20mau%20order%20Royal%20Golden%20Cocoon%20CC%20Cream"]

    openItem4 = function () {
        // get a random number between 0 and the number of links
        var randIdx = Math.random() * item4.length;
        // round it, so it can be used as array index
        randIdx = parseInt(randIdx, 10);
        // construct the link to be opened
        var link = 'https://' + item4[randIdx];

        window.open(link);
    };

    var item5 = ["api.whatsapp.com/send?l=id&phone=6285883302131&text=Sist,%20saya%20mau%20order%20Royal%20Golden%20Cocoon%20Rejuvenation%20Cream",
        "api.whatsapp.com/send?l=id&phone=6281230247454&text=Sist,%20saya%20mau%20order%20Royal%20Golden%20Cocoon%20Rejuvenation%20Cream"]

    openItem5 = function () {
        // get a random number between 0 and the number of links
        var randIdx = Math.random() * item5.length;
        // round it, so it can be used as array index
        randIdx = parseInt(randIdx, 10);
        // construct the link to be opened
        var link = 'https://' + item5[randIdx];

        window.open(link);
    };

    var item6 = ["api.whatsapp.com/send?l=id&phone=6285883302131&text=Sist,%20saya%20mau%20order%20Royal%20Golden%20Cocoon%20Brightening%20Cream",
        "api.whatsapp.com/send?l=id&phone=6281230247454&text=Sist,%20saya%20mau%20order%20Royal%20Golden%20Cocoon%20Brightening%20Cream"]

    openItem6 = function () {
        // get a random number between 0 and the number of links
        var randIdx = Math.random() * item6.length;
        // round it, so it can be used as array index
        randIdx = parseInt(randIdx, 10);
        // construct the link to be opened
        var link = 'https://' + item6[randIdx];

        window.open(link);
    };

    var item7 = ["api.whatsapp.com/send?l=id&phone=6285883302131&text=Sist,%20saya%20mau%20order%20Royal%20Golden%20Cocoon%20Deep%20Cleanser",
        "api.whatsapp.com/send?l=id&phone=6281230247454&text=Sist,%20saya%20mau%20order%20Royal%20Golden%20Cocoon%20Deep%20Cleanser"]

    openItem7 = function () {
        // get a random number between 0 and the number of links
        var randIdx = Math.random() * item7.length;
        // round it, so it can be used as array index
        randIdx = parseInt(randIdx, 10);
        // construct the link to be opened
        var link = 'https://' + item7[randIdx];

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
    function prod(name) {
        $('#paket').val(name);
    }
</script>
<script type="text/javascript">
  $(document).ready(function(){
    
    
    // $("#sendmessage input").focus(function(){
    //     if($(this).val() == "Nomor Whatsapp"){
    //         $(this).val("");
    //     }
    // });
    // $("#sendmessage input").focusout(function(){
    //     if($(this).val() == ""){
    //         $(this).val("Nomor Whatsapp");
            
    //     }
    // });
        
    
    $(".friend").each(function(){   
            var childOffset = $(this).offset();
            var parentOffset = $(this).parent().parent().offset();
            var childTop = childOffset.top - parentOffset.top;
            var clone = $(this).find('img').eq(0).clone();
            // var top = childTop+12+"px";
            
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

</script>
</body>

</html>
<!-- Visitor Counter -->