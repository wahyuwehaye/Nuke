<div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Table List Admin</h4>
                            <!-- <p class="category">Here is a subtitle for this table</p> -->
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table table-hover">
                                <thead>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Nomor Handphone</th>
                                    <?php if (($_SESSION['username'])=='admin') {
                                        echo "<th>Aksi</th>";
                                    } ?>
                                </thead>
                                <tbody>
                                    <!-- <?php
                            		$no = 1;
                            		foreach($admin as $a){
                            		?>
                            		<tr>
                            			<td><?php echo $no++ ?></td>
                            			<td><?php echo $a->username ?></td>
                            			<td><?php echo $a->email ?></td>
                            			<td><?php echo $a->no_hp_admin ?></td>
                                        <?php if (($_SESSION['username'])=='admin') {
                                            echo "<td class='td-actions text-right'>
                                                <a rel='tooltip' title='Edit' class='btn btn-primary btn-simple btn-xs' href='javascript:void(0)'>
                                                    <i class='material-icons'>edit</i>
                                                </a>
                                                <a rel='tooltip' title='Hapus' class='btn btn-danger btn-simple btn-xs' href='javascript:void(0)'>
                                                    <i class='material-icons'>close</i>
                                                </a>
                                            </td>";
                                        } ?>
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
