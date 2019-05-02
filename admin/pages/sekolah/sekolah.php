

    <section class="content">
        <div class="container-fluid">
           
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                         <div class="header">
                            <h2>
                                Data Sekolah
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?pages=add_sekolah">Tambah Data</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
										<th>No</th>
                                        <th>Nama Sekolah</th>
                                        <th>Alamat</th>
                                        <th>Kecamatan</th>
                                        <th>Nilai SSN</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                  <?php
                                $n = 1;	
                                
                                $sql=mysqli_query($GLOBALS["___mysqli_ston"], "select a.id_sekolah,nama_sekolah,nama_lokasi, alamat, avg(skor_ssn) as total,nama_standar,skor_ssn from tb_sekolah a, tb_nilaissn b, tb_standar c, lokasi_lahan d where a.id_sekolah=b.id_sekolah and b.id_standar=c.id_standar and a.id_kecamatan=d.id group by a.id_sekolah");
                                while($data=mysqli_fetch_array($sql)){                   
                                ?>
                                    <tr>
										<td><?php echo $n++; ?></td>
										<td> <a href="?pages=detail_sekolah&id=<?php echo $data['id_sekolah'];?>" title="Detail"><?php echo $data ['nama_sekolah'] ?></a></td>
                                        <td><?php echo $data ['alamat'] ?></td>
                                        <td><?php echo $data ['nama_lokasi'] ?></td>
                                        <td><a href="?pages=nilai_ssn&id=<?php echo $data['id_sekolah'];?>" title="Detail"><?php echo $data ['total'] ?></a></td>
										<!-- <td>   <a href="?pages=detail_sekolah&id=<?php echo $data['id_sekolah'];?>" title="Detail"><i class="material-icons">remove_red_eye</i></a><a href="?pages=edit_sekolah&id=<?php echo $data['id_sekolah'];?>" title="Ubah"><i class="material-icons">mode_edit</i></a><a href="?pages=delete_sekolah&id=<?php echo $data['id_sekolah'];?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="material-icons">delete</i></a>
										</td> -->
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
	
	