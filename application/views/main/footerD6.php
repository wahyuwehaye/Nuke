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


<script type="text/javascript" src="<?php echo base_url()?>assetsupload/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assetsupload/dropzone.min.js"></script>

<script type="text/javascript">


</script>

<script type="text/javascript">

Dropzone.autoDiscover = false;
var id_berita = $("#id_berita").val();
var foto_upload= new Dropzone(".dropzone",{
url: "<?php echo base_url()?>index.php/dashboard/proses_uploadBerita/"+id_berita,
maxFilesize: 2,
method:"post",
acceptedFiles:"image/*",
paramName:"userfile",
dictInvalidFileType:"Type file ini tidak dizinkan",
addRemoveLinks:true,
});


//Event ketika Memulai mengupload
foto_upload.on("sending",function(a,b,c){
    a.token=Math.random();
    c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
});


//Event ketika foto dihapus
foto_upload.on("removedfile",function(a){
    var token=a.token;
    $.ajax({
        type:"post",
        data:{token:token},
        url:"<?php echo base_url()?>index.php/dashboard/remove_fotoBerita",
        cache:false,
        dataType: 'json',
        success: function(){
            console.log("Foto terhapus");
        },
        error: function(){
            console.log("Error");

        }
    });
});


</script>



</body>
</html>
