<?php
  $id = $_GET['id'];
  $cari = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from tb_pesan where id=$id");
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
                                Data Pesan
                            </h2>
                            
                        </div>
                        <div class="body">
                            
						<form method="post" enctype="multipart/form-data" action="" >
								<div class="row clearfix">
                                <br>
                                <div class="col-sm-6">
                                <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Standar" name="id_standar"  value="<?php echo $dcari['name']; ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Standar" name="id_standar"  value="<?php echo $dcari['email']; ?>" readonly />
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                    <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name ="visi"><?php echo $dcari['message']; ?></textarea>
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