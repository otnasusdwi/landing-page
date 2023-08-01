$(function(){
    if(parseInt($(window).width()) > 767){
        var top = $('.header').offset().top;
        var windowScroll = $(window).scrollTop();
        $(window).on('scroll',function(){
            if($(window).scrollTop() > top){
                $('.header').addClass('float');
            } else {
                $('.header').removeClass('float');
            }
        });
		$('.match').matchHeight();
    }
	

    $('.navigation .navbar-left li ul').parent('li').hover(function(){
        $(this).addClass('active').children('ul').show();
    },function(){
        $(this).removeClass('active').children('ul').hide();
    });

    $(".fancybox").fancybox({
		padding:0,
		openEffect	: 'elastic',
		closeEffect	: 'elastic'
	});
});

function createRequest(){ 
	var oAJAX = false;

	try {
	  oAJAX = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
	  try {
		 oAJAX = new ActiveXObject("Microsoft.XMLHTTP");
	  } catch (e2) {
		 oAJAX = false;
	  }
	}

	
	if (!oAJAX && typeof XMLHttpRequest != 'undefined') {
		oAJAX = new XMLHttpRequest();
	}

	if (!oAJAX){
	   alert("Error saat membuat XMLHttpRequest!");
	}        
	return oAJAX;
}

function kota(link){
	oRequest = createRequest();
	var id = document.getElementById('provinsi').value;
	var url = link + 'store/kota/' + id;

	// Buka komunikasi dengan server
	oRequest.open("GET", url, true);

	// menunggu respon dari server
	oRequest.onreadystatechange = function () {                                                                                                                     
	  if (oRequest.readyState == 4) {
	  // baca data respon dari server                                                                           
	  var response = oRequest.responseText;
	  document.getElementById("result").innerHTML = response;    
	  }
	}

	// Send the request
	oRequest.send(null);
}

function stores(link){
  document.getElementById("stores-result").innerHTML = '<center><i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span></center>';
  var xmlhttp = new XMLHttpRequest();
  var id = document.getElementById('result').value;

  var url = link + 'store/stores/?id=' + id;

  xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          myFunction(xmlhttp.responseText);
      }
  }
  xmlhttp.open("GET", url, true);
  xmlhttp.send();

  function myFunction(response) {
      var arr = JSON.parse(response);
      var i;
      var title = id;
      var out = "";
	  if (arr.length>0){
      out += '<h4 class="text-center"><strong>'+title+'</strong></h4><br/><br/>';
		  for(i = 0; i < arr.length; i++) {
			  out += '<div class="col-md-4 col-sm-6 col-xs-12">'+
					'<div class="blog-item blog-item-news matchx">'+
						'<div class="post-content" style="text-align:left;padding-bottom:0">'+
							'<h4 class="post-title match"><a href="#">'+arr[i].nama_store+'</a></h4>'+
							'<h5>'+arr[i].kota+', '+arr[i].provinsi+'</h5>'+
							'<address>'+
								'Alamat: '+arr[i].alamat+'<br>'+
								'Telepon: '+arr[i].telp+'<br>'+
							'</address>'+
						'</div>'+
					'</div>'+
				'</div>';
		  }
	  }else{
		  out += '<div class="col-md-12 col-sm-12 col-xs-12">'+
				'<div class="blog-item blog-item-news text-center">'+
					'<div class="post-content" style="padding-bottom:0">'+
						'<h4 class="post-title match">Belum Ada Data</h4>'+
					'</div>'+
				'</div>'+
			'</div>';
	  }
      document.getElementById("stores-result").innerHTML = out;
	  $('.match').matchHeight();
  }
}