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

        <!-- Place this tag in your head or just before your close body tag. -->
        <script src="https://apis.google.com/js/platform.js" async="" defer="" gapi_processed="true"></script>

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
            "url": "<?php echo site_url('Masterwisata/ajax_list')?>",
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



function add_wisata()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah Data Wisata'); // Set Title to Bootstrap modal title
}

function edit_wisata(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('Masterwisata/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id_wisata"]').val(data.id_wisata);
            $('[name="nama_wisata"]').val(data.nama_wisata);
            $('[name="alamat_wisata"]').val(data.alamat_wisata);
            $('[name="kategori_wisata"]').val(data.kategori_wisata);
            // $('[name="gambar_wisata"]').val(data.gambar_wisata);
            $('[name="lat_wisata"]').val(data.lat_wisata);
            $('[name="long_wisata"]').val(data.long_wisata);
            $('[name="ket_wisata"]').val(data.ket_wisata);
            $('[name="harga_wisata"]').val(data.harga_wisata);
            $('[name="notelp_wisata"]').val(data.notelp_wisata);
            $('[name="id_admin"]').val(data.id_admin);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Data Wisata'); // Set title to Bootstrap modal title

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
        url = "<?php echo site_url('Masterwisata/ajax_add')?>";
    } else {
        url = "<?php echo site_url('Masterwisata/ajax_update')?>";
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

function delete_wisata(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('Masterwisata/ajax_delete')?>/"+id,
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
            },
        });

    }
}

// function getLatLong(){
//     var address = $("#alamat_wisata").val();
//     var longitude = "";
//     var latitude = "";
    
//         //Formatted address
//         $formattedAddr = str_replace(' ','+',$address);
//         //Send request and receive json data by address
//         $geocodeFromAddr = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=false'); 
//         $output = json_decode($geocodeFromAddr);
//         //Get latitude and longitute from json data
//         // $data['latitude']  = $output->results[0]->geometry->location->lat; 
//         // $data['longitude'] = $output->results[0]->geometry->location->lng;
//         longitude = $output->results[0]->geometry->location->lat; 
//         latitude = $output->results[0]->geometry->location->lng;
//         //Return latitude and longitude of the given address
//         $.ajax({
//             success:function(){
//                 $(longitude).val(data.long_wisata);
//                 $(latitude).val(data.lat_wisata);
//             }
//         });
    
// }

</script>
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Form Kelola Data Wisata</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id_wisata"/>
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nama Wisata</label>
                                    <input type="text" class="form-control" name="nama_wisata">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Alamat Wisata</label>
                                    <input type="text" class="form-control" name="alamat_wisata" id="alamat_wisata">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Kategori Wisata</label>
                                  <select name="kategori_wisata" id="kategori_wisata" class="form-control">
                                                          <option value="">----</option>
                                                          <option value="Wisata Alam">Wisata Alam</option>
                                                          <option value="Wisata Kuliner">Wisata Kuliner</option>
                                                          <option value="Wisata Belanja">Wisata Belanja</option>
                                                      </select>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Gambar Wisata</label>
                                    <input type="text" class="form-control" name="gambar_wisata">
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Latitude Wisata</label> -->
                                    <input type="hidden" value="" name="lat_wisata" id="lat_wisata">
                                <!-- </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label clas s="control-label">Longitude Wisata</label>-->
                                    <input type="hidden" value="" name="long_wisata" id="long_wisata">
                                <!-- </div>
                            </div>
                        </div> -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Keterangan Wisata</label>
                                    <input type="text" class="form-control" name="ket_wisata">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Harga Tiket Masuk</label>
                                    <input type="text" class="form-control" name="harga_wisata">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nomor Telepon Wisata</label>
                                    <input type="text" class="form-control" name="notelp_wisata">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Tanggal Posting</label>
                                    <input type="date" class="form-control" name="tanggal_post">
                                </div>
                            </div>
                        </div>

                        <input type="hidden" value="1" name="id_admin"/>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->


</body>
</html>
