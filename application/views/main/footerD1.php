<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        Company
                    </a>
                </li>
                <li>
                    <a href="#">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                       Blog
                    </a>
                </li>
            </ul>
        </nav>
        <p class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Wonderful Boyolali</a>, made with love for a better web
        </p>
    </div>
</footer>
</div>
</div>

<!--   Core JS Files   -->
<script src="<?php echo base_url()?>assets3/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets3/js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url()?>assets3/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url()?>assets3/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url()?>assets3/js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url()?>assets3/js/demo.js"></script>

<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>

<script type="text/javascript">
$(document).ready(function(){

// Javascript method's body can be found in assets/js/demos.js
demo.initDashboardPageCharts();

});
</script>

<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Masterdatauser/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });


});



function add_user()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah Member'); // Set Title to Bootstrap modal title
}

function invite_user()
{
    save_method = 'invite';
    $('#forminvite')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_forminvite').modal('show'); // show bootstrap modal
    $('.modal-title').text('Invite Member'); // Set Title to Bootstrap modal title
}

function edit_user(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('Masterdatauser/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id_user"]').val(data.id_user);
            $('[name="nama_lengkap"]').val(data.nama_lengkap);
            $('[name="email"]').val(data.email);
            $('[name="domisili"]').val(data.domisili);
            $('[name="asal_daerah"]').val(data.asal_daerah);
            $('[name="no_hp_user"]').val(data.no_hp_user);
            // $('[name="role"]').val(data.role);
            $('[name="username"]').val(data.username);
            $('[name="password"]').val(data.password);
            $('[name="jk"]').val(data.jk);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Member'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('Masterdatauser/ajax_add')?>";
    }else {
        url = "<?php echo site_url('Masterdatauser/ajax_update')?>";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }

            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable

        }
    });
}

function invite()
{
    $('#btnInvite').text('sending...'); //change button text
    $('#btnInvite').attr('disabled',true); //set button disable
    var url;

    url = "<?php echo site_url('Masterdatauser/cekUser')?>";
    

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#forminvite').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_forminvite').modal('hide');
                reload_table();
                alert('Email Sent...');
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }

            $('#btnInvite').text('save'); //change button text
            $('#btnInvite').attr('disabled',false); //set button enable


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error sending / Email Sudah Terdaftar');
            $('#btnInvite').text('save'); //change button text
            $('#btnInvite').attr('disabled',false); //set button enable

        }
    });
}

function delete_user(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('Masterdatauser/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

</script>
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Form Kelola Member</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id_user"/>
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Email address</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Domisili</label>
                                    <input type="text" class="form-control" name="domisili" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Asal Daerah</label>
                                    <input type="text" class="form-control" name="asal_daerah" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nomor Handphone</label>
                                    <input type="text" class="form-control" name="no_hp_user" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- <div class="form-group label-floating">
                                    <label class="control-label">Role</label>
                                    <input type="text" class="form-control" name="role">
                                </div> -->
                                <div class="form-group label-floating">
                                    <label class="control-label">Jenis Kelamin</label>
                                  <select name="jk" id="jk" class="form-control" required>
                                                          <option value="">----</option>
                                                          <option value="Laki-Laki">Laki-Laki</option>
                                                          <option value="Perempuan">Perempuan</option>
                                                      </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Username</label>
                                    <input type="text" class="form-control" name="username" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Jenis Kelamin</label>
                                  <select name="jk" id="jk" class="form-control">
                                                          <option value="">----</option>
                                                          <option value="Laki-Laki">Laki-Laki</option>
                                                          <option value="Perempuan">Perempuan</option>
                                                      </select>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal-->

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_forminvite" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Form Kelola Member</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="forminvite" class="form-horizontal">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Email address</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnInvite" onclick="invite()" class="btn btn-primary">Kirim Invitation</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>
</html>
