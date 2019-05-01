<section class="content">
        <div class="container-fluid">
           
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah data tb_sekolah
                            </h2>
                            
                        </div>
                        <div class="body">
                            
							 <form method="post" enctype="multipart/form-data" action="" >
								<div class="row clearfix">
                                <div id="map" style="width:auto; height:500px;"></div>
                                <br>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama Sekolah" name="nama_sekolah"  required />
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Status" name="status"  required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Kelurahan" name="kelurahan"  required />
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <div class="col-sm-12">
                                            <select class="form-control show-tick" name="id_kecamatan" required>
                                                <option value="">-- Pilih Kecamatan --</option>
                                                <?php
                                                    $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from tb_kecamatan");
                                                    while($data=mysqli_fetch_array($sql)){                   
                                                ?>
                                                <option value="<?php echo $data['id_kecamatan'];?>"><?php echo $data['nama_kecamatan'];?></option>
                                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Kecamatan" name="id_kecamatan"  required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Kota" name="kota"  required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Provinsi" name="provinsi"  required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Kode Pos" name="kodepos"  required />
                                        </div>
                                    </div>
                                    

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Telepon" name="telepon"  required />
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Fax" name="fax"  required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="email" class="form-control" placeholder="Email" name="email"  required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Website" name="website"  required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Kepala Sekolah" name="kepalasekolah"  required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Status Sekolah" name="statussekolah"  required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Standar Sekolah" name="standarsekolah"  required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Latitude" id="lat" name="latitude" readonly required/>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Longitude" name="longitude" id="lng" readonly required/>
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
    $nama_sekolah	= $_POST['nama_sekolah'];
	$status			= $_POST['status'];
    $kelurahan		= $_POST['kelurahan'];
    $id_kecamatan	= $_POST['id_kecamatan'];
	$kota			= $_POST['kota'];
    $provinsi		= $_POST['provinsi'];
    $kodepos		= $_POST['kodepos'];
	$telepon		= $_POST['telepon'];
    $fax			= $_POST['fax'];
    $email			= $_POST['email'];
	$website		= $_POST['website'];
    $kepalasekolah	= $_POST['kepalasekolah'];
    $statussekolah	= $_POST['statussekolah'];
    $standarsekolah	= $_POST['standarsekolah'];
	$lat			= $_POST['latitude'];
	$lang			= $_POST['longitude'];


$masuk = mysqli_query($GLOBALS["___mysqli_ston"], "insert into tb_sekolah(nama_sekolah,status,kelurahan,id_kecamatan,kota,provinsi,kodepos,telepon,fax,email,website,kepalasekolah,statussekolah,standarsekolah,lat,lang) values(	'$nama_sekolah', '$status','$kelurahan','$id_kecamatan','$kota','$provinsi','$kodepos','$telepon','$fax','$email','$website','$kepalasekolah','$statussekolah','$standarsekolah','$lat','$lang')");
	
if($masuk){
   echo"<script>window.alert('Simpan Berhasil..!')</script>";
   echo"<script>document.location='page.php?pages=sekolah';</script>"; 
}else{
   echo"<script>window.alert('Simpan Gagal..!')</script>";
    echo"<script>document.location='page.php?pages=add_sekolah';</script>";
}														
	



}
?>