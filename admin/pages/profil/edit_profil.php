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
                                            <input type="text" class="form-control" placeholder="Nama Dinas" name="nama_dinas"  value="<?php echo $dcari['nama_dinas']; ?>" />
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                    <label>Sejarah</label>
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name ="sejarah"><?php echo $dcari['sejarah']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Visi</label>
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name ="visi"><?php echo $dcari['visi']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Misi</label>
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name ="misi"><?php echo $dcari['misi']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Alamat</label>
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name ="alamat"><?php echo $dcari['alamat']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Telp</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama Dinas" name="telp"  value="<?php echo $dcari['telp']; ?>"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Website</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama Dinas" name="web"  value="<?php echo $dcari['web']; ?>"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Email</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama Dinas" name="email"  value="<?php echo $dcari['email']; ?>"  />
                                        </div>
                                    </div>
                                    <button type="submit" name="uploads" class="btn btn-round btn-primary"><i class="fa fa-save fa-fw"></i>Simpan</button>
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
        $nama_dinas	= $_POST['nama_dinas'];
        $sejarah			= $_POST['sejarah'];
        $visi		= $_POST['visi'];
        $misi	= $_POST['misi'];
        $telp			= $_POST['telp'];
        $web		= $_POST['web'];
        $email		= $_POST['email'];
        $alamat		= $_POST['alamat'];
    
       
    
        
        $sql = "UPDATE profil SET nama_dinas='$nama_dinas', sejarah='$sejarah', visi='$visi', misi='$misi', alamat='$alamat', telp='$telp', web='$web', email='$email' where id='1'" or die ("gagal update ");

        $query = mysqli_query($GLOBALS["___mysqli_ston"], $sql);

    
        if($query){
            echo"<script>window.alert('Simpan Berhasil..!')</script>";
           echo "<script>document.location='page.php?pages=profil';</script>";
        }else{
            echo 'Update Data Gagal!';
        }
    
    }
				




?>
