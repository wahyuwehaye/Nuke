<div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Kelola Data Event dan Festival</h4>
                            <!-- <p class="category">Here is a subtitle for this table</p> -->
                            <button class="btn btn-xs btn-success" onclick="add_event()"><i class="material-icons">add_location</i></button>
                            <button class="btn btn-xs btn-warning" onclick="reload_table()"><i class="material-icons">refresh</i></button>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table table-hover">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Event</th>
                                    <th>Tanggal Event</th>
                                    <th>Lokasi Event</th>
                                    <th>Contact Person Event</th>
                                    <th>Aksi</th>
                                    <!-- <?php if (($_SESSION['username'])=='admin') {
                                        echo "<th>Aksi</th>";
                                    } ?> -->
                                </thead>
                                <tbody>
                                    <!-- <?php
                            		$no = 1;
                            		foreach($admin as $a){
                            		?>
                            		<tr>
                            			<td><?php echo $no++ ?></td>
                            			<td><?php echo $a->nama_event ?></td>
                            			<td><?php echo $a->alamat_event ?></td>
                            			<td><?php echo $a->kategori_event ?></td>
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
