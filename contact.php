
<?php
include 'config.php';
if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];


$masuk = mysqli_query($GLOBALS["___mysqli_ston"], "insert into tb_pesan(name,email,message)values('$name','$email', '$message')");
if($masuk){
   echo"<script>window.alert('Simpan Berhasil..!')</script>";
   echo"<script>document.location='index.php';</script>"; 
}else{
   echo"<script>window.alert('Simpan Gagal..!')</script>";
    echo"<script>document.location='contact.php';</script>";
}														
	



}
?>
<!DOCTYPE html>
<html class="no-js" lang="">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sistem Informasi Geografis</title><meta name="description" content="">
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
    </head>
    <body class="blog-col-1">
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
    <div id="contact-heading" class="heading-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Hubungi Kami</h2>
					</div>
				</div>
			</div>
		</div>
    <div id="contact-content" class="contact-content-area">
		<div class="container">
        <div class="row">
					<div class="col-md-6 col-md-offset-0 col-sm-12">
							<div class="contact-form-area">
								
								
        <form action="" method="post">
								<div class="input-fields fix">
									<div class="single-field">
										<input type="text" placeholder="Name" class="name" name="name" required/>
									</div>
									<div class="single-field">
										<input type="email" placeholder="Email" class="name" name="email" required/>
									</div>
								</div>
								<div class="message-field">
									<textarea placeholder="Message" name="message" required></textarea>
								</div>
								<div class="submit-btn clear">
									<button type="submit" name="submit" >send message</button>
								</div>
							</form>
							</div>
                    </div>
                    <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2">
					<?php

					$cari = mysqli_query($GLOBALS["___mysqli_ston"], "select * from profil where id='1'");
					$dcari = mysqli_fetch_array($cari);

					?>
						<div class="contact-address">
							<p>Alamat:  <?php echo $dcari['alamat'];?></p>
							<p>Telp:   <?php echo $dcari['telp'];?></p>
							<p>Email:   <?php echo $dcari['email'];?></p>
							<p class="post-social-links">
								<span class="lbl">Share on&nbsp;&nbsp;-</span>
								<span>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</span>
							</p>
						</div>
					</div>
					
				</div>
				
		</div>
    </div>
    <footer id="footer" class="footer-area text-center">
			<div class="footer-logo">
				<!-- <a href="#"><img src="img/logo/footer-logo.png" alt="Footer Logo" /></a> -->
			</div>
			<!-- <p class="copyright-text">&copy; Copyright© 2015 Blogging. All right reserved.</p> -->
        </footer>
        
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
