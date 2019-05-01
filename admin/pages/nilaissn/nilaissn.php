﻿

    <section class="content">
        <div class="container-fluid">
           
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                         <div class="header">
                            <h2>
                                Data Nilai SSN
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
                                        <th>Kecamatan</th>
                                        <th>Standar</th>
                                        <th>Sekolah</th>
                                        <th>Periode</th>
                                        <th>Skor SSN</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                  <?php
                                $n = 1;	
                                $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from tb_nilaissn a, tb_sekolah b, tb_standar c, tb_periode d, lokasi_lahan e where a.id_sekolah = b.id_sekolah and a.id_standar = c.id_standar and a.id_kecamatan = e.id and a.id_periode = d.id_periode");
                                while($data=mysqli_fetch_array($sql)){                   
                                ?>
                                    <tr>
										<td><?php echo $n++; ?></td>
										<td><?php echo $data ['nama_lokasi'] ?></td>
										<td><?php echo $data ['nama_standar'] ?></td>
                                        <td><?php echo $data ['nama_sekolah'] ?></td>
                                        <td><?php echo $data['id_periode']; ?></td>
                                        <td><?php echo $data['skor_ssn']; ?></td>
										<td>   <a href="?pages=detail_nilaissn&id=<?php echo $data['id_nilai_ssn'];?>" title="Detail"><i class="material-icons">remove_red_eye</i></a><a href="?pages=edit_nilaissn&id=<?php echo $data['id_nilai_ssn'];?>" title="Ubah"><i class="material-icons">mode_edit</i></a><a href="?pages=delete_nilaissn&id=<?php echo $data['id_nilai_ssn'];?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="material-icons">delete</i></a>
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
	
	