<?php
  $id = $_GET['id'];
  $cari = mysqli_query($GLOBALS["___mysqli_ston"], "select * from profil where id=1");
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
                                Profil
                            </h2>
                            
                        </div>
                        <div class="body">
                            
						<form method="post" enctype="multipart/form-data" action="" >
								<div class="row clearfix">
                                <br>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <label>Nama Dinas</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama Dinas" name="nama_dinas"  value="<?php echo $dcari['nama_dinas']; ?>" readonly />
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                    <label>Sejarah</label>
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name ="sejarah" readonly><?php echo $dcari['sejarah']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Visi</label>
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name ="visi" readonly><?php echo $dcari['visi']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Misi</label>
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name ="misi" readonly><?php echo $dcari['misi']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Alamat</label>
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name ="alamat" readonly><?php echo $dcari['alamat']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Telp</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama Dinas" name="telp"  value="<?php echo $dcari['telp']; ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Website</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama Dinas" name="web"  value="<?php echo $dcari['web']; ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Email</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama Dinas" name="email"  value="<?php echo $dcari['email']; ?>" readonly />
                                        </div>
                                    </div>
                                    
                                   <button type="" class="btn btn-primary m-t-15 waves-effect"><a href="?pages=edit_profil" style="color:#fff;">EDIT</a></button>
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
