
<?php
 
include "../../config.php";
$id = $_GET['id'];
$hps = mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM tb_sekolah WHERE id_sekolah=$id");
if($hps){
		?><script language="javascript">document.location.href="?pages=sekolah"</script><?php
	}
?>

