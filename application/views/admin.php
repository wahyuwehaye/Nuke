    <!--  -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Tambah Admin</h4>
                            <p class="category">Complete Admin profile</p>
                        </div>
                        <div class="card-content">
                            <form action="<?php echo base_url()?>index.php/Dashboard/insertAdmin" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Username</label>
                                            <input type="text" class="form-control" name="username">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email address</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nomor Handphone</label>
                                            <input type="text" class="form-control" name="no_hp_admin">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right" <?php if (($_SESSION['username'])!=='admin') {
                                    echo "disabled='true'";
                                } ?>>Tambah Admin</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" src="<?php echo base_url()?>assets3/img/faces/marc.jpg" />
                            </a>
                        </div>

                        <div class="content">
                            <h6 class="category text-gray">CEO / Co-Founder</h6>
                            <h4 class="card-title">Alec Thompson</h4>
                            <p class="card-content">
                                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
