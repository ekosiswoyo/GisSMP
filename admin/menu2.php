 <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
					<?php
				$nama_admin=$_SESSION['nama'];
				
				?>
                <span class="username"><?php echo $nama_admin; ?></span>
                </div>
                <div class="info-container">
                    <div class="email"></div>
                    <!--<div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">

                    <li>
                        <a href="?pages=home">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="?pages=home">
                            <i class="material-icons">map</i>
                            <span>View Peta</span>
                        </a>
                    </li>
                     <li>
                        <a href="?pages=map_sekolah">
                            <i class="material-icons">map</i>
                            <span>View SLTP</span>
                        </a>
                    </li>
                    <li>
                        <a href="?pages=fasilitasumum">
                            <i class="material-icons">public
                    </i>
                            <span>View Kec</span>
                        </a>
                    </li>
                   	<li>
                        <a href="?pages=nilaissn">
                            <i class="material-icons">view_module</i>
                            <span>View Nilai SSN</span>
                        </a>
                    </li>
					<li>
                        <a href="javascript:void(0);"  class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Kelola Data</span>
                        </a>
                        <ul class="ml-menu">
                        <li>
                            <a href="?pages=sekolah">
                                <span>Kelola Data SLTP</span>
                            </a>
                            </li>
                            <li>
                            <a href="?pages=pesan">
                                <span>Kelola Data Kec.</span>
                            </a>
                            </li>
                           
                        </ul>
                    </li>
                   <li>
                        <a href="user.php">
                            <i class="material-icons">group</i>
                            <span>Kelola User</span>
                        </a>
                    </li>
                    <li>
                        <a href="?pages=profil">
                            <i class="material-icons">view_module</i>
                            <span>Kelola Profil</span>
                        </a>
                    </li>
                    <li>
                    <a href="logout.php" onclick="return confirm('anda yakin akan keluar?')" >
                            <i class="material-icons">input</i>
                            <span>Logout</span>
                        </a>
                    </li>

                    
                        </ul>
                    </div>
                </div>
            </div>
        </aside>