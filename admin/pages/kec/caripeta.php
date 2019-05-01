<?php
header('Content-Type: application/json');
require ('../../config.php');

$kecamatan = isset($_GET['kecamatan']) ? $_GET['kecamatan'] : '';

$q = '';

if ($kecamatan != '') {
	$q = "WHERE `id` = '".$kecamatan."'";
} 


$sql = "SELECT *
		FROM `lokasi_lahan` ".$q."
		ORDER BY `id`";

$data = mysqli_query($GLOBALS["___mysqli_ston"], $sql);

$json = '{"palopo": {';
$json .= '"lahan":[ ';

$polygon = '';
if ($data) {
	while($x = mysqli_fetch_assoc($data)){
		$json .= '{';
		$json .= '"id":"'.$x['id'].'",
			"nama_lokasi":"'.htmlspecialchars($x['nama_lokasi']).'",
			"keterangan":"'.$x['keterangan'].'",
			"alamat":"'.$x['alamat'].'",
			"polygon":"'.$x['polygon'].'",
			"warna":"'.$x['warna'].'"
		},';
	}

	$json = substr($json,0,strlen($json)-1);
	$json .= ']';
	$json .= '}}';
	echo $json;

} else {
	echo "";
}
?>
