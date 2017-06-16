<div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Tabel Daftar Member</h4>
                            <!-- <p class="category">Here is a subtitle for this table</p> -->
                            <button class="btn btn-xs btn-success" onclick="invite_user()"><i class="material-icons">person_add</i></button>
                            <button class="btn btn-xs btn-warning" onclick="reload_table()"><i class="material-icons">refresh</i></button>
                        </div>
                        <div class="card-content table-responsive">
                            <!-- <table id="table2" class="table table-hover"> -->
                            <table id="table" class="table table-hover">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Domisili</th>
                                    <th>Asal Daerah</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nomor Handphone</th>
                                    <th>Username</th>
                                    <th>Aksi</th>
                                    <!-- <?php if (($_SESSION['username'])=='admin') {
                                        echo "<th>Aksi</th>";
                                    } ?> -->
                                </thead>
                                <tbody>
                                    <!-- <?php
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
                                        <td><?php echo $u->username ?></td>
                            			<td class="td-actions text-right">
                                            <a rel="tooltip" title="Edit" class="btn btn-primary btn-simple btn-xs" href="#">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <a rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-xs" href="#">
                                                <i class="material-icons">close</i>
                                            </a>
                                        </td>
                            		</tr>
                            		<?php } ?> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
