<?php
  $id = $_GET['id'];
  $cari = mysqli_query($GLOBALS["___mysqli_ston"], "select * from lokasi_lahan where id = $id");
  $dcari = mysqli_fetch_array($cari);
?>
<section class="content">
        <div class="container-fluid">
           
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
                            
                        </div>
                        <div class="body">
                            
						<form method="post" enctype="multipart/form-data" action="" >
								<div class="row clearfix">
                                <br>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama Kecamatan" name="nama_kecamatan"  value="<?php echo $dcari['nama_lokasi']; ?>" readonly />
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Alamat" name="status"  value="<?php echo $dcari['alamat']; ?>" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Keterangan" name="kelurahan"   value="<?php echo $dcari['keterangan']; ?>" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Polygon" name="kota"   value="<?php echo $dcari['polygon']; ?>" readonly />
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
