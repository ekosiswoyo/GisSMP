

    <section class="content">
        <div class="container-fluid">
           
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                         <div class="header">
                            <h2>
                                tb_periode
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?pages=add_periode">Tambah Data</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
										<th>No</th>
                                        <th>Tahun Awal</th>
                                        <th>Tahun Akhir</th>
                                        <th>Aktif</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                  <?php
                                $n = 1;	
                                $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from tb_periode");
                                while($data=mysqli_fetch_array($sql)){                   
                                ?>
                                    <tr>
										<td><?php echo $n++; ?></td>
										<td><?php echo $data ['tahun_awal'] ?></td>
                                        <td><?php echo $data ['tahun_akhir'] ?></td>
                                        <td><?php echo $data['aktif']; ?></td>
										<td>   <a href="?pages=edit_periode&id=<?php echo $data['id_periode'];?>" title="Ubah"><i class="material-icons">mode_edit</i></a><a href="?pages=delete_periode&id=<?php echo $data['id_periode'];?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="material-icons">delete</i></a>
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
	
	