<div class="main-panel">
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Table List Member</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">dashboard</i>
                            <p class="hidden-lg hidden-md">Dashboard</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">notifications</i>
                            <span class="notification">5</span>
                            <p class="hidden-lg hidden-md">Notifications</p>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Mike John responded to your email</a></li>
                            <li><a href="#">You have 5 new tasks</a></li>
                            <li><a href="#">You're now friend with Andrew</a></li>
                            <li><a href="#">Another Notification</a></li>
                            <li><a href="#">Another One</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           <i class="material-icons">person</i>
                           <p class="hidden-lg hidden-md">Profile</p>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url()?>index.php/dashboard/logOut">Logout</a></li>
                            </ul>
                    </li>
                </ul>

                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group  is-empty">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="material-input"></span>
                    </div>
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="material-icons">search</i><div class="ripple-container"></div>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Table List Member</h4>
                            <p class="category">Here is a subtitle for this table</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Domisili</th>
                                    <th>Asal Daerah</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nomor Handphone</th>
                                </thead>
                                <tbody>
                                    <?php
                            		$no = 1;
                            		foreach($user as $u){
                            		?>
                            		<tr>
                            			<td><?php echo $no++ ?></td>
                            			<td><?php echo $u->nama_lengkap ?></td>
                            			<td><?php echo $u->email ?></td>
                                        <td><?php echo $u->domisili ?></td>
                                        <td><?php echo $u->asal_daerah ?></td>
                                        <td><?php echo $u->jk ?></td>
                            			<td><?php echo $u->no_hp_user ?></td>
                            			<!--<td>
                            			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                                                          <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
                            			</td>-->
                            		</tr>
                            		<?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
