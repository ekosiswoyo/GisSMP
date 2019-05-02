
<?php
include 'config.php';
if(isset($_POST['kirim'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];


$masuk = mysqli_query($GLOBALS["___mysqli_ston"], "insert into tb_pesan(id,name,email,message)values('','$name','$email', '$message')");
	
if($masuk){
   echo"<script>window.alert('Simpan Berhasil..!')</script>";
   echo"<script>document.location='index.php';</script>"; 
}else{
   echo"<script>window.alert('Simpan Gagal..!')</script>";
    echo"<script>document.location='contact.php';</script>";
}														
	



}
?>