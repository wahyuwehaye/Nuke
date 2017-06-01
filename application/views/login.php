<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!-- This is what you need -->
      <script src="dist/sweetalert-dev.js"></script>
      <link rel="stylesheet" href="<?php echo base_url()?>sweetalert/dist/sweetalert.css">

      <script src="<?php echo base_url()?>sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>sweetalert/dist/sweetalert.css">

  <link href="<?php echo base_url()?>alert/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>alert/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url()?>alert/css/plugins/morris.css" rel="stylesheet">

      <link rel="stylesheet" href="<?php echo base_url()?>uilogin/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>sweetalert/dist/sweetalert.css">
</head>

<body>
    <?php
                	$username =["username"];
                	$password =["password"];
               ?>
               <?php if(($username!="") && ($password!="") && ($_SERVER['REQUEST_METHOD'] == 'POST')) { ?>

        		<div class="alert alert-success alert-dismissable" style="margin-top:5px">
                     <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
                    Sukses Simpan Data
                  </div>

               <?php } else if ($_SERVER['REQUEST_METHOD'] == 'POST'){ ?>
               	<div class="alert alert-danger alert-dismissable" style="margin-top:5px">
                     <h4><i class="icon fa fa-ban"></i> Alert!</h4>
               		 Terjadi Kesalahan Harap Diulang Kembali
                  </div>
               <?php } ?>
  <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Registrasi</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1>Registrasi Member</h1>

          <form action="<?php echo base_url()?>index.php/Dashboard/cekUser" method="post">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nama Lengkap<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="nama_lengkap"/>
            </div>

            <div class="field-wrap">
              <label>
                Alamat Email<span class="req">*</span>
              </label>
              <input type="email"required autocomplete="off" name="email"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="username"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password"/>
          </div>

          <div class="field-wrap">
            <label>
              No Handphone<span class="req">*</span>
            </label>
            <input type="number" required autocomplete="off" name="no_hp_user"/>
          </div>

          <div class="field-wrap">
            <select name="jk" id="jk" required class="form-control">
                                    <option value="">--Pilih Jenis Kelamin--</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
          </div>

          <div class="field-wrap">
            <label>
              Asal Daerah<span class="req">*</span>
            </label>
            <input type="text" pattern="[a-zA-Z]+" required autocomplete="off" name="asal_daerah"/>
          </div>

          <div class="field-wrap">
            <label>
              Domisili<span class="req">*</span>
            </label>
            <input type="text" pattern="[a-zA-Z]+" required autocomplete="off" name="domisili"/>
          </div>

            <input type="hidden" required autocomplete="off" name="role" value="user"/>

          <button type="submit" id="btnSave" onclick="save()" class="button button-block"/>Daftar</button>

          </form>

        </div>

        <div id="login">
          <h1>Selamat Datang</h1>

          <form action="<?php echo base_url()?>index.php/Dashboard/cekLogin" method="post">

            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="username"/>
            </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password"/>
          </div>

          <!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->

          <button type="submit" class="button button-block"/>Log In</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
<div class="form">
    <form action="<?php echo base_url()?>" method="post">
        <button type="submit" class="button button-block"/>Kembali</button>
    </form>
</div> <!-- /form -->

<div id="NotifSucces" class="modal fade " aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="alert alert-success">
                <strong>Well done!</strong> You successfully Add Anggota
            </div>
        </div>
    </div>
</div>
<div id="NotifFailed" class="modal fade " aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="alert alert-danger">
                <strong>Oh snap!</strong> Change a few things up and try submitting again.
            </div>
        </div>
    </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?php echo base_url()?>uilogin/js/index.js"></script>
    <script src="<?php echo base_url()?>alert/js/jquery-1.11.0.js"></script>
    <script src="<?php echo base_url()?>alert/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>alert/js/sb-admin-2.js"></script>

<!-- //session untuk menampilkan pesan error ketika username / pass salah -->
<?php
    if (isset($_SESSION['error'])) {
?>
    <body onload='swal({title: "Login Gagal!",
                        text: "Silakan coba lagi",
                        // timer: 3000,
                        type: "error",
                        showConfirmButton: true });'>
                        <!-- sweetAlert("Oops...", "Something went wrong!", "error"); -->
<?php
    unset($_SESSION['error']);
    }
?>

<!-- //session untuk menampilkan pesan error ketika username admin salah -->
<?php
    if (isset($_SESSION['salahuseradmin'])) {
?>
    <body onload='swal({title: "Login Gagal!",
                        text: "Username yang anda masukkan salah!",
                        // timer: 3000,
                        type: "error",
                        showConfirmButton: true });'>
                        <!-- sweetAlert("Oops...", "Something went wrong!", "error"); -->
<?php
    unset($_SESSION['salahuseradmin']);
    }
?>

<!-- //session untuk menampilkan pesan error ketika username user salah -->
<?php
    if (isset($_SESSION['salahuseruser'])) {
?>
    <body onload='swal({title: "Login Gagal!",
                        text: "Username yang anda masukkan salah!",
                        // timer: 3000,
                        type: "error",
                        showConfirmButton: true });'>
                        <!-- sweetAlert("Oops...", "Something went wrong!", "error"); -->
<?php
    unset($_SESSION['salahuseruser']);
    }
?>

<!-- //session untuk menampilkan pesan error ketika passowrd admin salah -->
<?php
    if (isset($_SESSION['salahpassadmin'])) {
?>
    <body onload='swal({title: "Login Gagal!",
                        text: "Password yang anda masukkan salah!",
                        // timer: 3000,
                        type: "error",
                        showConfirmButton: true });'>
                        <!-- sweetAlert("Oops...", "Something went wrong!", "error"); -->
<?php
    unset($_SESSION['salahpassadmin']);
    }
?>

<!-- //session untuk menampilkan pesan error ketika passowrd user salah -->
<?php
    if (isset($_SESSION['salahpassuser'])) {
?>
    <body onload='swal({title: "Login Gagal!",
                        text: "Password yang anda masukkan salah!",
                        // timer: 3000,
                        type: "error",
                        showConfirmButton: true });'>
                        <!-- sweetAlert("Oops...", "Something went wrong!", "error"); -->
<?php
    unset($_SESSION['salahpassuser']);
    }
?>

<!-- //session untuk menampilkan pesan error ketika username pelanggan double-->
<?php
    if (isset($_SESSION['adauser'])) {
?>
    <body onload='swal({title: "Username Sudah Digunakan",
                        text: "Silakan coba lagi",
                        // timer: 3000,
                        type: "error",
                        showConfirmButton: true });'>
                        <!-- sweetAlert("Oops...", "Something went wrong!", "error"); -->
<?php
    unset($_SESSION['adauser']);
    }
?>

<!-- //session untuk menampilkan pesan error ketika username admin double-->
<?php
    if (isset($_SESSION['adaadmin'])) {
?>
    <body onload='swal({title: "Username Sudah Digunakan",
                        text: "Silakan coba lagi",
                        // timer: 3000,
                        type: "error",
                        showConfirmButton: true });'>
                        <!-- sweetAlert("Oops...", "Something went wrong!", "error"); -->
<?php
    unset($_SESSION['adaadmin']);
    }
?>

<!-- Email -->

<!-- //session untuk menampilkan pesan error ketika email pelanggan double-->
<?php
    if (isset($_SESSION['adaemailuser'])) {
?>
    <body onload='swal({title: "Email Sudah Digunakan",
                        text: "Silakan coba lagi",
                        // timer: 3000,
                        type: "error",
                        showConfirmButton: true });'>
                        <!-- sweetAlert("Oops...", "Something went wrong!", "error"); -->
<?php
    unset($_SESSION['adaemailuser']);
    }
?>

<!-- //session untuk menampilkan pesan error ketika email admin double-->
<?php
    if (isset($_SESSION['adaemailadmin'])) {
?>
    <body onload='swal({title: "Email Sudah Digunakan",
                        text: "Silakan coba lagi",
                        // timer: 3000,
                        type: "error",
                        showConfirmButton: true });'>
                        <!-- sweetAlert("Oops...", "Something went wrong!", "error"); -->
<?php
    unset($_SESSION['adaemailadmin']);
    }
?>

<!-- //session untuk menampilkan pesan ketika Sukses Input-->
<?php
    if (isset($_SESSION['suksesinput'])) {
?>
    <body onload='swal({title: "Sukses Input Data",
                        text: "Selamat! Akun anda berhasil didaftarkan.",
                        // timer: 3000,
                        type: "success",
                        showConfirmButton: true });'>
                        <!-- sweetAlert("Oops...", "Something went wrong!", "error"); -->
<?php
    unset($_SESSION['suksesinput']);
    }
?>
<script src="<?php echo base_url()?>sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
function save()
{
    $('#btnSave').text('saving...'); //change button text
//    $('#btnSave').attr('disabled',true); //set button disable
    var url;
    url = "<?php echo site_url('dashboard/insert')?>";

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
				swal("Good job!", "You clicked the button!", "success");
            }

            $('#btnSave').text('save'); //change button text
//            $('#btnSave').attr('disabled',false); //set button enable
        },
        error: function (jqXHR, textStatus, errorThrown)
        {

        }
    });
}
</script>
</body>
</html>