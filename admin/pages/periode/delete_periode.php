
<?php
 
include "../../config.php";
$id = $_GET['id'];
$hps = mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM tb_periode WHERE id_periode=$id");
if($hps){
		?><script language="javascript">document.location.href="?pages=periode"</script><?php
	}
?>

