<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
        <link rel="shortcut icon" href="images/logo.gif" type="image/x-icon" />

    <title>treedesain.com</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 
 
</head>
 
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
           
                  <i style='color:red;border:1px solid red;border-radius:15px;padding:3px;margin-top:8px;margin-left:13px;background-color:#fff' class='fa fa-fire'></i> 
                  <a  href="index.html" style="margin-top:10px;margin-left:5px;margin-right:10px;color:#fff;font-size:15px"> treedesain.com</a>
             </div>
            <!-- /.navbar-header -->

             <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a class="active" href="#"><i class="fa fa-dashboard fa-fw"></i> Simple Notification</a>
                        </li>                        
                         
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">

               <?php
                	$email =($_POST["email"]);
                	$nama =($_POST["nama"]);
               ?>
               <?php if(($email!="") && ($nama!="") && ($_SERVER['REQUEST_METHOD'] == 'POST')) { ?>
				
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

                <div class="panel panel-default" style="padding:10px;margin-top:10px">
                  <div class="box-header">
                  <h3 class="box-title">Form</h3><hr>
                </div><!-- /.box-header -->
                <!-- form start -->
               
                <form role="form" name="frm" id="frm" method="post" action="index.php">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1"  name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama</label>
                      <input type="text" class="form-control" id="exampleInputPassword1"  name="nama"  placeholder="Nama">
                    </div>
                    
                   
                  </div><!-- /.box-body -->
                  	<hr>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                      <a href="index.php" class="btn btn-danger">Batal</a>
                  </div>
                </form>
              </div>
              <center>Artikel ini dibuat oleh <a class="btn btn-primary">t</a> <a href="http://wwww.treedesain.com">reedesain.com</a> |     Group <a class="btn btn-primary">f</a> <a href="https://www.facebook.com/groups/169688036556459/">acebook</a></center>

         </div>
        <!-- /#page-wrapper -->
<footer>
<center>Artikel ini dibuat oleh <a href="http://wwww.treedesain.com">treedesain.com</a> </center>
</footer>
    </div>
    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
