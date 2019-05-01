<?php
  $id = $_GET['id'];
  $cari = mysqli_query($GLOBALS["___mysqli_ston"], "select * from tb_standar where id_standar=$id");
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
                                Tambah data tb_standar
                            </h2>
                            
                        </div>
                        <div class="body">
                            
							 <form method="POST" enctype="multipart/form-data" action=""  >
								<div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <b>Judul</b>
									    <input type="hidden" name="id_standar" value="<?php echo $id; ?>">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama Standar" name="nama" value="<?php echo $dcari['nama_standar']; ?>" required />
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                        <b>Isi Artikel</b>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Link" name="link"  value="<?php echo $dcari['link']; ?>" required />
                                        </div>
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
        $id             = $_POST['id_standar'];
        $nama_standar	= $_POST['nama'];
        $link			= $_POST['link'];
        $sql = "UPDATE tb_standar SET nama_standar='$nama_standar',link='$link' where id_standar='$id'" or die ("gagal update ");
        $query = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
    
        if($query){
            echo"<script>window.alert('Simpan Berhasil..!')</script>";
           echo "<script>document.location='page.php?pages=standar';</script>";
        }else{
            echo 'Update Data Gagal!';
        }
    
    }
				




?>
