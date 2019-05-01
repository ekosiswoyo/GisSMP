<?php
  $id = $_GET['id'];
  $cari = mysqli_query($GLOBALS["___mysqli_ston"], "select * from tb_periode where id_periode=$id");
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
                                Tambah data tb_periode
                            </h2>
                            
                        </div>
                        <div class="body">
                            
							 <form method="POST" enctype="multipart/form-data" action=""  >
								<div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <b>Tahun Awal</b>
									    <input type="hidden" name="id_periode" value="<?php echo $id; ?>">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Tahun Awal" name="tahun_awal" value="<?php echo $dcari['tahun_awal']; ?>" required />
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                        <b>Tahun Akhir</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Tahun Akhir" name="tahun_akhir"  value="<?php echo $dcari['tahun_akhir']; ?>" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Aktif</label><br>
                                    <input name="aktif" type="radio" id="radio_1" value="0" checked />
                                    <label for="radio_1">Ya</label>
                                    <input name="aktif" type="radio" id="radio_2" value="1" />
                                    <label for="radio_2">Tidak</label>
                                    </div>

                                    
																
									
                                    <button type="submit" name="uploads" class="btn btn-round btn-primary"><i class="fa fa-save fa-fw"></i>Simpan</button>
                                 <!-- <a href="?pages=artikel_edit&id=<?php echo $dcari['id_artikel'];?>" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a> -->
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
        $id             = $_POST['id_periode'];
        $tahun_awal	= $_POST['tahun_awal'];
        $tahun_akhir			= $_POST['tahun_akhir'];
        $aktif			= $_POST['aktif'];
        $sql = "UPDATE tb_periode SET tahun_awal='$tahun_awal',tahun_akhir='$tahun_akhir',aktif='$aktif' where id_periode='$id'" or die ("gagal update ");
        $query = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
        
    
        if($query){
            echo"<script>window.alert('Simpan Berhasil..!')</script>";
           echo "<script>document.location='page.php?pages=periode';</script>";
        }else{
            echo 'Update Data Gagal!';
        }
    
    }
				




?>
