<?php
include ('config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sistem Informasi Geografis</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/base/jquery-ui.css" />
	
	
    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	
	<!-- Dropzone Css -->
    <link href="plugins/dropzone/dropzone.css" rel="stylesheet">
	
	<!-- Multi Select Css -->
    <link href="plugins/multi-select/css/multi-select.css" rel="stylesheet">
	
	<!-- Bootstrap Spinner Css -->
    <link href="plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="plugins/nouislider/nouislider.min.css" rel="stylesheet" />

	

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
    
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=drawing&geometry"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript">
function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};

function PreviewImage2() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("uploadImage2").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview2").src = oFREvent.target.result;
};
};

function PreviewImage3() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("uploadImage3").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview3").src = oFREvent.target.result;
};
};
function PreviewImage4() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("uploadImage4").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview4").src = oFREvent.target.result;
};
};
function PreviewImage5() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("uploadImage5").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview5").src = oFREvent.target.result;
};
};
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#show").click(function(){
        $("#div1").fadeIn();
        
    });$("#hide").click(function(){
        $("#div1").fadeOut();
       
    });
});
</script>
	 
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtzu2MUClEHFzxzXv0j6FipqXnZA2BF9w&sensor=false" type="text/javascript"></script>
	
</head>

<body class="theme-red">
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
    <!-- Notifications -->
                    
    <!-- Top Bar -->
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