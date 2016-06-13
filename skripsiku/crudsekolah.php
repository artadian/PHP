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
font-size: 16px;"> </div>
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
                        <a  href="crudsekolah.php" class="active-menu"><i class="fa fa-desktop fa-3x"></i>CRUD DATA SEKOLAH</a>
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
                    <h2>CRUD Data Sekolah</h2>
						</div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
				 
				  <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Form Data Sekolah
                        </div>
<?php
include_once("db.php");
if (isset($_GET["tambah"]))
{
	$namasekolah = $_GET["sekolah"];
	$skala = $_GET["skala"];
	$siswa = $_GET["jumlahsiswa"];
	$kelas = $_GET["ruangkelas"];
	$akademik = $_GET["akademik"];
	$nonakademik = $_GET["nonakademik"];
	$tahun = $_GET["bantuan"];
	$rombel = $_GET["rombel"];
	$kebutuhan = $_GET["ruangkelas"] - $_GET["rombel"];
	if ($kebutuhan < 0){
		$tampkebutuhan = 5;
	}
	elseif ( $kebutuhan == 0){
		$tampkebutuhan = 3;
	}
	elseif ( $kebutuhan > 0){
		$tampkebutuhan = 1;
	};
	$sql = "SELECT * FROM data_sekolah WHERE nama_sekolah='$namasekolah'";
					$hasildata = mysql_query($sql);
					if(mysql_num_rows($hasildata)==0)
					{

						$sql = "INSERT INTO data_sekolah(nama_sekolah,skala, siswa, kelas, akademik, nonakademik, bantuanakhir,jumlahkelas, jumlahrombel) VALUES('$namasekolah','$skala','$siswa','$tampkebutuhan','$akademik','$nonakademik','$tahun','$kelas','$rombel')";
											
	$hasil = mysql_query($sql);
						if($hasil)
						{
							echo '<div class="alert alert-success alert-dismissable">
	              					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              					Data berhasil dimasukan !
	           					 </div>';
						}
						else{
							echo '<div class="alert alert-danger alert-dismissable">
	              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              Data gagal dimasukan !
	            </div>';
						}
					}
					else
					{
						echo '<div class="alert alert-success alert-dismissable">
	              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              lokasi sudah ada, silahkan masukkan lokasi lain !
	              </div>';
				
					}
				header('Location:./crudsekolah.php');
				}
          	?>
		
                        <form role="form" action="" method="get" class="form-horizontal">
        		<div class="form-group">
            		<label for="namasekolah" class="control-label col-md-2">Nama Lokasi</label>
            		<div class="col-sm-3">
						<input type="text" name="sekolah"  class="form-control" placeholder="Masukkan nama sekolah">
					</div>
        		</div>
        		<div class="form-group">
        			<label for="single_select" class="control-label col-md-2">Skala Kerusakan</label>
					<div class="col-sm-2">
        			<select name="skala" class="form-control">
            			<option value="1"> <=30% (nilai 1)</option>
            			<option value="3"> >30% - 60% (nilai 3)</option>
						<option value="5"> >60% (nilai 5)</option>
            		</select>
					</div></div>
				<div class="form-group">
        			<label for="single_select" class="control-label col-md-2">Jumlah Siswa</label>
					<div class="col-sm-2">
        			<select name="jumlahsiswa" class="form-control">
            			<option value="1"> 0 - 80 (nilai 1)</option>
            			<option value="2"> 81 - 160 (nilai 2)</option>
						<option value="3"> 161 - 240 (nilai 3)</option>
						<option value="4"> 241 - 320 (nilai 4)</option>
						<option value="5"> 321 - 400 (nilai 5)</option>
            		</select>
					</div>
    			</div>
				<div class="form-group">
            		<label for="ruangkelas" class="control-label col-md-2">Jumlah Ruang Kelas</label>
            		<div class="col-sm-3">
						<input type="number" name="ruangkelas"  class="form-control" placeholder="Masukkan Jumlah Ruang Kelas">
					</div>
        		</div>
				<div class="form-group">
            		<label for="rombel" class="control-label col-md-2">Jumlah Rombongan Belajar</label>
            		<div class="col-sm-3">
						<input type="number" name="rombel"  class="form-control" placeholder="Masukkan Jumlah Rombongan Belajar">
					</div>
        		</div>
				<div class="form-group">
        			<label for="single_select" class="control-label col-md-2">Prestasi Akademik</label>
					<div class="col-sm-2">
        			<select name="akademik" class="form-control">
            			<option value="1"> < 2 (nilai 1)</option>
            			<option value="3"> 2 - 4 (nilai 3)</option>
						<option value="5"> > 4 (nilai 5)</option>
						
            		</select>
					</div>
    			</div>	
				<div class="form-group">
        			<label for="single_select" class="control-label col-md-2">Prestasi non Akademik</label>
					<div class="col-sm-2">
        			<select name="nonakademik" class="form-control">
            			<option value="1"> < 2 (nilai 1)</option>
            			<option value="3"> 2 - 4 (nilai 3)</option>
						<option value="5"> > 4 (nilai 5)</option>
					</select>
					</div>
    			</div>	
				<div class="form-group">
        			<label for="single_select" class="control-label col-md-2">Mendapat Bantuan Terakhir</label>
					<div class="col-sm-2">
        			<select name="bantuan" class="form-control">
            			<option value="5"> < 2010 (nilai 5)</option>
            			<option value="4"> 2011 (nilai 4)</option>
						<option value="3"> 2012 (nilai 3)</option>
						<option value="2"> 2013 (nilai 2)</option>
						<option value="1"> 2014 (nilai 1)</option>
						
            		</select>
					</div>
    			</div>
					<div class="col-md-offset-2">
					<button type="submit" class="btn btn-default" name="tambah">Tambah</button>
				</div>
			 </div>
				 
				 <div class="row">
          <div class="col-lg-12">
            <h3>Daftar Sekolah</h3>
            <table class="table table-striped">
        <tr>
          <th>No.</th>
          <th>Nama Sekolah</th>
		  <th>Skala Kerusakan</th>
          <th>Jumlah Siswa</th>
		  <th>Jumlah Kelas</th>
		  <th>Prestasi Akademik</th>
		  <th>Prestasi Non Akademik</th>
		  <th>Tahun Bantuan Terakhir</th>
		  <th>Action</th>
          
        </tr>
        <?php
          $sql = "SELECT * FROM data_sekolah";
          $hasil = mysql_query($sql);
          if(mysql_num_rows($hasil) > 0)
          {
            $i = 0;
            while($record = mysql_fetch_row($hasil))
            {
              $i+=1;
              echo '<tr>
                  <td>'.$i.'</td>
                 
                  <td>'.$record[1].'</td>
                  <td>'.$record[2].'</td>
				  <td>'.$record[3].'</td>
				  <td>'.$record[4].'</td>
				  <td>'.$record[5].'</td>
				  <td>'.$record[6].'</td>
				  <td>'.$record[7].'</td>
				 <td><a href="proses/edit-sekolah.php?id='.$record[0].'">Edit</a> / <a href="proses/hapus-sekolah.php?id='.$record[0].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>
                </tr>';
          
            }
          }
          else {
            echo '<tr>
          <td colspan="4"> Tidak Data</td>
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

