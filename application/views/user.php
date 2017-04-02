<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <img class="img" src="<?php echo base_url()?>assets/images/5.png" />
                        </a>
                    </div>

                    <div class="content">
                        <!-- <h6 class="category text-gray">CEO / Co-Founder</h6> -->
                        <h4 class="card-title"><?php echo ($_SESSION['username']); ?><?php if (($_SESSION['username'])=='admin') {
        					echo "<i rel='tooltip' title='Verified User' class='material-icons'>verified_user</i>";
        				} ?></h4>
                        <div class="card-content">
                            <div class="table-responsive table-upgrade">
                                <table class="table">
                                    <thead>
                                        <th></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach($user as $a){ ?>
                                        <tr>
                                            <td>Username</td>
                                            <td class="text-center"><?php echo $a->username ?></td>
                                        </tr>
                                        <tr>
                                            <td>Password (dalam bentuk MD5)</td>
                                            <td class="text-center"><?php echo $a->password ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td class="text-center"><?php echo $a->email ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Handphone</td>
                                            <td class="text-center"><?php echo $a->no_hp_admin ?></td>
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
    </div>
</div>
