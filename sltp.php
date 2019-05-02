<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sistem Informasi Geografis</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- Google Fonts
		============================================ -->		
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	   
		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.css">
		<!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr JS
		============================================ -->		
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=drawing&geometry"></script>
        <script src="jquery.js"></script>
		<script type="text/javascript">
	var nama = [];
	var nama_sekolah = [];
	var jumlah = [];
	var lokasi = [];
	var cords = '';
	var area = [];
	var infoWindow;
	
	function peta_awal(){
		var palopo = new google.maps.LatLng(-3.001634, 120.198517);
		var petaoption = {
			zoom: 11,
			center: palopo,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
	
		peta = new google.maps.Map(document.getElementById("map-canvas"),petaoption);
	
		url = "ambildata.php";
		$.ajax({
			url: url,
			dataType: 'json',
			cache: false,
			success: function(msg){
				var polygon;
				var cords = [];
				for(i=0;i<msg.palopo.lahan.length;i++){
					nama[i] = msg.palopo.lahan[i].nama_lokasi;
					jumlah[i] = msg.palopo.lahan[i].jumlah;
					lokasi[i] = msg.palopo.lahan[i].polygon;
				   
					var str = lokasi[i].split(" "); 
					
					for (var j=0; j < str.length; j++) { 
						var point = str[j].split(",");
						cords.push(new google.maps.LatLng(parseFloat(point[0]), parseFloat(point[1])));
					}
	
				   var contentString = '<b>'+nama[i]+'</b><br>' +
										'Nama Kecamatan: '+ nama[i] +
										'<br>' +
										'Rata-Rata SSN: '+ jumlah[i] +
										'<br>';
	
					polygon = new google.maps.Polygon({
						paths: [cords],
						strokeColor: msg.palopo.lahan[i].warna,
						strokeOpacity: 0,
						strokeWeight: 1,
						fillColor: msg.palopo.lahan[i].warna,
						fillOpacity: 0.5,
						html: contentString
					});     
	
					cords = []; 
					polygon.setMap(peta); 
					infoWindow = new google.maps.InfoWindow();
					google.maps.event.addListener(polygon, 'click', function(event) {
						infoWindow.setContent(this.html);
						infoWindow.setPosition(event.latLng);
						infoWindow.open(peta);
					});
				}               
			}
		});
	}
	
	$(document).ready(function(){
		$("#search").click(function(){
			var kecamatan  = $("#kecamatan").val();
			$.ajax({
				url: "caripeta.php",
				data: "kecamatan="+kecamatan+"&status="+status,
				dataType: 'json',
				cache: false,
				success: function(msg) {
					var palopo2 = new google.maps.LatLng(-3.001634, 120.198517);
					var petaoption2 = {
						zoom: 11,
						center: palopo2,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					};
	
					var peta2 = new google.maps.Map(document.getElementById("map-canvas"),petaoption2);
	
					var polygon;
					var cords = [];
					for(i=0;i<msg.palopo.lahan.length;i++){
						nama[i] = msg.palopo.lahan[i].nama_lokasi;
					jumlah[i] = msg.palopo.lahan[i].jumlah;
					lokasi[i] = msg.palopo.lahan[i].polygon;
						
						var str = lokasi[i].split(" "); 
						
						for (var j=0; j < str.length; j++) { 
							var point = str[j].split(",");
							cords.push(new google.maps.LatLng(parseFloat(point[0]), parseFloat(point[1])));
						}
	
						
						var contentString = '<b>'+nama[i]+'</b><br>' +
										'Nama Kecamatan: '+ nama[i] +
										'<br>' +
										'Rata-Rata SSN: '+ jumlah[i] +
										'<br>';
											
						polygon = new google.maps.Polygon({
							paths: [cords],
							strokeColor: msg.palopo.lahan[i].warna,
							strokeOpacity: 0,
							strokeWeight: 1,
							fillColor: msg.palopo.lahan[i].warna,
							fillOpacity: 0.5,
							html: contentString
						});     
	
						cords = [];
	
						polygon.setMap(peta2); 
						google.maps.event.addListener(polygon, 'click', function(event) {
							infoWindow.setContent(this.html);
							infoWindow.setPosition(event.latLng);
							infoWindow.open(peta2);
						});
					}
				}
			});
		});
	});
		</script>
        <script type="text/javascript">
    
	(function() {
  window.onload = function() {
var map;
    var locations = [
   <?php
       $host="localhost";
       $user="root";
       $pass="";
       $db="sig";
       
         
       $koneksi=($GLOBALS["___mysqli_ston"] = mysqli_connect($host, $user, $pass));
       mysqli_select_db($koneksi, $db);

            	$sql_lokasi="select id_sekolah,lat,lang
            	from tb_sekolah  ";
            	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql_lokasi);
				// ambil nama,lat dan lon dari table lokasi
            	while($data=mysqli_fetch_object($result)){
            		 ?>
             ['<?=$data->id_sekolah;?>', <?=$data->lat;?>, <?=$data->lang;?>],
       <?php
				}
		?>		
    
    ];

    //Parameter Google maps
    var options = {
      zoom: 12, //level zoom
	  //posisi tengah peta
      center: new google.maps.LatLng(-3.001634 , 120.198517),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
	
	 // Buat peta di 
    var map = new google.maps.Map(document.getElementById('peta'), options);
	 // Tambahkan Marker 
  
	  var infowindow = new google.maps.InfoWindow();

    var marker, i;
     /* kode untuk menampilkan banyak marker */
    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
		 icon: 'icon.png'
      });
     /* menambahkan event clik untuk menampikan
     	 infowindows dengan isi sesuai denga
	    marker yang di klik */
		
    		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() { 
				var id= locations[i][0];
	
				$.ajax({
					url : "get_info.php",
					data : "id=" +id ,
					success : function(data) {
							infowindow.setContent(data);
							infowindow.open(map, marker);
					}
				});		
			}
		})(marker, i));
    }

  };
})();

	</script>
	</head>
    </head>
    <body class="">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header-area start -->
		<header id="header" class="header-area">
			<div class="header-top">
				<div class="container">
					<div class="row">
						
						<div class="col-md-12 col-sm-6 col-xs-12">
							<div class="header-top-right fix">
								<div class="header-links">
									<ul>
										<li><a href="#">Log in</a></li>
									
									</ul>
								</div>
								<div class="header-search">
									<form action="#" method="post">
										<button type="button" class="search-toggler"><i class="fa fa-search"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.header-top -->
			<div class="header-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
						<div class="col-md-3">
							<div class="logo">
								<a href="index.php"><img src="img/logo/logo.png" alt="Logo" style="width:87px;height:39px;"/></a>
							</div>
						</div>
						</div>
						<div class="col-md-9">
							<div class="main-menu">
								<nav>
								  <ul class="main-nav navbar-right">
									
									<li><a href="index.php">Beranda</a></li>
									<li><a href="sltp.php">SLTP</a></li>
									<li><a href="cari.php">Peta</a></li>
									<li><a href="contact.php">Hubungi Kami</a></li>
									<li><a href="about.php">Tentang Kami</a></li>

								  </ul>
								</nav>
							</div><!-- /.main-menu -->
						</div>
					</div>
				</div>
				<!-- mobile-menu-area start -->
				<div class="mobile-menu-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<nav id="dropdown">
									<ul>
									<li><a href="index.php">Beranda</a></li>
									<li><a href="sltp.php">SLTP</a></li>
									<li><a href="index.php">Peta</a></li>
									<li><a href="contact.php">Hubungi Kami</a></li>
									<li><a href="about.php">Tentang Kami</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- mobile-menu-area end -->
			</div>
		</header><!-- /.header-bottom -->
        <!-- header-area end -->
		
        <!-- search-area start -->
		<div class="search-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="search-form">
							<span class="search-close"></span>
							<form action="#" method="post">
								<input type="text" placeholder="Search here..."/>
								<button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- search-area end -->
		
		<!-- slider-area start -->
		<div id="slider" class="slider-area">
				<div class="single-slide">
					<a href="#"><img src="img/home-2/slider/banner.png" alt="Slide Image" /></a>
					<div class="slide-text-container text-center">
					</div>
				</div><!-- /.single-slide -->
				
		</div>
		<!-- slider-area end -->
		
		<!-- main-content-area start -->
		<div id="main-content" class="main-content-area">
			<div class="container">
				<div class="row">
					<!-- <div class="col-md-3 col-md-offset-0 col-sm-8 col-sm-offset-2">
						<div class="sidebar-area fix">
							
						
							<div class="single-sidebar-widget">
								<h6 class="widget-title">Kecamatan</h6>
								<div class="sidebar-content">
								<table class="table" border="0">
							<tr>
								<td>
                    		<select name="kecamatan" id="kecamatan" class="form-control">
    	                		<option value="">Silahkan Pilih Kecamatan</option>
								
                    		</select>
                		</td>
                		
                		
                    </tr>
					<tr>
					<td>
                			<button type="button" id="search" class="btn btn-primary">Pilih Kecamatan</button>
                		</td>
					</tr>
            	</table>
								</div> /.sidebar-content -->
							<!-- </div>
						
						</div>
					</div> -->
					<div class="col-md-9 col-sm-12">
					<div id="peta" style="width:100%; height:700px;"></div>
					</div>
					<div class="col-md-3 col-md-offset-0 col-sm-8 col-sm-offset-2">
						<div class="sidebar-area fix">
						<div class="single-sidebar-widget">
								<h6 class="widget-title">Kategori SSN</h6>
								<div class="sidebar-content">
									<div class="archive-list">
									
										<ul>
											<li><a href="b_ssn.php"><span class="month">Belum SSN</span></a></li>
											<li><a href="ssn_c.php"><span class="month">SSN C</span></a></li>
											<li><a href="ssn_b.php"><span class="month">SSN B</span></a></li>
											<li><a href="ssn_a.php"><span class="month">SSN A</span></a></li>
										</ul>
									</div>
								</div><!-- /.sidebar-content -->
							</div><!-- /.single-sidebar-widget -->
						</div><!-- /.sidebar-area -->
					</div>
				</div>
			</div>
		</div>
		<!-- main-content-area end -->
		
		<!-- footer-area start -->
		<footer id="footer" class="footer-area text-center">
			<div class="footer-logo">
				<!-- <a href="#"><img src="img/logo/footer-logo.png" alt="Footer Logo" /></a> -->
			</div>
			<!-- <p class="copyright-text">&copy; Copyright© 2015 Blogging. All right reserved.</p> -->
		</footer>
		<!-- footer-area end -->
		
		<!-- jquery
		============================================ -->		
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
		<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>	
		<!-- meanmenu JS
		============================================ -->		
        <script src="js/jquery.meanmenu.js"></script>
		<!-- owl.carousel JS
		============================================ -->		
        <script src="js/owl.carousel.min.js"></script>
		<!-- scrollUp JS
		============================================ -->		
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>
</html>
