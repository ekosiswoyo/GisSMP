 <style type='text/css'>
  #peta {
  width: 100%;
  height: 400px;

} </style>
<script src="jquery.js"></script>
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
		 icon: 'pages/sekolah/icon.png'
      });
     /* menambahkan event clik untuk menampikan
     	 infowindows dengan isi sesuai denga
	    marker yang di klik */
		
    		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() { 
				var id= locations[i][0];
	
				$.ajax({
					url : "pages/sekolah/get_info.php",
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

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">

            </div>

            <!-- Widgets -->
           <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <?php
                        $level=$_SESSION['level'];
                        
                        ?>
                            <h2>
                               Peta SLTP</a></small>
                            </h2>
                          
                        </div>
                        <div class="body">
                        <div id="peta"></div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
           
            </div>
        </div>
    </section>