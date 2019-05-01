<section class="content">
        <div class="container-fluid">
           
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah data tb_periode
                            </h2>
                            
                        </div>
                        <div class="body">
                            
							 <form method="post" enctype="multipart/form-data" action="" >
								<div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Tahun Awal" name="tahun_awal"  required />
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Tahun Akhir" name="tahun_akhir"  required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Aktif</label><br>
                                    <input name="aktif" type="radio" id="radio_1" value="0" checked />
                                    <label for="radio_1">Ya</label>
                                    <input name="aktif" type="radio" id="radio_2" value="1" />
                                    <label for="radio_2">Tidak</label>
                                    </div>
                                <button type="submit" name="upload" class="btn btn-round btn-primary"><i class="fa fa-save fa-fw"></i>Simpan</button>
                                <a href="?pages=transport_tambah" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>
                                </div>
								
                                </div>
                            </div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
         
</body>
        </div>
    </section>
<?php

include "../../config.php";

if (isset($_POST['upload'])){ 
    $tahun_awal			= $_POST['tahun_awal'];
	$tahun_akhir			= $_POST['tahun_akhir'];
	$aktif			= $_POST['aktif'];


$masuk = mysqli_query($GLOBALS["___mysqli_ston"], "insert into tb_periode(tahun_awal,tahun_akhir,aktif) 
												values(	'$tahun_awal', '$tahun_akhir','$aktif')");
	
if($masuk){
   echo"<script>window.alert('Simpan Berhasil..!')</script>";
   echo"<script>document.location='page.php?pages=periode';</script>"; 
}else{
   echo"<script>window.alert('Simpan Gagal..!')</script>";
    echo"<script>document.location='page.php?pages=add_periode';</script>";
}														
	



}
?>