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