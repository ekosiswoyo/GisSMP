<?php  
session_start();

include "config.php";

if (isset($_POST['update'])){
	//koneksi terpusat
function anti_injection($data){
$filter = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
return $filter;
}	
	$username= anti_injection($_POST['username']);
    $password= anti_injection($_POST['password']);
    $nama= anti_injection($_POST['nama']);
    $email= anti_injection($_POST['email']);
    $no_telp= anti_injection($_POST['no_telp']);
    $pass = base64_encode($password);
    
    if($password != NULL){
        $admin = mysqli_query($GLOBALS["___mysqli_ston"], "update tb_user set password='$pass', nama_lengkap='$nama', email='$email', no_telp='$no_telp' where username='$username'");
        if($admin){
            echo "<script>window.alert('Data Berhasil di Simpan !')</script>";
            echo "<script>window.location='index.php';</script>";
         }else{
             echo 'Update Data Gagal!';
         }
    }else{
        $admin = mysqli_query($GLOBALS["___mysqli_ston"], "update tb_user set nama_lengkap='$nama', email='$email', no_telp='$no_telp' where username='$username'");
        if($admin){
            echo "<script>window.alert('Data Berhasil di Simpan !')</script>";
            echo "<script>window.location='index.php';</script>";
         }else{
             echo 'Update Data Gagal!';
         }
    }

   
    }
  ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sistem Informasi Geografis</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
      <!-- Bootstrap Select Css -->
      <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Selamat Datang, Tim SSN!</a>
            <small></small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="user.php">
                    <!-- <div class="msg">Login</div> -->
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $_SESSION['username'];?>" readonly>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $_SESSION['nama'];?>">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $_SESSION['email'];?>">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">phone</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="no_telp" placeholder="No.Telp" value="<?php echo $_SESSION['no_telp'];?>">
                        </div>
                    </div>
                    <p style="font-size:12px;">*) Username tidak dapat diubah</p>
                    <p style="font-size:12px;">**) Apabila Password tidak diubah dikosongkan</p> 
                    <div class="row">
                        
                       
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="update">UPDATE</button>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-blue waves-effect" type="reset" name="login">RESET</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
</body>

</html>