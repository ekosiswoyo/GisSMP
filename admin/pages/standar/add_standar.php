<section class="content">
        <div class="container-fluid">
           
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah data tb_standar
                            </h2>
                            
                        </div>
                        <div class="body">
                            
							 <form method="post" enctype="multipart/form-data" action="" >
								<div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama Standar" name="nama"  required />
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Link" name="link"  required />
                                        </div>
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
    $nama			= $_POST['nama'];
	$link			= $_POST['link'];
	


$masuk = mysqli_query($GLOBALS["___mysqli_ston"], "insert into tb_standar(nama_standar,link) 
												values(	'$nama', 
														'$link')");
	
if($masuk){
   echo"<script>window.alert('Simpan Berhasil..!')</script>";
   echo"<script>document.location='page.php?pages=standar';</script>"; 
}else{
   echo"<script>window.alert('Simpan Gagal..!')</script>";
    echo"<script>document.location='page.php?pages=add_standar';</script>";
}														
	



}
?>