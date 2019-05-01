<?php  
session_start();

include "config.php";

if (isset($_POST['login'])){
	//koneksi terpusat
function anti_injection($data){
$filter = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
return $filter;
}	
	$username= anti_injection($_POST['username']);
    $password= anti_injection($_POST['password']);
    $level= anti_injection($_POST['level']);
	$pass = base64_encode($password);
	$admin = mysqli_query($GLOBALS["___mysqli_ston"], "select * from tb_user where username='$username' and password='$pass' and level='$level'");
//10 query untuk mencocokan, apakah data ada di dalam database atau tidak
$tot= mysqli_num_rows($admin);
$r= mysqli_fetch_array($admin);
if ($tot > 0) {//jika data ada maka akan diproses
 $_SESSION['nama'] = $r['nama_lengkap'];
 $_SESSION['email'] = $r['email'];
 $_SESSION['no_telp'] = $r['no_telp'];
 $_SESSION['username'] = $username;
 $_SESSION['password'] = $password;
 $_SESSION['level'] = $r['level'];
 if($r['level']=='Tim SSN'){
 echo"<script>location.href='page.php?pages=home'</script>";
 }
 elseif($r['level']=='Kepala Dinas'){
 echo"<script>location.href='page.php?pages=home'</script>";
 }
 
 
}
else{
?>
<script>alert('Username atau password salah');</script>
<?php
}
}else{
	unset($_POST['login']);
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
            <!-- <a href="javascript:void(0);">Admin Kabupaten Pekalongan</a> -->
            <small></small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="index.php">
                    <div class="msg">Login</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="col-sm-12">
                            <select class="form-control show-tick" name="level" required>
                                <option value="">-- Pilih Level User --</option>
                                <option value="Tim SSN">Tim SSN</option>
                                <option value="Kepala Dinas">Kepala Dinas</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        
                       
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="login">SIGN IN</button>
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