    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Upload Gambar Penginapan</h4>
                            <p class="category">Untuk melengkapi informasi dari Penginapan</p>
                        </div>
                        <div class="card-content">
                            <div class="dropzone">
                            <?php $id_penginapan = $this->uri->segment(2, 0); ?>
                              <div class="dz-message">
                               <h3> Klik atau Drop gambar disini</h3>
                               <input type="hidden" id="id_penginapan" name="id_penginapan" value="<?php echo $id_penginapan; ?>">
                              </div>

                            </div>
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
