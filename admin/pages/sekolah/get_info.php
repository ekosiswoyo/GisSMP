<?php
     $host="localhost";
     $user="root";
     $pass="";
     $db="sig";
     
       
     $koneksi=($GLOBALS["___mysqli_ston"] = mysqli_connect($host, $user, $pass));
     mysqli_select_db($koneksi, $db);

$id=$_GET['id'];
		$sql_lokasi="select * from tb_sekolah where id_sekolah='$id' ";
            	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql_lokasi);
            	while($data=mysqli_fetch_object($result)){
            		$content="<div id=\"content\">
    <div id=\"siteNotice\">
    </div>
    <h3 id=\"firstHeading\" class=\"firstHeading\">$data->nama_sekolah</h3>
    <div id=\"bodyContent\"> <p>
    <img src=\"foto/$data->status\" style=\"float:left;margin:0 5px 0 0;\">
    $data->kelurahan </p>
    </div></div>";
	}	
		echo $content;
?>
