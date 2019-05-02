<?php
  $id = $_GET['id'];
  $cari = mysqli_query($GLOBALS["___mysqli_ston"], "select * from tb_sekolah a, tb_kecamatan b where a.id_kecamatan=b.id_kecamatan and id_sekolah=$id");
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
                                            <input type="text" class="form-control" placeholder="Nama Sekolah" name="nama_sekolah"  value="<?php echo $dcari['nama_sekolah']; ?>" required />
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Status" name="status"  value="<?php echo $dcari['status']; ?>" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Kelurahan" name="kelurahan"   value="<?php echo $dcari['kelurahan']; ?>" required />
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <div class="col-sm-12">
                                            <select class="form-control show-tick" name="id_kecamatan" required>
                                                <option value="">-- Pilih Kecamatan --</option>
                                                <?php
                                                    $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from lokasi_lahan");
                                                    while($data=mysqli_fetch_array($sql)){                   
                                                ?>
                                                <option value="<?php echo $data['id'];?>"><?php echo $data['nama_lokasi'];?></option>
                                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Kota" name="kota"   value="<?php echo $dcari['kota']; ?>" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Provinsi" name="provinsi"  value="<?php echo $dcari['provinsi']; ?>" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Kode Pos" name="kodepos"   value="<?php echo $dcari['kodepos']; ?>" required />
                                        </div>
                                    </div>
                                    

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Telepon" name="telepon"   value="<?php echo $dcari['telepon']; ?>" required />
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Fax" name="fax"  value="<?php echo $dcari['fax']; ?>" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="email" class="form-control" placeholder="Email" name="email"   value="<?php echo $dcari['email']; ?>" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Website" name="website"  value="<?php echo $dcari['website']; ?>" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Kepala Sekolah" name="kepalasekolah"   value="<?php echo $dcari['kepalasekolah']; ?>" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Status Sekolah" name="statussekolah"   value="<?php echo $dcari['statussekolah']; ?>" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Standar Sekolah" name="standarsekolah"   value="<?php echo $dcari['standarsekolah']; ?>" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Latitude" id="lat" name="latitude" readonly  value="<?php echo $dcari['lat']; ?>" required />
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Longitude" name="longitude" id="lng" readonly  value="<?php echo $dcari['lang']; ?>" required />
                                        </div>
                                    </div>

                                    

                                <button type="submit" name="uploads" class="btn btn-round btn-primary"><i class="fa fa-save fa-fw"></i>Simpan</button>
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
