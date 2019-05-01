

    <section class="content">
        <div class="container-fluid">
           
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                         <div class="header">
                            <h2>
                                Data Kecamatan
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?pages=add_nilaissn">Tambah Data</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
										<th>No</th>
                                        <th>Nama Kecamatan</th>
                                        <th>Alamat</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                  <?php
                                $n = 1;	
                                $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from lokasi_lahan");
                                while($data=mysqli_fetch_array($sql)){                   
                                ?>
                                    <tr>
										<td><?php echo $n++; ?></td>
										<td><?php echo $data ['nama_lokasi'] ?></td>
                                        <td><?php echo $data ['alamat'] ?></td>
                                        <td><?php echo $data['keterangan']; ?></td>
										<td>   <a href="?pages=detail_kec&id=<?php echo $data['id'];?>" title="Detail"><i class="material-icons">remove_red_eye</i></a>
										</td>
                                    </tr>
                                     <?php
                    }
                    ?>
                            </table>
							
					
                        </div>
                    </div>
					
					
                </div>
            </div>
        </div>
    </section>
	
	