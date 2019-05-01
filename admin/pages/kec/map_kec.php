<?php

session_start();//mulai session


if(isset($_SESSION['nama']) and isset($_SESSION['email']) and isset($_SESSION['no_telp']) and isset($_SESSION['username']) and isset($_SESSION['password']) and $_SESSION['level']){

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sistem Informasi Geografis</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="../../plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/base/jquery-ui.css" />
	
	
    <!-- JQuery DataTable Css -->
    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	
	<!-- Dropzone Css -->
    <link href="../../plugins/dropzone/dropzone.css" rel="stylesheet">
	
	<!-- Multi Select Css -->
    <link href="../../plugins/multi-select/css/multi-select.css" rel="stylesheet">
	
	<!-- Bootstrap Spinner Css -->
    <link href="../../plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="../../plugins/nouislider/nouislider.min.css" rel="stylesheet" />

	

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=drawing&geometry"></script>
	<script type="text/javascript">
var nama = [];
var kecamatan = [];
var alamat = [];
var keterangan = [];
var status_lokasi = [];
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
                kecamatan[i] = msg.palopo.lahan[i].kecamatan;
                alamat[i] = msg.palopo.lahan[i].alamat;
                keterangan[i] = msg.palopo.lahan[i].keterangan;
                lokasi[i] = msg.palopo.lahan[i].polygon;
               
                var str = lokasi[i].split(" "); 
                
                for (var j=0; j < str.length; j++) { 
                    var point = str[j].split(",");
                    cords.push(new google.maps.LatLng(parseFloat(point[0]), parseFloat(point[1])));
                }

               var contentString = '<b>'+nama[i]+'</b><br>' +
                                    'Alamat: '+ alamat[i] +
                                    '<br>' +
                                    'Kecamatan: '+ kecamatan[i] +
                                    '<br>' +
                                    'Keterangan: '+ keterangan[i] +
                                    '<br>' +
                                    'Status Lokasi : '+ status_lokasi[i] +
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
        var status     = $("#status").val();
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
                    kecamatan[i] = msg.palopo.lahan[i].kecamatan;
                    alamat[i] = msg.palopo.lahan[i].alamat;
                    status_lokasi[i] = msg.palopo.lahan[i].status;
                    keterangan[i] = msg.palopo.lahan[i].keterangan;
                    lokasi[i] = msg.palopo.lahan[i].polygon;
                    
                    var str = lokasi[i].split(" "); 
                    
                    for (var j=0; j < str.length; j++) { 
                        var point = str[j].split(",");
                        cords.push(new google.maps.LatLng(parseFloat(point[0]), parseFloat(point[1])));
                    }

                    var contentString = '<b>'+nama[i]+'</b><br>' +
                                        'Alamat: '+ alamat[i] +
                                        '<br>' +
                                        'Kecamatan: '+ kecamatan[i] +
                                        '<br>' +
                                        'Keterangan: '+ keterangan[i] +
                                        '<br>' +
                                        'Status Lokasi : '+ status_lokasi[i] +
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtzu2MUClEHFzxzXv0j6FipqXnZA2BF9w&sensor=false" type="text/javascript"></script>
	

</head>

<body class="theme-cyan" onload="peta_awal()">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" >Sistem Informasi Geografis</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
				<?php $id=$_SESSION['username'];?>
				
                              
					
					
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
   
    <section>
    <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../images/user.png" width="48" height="48" alt="User" />
					<?php
				$nama_admin=$_SESSION['nama'];
				
				?>
                <span class="username"><?php echo $nama_admin; ?></span>
                </div>
                <div class="info-container">
                    <div class="email"></div>
                    <!--<div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">

                    <li>
                        <a href="?pages=home">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="?pages=home">
                            <i class="material-icons">map</i>
                            <span>View Peta</span>
                        </a>
                    </li>
                     <li>
                        <a href="?pages=map_sekolah">
                            <i class="material-icons">map</i>
                            <span>View SLTP</span>
                        </a>
                    </li>
                    <li>
                        <a href="?pages=fasilitasumum">
                            <i class="material-icons">public
                    </i>
                            <span>View Kec</span>
                        </a>
                    </li>
                   	<li>
                        <a href="?pages=nilaissn">
                            <i class="material-icons">view_module</i>
                            <span>View Nilai SSN</span>
                        </a>
                    </li>
					<li>
                        <a href="javascript:void(0);"  class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Kelola Data</span>
                        </a>
                        <ul class="ml-menu">
                        <li>
                            <a href="?pages=sekolah">
                                <span>Kelola Data SLTP</span>
                            </a>
                            </li>
                            <li>
                            <a href="?pages=pesan">
                                <span>Kelola Data Kec.</span>
                            </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Kelola Nilai SSN</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="?pages=nilaissn">Nilai SSN SLTP</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-2.html">Nilai Rata-rata Kec.</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                   <li>
                        <a href="user.php">
                            <i class="material-icons">group</i>
                            <span>Kelola User</span>
                        </a>
                    </li>
                    <li>
                        <a href="?pages=kategorifasum">
                            <i class="material-icons">view_module</i>
                            <span>Kelola Kontak</span>
                        </a>
                    </li>
                    <li>
                        <a href="?pages=kategorifasum">
                            <i class="material-icons">view_module</i>
                            <span>Kelola Profil</span>
                        </a>
                    </li>
                    <li>
                    <a href="logout.php" onclick="return confirm('anda yakin akan keluar?')" >
                            <i class="material-icons">input</i>
                            <span>Logout</span>
                        </a>
                    </li>

                    
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
       

    </section>

    <section class="content">
        <div class="container-fluid">
           
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                           <h2> Data Kecamatan</h2>
                            
                        </div>
                        <div class="body">
                            
								<div class="row clearfix">
                                <?php include ('../../config.php'); ?>
                        <table class="table" border="0">
                                    <tr>
                                        <td>
                                            <select name="kecamatan" id="kecamatan" class="form-control">
                                                <option value="">Silahkan Pilih Kecamatan</option>
                                                <?php 
                                                    $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM `lokasi_lahan`");
                                                    while($val = mysqli_fetch_array($sql)) {
                                                        echo '<option value="'.$val['id'].'">'.$val['nama_lokasi'].'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                        
                                        <td>
                                            <button type="button" id="search" class="btn btn-primary">Cari Lokasi Lahan</button>
                                        </td>
                                    </tr>
                        </table>
                        <div id="map-canvas" style="width:100%; height:700px;"></div>
                                <br>
                              
                            </div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
         
</body>
        </div>
    </section>
    <!-- Jquery Core Js -->
   
</body>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#div1").fadeIn();
        
    })
});
</script>
<script type="text/javascript">
    document.getElementById('reset').onclick= function() {
        var field1= document.getElementById('lng');
 var field2= document.getElementById('lat');
        field1.value= field1.defaultValue;
 field2.value= field2.defaultValue;
    };
</script>    
<script type="text/javascript">
     function updateMarkerPosition(latLng) {
  document.getElementById('lat').value = [latLng.lat()];
  document.getElementById('lng').value = [latLng.lng()];
  }

    var myOptions = {
      zoom: 15,
        scaleControl: true,
      center:  new google.maps.LatLng(-3.001634 , 120.198517),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

 
    var map = new google.maps.Map(document.getElementById("map"),
        myOptions);

 var marker1 = new google.maps.Marker({
 position : new google.maps.LatLng(-3.001634 , 120.198517),
 title : 'lokasi',
 map : map,
 draggable : true
 });
 
 //updateMarkerPosition(latLng);

 google.maps.event.addListener(marker1, 'drag', function() {
  updateMarkerPosition(marker1.getPosition());
 });
</script>

<script type="text/javascript">
     function updateMarkerPosition(latLng) {
  document.getElementById('lat').value = [latLng.lat()];
  document.getElementById('lng').value = [latLng.lng()];
  }

    var myOptions = {
      zoom: 15,
        scaleControl: true,
      center:  new google.maps.LatLng(<?php echo $dcari['latitude']; ?>,<?php echo $dcari['longitude']; ?>),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

 
    var map = new google.maps.Map(document.getElementById("map-edit"),
        myOptions);

 var marker1 = new google.maps.Marker({
 position : new google.maps.LatLng(<?php echo $dcari['latitude']; ?>,<?php echo $dcari['longitude']; ?>),
 title : 'lokasi',
 map : map,
 draggable : true
 });
 
 //updateMarkerPosition(latLng);

 google.maps.event.addListener(marker1, 'drag', function() {
  updateMarkerPosition(marker1.getPosition());
 });
</script>
<script>
			$(document).ready(function(){
				$('#kategori').multipleSelect({
					
				});
			});
		</script>
<script type="text/javascript">
        function initialize() {
    var mapOptions = {
      zoom: 15,
      center: new google.maps.LatLng(<?php echo $dcari['latitude']; ?>,<?php echo $dcari['longitude']; ?>)
    }
    var map = new google.maps.Map(document.getElementById('map-detail'),
      mapOptions);
    
    setMarkers(map, beaches);
  }

  var beaches = [
    ['<?php echo "$dcari[nama]"; ?>', <?php echo $dcari['latitude']; ?>,<?php echo $dcari['longitude']; ?>],
  ];

  function setMarkers(map, locations) {
    var shape = {
      coords: [1, 1, 1, 20, 18, 20, 18 , 1],
      type: 'poly'
    };
    var infoWindow = new google.maps.InfoWindow;
    for (var i = 0; i < locations.length; i++) {
      var beach = locations[i];
      var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: beach[4],
        shape: shape,
        title: beach[0],
        zIndex: beach[3]
      });
      var html = 'Lokasi : '+beach[0]+'<br/>Latitude : '+beach[1]+'<br/>Longitude : '+beach[2]+'';
      bindInfoWindow(marker, map, infoWindow, html);
    }
  }
  
  function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>

   
    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
	
    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>
	
	 <!-- Autosize Plugin Js -->
    <script src="../../plugins/autosize/autosize.js"></script>
	
	<!-- Moment Plugin Js -->
    <script src="../../plugins/momentjs/moment.js"></script>
	
	<!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
	
	<!-- Multi Select Plugin Js -->
    <script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>
	
	<!-- Bootstrap Colorpicker Js -->
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
	
	<!-- Dropzone Plugin Js -->
    <script src="../../plugins/dropzone/dropzone.js"></script>
	 
	 <!-- Input Mask Plugin Js -->
    <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
	
	<!-- Jquery Spinner Plugin Js -->
    <script src="../../plugins/jquery-spinner/js/jquery.spinner.js"></script>
	
	<!-- Bootstrap Tags Input Plugin Js -->
    <script src="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
	
	<!-- noUISlider Plugin Js -->
    <script src="../../plugins/nouislider/nouislider.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>
	<script src="../../js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
	
<script src="../../notifikasi.js"></script>
	
</html>
<?php
}else{
	session_destroy();
	header('Location:index.php');
}
?>