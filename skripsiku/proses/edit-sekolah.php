<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php 
include_once("db.php");
?>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
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
                    <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
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
                        <a  href="#"><i class="fa fa-table fa-3x"></i> PROSES AHP</a>
                    </li>	
                      <li  >
                        <a  href="#"><i class="fa fa-table fa-3x"></i> PROSES TOPSIS DAN PERANGKINGAN</a>
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
			
				  <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Form Edit User
						</div>
						 	<?php
$host = 'localhost';
$namadb = 'root';
$passdb = '';
$dbaktif = 'skripsi';
$conn = mysql_connect($host,$namadb,$passdb);
if (!$conn){
	echo '<p>Koneksi ke server gagal </p>';
}
mysql_select_db($dbaktif,$conn) or die ("Database tidak ditemukan");
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM data_sekolah WHERE id_sekolah='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$record = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
			<form role="form" action="edit-sekolah-proses.php" method="post" class="form-horizontal">
        		<div class="form-group">
            		<label for="idsekolah" class="control-label col-md-2">ID Sekolah</label>
            		<div class="col-sm-4">
						<input type="text" name="idsekolah" value="<?php echo $record['id_sekolah']; ?>" class="form-control" readonly="readonly">
					</div>
        		</div>
				<div class="form-group">
            		<label for="namasekolah" class="control-label col-md-2">Nama Sekolah</label>
            		<div class="col-sm-4">
						<input type="text" name="namasekolah" value="<?php echo $record['nama_sekolah']; ?>" class="form-control">
					</div>
        		</div>
        		
				
				<div class="form-group">
        			<label for="single_select" class="control-label col-md-2">Skala Kerusakan</label>
					<div class="col-sm-2">
        			<select name="skala" class="form-control">
            			<option value="1" <?php if($record['skala'] == '1'){ echo 'selected'; } ?>> <=30% (nilai 1)</option>
            			<option value="3" <?php if($record['skala'] == '3'){ echo 'selected'; } ?>> >30% - 60% (nilai 3)</option>
						<option value="5" <?php if($record['skala'] == '5'){ echo 'selected'; } ?>> >60% (nilai 5)</option>
            		</select>
					</div>
    			</div>
				<div class="form-group">
        			<label for="single_select" class="control-label col-md-2">Jumlah Siswa</label>
					<div class="col-sm-2">
        			<select name="jumlahsiswa" class="form-control">
            			<option value="1" <?php if($record['siswa'] == '1'){ echo 'selected'; } ?>> 0 - 100 (nilai 1)</option>
            			<option value="2" <?php if($record['siswa'] == '2'){ echo 'selected'; } ?>> 101 - 200 (nilai 2)</option>
						<option value="3" <?php if($record['siswa'] == '3'){ echo 'selected'; } ?>> 201 - 300 (nilai 3)</option>
						<option value="4" <?php if($record['siswa'] == '4'){ echo 'selected'; } ?>> 301 - 400 (nilai 4)</option>
            		</select>
					</div>
    			</div>
				<div class="form-group">
        			<label for="single_select" class="control-label col-md-2">Jumlah Ruang Kelas</label>
					<div class="col-sm-2">
        			<select name="jumlahkelas" class="form-control">
            			<option value="5" <?php if($record['kelas'] == '5'){ echo 'selected'; } ?>> 1 - 5 (nilai 5)</option>
            			<option value="3" <?php if($record['kelas'] == '3'){ echo 'selected'; } ?>> 6 - 10 (nilai 3)</option>
						<option value="1" <?php if($record['kelas'] == '1'){ echo 'selected'; } ?>> 11 - 15 (nilai 1)</option>
            		</select>
					</div>
    			</div>
				<div class="form-group">
        			<label for="single_select" class="control-label col-md-2">Prestasi Akademik</label>
					<div class="col-sm-2">
        			<select name="akademik" class="form-control">
            			<option value="1" <?php if($record['akademik'] == '1'){ echo 'selected'; } ?>>< 2 (nilai 1)</option>
            			<option value="3" <?php if($record['akademik'] == '3'){ echo 'selected'; } ?>>2 - 4 (nilai 3)</option>
						<option value="5" <?php if($record['akademik'] == '5'){ echo 'selected'; } ?>>> 4 (nilai 5)</option>
            		</select>
					</div>
    			</div>
				<div class="form-group">
        			<label for="single_select" class="control-label col-md-2">Prestasi non Akademik</label>
					<div class="col-sm-2">
        			<select name="nonakademik" class="form-control">
            			<option value="1" <?php if($record['nonakademik'] == '1'){ echo 'selected'; } ?>>< 2 (nilai 1)</option>
            			<option value="3" <?php if($record['nonakademik'] == '3'){ echo 'selected'; } ?>>2 - 4 (nilai 3)</option>
						<option value="5" <?php if($record['nonakademik'] == '5'){ echo 'selected'; } ?>>> 4 (nilai 5)</option>
            		</select>
					</div>
    			</div>
				<div class="form-group">
        			<label for="single_select" class="control-label col-md-2">Ukuran Lokasi</label>
					<div class="col-sm-2">
        			<select name="bantuan" class="form-control">
            			<option value="5" <?php if($record['bantuanakhir'] == '5'){ echo 'selected'; } ?>>< 2010 (nilai 5)</option>
            			<option value="4" <?php if($record['bantuanakhir'] == '4'){ echo 'selected'; } ?>> 2011 (nilai 4)</option>
						<option value="3" <?php if($record['bantuanakhir'] == '3'){ echo 'selected'; } ?>> 2012 (nilai 3)</option>
						<option value="2" <?php if($record['bantuanakhir'] == '2'){ echo 'selected'; } ?>> 2013 (nilai 2)</option>
						<option value="1" <?php if($record['bantuanakhir'] == '1'){ echo 'selected'; } ?>> 2014 (nilai 1)</option>
            		</select>
					</div>
    			</div>
				
        		<div class="col-md-offset-2">
					<button type="submit" class="btn btn-default" name="ubah">Ubah</button>
				</div>
    		</form>
				
   
         
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    
   
</body>
</html>

