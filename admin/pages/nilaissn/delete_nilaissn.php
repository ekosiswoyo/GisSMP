
<?php
 
include "../../config.php";
$id = $_GET['id'];
$hps = mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM tb_nilaissn WHERE id_nilai_ssn=$id");
if($hps){
		?><script language="javascript">document.location.href="?pages=nilaissn"</script><?php
	}
?>

