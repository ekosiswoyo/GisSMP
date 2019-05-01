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
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-cyan">
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
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
	<?php
   if($_SESSION['level']=='Tim SSN'){
    include "head.php";
   
    } else{
    include "head2.php";
 
    }?>
   
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
		<?php
    if($_SESSION['level']=='Tim SSN'){
    include "menu.php";
    include "alamat.php";
	
    } else{
    include "menu2.php";
    include "alamat2.php";
    }
        
    
    ?>
       
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <?php include ('menu_kanan.php');?> 
        <!-- #END# Right Sidebar -->
    </section>
    <!-- Jquery Core Js -->
   
</body>
 <?php include ('foot.php');?> 
</html>
<?php
}else{
	session_destroy();
	header('Location:index.php');
}
?>