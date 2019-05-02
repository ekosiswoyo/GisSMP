

    <section class="content">
        <div class="container-fluid">
           
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                         <div class="header">
                            <h2>
                                Data Nilai Rata-Rata SSN
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
										<th>No</th>
                                        <th>Nama Standar</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                <?php
                                $n = 1;	
                                $id = $_GET['id'];
                                $cari = mysqli_query($GLOBALS["___mysqli_ston"], "select * from tb_nilaissn a, tb_standar b where a.id_standar=b.id_standar and a.id_sekolah='$id'");
                                while($data=mysqli_fetch_array($cari)){
                                ?>
                                 
                                    <tr>
										<td><?php echo $n++; ?></td>
										<td><?php echo $data ['nama_standar'] ?></td>
                                        <td><?php echo $data ['skor_ssn'] ?></td>
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
	
	