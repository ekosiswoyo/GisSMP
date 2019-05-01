<?php
     $host="localhost";
     $user="root";
     $pass="";
     $db="sig";
     
       
     $koneksi=($GLOBALS["___mysqli_ston"] = mysqli_connect($host, $user, $pass));
     mysqli_select_db($koneksi, $db);

$id=$_GET['id'];
		$sql_lokasi="select nama_sekolah, avg(skor_ssn) as total,nama_standar,skor_ssn from tb_sekolah a, tb_nilaissn b, tb_standar c where a.id_sekolah=b.id_sekolah and b.id_standar=c.id_standar and a.id_sekolah='$id' group by a.id_sekolah";
            	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql_lokasi);
            	while($data=mysqli_fetch_object($result)){
            		$content="<div id=\"content\">
    <div id=\"siteNotice\">
    </div>
    <h3 id=\"firstHeading\" class=\"firstHeading\">$data->nama_sekolah</h3>
    <div id=\"bodyContent\"> <p>SSN Sekolah :
    $data->total </p>
    </div></div>";
     }	
     $sql_lokasi="select * from tb_nilaissn a, tb_standar b where a.id_standar=b.id_standar and a.id_sekolah='$id'";
     $result=mysqli_query($GLOBALS["___mysqli_ston"], $sql_lokasi);
     while($data=mysqli_fetch_array($result)){
          $content .="<div id=\"content\">
<div id=\"siteNotice\">
</div>
<p>-> $data[nama_standar] :
$data[skor_ssn] </p>
</div>";
}	
		echo $content;
?>
