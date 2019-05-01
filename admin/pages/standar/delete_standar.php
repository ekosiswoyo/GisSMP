
<?php
 
include "../../config.php";
$id = $_GET['id'];
$hps = mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM tb_standar WHERE id_standar=$id");
if($hps){
		?><script language="javascript">document.location.href="?pages=standar"</script><?php
	}
?>

