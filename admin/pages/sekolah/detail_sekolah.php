<?php
  $id = $_GET['id'];
  $cari = mysqli_query($GLOBALS["___mysqli_ston"], "select * from tb_sekolah a, lokasi_lahan b where a.id_kecamatan=b.id and id_sekolah=$id");
  $dcari = mysqli_fetch_array($cari);
?>
<section class="content">
        <div class="container-fluid">
           
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah data SLTP
                            </h2>
                            
                        </div>
                        <div class="body">
                            
						<form method="post" enctype="multipart/form-data" action="" >
								<div class="row clearfix">
                                <br>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <label>Nama Sekolah</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama Sekolah" name="nama_sekolah"  value="<?php echo $dcari['nama_sekolah']; ?>" readonly />
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                    <label>Status</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Status" name="status"  value="<?php echo $dcari['status']; ?>" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label>Kelurahan</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Kelurahan" name="kelurahan"   value="<?php echo $dcari['kelurahan']; ?>" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label>Kecamatan</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Kota" name="kota"   value="<?php echo $dcari['nama_lokasi']; ?>" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label>Kota</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Kota" name="kota"   value="<?php echo $dcari['kota']; ?>" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label>Provinsi</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Provinsi" name="provinsi"  value="<?php echo $dcari['provinsi']; ?>" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label>Kode Pos</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Kode Pos" name="kodepos"   value="<?php echo $dcari['kodepos']; ?>" readonly />
                                        </div>
                                    </div>
                                    

                                    <div class="form-group">
                                    <label>Telp</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Telepon" name="telepon"   value="<?php echo $dcari['telepon']; ?>" readonly />
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                    
                                    <div class="form-group">
                                    <label>Fax</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Fax" name="fax"  value="<?php echo $dcari['fax']; ?>" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label>Email</label>
                                        <div class="form-line">
                                            <input type="email" class="form-control" placeholder="Email" name="email"   value="<?php echo $dcari['email']; ?>" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label>Website</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Website" name="website"  value="<?php echo $dcari['website']; ?>" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label>Kepala Sekolah</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Kepala Sekolah" name="kepalasekolah"   value="<?php echo $dcari['kepalasekolah']; ?>" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label>Status Sekolah</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Status Sekolah" name="statussekolah"   value="<?php echo $dcari['statussekolah']; ?>" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label>Standar Sekolah</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Standar Sekolah" name="standarsekolah"   value="<?php echo $dcari['standarsekolah']; ?>" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label>Latitude</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Latitude" id="lat" name="latitude" readonly  value="<?php echo $dcari['lat']; ?>" readonly />
                                        </div>
                                    </div>
									<div class="form-group">
                                    <label>Longitude</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Longitude" name="longitude" id="lng" readonly  value="<?php echo $dcari['lang']; ?>" readonly />
                                        </div>
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

    if(isset($_POST['uploads'])){
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
    
       
    
        
        $sql = "UPDATE tb_sekolah SET nama_sekolah='$nama_sekolah', status='$status', kelurahan='$kelurahan', id_kecamatan='$id_kecamatan', kota='$kota', provinsi='$provinsi', kodepos='$kodepos', telepon='$telepon', fax='$fax', email='$email', website='$website', kepalasekolah='$kepalasekolah', statussekolah='$statussekolah', standarsekolah='$standarsekolah', lat='$lat', lang='$lang' where id_sekolah='$id'" or die ("gagal update ");

        $query = mysqli_query($GLOBALS["___mysqli_ston"], $sql);

    
        if($query){
            echo"<script>window.alert('Simpan Berhasil..!')</script>";
           echo "<script>document.location='page.php?pages=sekolah';</script>";
        }else{
            echo 'Update Data Gagal!';
        }
    
    }
				




?>
