<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php 
include_once("db.php");
?>
    <div id="wrapper">
         <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0"> <CENTER><H3><font color="#ffffff">PENENTUAN PENGAJUAN PERBAIKAN GEDUNG SEKOLAH DASAR <BR>DENGAN METODE TOPSIS(AHP)</font> </H3></CENTER>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                  <li>
                        <a  href="index.php" ><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="cruduser.php" class="active-menu"><i class="fa fa-desktop fa-3x"></i> CRUD USER</a>
                    </li>
                    <li>
                        <a  href="crudsekolah.php"><i class="fa fa-desktop fa-3x"></i>CRUD DATA SEKOLAH</a>
                    </li>
						   <li  >
                        <a  href="ahpcek-input.php"><i class="fa fa-table fa-3x"></i> PROSES AHP</a>
                    </li>	
                      <li  >
                        <a  href="hitungtopsis.php"><i class="fa fa-table fa-3x"></i> PROSES TOPSIS DAN PERANGKINGAN</a>
                    </li>
                   </ul>
                        
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>User</h2>   
                        <h4>CRUD USER</h4>
						</div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
				 <?php
include_once "db.php";
if(isset($_GET["username"])&&isset($_GET["password"])&&isset($_GET["nama"]))
{
		$username = $_GET["username"];
	$password = $_GET["password"];
	$nama = $_GET["nama"];
	$sql = "insert into user ( username, password, nama) values ('$username','$password','$nama')"; 
					
$retval = mysql_query( $sql );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
header('Location:./cruduser.php');
}


?>
				  <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Form Tambah User
						</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Tambah User Baru</h3>
                                   <form role="form" action="cruduser.php" method="get" class="form-horizontal">
                                        <div class="form-group">
                                            <label for="username" class="control-label col-md-3">Username</label>
            								<div class="col-sm-6">
                                           <input type="text" name="username"  class="form-control" placeholder="Masukkan Username">
                                     		</div>
											</div>
											
										   <div class="form-group">
                                           <label for="password" class="control-label col-md-3">Password</label>
            								<div class="col-sm-6">
                                           <input type="password" name="password"  class="form-control" placeholder="Masukkan Password">
                                     		</div>
                                     		</div>
											
											<div class="form-group">
                                           <label for="nama" class="control-label col-md-3">Nama Lengkap</label>
            								<div class="col-sm-6">
                                           <input type="text" name="nama"  class="form-control" placeholder="Masukkan Nama Lengkap">
                                     		</div>
											</div>
											<div class="col-md-offset-6 ">
											<button type="submit" class="btn btn-default">Tambah</button>
											</div>
												</form>
                                        </div> 
				 </div>
				 <div class="row">
          <div class="col-lg-12">
            <h3>Daftar User Aktif</h3>
            <table class="table table-striped">
        <tr>
          <th>No.</th>
          <th>ID User</th>
		  <th>Username</th>
		  <th>Password</th>
          <th>Nama</th>
		  <th>Action</th>
          
        </tr>
        <?php
          $sql = "SELECT * FROM user";
          $hasil = mysql_query($sql);
          if(mysql_num_rows($hasil) > 0)
          {
            $i = 0;
            while($record = mysql_fetch_row($hasil))
            {
              $i+=1;
              echo '<tr>
                  <td>'.$i.'</td>
                  <td>'.$record[0].'</td>
                  <td>'.$record[1].'</td>
                  <td>'.$record[2].'</td>
				  <td>'.$record[3].'</td>
				 <td><a href="proses/edit-user.php?id='.$record[0].'">Edit</a> / <a href="proses/hapus-user.php?id='.$record[0].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>
                </tr>';
          
            }
          }
          else {
            echo '<tr>
          <td colspan="4"> Tidak Ada User.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr> ';
          }
        ?>
        
      </table>
          </div>
        </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        </div>
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

