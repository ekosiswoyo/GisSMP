<?php
  $id = $_GET['id'];
  $cari = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from tb_nilaissn a, tb_sekolah b, tb_standar c, tb_periode d where a.id_sekolah = b.id_sekolah and a.id_standar = c.id_standar and a.id_periode = d.id_periode and id_nilai_ssn=$id");
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
                                Tambah data tb_nilaissn
                            </h2>
                            
                        </div>
                        <div class="body">
                            
						<form method="post" enctype="multipart/form-data" action="" >
								<div class="row clearfix">
                                <br>
                                <div class="col-sm-12">
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
                                <div class="input-group">
                                        <div class="col-sm-12">
                                            <select class="form-control show-tick" name="id_standar" required>
                                                <option value="">-- Pilih Standar --</option>
                                                <?php
                                                    $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from tb_standar");
                                                    while($data=mysqli_fetch_array($sql)){                   
                                                ?>
                                                <option value="<?php echo $data['id_standar'];?>"><?php echo $data['nama_standar'];?></option>
                                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="input-group">
                                        <div class="col-sm-12">
                                            <select class="form-control show-tick" name="id_sekolah" required>
                                                <option value="">-- Pilih Sekolah --</option>
                                                <?php
                                                    $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from tb_sekolah");
                                                    while($data=mysqli_fetch_array($sql)){                   
                                                ?>
                                                <option value="<?php echo $data['id_sekolah'];?>"><?php echo $data['nama_sekolah'];?></option>
                                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <div class="col-sm-12">
                                            <select class="form-control show-tick" name="id_periode" required>
                                                <option value="">-- Pilih Periode --</option>
                                                <?php
                                                    $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from tb_periode");
                                                    while($data=mysqli_fetch_array($sql)){                   
                                                ?>
                                                <option value="<?php echo $data['id_periode'];?>"><?php echo $data['tahun_awal'];?> - <?php echo $data['tahun_akhir'];?></option>
                                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Skor SSN" name="skor_ssn"  value="<?php echo $dcari['skor_ssn'];?>" required />
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
        $id_standar	= $_POST['id_standar'];
        $id_kecamatan			= $_POST['id_kecamatan'];
        $id_sekolah			= $_POST['id_sekolah'];
        $id_periode		= $_POST['id_periode'];
        $skor_ssn		= $_POST['skor_ssn'];
    
       
    
        
        $sql = "UPDATE tb_nilaissn SET id_kecamatan='$id_kecamatan', id_standar='$id_standar', id_sekolah='$id_sekolah', id_periode='$id_periode', skor_ssn='$skor_ssn' where id_nilai_ssn='$id'" or die ("gagal update ");

        $query = mysqli_query($GLOBALS["___mysqli_ston"], $sql);

    
        if($query){
            echo"<script>window.alert('Simpan Berhasil..!')</script>";
           echo "<script>document.location='page.php?pages=nilaissn';</script>";
        }else{
            echo 'Update Data Gagal!';
        }
    
    }
				




?>
