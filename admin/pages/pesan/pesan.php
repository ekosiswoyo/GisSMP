

    <section class="content">
        <div class="container-fluid">
           
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                         <div class="header">
                            <h2>
                                tb_pesan
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
										<th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Pesan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                  <?php
                                $n = 1;	
                                $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from tb_pesan");
                                while($data=mysqli_fetch_array($sql)){                   
                                ?>
                                    <tr>
										<td><?php echo $n++; ?></td>
										<td><?php echo $data ['name'] ?></td>
                                        <td><?php echo $data['email']; ?></td>
                                        <td><?php echo $data['message']; ?></td>
										<td>  <a href="?pages=detail_pesan&id=<?php echo $data['id'];?>" title="Detail"><i class="material-icons">remove_red_eye</i></a>
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
	
	