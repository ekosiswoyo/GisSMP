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
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtzu2MUClEHFzxzXv0j6FipqXnZA2BF9w&libraries=places&language=id"></script>
    <script>
    var dest;
    var directionsDisplay;

    // memanggil service Google Maps Direction
	var directionsService = new google.maps.DirectionsService();
	directionsDisplay = new google.maps.DirectionsRenderer();

    $(document).ready(function() {
        var myOptions = {
            zoom: 14,
            center: new google.maps.LatLng(-3.001634, 120.198517),
            mapTypeId: google.maps.MapTypeId.HYBRID
        };

        // posisi awal ketika halaman pertama kali dimuat
        var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

        // memanggil fungsi geocoder autocomplete
        var autocomplete = new google.maps.places.Autocomplete((document.getElementById('dest')),{ types: ['geocode'] });
    	
    	
	});

	$(document).ready(function() {
		// ketika tombol cari di klik, maka proses pencarian rute dimulai
		$("#cari").click(function(){

			dest = $("#dest").val();

			var defaultLatLng = new google.maps.LatLng(-3.001634, 120.198517);

		    if (navigator.geolocation) {
		        function success(pos) {
		            drawMap(pos.coords.latitude,pos.coords.longitude);
		        }

		        function fail(error) {
		            drawMap(defaultLatLng);
		        }
		        
		        navigator.geolocation.getCurrentPosition(success, fail, { maximumAge: 500000, enableHighAccuracy:true, timeout: 6000 });

		    } else {
		        drawMap(defaultLatLng);  
		    }

		    function drawMap(lat,lng) {

		        var myOptions = {
		            zoom: 15,
		            center: new google.maps.LatLng(lat,lng),
		            mapTypeId: google.maps.MapTypeId.HYBRID
		        };

		        var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

		        // kita bikin marker untuk asal dengan koordinat user hasil dari geolocation
		        var markerorigin = new google.maps.Marker({
	                position: new google.maps.LatLng(parseFloat(lat),parseFloat(lng)),
	                map: map,
	                title: "Origin",
	                visible:false // kita ga perlu menampilkan markernya, jadi visibilitasnya kita set false
				});

		        // membuat request ke Direction Service
		        var request = {
					origin: markerorigin.getPosition(), // untuk daerah asal, kita ambil posisi user
				    destination: dest, // untuk daerah tujuan, kita ambil value dari textbox tujuan
				    provideRouteAlternatives:true, // set true, karena kita ingin menampilkan rute alternatif

				    /**
				     * kamu bisa tambahkan opsi yang lain seperti
				     * avoidHighways:true (set true untuk menghindari jalan raya, set false untuk menonantifkan opsi ini)
				     * atau kamu bisa juga menambahkan opsi seperti
				     * avoidTolls:true (set true untuk menghindari jalan tol, set false untuk menonantifkan opsi ini)
				     */
				    travelMode: google.maps.TravelMode.DRIVING // set mode DRIVING (mode berkendara / kendaraan pribadi)
				    /**
				     * kamu bisa ganti dengan 
				     * google.maps.TravelMode.BICYCLING (mode bersepeda)
				     * google.maps.TravelMode.WALKING (mode berjalan)
				     * google.maps.TravelMode.TRANSIT (mode kendaraan / transportasi umum)
				     */
				};


				directionsService.route(request, function(response, status) {
				    if (status == google.maps.DirectionsStatus.OK) {
				      directionsDisplay.setDirections(response); 
				    }
			  	});
				// menampiklkan rute pada peta dan juga direction panel sebagai petunjuk text
			  	directionsDisplay.setMap(map);
		  		directionsDisplay.setPanel(document.getElementById('directions-panel'));
		  		
		  		// menampilkan layer traffic atau lalu-lintas pada peta
		  		var trafficLayer = new google.maps.TrafficLayer();
  				trafficLayer.setMap(map);

		    }
		});
	});
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
							<div class="logo">
								<!-- <a href="index-2.html"><img src="img/logo/logo.png" alt="Logo" /></a> -->
								<h1>LOGO</h1>
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
					<a href="#"><img src="img/home-2/slider/1.png" alt="Slide Image" /></a>
					<div class="slide-text-container text-center">
					</div>
				</div><!-- /.single-slide -->
				
		</div>
		<!-- slider-area end -->
		
		<!-- main-content-area start -->
		<div id="main-content" class="main-content-area">
		<div class="container">
				<div class="row">
					<div class="col-md-3 col-md-offset-0 col-sm-8 col-sm-offset-2">
						<div class="sidebar-area fix">
							
						
							<div class="single-sidebar-widget">
								<h6 class="widget-title">Kecamatan</h6>
								<div class="sidebar-content">
                                <form method="post" action="">
                                <table class="table" border="0">
            		<tr>
                		<td>
                    		<select name="lat" class="form-control">
    	                		<option value="">Silahkan Pilih Sekolah</option>
								<?php 
								include 'config.php';
        		                	$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM `tb_sekolah`");
        		                	while($val = mysqli_fetch_array($sql)) {
        		                		echo '<option value="'.$val['lat'].'">'.$val['nama_sekolah'].'</option>';
        		                	}
    		                	?>
                    		</select>
                		</td>
                		
                		
                    </tr>
					<tr>
					<td>
                    <button type="submit" value="Detail" id="cari1" class="btn btn-primary">Pilih Sekolah</button>
                		</td>
                    </tr>
                    <?php
                                if(isset($_POST['lat'])){
                                $sql = "select * from tb_sekolah WHERE lat= ".$_POST['lat'];
                                $q = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
                                while($data = mysqli_fetch_array($q)){
                                ?>
                                <tr>
                                    <td><?php echo $data['nama_sekolah'];?>
                                </tr>
                                <tr>
                                <input type="hidden" id="dest" value="<?php echo $data['lat']?>,<?php echo $data['lang']?>">
                                <td><button type="button" class="button btn btn-info" id="cari"><span>Menuju</span></button></td>
                                
                                                   
                                
                                </tr>
                                <?php
                                }
                                }
                                ?>
                </table>
                
                <table>
                                
                               
                                 </table>
                             
                                                                </div><!-- /.sidebar-content -->
                                                            </div><!-- /.single-sidebar-widget -->
                                                            

          
						</div><!-- /.sidebar-area -->
                    </div>
                    
					<div class="col-md-6 col-sm-12">
					
                    <div id="map-canvas" style="width:100%; height:700px;"></div>
                    <div id="directions-panel" style="width:auto;overflow:auto; background: #FFFFFF;"></div>
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
