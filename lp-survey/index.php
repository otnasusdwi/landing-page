<?php
include ('header.php');
?>
<!-- slider -->
<div class="section">
	<div class="heading">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

			<div class="carousel-inner" >
				<div class="item active" style="height:550px; width:100%; ">
					<div class="judul col-md-12 col-sm-12">
						<h3><strong>Inikah Salah Satu Keluhan Wajah Anda ?</strong></h3>
						<br>
					</div>
					<div class="section section-lg" id="section-blog">
						<div class="container">
							<p class="checklist">
								<img src="assets/img/checkbox-black.png" width="20"> <strong>FLEK atau NODA HITAM </strong><br />
								<img src="assets/img/checkbox-black.png" width="20"> <strong>WAJAH KUSAM</strong><br />
								<img src="assets/img/checkbox-black.png" width="20"> <strong>KERUTAN atau KERIPUT</strong><br />
								<img src="assets/img/checkbox-black.png" width="20"> <strong>PORI-PORI BESAR</strong><br />
							</p>
						</div>
					</div>
					<br><br>
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<button class="opsi-ya btn btn-info" data-target="#myCarousel" data-slide-to="1">YA, Saya Ingin Cerah & Muda</button>
					</div>
					<br>
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<button class="opsi-tidak btn btn-info" data-target="#myCarousel" data-slide-to="8">TIDAK, Saya Sudah Kinclong</button>
					</div>
				</div>

				<div class="item" style="height:550px; width:100%; ">
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<br>
						<h3><b>Aktifitas Sehari-hari</b></h3>
						<br>
					</div>
					<div class="konten col-md-12 col-sm-12">
						<p>Keluhan wajah seperti <b>Kusam</b>, <b>Spot Hitam</b>, dan <b>Kerutan</b> disebabkan Sinar <i>Ultra Violet</i></p>
					</div>
					<br><br>
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<button class="opsi-dalam btn btn-info" data-target="#myCarousel" data-slide-to="2">Dalam Ruangan</button>
					</div>
					<br>
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<button class="opsi-luar btn btn-info" data-target="#myCarousel" data-slide-to="5">Luar Ruangan</button>
					</div>
				</div>

				<!-- DALAM RUANGAN -->
				<div class="item" style="height:550px; width:100%; ">
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<br>
						<h3><b>Berapa Usia Anda ?</b></h3>
						<br>
					</div>
					<div class="konten col-md-12 col-sm-12">
						<p>Usia menentukan produk yang tepat untuk perawatan yang optimal.</p>
					</div>
					<br><br>
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<button class="opsi-belum btn btn-info" data-target="#myCarousel" data-slide-to="3">Belum 30 Tahun</button>
					</div>
					<br>
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<button class="opsi-diatas btn btn-info" data-target="#myCarousel" data-slide-to="4">Diatas 30 Tahun</button>
					</div>
				</div>

				<div class="item" style="height:95%; width:100%;">
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<div class="thumbnail"><img src="assets/img/paket-glowing.png" alt=""></div>
					</div>
					<div class="col-md-12 col-sm-12" style="text-align: center;background-color: #eab001;color: white;" id="section-form">
						<div class="text">
							<br>
							<h3>Paket Berisi 2 Produk Perawatan</h3>
							<p></p>
							<h4><strong>Hayyana Deep Cleanser</strong><br><i>(Gel Pembersih 100gr)</i></h4>
							<h4><strong>Hayyana Brightening Cream</strong><br><i>(Krim Siang dan Malam - Pencerah 30gr)</i></h4>
							<br>
						</div>
						<br>
					</div>
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<h3 class="heading text-center"><strong>2 PRODUK HANYA:</strong></h3>
						<h2 class="heading text-center"><strong>Rp 211.600</strong></h2>
						<p align="center"><img src="assets/img/red-arrow.gif"></p>
					</div>
					<?php
					$gid = '';
					$gpaket = '';
					if (isset($_GET['id'])) {
						$gid = $_GET['id'];
					}
					$cs = [
						['name' => 'Azizah', 'mobile' => '6282229488355', 'email' => 'cs.heptaco@gmail.com'],
						['name' => 'Santi', 'mobile' => '6281249120550', 'email' => 'cs2.heptaco@gmail.com'],
            			// ['name' => 'Laras', 'mobile' => '6281229378151', 'email' => 'cs3.heptaco@gmail.com']
					];
					$keys = array_keys($cs);
					$random = $keys[array_rand($keys,1)];
					$name = $cs[$random]['name'];
					$mobile = $cs[$random]['mobile'];
					$email = $cs[$random]['email'];
					?>
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<div class="text-center">
							<a class="wa_btn btn"><span style="font-size: 20px;"><span style="font-size: 20px;"><i class="fa fa-whatsapp" style="font-size:20px"></i> <span style="font-size: 20px; font-weight: normal;">ORDER</span></a><br><br>
						</div>
					</div>
				</div>

				<div class="item" style="height:95%; width:100%;">
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<div class="thumbnail"><img src="assets/img/paket-rejuve.png" alt=""></div>
					</div>
					<div class="col-md-12 col-sm-12" style="text-align: center;background-color: #eab001;color: white;" id="section-form">
						<div class="text">
							<br>
							<h3>Paket Berisi 2 Produk Perawatan</h3>
							<p></p>
							<h4><strong>Hayyana Deep Cleanser</strong><br><i>(Gel Pembersih 100gr)</i></h4>
							<h4><strong>Hayyana Rejuvenation Cream</strong><br><i>(Krim Siang dan Malam - Anti Aging & Pencerah 30gr)</i></h4>
							<br>
						</div>
						<br>
					</div>
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<h3 class="heading text-center"><strong>2 PRODUK HANYA:</strong></h3>
						<h2 class="heading text-center"><strong>Rp 236.900</strong></h2>
						<p align="center"><img src="assets/img/red-arrow.gif"></p>
					</div>
					<?php
					$gid = '';
					$gpaket = '';
					if (isset($_GET['id'])) {
						$gid = $_GET['id'];
					}
					$cs = [
						['name' => 'Azizah', 'mobile' => '6282229488355', 'email' => 'cs.heptaco@gmail.com'],
						['name' => 'Santi', 'mobile' => '6281249120550', 'email' => 'cs2.heptaco@gmail.com'],
            			// ['name' => 'Laras', 'mobile' => '6281229378151', 'email' => 'cs3.heptaco@gmail.com']
					];
					$keys = array_keys($cs);
					$random = $keys[array_rand($keys,1)];
					$name = $cs[$random]['name'];
					$mobile = $cs[$random]['mobile'];
					$email = $cs[$random]['email'];
					?>
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<div class="text-center">
							<a class="wa_btn_rejuve btn"><span style="font-size: 20px;"><span style="font-size: 20px;"><i class="fa fa-whatsapp" style="font-size:20px"></i> <span style="font-size: 20px; font-weight: normal;">ORDER</span></a><br><br>
						</div>
					</div>
				</div>
				<!-- END DALAM RUANGAN -->

				<!-- LUAR RUANGAN -->
				<div class="item" style="height:550px; width:100%; ">
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<br>
						<h3><b>Berapa Usia Anda ?</b></h3>
						<br>
					</div>
					<div class="konten col-md-12 col-sm-12">
						<p>Usia menentukan produk yang tepat untuk perawatan yang optimal.</p>
					</div>
					<br><br>
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<button class="opsi-belum btn btn-info" data-target="#myCarousel" data-slide-to="6">Belum 30 Tahun</button>
					</div>
					<br>
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<button class="opsi-diatas btn btn-info" data-target="#myCarousel" data-slide-to="7">Diatas 30 Tahun</button>
					</div>
				</div>

				<div class="item" style="height:95%; width:100%;">
					<div class="col-md-12 col-sm-12" style="text-align: center;">
						<div class="thumbnail"><img src="assets/img/paket_hayyana_3_produk.png" alt=""></div>
					</div>
					<div class="col-md-12 col-sm-12" style="text-align: center;background-color: #eab001;color: white;" id="section-form">
						<div class="text">
							<br>
							<h3>Paket Berisi 3 Produk Perawatan</h3>
							<p></p>
							<h4><strong>Hayyana Deep Cleanser</strong><br><i>(Gel Pembersih 100gr)</i></h4>
							<h4><strong>Hayyana Brightening Cream</strong><br><i>(Krim Pencerah 30gr)</i></h4>
							<h4><strong>Hayyana UV Protection Cream</strong><br><i>(Krim Tabir Surya 30gr)</i></h4><p>
								<br>
							</div>
							<br>
						</div>
						<div class="col-md-12 col-sm-12" style="text-align: center;">
							<h3 class="heading text-center"><strong>3 PRODUK HANYA:</strong></h3>
							<h2 class="heading text-center"><strong>Rp 357.700</strong></h2>
							<p align="center"><img src="assets/img/red-arrow.gif"></p>
						</div>
						<?php
						$gid = '';
						$gpaket = '';
						if (isset($_GET['id'])) {
							$gid = $_GET['id'];
						}
						$cs = [
							['name' => 'Azizah', 'mobile' => '6282229488355', 'email' => 'cs.heptaco@gmail.com'],
							['name' => 'Santi', 'mobile' => '6281249120550', 'email' => 'cs2.heptaco@gmail.com'],
            			// ['name' => 'Laras', 'mobile' => '6281229378151', 'email' => 'cs3.heptaco@gmail.com']
						];
						$keys = array_keys($cs);
						$random = $keys[array_rand($keys,1)];
						$name = $cs[$random]['name'];
						$mobile = $cs[$random]['mobile'];
						$email = $cs[$random]['email'];
						?>
						<div class="col-md-12 col-sm-12" style="text-align: center;">
							<div class="text-center">
								<a class="wa_btn_3 btn"><span style="font-size: 20px;"><span style="font-size: 20px;"><i class="fa fa-whatsapp" style="font-size:20px"></i> <span style="font-size: 20px; font-weight: normal;">ORDER</span></a><br><br>
							</div>
						</div>
					</div>

					<div class="item" style="height:95%; width:100%;">
						<div class="col-md-12 col-sm-12" style="text-align: center;">
							<div class="thumbnail"><img src="assets/img/paket_hayyana_3_produk.png" alt=""></div>
						</div>
						<div class="col-md-12 col-sm-12" style="text-align: center;background-color: #eab001;color: white;" id="section-form">
							<div class="text">
								<br>
								<h3>Paket Berisi 3 Produk Perawatan</h3>
								<p></p>
								<h4><strong>Hayyana Rejuvenation Cream</strong><br><i>(Krim Anti Kerut 30gr)</i></h4>
								<h4><strong>Hayyana Deep Cleanser</strong><br><i>(Gel Pembersih 100gr)</i></h4>
								<h4><strong>Hayyana UV Protection Cream</strong><br><i>(Krim Tabir Surya 30gr)</i></h4>
								<br>
							</div>
							<br>
						</div>
						<div class="col-md-12 col-sm-12" style="text-align: center;">
							<h3 class="heading text-center"><strong>3 PRODUK HANYA:</strong></h3>
							<h2 class="heading text-center"><strong>Rp 383.000</strong></h2>
							<p align="center"><img src="assets/img/red-arrow.gif"></p>
						</div>
						<?php
						$gid = '';
						$gpaket = '';
						if (isset($_GET['id'])) {
							$gid = $_GET['id'];
						}
						$cs = [
							['name' => 'Azizah', 'mobile' => '6282229488355', 'email' => 'cs.heptaco@gmail.com'],
							['name' => 'Santi', 'mobile' => '6281249120550', 'email' => 'cs2.heptaco@gmail.com'],
            			// ['name' => 'Laras', 'mobile' => '6281229378151', 'email' => 'cs3.heptaco@gmail.com']
						];
						$keys = array_keys($cs);
						$random = $keys[array_rand($keys,1)];
						$name = $cs[$random]['name'];
						$mobile = $cs[$random]['mobile'];
						$email = $cs[$random]['email'];
						?>
						<div class="col-md-12 col-sm-12" style="text-align: center;">
							<div class="text-center">
								<a class="wa_btn_rejuve_3 btn"><span style="font-size: 20px;"><span style="font-size: 20px;"><i class="fa fa-whatsapp" style="font-size:20px"></i> <span style="font-size: 20px; font-weight: normal;">ORDER</span></a><br><br>
							</div>
						</div>
					</div>

					<div class="item" style="height:95%; width:100%;">
						<div class="col-md-12 col-sm-12" style="text-align: center;">
							<div class="thumbnail"><img src="assets/img/paket-glowing.png" alt=""></div>
						</div>
						<div class="col-md-12 col-sm-12" style="text-align: center;background-color: #eab001;color: white;" id="section-form">
							<div class="text">
								<br>
								<h3>Paket Berisi 2 Produk Perawatan</h3>
								<p></p>
								<h4><strong>Hayyana Deep Cleanser</strong><br><i>(Gel Pembersih 100gr)</i></h4>
								<h4><strong>Hayyana UV Protection Cream</strong><br><i>(Krim Tabir Surya 30gr)</i></h4>
								<br>
							</div>
							<br>
						</div>
						<div class="col-md-12 col-sm-12" style="text-align: center;">
							<h3 class="heading text-center"><strong>2 PRODUK HANYA:</strong></h3>
							<h2 class="heading text-center"><strong>Rp  217.400</strong></h2>
							<p align="center"><img src="assets/img/red-arrow.gif"></p>
						</div>
						<?php
						$gid = '';
						$gpaket = '';
						if (isset($_GET['id'])) {
							$gid = $_GET['id'];
						}
						$cs = [
							['name' => 'Azizah', 'mobile' => '6282229488355', 'email' => 'cs.heptaco@gmail.com'],
							['name' => 'Santi', 'mobile' => '6281249120550', 'email' => 'cs2.heptaco@gmail.com'],
            			// ['name' => 'Laras', 'mobile' => '6281229378151', 'email' => 'cs3.heptaco@gmail.com']
						];
						$keys = array_keys($cs);
						$random = $keys[array_rand($keys,1)];
						$name = $cs[$random]['name'];
						$mobile = $cs[$random]['mobile'];
						$email = $cs[$random]['email'];
						?>
						<div class="col-md-12 col-sm-12" style="text-align: center;">
							<div class="text-center">
								<a class="wa_btn_4 btn"><span style="font-size: 20px;"><span style="font-size: 20px;"><i class="fa fa-whatsapp" style="font-size:20px"></i> <span style="font-size: 20px; font-weight: normal;">ORDER</span></a><br><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end slider -->

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
								<path d="M448.8,161.925l-35.7-35.7l-160.65,160.65l35.7,35.7L448.8,161.925z M555.899,126.225l-267.75,270.3l-107.1-107.1l-35.7,35.7l142.8,142.8l306-306L555.899,126.225z M0,325.125l142.8,142.8l35.7-35.7l-142.8-142.8L0,325.125z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g> 
								</g>
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
										<path d="M448.8,161.925l-35.7-35.7l-160.65,160.65l35.7,35.7L448.8,161.925z M555.899,126.225l-267.75,270.3l-107.1-107.1l-35.7,35.7l142.8,142.8l306-306L555.899,126.225z M0,325.125l142.8,142.8l35.7-35.7l-142.8-142.8L0,325.125z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g> 
										</g>
									</svg>
								</div>
							</div>
						</div>
						<form class="whatsapp-form" action="redirect.php?urls=<?php echo $urls ?>" data-phone="<?php echo $mobile; ?>">
							<input name="wa_message" id="wa_message" type="text" class="form-control" placeholder="Reply.." autocomplete="off">
							<button class="btn btn-send" type="submit">
								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="535.5px" height="535.5px" viewBox="0 0 535.5 535.5" style="enable-background:new 0 0 535.5 535.5;" xml:space="preserve"><g><g id="send"><polygon points="0,497.25 535.5,267.75 0,38.25 0,216.75 382.5,267.75 0,318.75"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
								</svg>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end new chat -->

	<div class="section" id="footer">
		<div class="bawah scroll">
			<a href="" class="wa btn"><span style="font-size: 20px;"><span style="font-size: 20px;"><i class="fa fa-whatsapp" style="font-size:20px"></i> <span style="font-size: 20px; font-weight: normal;">Hubungi CS Kami Segera!</span></a>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
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

					function validateForm() {
						var divElem = document.getElementById("form");
						var inputs = divElem.querySelectorAll("input, select, textarea, radio");
						var stat = true;

						inputs.forEach(function(element) {
							if (element.value === "" || element.value === "62") {
								element.style.border = "1px solid red";
								stat = false;

							}else{
								stat=true;
							}
						});

						return stat;
					}
				</script>

				<script type="text/javascript">
					$(function(){

						$('.wa_btn').on('click',function(){
							if($('.whatsapp-box').hasClass('active')){
								$('.whatsapp-box').removeClass('active');
							} else {
								$('.whatsapp-box').addClass('active');
								$('#wa_message').val('Aku mau order Paket GLOWING Hayyana dong!');
								greeting();


							}
						});

						$('.wa_btn_rejuve').on('click',function(){
							if($('.whatsapp-box').hasClass('active')){
								$('.whatsapp-box').removeClass('active');
							} else {
								$('.whatsapp-box').addClass('active');
								$('#wa_message').val('Aku mau order Paket REJUVE Hayyana dong!');
								greeting();

							}
						});

						$('.wa_btn_3').on('click',function(){
							if($('.whatsapp-box').hasClass('active')){
								$('.whatsapp-box').removeClass('active');
							} else {
								$('.whatsapp-box').addClass('active');
								$('#wa_message').val('Aku mau order Paket GLOWING Hayyana dong!');
								greeting();


							}
						});

						$('.wa_btn_rejuve_3').on('click',function(){
							if($('.whatsapp-box').hasClass('active')){
								$('.whatsapp-box').removeClass('active');
							} else {
								$('.whatsapp-box').addClass('active');
								$('#wa_message').val('Aku mau order Paket REJUVE Hayyana dong!');
								greeting();

							}
						});

						$('.wa_btn_4').on('click',function(){
							if($('.whatsapp-box').hasClass('active')){
								$('.whatsapp-box').removeClass('active');
							} else {
								$('.whatsapp-box').addClass('active');
								$('#wa_message').val('Aku mau order UV Protection dan Deep Cleanseer dong!');
								greeting();

							}
						});

						$('.wa').on('click',function(){
							if($('.whatsapp-box').hasClass('active')){
								$('.whatsapp-box').removeClass('active');
							} else {
								$('.whatsapp-box').addClass('active');
								$('#wa_message').val('Aku mau order Paket Hayyana dong!');
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
				                // window.open("https://web.whatsapp.com/send?phone="+phone+"&text="+message+"");
				                url = "https://web.whatsapp.com/send?phone="+phone+"&text="+message+"";
				            } else {
				            //     // window.open("https://wa.me/"+phone+"?text="+message+"");
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


					});
				</script>
			</body>

			</html>
<!-- Visitor Counter -->