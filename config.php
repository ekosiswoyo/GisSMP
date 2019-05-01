<?php
$host="localhost";
$user="root";
$pass="";
$db="sig";

$entries=10;
$waktu=date("Y-m-d H:i:s");
	
$koneksi=($GLOBALS["___mysqli_ston"] = mysqli_connect($host, $user, $pass));
mysqli_select_db($koneksi, $db);

ini_set('display_errors',FALSE);

if($koneksi){
	//echo "Berhasil koneksi";
}else{
	echo "Gagal koneksi";
}


$dateNow = date("Y-m-d");
$dateTimeNow = date("Y-m-d H:i:s");
$dateFirstYear='01-01-'.date('Y');
$dateFirstMonth='01'.date('-m-Y');
$dateLastMonth=date('t-m-Y');
$timeNow = date("H:i:s");
function timeConv($time){
	$time = substr($time,0,5);
	return $time;	
}
?>