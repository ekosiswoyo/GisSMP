<?php
header('Content-Type: application/json');

require ('config.php');

$sql = "SELECT id, avg(skor_ssn) as jumlah, nama_lokasi, polygon, warna from tb_nilaissn a, tb_sekolah b, tb_standar c, lokasi_lahan d WHERE a.id_sekolah=b.id_sekolah and c.id_standar=a.id_standar and a.id_kecamatan=d.id group by a.id_kecamatan ORDER by d.id";

$data = mysqli_query($GLOBALS["___mysqli_ston"], $sql);

$json = '{"palopo": {';
$json .= '"lahan":[ ';
while($x = mysqli_fetch_assoc($data)){
	$json .= '{';
	$json .= '"id":"'.$x['id'].'",
		"nama_lokasi":"'.htmlspecialchars($x['nama_lokasi']).'",
		"jumlah":"'.htmlspecialchars($x['jumlah']).'",
		"polygon":"'.$x['polygon'].'",
		"warna":"'.$x['warna'].'"
	},';
}

$json = substr($json,0,strlen($json)-1);
$json .= ']';
$json .= '}}';

echo $json;

?>
