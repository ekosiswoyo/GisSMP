<?php
header('Content-Type: application/json');

require ('../../config.php');

$sql = "SELECT *
	FROM `lokasi_lahan`
	ORDER BY `id`";

$data = mysqli_query($GLOBALS["___mysqli_ston"], $sql);

$json = '{"palopo": {';
$json .= '"lahan":[ ';
while($x = mysqli_fetch_assoc($data)){
	$json .= '{';
	$json .= '"id":"'.$x['id'].'",
		"nama_lokasi":"'.htmlspecialchars($x['nama_lokasi']).'",
		"kecamatan":"'.htmlspecialchars($x['kecamatan']).'",
		"keterangan":"'.htmlspecialchars($x['keterangan']).'",
		"alamat":"'.htmlspecialchars($x['alamat']).'",
		"polygon":"'.$x['polygon'].'",
		"warna":"'.$x['warna'].'"
	},';
}

$json = substr($json,0,strlen($json)-1);
$json .= ']';
$json .= '}}';

echo $json;

?>
