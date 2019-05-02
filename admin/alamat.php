<?php

// Beranda
if ($_GET['pages']=='home'){ 
include "home.php";
}

else
if ($_GET['pages']=='nilai_ssn'){ 
include "pages/sekolah/nilai_ssn.php";
}
else
if ($_GET['pages']=='pesan'){ 
include "pages/pesan/pesan.php";
}
else
if ($_GET['pages']=='detail_pesan'){ 
include "pages/pesan/detail_pesan.php";
}
else
if ($_GET['pages']=='standar'){ 
include "pages/standar/standar.php";
}
else
if ($_GET['pages']=='add_standar'){ 
include "pages/standar/add_standar.php";
}
else
if ($_GET['pages']=='edit_standar'){ 
include "pages/standar/edit_standar.php";
}
else
if ($_GET['pages']=='delete_standar'){ 
include "pages/standar/delete_standar.php";
}
else
if ($_GET['pages']=='periode'){ 
include "pages/periode/periode.php";
}
else
if ($_GET['pages']=='add_periode'){ 
include "pages/periode/add_periode.php";
}
else
if ($_GET['pages']=='edit_periode'){ 
include "pages/periode/edit_periode.php";
}
else
if ($_GET['pages']=='delete_periode'){ 
include "pages/periode/delete_periode.php";
}else
if ($_GET['pages']=='detail_kec'){ 
include "pages/kec/detail_kec.php";
}
else
if ($_GET['pages']=='kec'){ 
include "pages/kec/kec.php";
}
else
if ($_GET['pages']=='map_sekolah'){ 
include "pages/sekolah/map_sekolah.php";
}
else
if ($_GET['pages']=='sekolah'){ 
include "pages/sekolah/sekolah.php";
}
else
if ($_GET['pages']=='add_sekolah'){ 
include "pages/sekolah/add_sekolah.php";
}

else
if ($_GET['pages']=='edit_sekolah'){ 
include "pages/sekolah/edit_sekolah.php";
}
else
if ($_GET['pages']=='delete_sekolah'){ 
include "pages/sekolah/delete_sekolah.php";
}
else
if ($_GET['pages']=='detail_sekolah'){ 
include "pages/sekolah/detail_sekolah.php";
}
else
if ($_GET['pages']=='profil'){ 
include "pages/profil/profil.php";
}
else
if ($_GET['pages']=='edit_profil'){ 
include "pages/profil/edit_profil.php";
}
else
if ($_GET['pages']=='rata_rata'){ 
include "pages/nilaissn/rata_rata.php";
}
else
if ($_GET['pages']=='nilaissn'){ 
include "pages/nilaissn/nilaissn.php";
}
else
if ($_GET['pages']=='add_nilaissn'){ 
include "pages/nilaissn/add_nilaissn.php";
}
else
if ($_GET['pages']=='delete_nilaissn'){ 
include "pages/nilaissn/delete_nilaissn.php";
}
else
if ($_GET['pages']=='detail_nilaissn'){ 
include "pages/nilaissn/detail_nilaissn.php";
}

else
if ($_GET['pages']=='edit_nilaissn'){ 
include "pages/nilaissn/edit_nilaissn.php";
}

else
if ($_GET['pages']=='user'){ 
include "pages/user.php";
}
else
if ($_GET['pages']=='profil_edit'){ 
include "pages/profil/profil_edit.php";
}else
if ($_GET['pages']=='editprofil'){ 
include "pages/profil/editprofil.php";
}
else{
include "404.php";	
}
?>